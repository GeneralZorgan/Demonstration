<!DOCTYPE html>
<html lang="ru" class="page-main">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="SKYPE_TOOLBAR" content="Portfolio">
    <meta content="telephone=no" name="format-detection">
    <meta name="viewport" content="width=1024">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">-->

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta property="og:image" content="/img/share.png">
    <meta property="og:title" content="Cpeople team">
    <meta property="og:asset" content="http://hr-pr.dev.cpeople.ru">
    <meta property="og:type" content="article">
    <meta property="og:description" content="">
    <!-- Apple touch icons -->
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/favicon/72.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/img/favicon/120.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/img/favicon/152.png') }}">
    <!-- Browser icons -->
    <link rel="icon" type="image/png" sizes="16x16 32x32 64x64" href="{{ asset('assets/img/favicon/64.png') }}">
    <!--[if IE]><link rel="shortcut icon" href="{{ asset('assets/img/favicon/16.png') }}"><![endif]-->

    <title>HR</title>

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>

    @include('guest.pages.home.parts.svg_sprites')

    <div class="l-wrapper">

        @yield('content')

    </div>


    <script src="https://cdn.polyfill.io/v2/polyfill.min.js?flags=gated"></script>
    <script src="{{ asset('assets/js/libs.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script type="text/javascript">
        window.is_admin = 0;
    </script>

</body>
</html>
