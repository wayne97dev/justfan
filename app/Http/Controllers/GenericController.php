<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveNewContactMessageRequest;
use App\Model\ContactMessage;
use App\Model\Country;
use App\Model\Tax;
use App\Providers\EmailsServiceProvider;
use App\Providers\InstallerServiceProvider;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Cookie;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Pusher\Pusher;
use TCG\Voyager\Models\Setting;
use Zip;

class GenericController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function countries()
    {
        // find taxes for all countries
        $allCountriesAppliedTaxes = Tax::query()
            ->select('taxes.*')
            ->join('country_taxes', 'taxes.id', '=', 'country_taxes.tax_id')
            ->join('countries', 'country_taxes.country_id', '=', 'countries.id')
            ->where('countries.name', '=', 'All')->get();

        $countries = Country::query()->where('name', '!=', 'All')->with(['taxes'])->get();
        if(count($allCountriesAppliedTaxes)){
            foreach ($countries as $country){
                foreach ($allCountriesAppliedTaxes as $appliedTax){
                    $country->taxes->add($appliedTax);
                }
            }
        }
        return response()->json([
            'countries'=> $countries,
        ]);
    }

    /**
     * Sets user locale.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function setLanguage(Request $request)
    {
        // Get the locale from the request
        $requestedLocale = $request->route('locale');
        $defaultLocale = 'en';
        $locale = $requestedLocale;

        // Construct the path to the language file
        $langFilePath = lang_path($locale.'.json');

        // Check if the language file exists; if not, default to 'en'
        if (!file_exists($langFilePath)) {
            $locale = $defaultLocale;
            $langFilePath = lang_path($locale.'.json');
        }

        // Set the locale in user settings if authenticated
        if (Auth::check()) {
            $user = Auth::user();
            $userSettings = $user->settings ? $user->settings->toArray() : [];
            $userSettings['locale'] = $locale;
            $user->settings = collect($userSettings);
            $user->save();
        } else {
            // For guests, store the locale in a cookie
            Cookie::queue('app_locale', $locale, 356, null, null, null, false, false, null);
        }

        // Set the application locale
        App::setLocale($locale);

        // Reset cached translation files
        Cache::forget('translations');
        if (env('APP_ENV') == 'production') {
            Cache::rememberForever('translations', function () use ($langFilePath) {
                return file_get_contents($langFilePath);
            });
        } else {
            Cache::remember('translations', 5, function () use ($langFilePath) {
                return file_get_contents($langFilePath);
            });
        }

        return redirect()->back();
    }

    /**
     * Contact page main page.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contact(Request $request) {
        return view('pages.contact', []);
    }

    /**
     * Sends contact message.
     * @param SaveNewContactMessageRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendContactMessage(SaveNewContactMessageRequest $request) {
        ContactMessage::create([
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'message' => $request->get('message'),
        ]);
        if(getSetting('admin.send_notifications_on_contact')){
            // Send admin notifications
            $adminEmails = User::where('role_id', 1)->select(['email', 'name'])->get();
            foreach ($adminEmails as $user) {
                EmailsServiceProvider::sendGenericEmail(
                    [
                        'email' => $user->email,
                        'subject' => __('Action required | New contact message received'),
                        'title' => __('Hello, :name,', ['name' => $user->name]),
                        'content' => __('There is a new contact message on :siteName that requires your attention.', ['siteName' => getSetting('site.name')]),
                        'quote' => $request->get('message'),
                        'replyTo' => $request->get('email'),
                        'button' => [
                            'text' => __('Go to admin'),
                            'url' => route('voyager.dashboard').'/contact-messages',
                        ],
                    ]
                );
            }
        }
        return back()->with('success', __('Message sent.'));
    }

    /**
     * Manually resending verification emails method.
     * @return \Illuminate\Http\JsonResponse
     */
    public function resendConfirmationEmail() {
        $user = Auth::user();
        $user->sendEmailVerificationNotification();
        return response()->json(['success' => true, 'message' => __('Verification email sent successfully.')]);
    }

    /**
     * Display the user verify page.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function userVerifyEmail() {
        if(!Auth::check() || (Auth::check() && Auth::user()->hasVerifiedEmail())){
            return redirect(route('home'));
        }
        return view('vendor.auth.verify', []);
    }

    /**
     * Generates custom theme and saves the new colors to settings table.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse|object
     */
    public function generateCustomTheme(Request $request) {
        $themingServer = 'https://themes-v2.qdev.tech';
        try{
            $response = InstallerServiceProvider::curlGetContent($themingServer.'?'.http_build_query($request->all()));
            $response = json_decode($response);
            if($response->success){
                Setting::where('key', 'colors.theme_color_code')->update(['value'=>$request->get('color_code')]);
                Setting::where('key', 'colors.theme_gradient_from')->update(['value'=>$request->get('gradient_from')]);
                Setting::where('key', 'colors.theme_gradient_to')->update(['value'=>$request->get('gradient_to')]);
                if (extension_loaded('zip')){
                    $contents = InstallerServiceProvider::curlGetContent($themingServer.'/'.$response->path);
                    Storage::disk('tmp')->put('theme.zip', $contents);
                    $zip = Zip::open(storage_path('app/tmp/theme.zip'));
                    $zip->extract(public_path('css/theme/'));
                    Storage::disk('tmp')->delete('theme.zip');
                    return response()->json(['success' => true, 'data'=>['path'=>$response->path, 'doBrowserRedirect' => false], 'message' => __("Theme generated & updated the frontend.")], 200);
                }
                return response()->json(['success' => true, 'data'=>['path'=>$response->path, 'doBrowserRedirect' => true], 'message' => $response->message], 200);
            }
            else{
                return response()->json(['success' => false, 'error'=>$response->error], 500);
            }
        } catch (\Exception $exception) {
            return (object)['success' => false, 'error' => 'Error: "'.$exception->getMessage().'"'];
        }

    }

    /**
     * Saves license.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function saveLicense(Request $request) {
        try{
            $licenseCode = $request->get('product_license_key');
            $license = InstallerServiceProvider::gld($licenseCode);

            if (isset($license->error)) {
                return response()->json(['success' => false, 'error' => $license->error], 500);
            }
            Storage::disk('local')->put('installed', json_encode(array_merge((array)$license, ['code'=>$licenseCode])));
            Setting::where('key', 'license.product_license_key')->update(['value'=>$licenseCode]);
            return response()->json(['success' => true, 'message' => __("License key updated")], 200);
        } catch (\Exception $exception) {
            return response()->json(['success' => false, 'error' => 'Error: "'.$exception->getMessage().'"'], 500);
        }
    }

    public function clearAppCache(Request $request) {
        Artisan::call('cache:clear');
        return response()->json(['success' => true, 'message' => __("Application cache cleared successfully")], 200);
    }

    public function markBannerAsSeen(Request $request) {
        $id = $request->get('id');
        Cookie::queue('dismissed_banner_'.$id, true, 356, null, null, null, false, false, null);
        return response()->json(['success' => true, 'message' => __("Banner marked as seen")], 200);
    }

    public function authorizePresenceChannel(Request $request)
    {
        // 1) Gather your Pusher credentials
        $envVars = [
            'PUSHER_APP_KEY'     => config('broadcasting.connections.pusher.key'),
            'PUSHER_APP_SECRET'  => config('broadcasting.connections.pusher.secret'),
            'PUSHER_APP_ID'      => config('broadcasting.connections.pusher.app_id'),
            'PUSHER_APP_CLUSTER' => config('broadcasting.connections.pusher.options.cluster'),
        ];

        // 2) Instantiate Pusher
        $pusher = new Pusher(
            $envVars['PUSHER_APP_KEY'],
            $envVars['PUSHER_APP_SECRET'],
            $envVars['PUSHER_APP_ID'],
            [
                'cluster'    => $envVars['PUSHER_APP_CLUSTER'],
                'encrypted'  => true, // or 'useTLS' => true
            ]
        );

        try {
            // 3) Retrieve the channel and socket_id from the request
            $channelName = $request->input('channel_name');
            $socketId = $request->input('socket_id');

            // If channelName is an array, get the first element
            if (is_array($channelName)) {
                $channelName = reset($channelName);
            }

            // 4) Ensure the user is authenticated
            $user = Auth::user();
            if (!$user) {
                return response()->json([
                    'error' => 'User not authenticated',
                ], 403);
            }

            // 5) Prepare user ID and user info
            //    Make sure $user->id is an integer or string only
            $userId = (string) $user->id; // or (int) $user->id
            $userInfo = [
            ];

            // 6) Call the presence_auth method with the correct signature
            //    presence_auth($channel, $socketId, $userId, $userInfo)
            $authPayload = $pusher->presence_auth($channelName, $socketId, $userId, $userInfo);

            // 7) Return the decoded JSON to the client
            //    e.g. {"auth": "...", "channel_data":"{\"user_id\":5,\"user_info\":...}"}
            return response()->json(json_decode($authPayload), 200);

        } catch (\Exception $e) {
            \Log::error('PresenceChannelAuthError', [
                'message' => $e->getMessage(),
            ]);
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
