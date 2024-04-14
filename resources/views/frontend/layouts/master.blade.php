<!DOCTYPE html>
<html @if (GetSetting('site_direction') == 'RTL') dir="rtl" @else dir="ltr" @endif lang="en" class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Page Title -->
    <title> {{ GetSetting('site_name') }} @if (!empty($page_title))
            - {{ $page_title }}
        @endif
    </title>
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <meta name="description"
        content="{{ GetSetting('site_name') }} - {{ @$description ? $description : GetSetting('site_description') }}" />
    <meta name="keywords" content="{{ @$content_tags ? $content_tags : GetSetting('site_tags') }}" />
    <meta name="author" content="{{ GetSetting('site_name') }}" />

    <meta property="og:type" content="{{ @$content_type ? $content_type : 'website' }}" />
    <meta property="og:image" content="{{ @$content_image ? $content_image : asset(GetSetting('site_logo')) }}" />
    <meta property="og:url" content="{{ @$content_url ? $content_url : url('/') }}" />
    <meta property="og:title" content="{{ @$page_title ? $page_title : GetSetting('site_name') }}" />
    <meta property="og:description" content="{{ @$description ? $description : GetSetting('site_description') }}" />

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57"
        href="{{ asset('assets/frontend/assets/img/favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60"
        href="{{ asset('assets/frontend/assets/img/favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72"
        href="{{ asset('assets/frontend/assets/img/favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76"
        href="{{ asset('assets/frontend/assets/img/favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114"
        href="{{ asset('assets/frontend/assets/img/favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120"
        href="{{ asset('assets/frontend/assets/img/favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144"
        href="{{ asset('assets/frontend/assets/img/favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152"
        href="{{ asset('assets/frontend/assets/img/favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('assets/frontend/assets/img/favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('assets/frontend/assets/img/favicons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('assets/frontend/assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96"
        href="{{ asset('assets/frontend/assets/img/favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('assets/frontend/assets/img/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/frontend/assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage"
        content="{{ asset('assets/frontend/assets/img/favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">


    <!--==============================
          Google Fonts
        ============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    @method('meta')
    <!-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&ampfamily=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,500&ampdisplay=swap" rel="stylesheet"> -->
    @include('frontend.layouts.styles')
</head>

<body class="tm-container-1340px @if (GetSetting('site_direction') == 'RTL') rtl @endif has-side-panel side-panel-right">
    @include('frontend.layouts.preloader')
    @include('frontend.layouts.sidebar')
    @yield('content')
    @include('frontend.layouts.scripts')
</body>

</html>
