<?php $nonce = \Illuminate\Support\Str::random(6); ?>
<!DOCTYPE html>
<html lang="ru-RU" prefix="og: https://ogp.me/ns#">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Security-Policy"
          content="font-src 'self' data:; child-src blob: https://mc.yandex.ru; frame-src blob: https://mc.yandex.ru https://www.youtube.com; default-src 'self'; script-src-elem 'unsafe-inline' https://mc.yandex.ru https://zmeika.pro https://www.googletagmanager.com script-src 'self' 'unsafe-eval' 'nonce-{{ $nonce }}'; style-src 'self' 'unsafe-inline'; img-src 'self' data: https:; connect-src 'self' https://mc.yandex.ru/ https://www.google-analytics.com/">
    <meta name="yandex-verification" content=""/>
    <link rel="icon" type="image/webp" sizes="any" href="{{ asset('images/logo.webp') }}">
    <meta name="author" content="https://tutweb.by"/>
    <meta name="copyright" content="tutweb(c)">
    <title>{{ isset($title) ? $title : 'Купить змею в Минске' }}</title>
    <meta name="description" content="{{ isset($description) ? $description : 'Купить змею в Минске' }}">
    <meta name="keywords" content="{{ isset($keywords) ? $keywords : 'Купить змею в Минске' }}">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="{{ isset($title) ? $title : 'Купить змею в Минске' }}">
    <meta property="og:url" content="https://zmeika.pro/{{ isset($canonicalLink) ? $canonicalLink : ''}}">
    {{--    <meta property="og:video" content="https://www.youtube.com/embed/K2evWi18h0U">--}}
    {{--    <meta property="video:duration" content="130">--}}
    {{--    <meta property="og:video:width" content="640">--}}
    {{--    <meta property="og:video:height" content="480">--}}
    {{--    <meta property="ya:ovs:upload_date" content="2024-03-28">--}}
    {{--    <meta property="ya:ovs:adult" content="false">--}}
    {{--    <meta property="og:video:type" content="flash">--}}
    <meta property="og:description" content="{{ isset($description) ? $description : 'Купить змею в Минске' }}">
    <meta property="og:image" content="{{ asset('images/logo.webp') }}">
    <meta property="og:image:alt" content="{{ isset($title) ? $title : 'Купить змею в Минске' }}">
    <meta property="og:image:width" content="640">
    <meta property="og:image:height" content="480">
    <meta property="og:type" content="image/webp">
    <link rel="canonical" href="https://zmeika.pro/{{ isset($canonicalLink) ? $canonicalLink : ''}}">
    <!-- Google Tag Manager -->
    <script nonce="{{ $nonce }}">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NJL9KSHF');</script>
    <!-- End Google Tag Manager -->
    <link rel="preload"
          href="https://fonts.googleapis.com/css2?family=Brygada+1918:wght@400;700&display=swap&display=swap" as="style"
          onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css2?family=Brygada+1918:wght@400;700&display=swap&display=swap">
    </noscript>
    @vite('resources/css/app.css')
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NJL9KSHF"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
@if(isset($ldJsonSchema))
    <script type="application/ld+json" nonce="{{ $nonce }}">
        {!! json_encode($ldJsonSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
@endif
@include('app.navbar')
@yield('content')
@include('app.footer')
<script src="{{ asset('/js/jquery/jquery.min.js') }}"></script>
@vite('resources/js/app.js')
</body>
</html>
