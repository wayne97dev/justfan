@extends('layouts.user-no-nav')

@section('page_title', __('Bookmarks'))

@section('styles')
    {!!
        Minify::stylesheet([
            '/libs/swiper/swiper-bundle.min.css',
            '/libs/photoswipe/dist/photoswipe.css',
            '/libs/photoswipe/dist/default-skin/default-skin.css',
            '/css/pages/bookmarks.css',
            '/css/posts/post.css',
            '/css/pages/checkout.css'
         ])->withFullUrl()
    !!}
    @if(getSetting('feed.post_box_max_height'))
        @include('elements.feed.fixed-height-feed-posts', ['height' => getSetting('feed.post_box_max_height')])
    @endif
@stop

@section('scripts')
    {!!
        Minify::javascript([
            '/js/pages/checkout.js',
            '/js/PostsPaginator.js',
            '/js/CommentsPaginator.js',
            '/js/Post.js',
            '/js/pages/lists.js',
            '/js/pages/bookmarks.js',
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
    <div class="d-flex flex-wrap">
        <div class="col-12 col-md-6 col-lg-3 mb-3 settings-menu pr-0 px-0">
            <div class="bookmarks-menu-wrapper">
                <div class="mt-3 ml-3">
                    <h5 class="text-bold {{(Cookie::get('app_theme') == null ? (getSetting('site.default_user_theme') == 'dark' ? '' : 'text-dark-r') : (Cookie::get('app_theme') == 'dark' ? '' : 'text-dark-r'))}}">{{__('Bookmarks')}}</h5>
                </div>
                <hr class="mb-0">
                <div class="d-lg-block bookmarks-nav">
                    <div class="d-none d-md-block">
                        @include('elements.bookmarks.bookmarks-menu',['variant' => 'desktop'])
                    </div>
                    <div class="bookmarks-menu-mobile d-block d-md-none mt-3">
                        @include('elements.bookmarks.bookmarks-menu',['variant' => 'mobile'])
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-9 mb-5 mb-lg-0 min-vh-100 border-left border-right settings-content pl-md-0 pr-md-0 px-0">
            <div class="px-2 px-md-3">
                @if(isset($filterType))
                    {{$filterType}}
                @endif
            </div>
            @include('elements.feed.posts-load-more')
            <div class="feed-box mt-0  pt-4 posts-wrapper">
                @include('elements.feed.posts-wrapper',['posts'=>$posts])
            </div>
            @include('elements.feed.posts-loading-spinner')
        </div>
    </div>

    <div class="d-none">
        <ion-icon name="heart"></ion-icon>
        <ion-icon name="heart-outline"></ion-icon>
    </div>

    @include('elements.checkout.checkout-box')

    @include('elements.standard-dialog',[
        'dialogName' => 'comment-delete-dialog',
        'title' => __('Delete comment'),
        'content' => __('Are you sure you want to delete this comment?'),
        'actionLabel' => __('Delete'),
        'actionFunction' => 'Post.deleteComment();',
    ])

@stop
