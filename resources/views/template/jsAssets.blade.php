{{-- Global JS Assets --}}
{!!
    Minify::javascript(
        array_merge([
        '/libs/jquery/dist/jquery.min.js',
        '/libs/popper.js/dist/umd/popper.min.js',
        '/libs/bootstrap/dist/js/bootstrap.min.js',
        '/js/plugins/toasts.js',
        '/libs/cookieconsent/build/cookieconsent.min.js',
        '/libs/xss/dist/xss.min.js',
        '/libs/pusher-js-auth/lib/pusher-auth.js',
        '/js/Websockets.js',
        '/js/app.js',
    ],
    (isset($additionalJs) ? $additionalJs : [])
    ))->withFullUrl()
!!}

{{-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --}}
{{-- WARNING: Respond.js doesn't work if you view the page via file:// --}}
{{--[if lt IE 9]>
{!! Minify::javascript(array('//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '//oss.maxcdn.com/respond/1.4.2/respond.min.js')) !!}
<![endif]--}}

{{-- Page specific JS --}}
@yield('scripts')

<script type="module" src="{{asset('/libs/ionicons/dist/ionicons/ionicons.esm.js')}}"></script>
<script nomodule src="{{asset('/libs/ionicons/dist/ionicons/ionicons.js')}}"></script>

{{--<script src="https://cdn.jsdelivr.net/npm/livekit-client@2.9.0/dist/livekit-client.umd.min.js"></script>--}}
{{--<script type="module">--}}
{{--    import livekitClient from 'https://cdn.jsdelivr.net/npm/livekit-client@2.9.0/+esm'--}}
{{--</script>--}}

{{--<script src="https://cdn.jsdelivr.net/npm/livekit-client/dist/livekit-client.umd.min.js"></script>--}}

<script src="https://cdn.jsdelivr.net/npm/livekit-client@2.9.1/dist/livekit-client.umd.min.js"></script>

@if(getSetting('custom-code-ads.custom_js'))
    {!! getSetting('custom-code-ads.custom_js') !!}
@endif

@include('elements.translations')
