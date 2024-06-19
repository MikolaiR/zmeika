<?php $nonce = \Illuminate\Support\Str::random(6); ?>
<!DOCTYPE html>
<html lang="ru-RU" prefix="og: https://ogp.me/ns#">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
{{--    <meta http-equiv="Content-Security-Policy"--}}
{{--          content="font-src 'self' data:; child-src blob: https://mc.yandex.ru; frame-src blob: https://mc.yandex.ru https://www.youtube.com; default-src 'self'; script-src-elem 'unsafe-inline' https://mc.yandex.ru https://zmeika.pro https://www.googletagmanager.com script-src 'self' 'unsafe-eval' 'nonce-{{ $nonce }}'; style-src 'self' 'unsafe-inline'; img-src 'self' data: https:; connect-src 'self' https://mc.yandex.ru/ https://www.google-analytics.com/">--}}
    <meta name="yandex-verification" content=""/>
    <link rel="icon" type="image/svg+xml" sizes="any" href="{{ asset('images/logo.svg') }}">
    <meta name="author" content="https://tutweb.by"/>
    <meta name="copyright" content="tutweb(c)">
    @seo
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="{{ seo()->meta()->title() }}">
    <meta property="og:url" content="https://zmeika.pro{{ seo()->url() }}">
    {{--    <meta property="og:video" content="https://www.youtube.com/embed/K2evWi18h0U">--}}
    {{--    <meta property="video:duration" content="130">--}}
    {{--    <meta property="og:video:width" content="640">--}}
    {{--    <meta property="og:video:height" content="480">--}}
    {{--    <meta property="ya:ovs:upload_date" content="2024-03-28">--}}
    {{--    <meta property="ya:ovs:adult" content="false">--}}
    {{--    <meta property="og:video:type" content="flash">--}}
    <meta property="og:description" content="{{ seo()->meta()->description() }}">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">
    <meta property="og:image:alt" content="{{ seo()->meta()->title() }}">
    <meta property="og:image:width" content="640">
    <meta property="og:image:height" content="480">
    <meta property="og:type" content="image/webp">
    <link rel="canonical" href="https://zmeika.pro{{ seo()->url() }}">
    <!-- Google Tag Manager -->
    <script nonce="{{ $nonce }}">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NJL9KSHF');</script>
    <!-- End Google Tag Manager -->
    <!-- Yandex.Metrika counter -->
    <meta name="yandex-verification" content="09b188626ad6c5d2" />
    <script type="text/javascript" nonce="{{ $nonce }}">
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(97211887, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true
        });
    </script>
    <link rel="preload"
          href="https://fonts.googleapis.com/css2?family=Brygada+1918:wght@400;700&display=swap&display=swap" as="style"
          onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css2?family=Brygada+1918:wght@400;700&display=swap&display=swap">
    </noscript>
    <link href="{{ url('') }}/assets/css/leaflet.min.css" rel="stylesheet" />
    <!--== Nice Select Min CSS ==-->
    <link href="{{ url('') }}/assets/css/nice-select.min.css" rel="stylesheet" />
    <!--== Slick Slider Min CSS ==-->
    <link href="{{ url('') }}/assets/css/slick.min.css" rel="stylesheet" />
    <!--== Magnific Popup Min CSS ==-->
    <link href="{{ url('') }}/assets/css/magnific-popup.min.css" rel="stylesheet" />
    <!--== Slicknav Min CSS ==-->
    <link href="{{ url('') }}/assets/css/slicknav.min.css" rel="stylesheet" />
    <!--== Animate Min CSS ==-->
    <link href="{{ url('') }}/assets/css/animate.min.css" rel="stylesheet" />
    <!--== Ionicons Min CSS ==-->
    <link href="{{ url('') }}/assets/css/ionicons.min.css" rel="stylesheet" />
    <!--== Font-Awesome Min CSS ==-->
    <link href="{{ url('') }}/assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--== Bootstrap Min CSS ==-->
    <link href="{{ url('') }}/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--== Main Style CSS ==-->
    <link href="{{ url('') }}/assets/css/style.css" rel="stylesheet" />
    <!--== Helper Min CSS ==-->
    <link href="{{ url('') }}/assets/css/helper.min.css" rel="stylesheet" />
    @yield('styles')
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NJL9KSHF"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<noscript>
    <div>
        <img src="https://mc.yandex.ru/watch/97211887" style="position:absolute; left:-9999px;" alt="" />
    </div>
</noscript>
<!-- End Google Tag Manager (noscript) -->
@if(isset($ldJsonSchema))
    <script type="application/ld+json" nonce="{{ $nonce }}">
        {!! json_encode($ldJsonSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
@endif
@include('app.navbar')
@include('app.header')
<div class="mt-50">
    @yield('content')
</div>
@include('app.footer')
<!-- build:js /assets/js/app.min.js -->
<!--=== Modernizr Min Js ===-->
<script src="{{ asset('/assets/js/modernizr-3.6.0.min.js') }}"></script>
<!--=== jQuery Min Js ===-->
<script src="{{ asset('/assets/js/jquery-3.3.1.min.js') }}"></script>
<!--=== jQuery Migration Min Js ===-->
<script src="{{ asset('/assets/js/jquery-migrate-1.2.1.min.js') }}"></script>
<!--=== Popper Min Js ===-->
<script src="{{ asset('/assets/js/popper.min.js') }}"></script>
<!--=== Bootstrap Min Js ===-->
<script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
<!--=== Slicknav Min Js ===-->
<script src="{{ asset('/assets/js/jquery.slicknav.min.js') }}"></script>
<!--=== Magnific Popup Min Js ===-->
<script src="{{ asset('/assets/js/jquery.magnific-popup.min.js') }}"></script>
<!--=== Slick Slider Min Js ===-->
<script src="{{ asset('/assets/js/slick.min.js') }}"></script>
<!--=== Nice Select Min Js ===-->
<script src="{{ asset('/assets/js/jquery.nice-select.min.js') }}"></script>
<!--=== Leaflet Min Js ===-->
<script src="{{ asset('/assets/js/leaflet.min.js') }}"></script>
<!--=== Countdown Js ===-->
<script src="{{ asset('/assets/js/countdown.js') }}"></script>
<!--=== Active Js ===-->
<script src="{{ asset('/assets/js/active.js') }}"></script>
<!-- endbuild -->
@yield('scripts')
</body>
</html>
