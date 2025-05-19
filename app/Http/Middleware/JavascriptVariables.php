<?php

namespace App\Http\Middleware;

use App;
use App\Model\UserTax;
use App\PlatformSettings;
use App\Providers\InstallerServiceProvider;
use App\Providers\ListsHelperServiceProvider;
use App\UserBadge;
use App\UserStatus;
use Auth;
use Closure;
use JavaScript;
use Jenssegers\Agent\Agent;
use Session;
use Cookie;
use Route;

class JavascriptVariables
{
    public function handle($request, Closure $next)
    {
        $jsData = [
            'debug' => (bool) env('APP_DEBUG', false),
            'baseUrl' => url(''),
            'theme' => App\Providers\GenericHelperServiceProvider::getSiteTheme(),
            'direction' => App\Providers\GenericHelperServiceProvider::getSiteDirection(),
        ];
        if (InstallerServiceProvider::checkIfInstalled()) {
            $jsData['ppMode'] = getSetting('payments.paypal_live_mode') != null && getSetting('payments.paypal_live_mode') ? 'live' : 'sandbox';
            $jsData['showCookiesBox'] = getSetting('compliance.enable_cookies_box');
            $jsData['feedDisableRightClickOnMedia'] = getSetting('media.disable_media_right_click');
            $jsData['currency'] = App\Providers\SettingsServiceProvider::getAppCurrencyCode();
            $jsData['currencySymbol'] = App\Providers\SettingsServiceProvider::getWebsiteCurrencySymbol();
            $jsData['currencyPosition'] = App\Providers\SettingsServiceProvider::getWebsiteCurrencyPosition();
            $jsData['withdrawalsMinAmount'] = App\Providers\PaymentsServiceProvider::getWithdrawalMinimumAmount();
            $jsData['withdrawalsMaxAmount'] = App\Providers\PaymentsServiceProvider::getWithdrawalMaximumAmount();
            $jsData['depositMinAmount'] = App\Providers\PaymentsServiceProvider::getDepositMinimumAmount();
            $jsData['depositMaxAmount'] = App\Providers\PaymentsServiceProvider::getDepositMaximumAmount();
            $jsData['tipMinAmount'] = (int)getSetting('payments.min_tip_value');
            $jsData['tipMaxAmount'] = (int)getSetting('payments.max_tip_value');
            $jsData['min_ppv_post_price'] = getSetting('payments.min_ppv_post_price') ?? 1;
            $jsData['max_ppv_post_price'] = getSetting('payments.max_ppv_post_price') ?? 500;
            $jsData['min_ppv_message_price'] = getSetting('payments.min_ppv_message_price') ?? 1;
            $jsData['max_ppv_message_price'] = getSetting('payments.max_ppv_message_price') ?? 500;
            $jsData['stripeRecurringDisabled'] = getSetting('payments.stripe_recurring_disabled');
            $jsData['paypalRecurringDisabled'] = getSetting('payments.paypal_recurring_disabled');
            $jsData['ccBillRecurringDisabled'] = getSetting('payments.ccbill_recurring_disabled');
            $jsData['localWalletRecurringDisabled'] = getSetting('payments.disable_local_wallet_for_subscriptions');
            $jsData['enable_age_verification_dialog'] = getSetting('compliance.enable_age_verification_dialog');
            $jsData['allow_profile_bio_markdown'] = getSetting('profiles.allow_profile_bio_markdown');
            $jsData['open_ai_enabled'] = getSetting('ai.open_ai_enabled');
            $jsData['tosPageSlug'] = App\Providers\GenericHelperServiceProvider::getTOSPage() ? App\Providers\GenericHelperServiceProvider::getTOSPage()->slug : null;
            $jsData['privacyPageSlug'] = App\Providers\GenericHelperServiceProvider::getPrivacyPage() ? App\Providers\GenericHelperServiceProvider::getPrivacyPage()->slug : null;
            $jsData['siteName'] = getSetting('site.name');
            $jsData['allow_hyperlinks'] = getSetting('profiles.allow_hyperlinks');
            $jsData['show_online_users_indicator'] = getSetting('profiles.show_online_users_indicator');
            $jsData['isTextOnlyPPVAllowed'] = getSetting('compliance.allow_text_only_ppv');
            $jsData['disableTextPreview'] = (bool)getSetting('feed.disable_posts_text_preview');
        }
        JavaScript::put(['app' => $jsData]);

        $additionalJSVars = [];
        if (Auth::check()) {
            $dac7TaxEnabled = getSetting('payments.tax_info_dac7_enabled') && getSetting('payments.tax_info_dac7_withdrawals_enforced');
            $dac7TaxRequired = false;
            if($dac7TaxEnabled) {
                $userTax = UserTax::query()->where(['user_id' => Auth::user()->id, 'tax_type' => UserTax::DAC7_TYPE])->orderBy('id', 'desc')->first();
                $dac7TaxRequired = !($userTax !== null);
            }

            $additionalJSVars = [
                'user' => [
                    'username' => Auth::user()->username,
                    'user_id' => Auth::user()->id,
                    'stripe_connect_verified' => Auth::user()->stripe_onboarding_verified,
                    'user_country_id' => Auth::user()->country_id,
                    'lists' => ListsHelperServiceProvider::getUserListTrimmed(),
                    'dac7_tax_required' => $dac7TaxRequired,
                ],
                'socketsDriver' => getSetting('websockets.driver'),
                'streamingDriver' => getSetting('streams.streaming_driver'),
                'pusher' => [
                    'cluster' => getSetting('websockets.pusher_app_cluster'),
                    'key' => getSetting('websockets.pusher_app_key'),
                    'logging' => env('PUSHER_APP_LOGGING', false),
                ],
                'soketi' => [
                    'key' => getSetting('websockets.soketi_app_key'),
                    'host' => getSetting('websockets.soketi_host_address'),
                    'port' => getSetting('websockets.soketi_host_port'),
                    'useTSL' => getSetting('websockets.soketi_use_TSL'),
                ],
            ];
        }

        $additionalJSVars['appSettings'] = [
            'feed' => [
                'allow_gallery_zoom' => getSetting('feed.allow_gallery_zoom') ? true : false,
            ],
        ];
        JavaScript::put($additionalJSVars);

        // Handling expired CSRF Tokens and Expired users sessions
        if (Session::has('sessionStatus') && Session::get('sessionStatus') == 'expired') {
            JavaScript::put(['app' => ['sessionStatus' => 'expired']]);
        }

        // Resetting profile last url (used for social media login redirects) - disabled on regular login/register pages
        if (Session::has('lastProfileUrl') && (Route::currentRouteName() == 'login' || Route::currentRouteName() == 'register')) {
            Session::forget('lastProfileUrl');
        }

        return $next($request);
    }
}
