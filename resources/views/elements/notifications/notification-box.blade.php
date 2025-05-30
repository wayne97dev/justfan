<div class="py-2 notification-box  px-3 px-md-4 {{!$notification->read?'unread':''}}">
    <div class="d-flex flex-row-no-rtl my-1">
        @if($notification->fromUser)
            <div class="">
                <img class="rounded-circle avatar" src="{{$notification->fromUser->avatar}}" alt="{{$notification->fromUser->username}}">
            </div>
        @else
            <div class="">
                <img class="rounded-circle avatar" src="{{\App\Providers\GenericHelperServiceProvider::getStorageAvatarPath(null)}}" alt="Avatar">
            </div>
        @endif
        <div class="pl-3 w-100">
            <div class="d-flex flex-row-no-rtl justify-content-between w-100">
                <div class="d-flex flex-column w-100">
                    <div class="d-flex flex-row justify-content-between">
                        @if($notification->fromUser)
                            <h6 class="text-bold  m-0 p-0 d-flex"><a href="{{route('profile',['username'=>$notification->fromUser->username])}}" class="text-dark-r">{{$notification->fromUser->name}}</a></h6>
                        @else
                            <h6 class="text-bold  m-0 p-0 d-flex">{{__("Notification")}}</h6>
                        @endif
                        <div class="d-flex text-muted">
                            <div>{{ \Carbon\Carbon::parse($notification->created_at)->diffForhumans() }} </div>
                        </div>
                    </div>
                    {{--                        <div class="text-bold"><a href="{{route('profile',['username'=>$notification->fromUser->username])}}" class="text-muted">{{'@'}}{{$notification->fromUser->username}}</a></div>--}}
                </div>
                <div class="position-absolute separator">
                </div>
            </div>
            <div>
                <div class="my-1 text-break pr-3 {{!$notification->read?'text-bold':''}}">
                    @switch($notification->type)
                        @case(\App\Model\Notification::NEW_TIP)
                            @if(isset($notification->transaction))
                                {{$notification->transaction->sender->name}} {{__("sent you a tip of")}} {{\App\Providers\SettingsServiceProvider::getWebsiteFormattedAmount(\App\Providers\PaymentsServiceProvider::getTransactionAmountWithTaxesDeducted($notification->transaction))}}.
                            @else
                                {{__('No transaction data')}}
                            @endif
                            @break
                        @case(\App\Model\Notification::NEW_REACTION)
                            @if($notification->post_id)
                                {{__(":name liked your",['name'=>$notification->fromUser->name])}} <a href="{{route('posts.get', ['username' => $notification->post->user->username, 'post_id' => $notification->post->id])}}" target="_blank">{{__('post')}}</a>.
                            @endif
                            @if($notification->post_comment_id)
                                {{__(":name liked your comment",['name'=>$notification->postComment->author->name])}}
                            @endif
                            @break
                        @case(\App\Model\Notification::NEW_COMMENT)
                            {{__(':name added a new comment on your',['name'=>$notification->fromUser->name])}} <a href="{{route('posts.get', ['username' => $notification->postComment->post->user->username, 'post_id' => $notification->postComment->post->id])}}" target="_blank">{{__('post')}}</a>.
                            @break
                        @case(\App\Model\Notification::NEW_SUBSCRIPTION)
                            {{__("A new user subscribed to your profile")}}
                            @break
                        @case(\App\Model\Notification::WITHDRAWAL_ACTION)
                            {{
                                __(\App\Providers\SettingsServiceProvider::leftAlignedCurrencyPosition() ? 'Withdrawal processed' : 'Withdrawal processed rightAligned',[
                                                'currencySymbol' => \App\Providers\SettingsServiceProvider::getWebsiteCurrencySymbol(),
                                                'amount' => $notification->withdrawal->amount,
                                                'status' =>  lcfirst(__($notification->withdrawal->status)),
                                            ])
                            }}
                            @break
                        @case(\App\Model\Notification::NEW_MESSAGE)
                            {{__("Send you a message: `:message`",['message'=>$notification->userMessage->message])}}.
                            @break
                        @case(\App\Model\Notification::EXPIRING_STREAM)
                            {{__('Your live streaming is about to end in 30 minutes. You can start another one afterwards.')}}
                            @break
                        @case(\App\Model\Notification::PPV_UNLOCK)
                            {{__('Someone unlocked your'). ' ' . $notification->PPVUnlockType . '.'}}
                            @break
                    @endswitch

                </div>
            </div>
        </div>
    </div>
</div>
