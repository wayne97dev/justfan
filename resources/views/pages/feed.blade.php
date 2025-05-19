@extends('layouts.user-no-nav')
@section('page_title', __('Your feed'))

{{-- Page specific CSS --}}
@section('styles')
    {!!
        Minify::stylesheet([
            '/libs/swiper/swiper-bundle.min.css',
            '/libs/photoswipe/dist/photoswipe.css',
            '/css/pages/checkout.css',
            '/libs/photoswipe/dist/default-skin/default-skin.css',
            '/css/pages/feed.css',
            '/css/posts/post.css',
            '/css/pages/search.css',
         ])->withFullUrl()
    !!}
    @if(getSetting('feed.post_box_max_height'))
        @include('elements.feed.fixed-height-feed-posts', ['height' => getSetting('feed.post_box_max_height')])
    @endif
@stop

{{-- Page specific JS --}}
@section('scripts')
    {!!
        Minify::javascript([
            '/js/PostsPaginator.js',
            '/js/CommentsPaginator.js',
            '/js/Post.js',
            '/js/SuggestionsSlider.js',
            '/js/pages/lists.js',
            '/js/pages/feed.js',
            '/js/pages/checkout.js',
            '/libs/swiper/swiper-bundle.min.js',
            '/js/plugins/media/photoswipe.js',
            '/libs/photoswipe/dist/photoswipe-ui-default.min.js',
            '/js/plugins/media/mediaswipe.js',
            '/js/plugins/media/mediaswipe-loader.js',
            '/libs/autolinker/dist/autolinker.min.js'
         ])->withFullUrl()
    !!}
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-8 col-md-7 second p-0">
                <div class="d-flex d-md-none px-3 py-3 feed-mobile-search neutral-bg fixed-top-m">
                    @include('elements.search-box')
                </div>

                <div class="m-pt-70"></div>

                {{-- @include('elements.user-stories-box')--}}

                <div class="">
                    @include('elements.message-alert',['classes'=>'pt-4 pb-4 px-2'])
                    @include('elements.feed.posts-load-more')
                    <div class="feed-box mt-0 pt-4 posts-wrapper">
                        @include('elements.feed.posts-wrapper',['posts'=>$posts])
                    </div>
                    @include('elements.feed.posts-loading-spinner')
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-5 col-lg-4 first border-left order-0 pt-4 pb-5 min-vh-100 suggestions-wrapper d-none d-md-block">

                <div class="feed-widgets">
                    @if(!getSetting('feed.search_widget_hide'))
                        <div class="mb-3">
                            @include('elements.search-box')
                        </div>
                    @endif
                    @if(!getSetting('feed.hide_suggestions_slider'))
                        @include('elements.feed.suggestions-box',[
                             'id' => 'suggestions-box',
                             'profiles' => $suggestions,
                             'isMobile' => false,
                             'hideControls' => false,
                             'title' => __('Suggestions'),
                             'perPage' => (int)getSetting('feed.feed_suggestions_card_per_page'),
                        ])
                    @endif

                    @if(!getSetting('feed.expired_subs_widget_hide'))
                        @if($expiredSubscriptions->count())
                            <div class="mt-3">
                                @include('elements.feed.suggestions-box',[
                                    'id' => 'suggestions-box-expired',
                                    'profiles' => $expiredSubscriptions,
                                    'isMobile' => false,
                                    'hideControls' => true,
                                    'title' => __('Expired subscriptions'),
                                    'perPage' => (int)getSetting('feed.expired_subs_widget_card_per_page'),
                                ])
                            </div>
                        @endif
                    @endif

                    @if(getSetting('custom-code-ads.sidebar_ad_spot'))
                        <div class="mt-3">
                            {!! getSetting('custom-code-ads.sidebar_ad_spot') !!}
                        </div>
                    @endif

                    @include('template.footer-feed')

                </div>

            </div>
        </div>
        @include('elements.checkout.checkout-box')
    </div>

    <div class="d-none">
        <ion-icon name="heart"></ion-icon>
        <ion-icon name="heart-outline"></ion-icon>
    </div>

    @include('elements.standard-dialog',[
        'dialogName' => 'comment-delete-dialog',
        'title' => __('Delete comment'),
        'content' => __('Are you sure you want to delete this comment?'),
        'actionLabel' => __('Delete'),
        'actionFunction' => 'Post.deleteComment();',
    ])

@stop
