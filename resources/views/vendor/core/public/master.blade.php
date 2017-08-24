<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">

    <meta property="og:site_name" content="{{ $websiteTitle }}">
    <meta property="og:title" content="@yield('ogTitle')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ URL::full() }}">
    <meta property="og:image" content="@yield('image')">

    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
    <link href="{{ app()->isLocal() ? asset('css/public.css') : asset(elixir('css/public.css')) }}" rel="stylesheet">

    @include('core::public._feed-links')

    @yield('css')

    @include('core::public._google_analytics_code')

</head>

<body class="body-{{ $lang }} @yield('bodyClass') @if($navbar)has-navbar @endif">    

    @include('core::public._google_tag_manager_code')

    {{-- WRAPPER --}}
    <div class="mo-wraper">
        <div class="mo-container">
            @include('core::public._main_header')
            @include('core::public._btn_home')
            @include('core::public._main_nav')

            @yield('main')
        </div>
    </div>
    {{-- END WRAPPER --}}

    {{-- NOTIFICATION --}}
    @include('core::public._alert')
    {{-- END NOTIFICATION  --}}

    <script src="@if(app()->environment('production')){{ asset(elixir('js/public/components.min.js')) }}@else{{ asset('js/public/components.min.js') }}@endif"></script>
    <script src="@if(app()->environment('production')){{ asset(elixir('js/public/master.js')) }}@else{{ asset('js/public/master.js') }}@endif"></script>
    @if (Request::input('preview'))
    <script src="{{ asset('js/public/previewmode.js') }}"></script>
    @endif
    <script src="@if(app()->environment('production')){{ asset(elixir('js/public/common.js')) }}@else{{ asset('js/public/common.js') }}@endif"></script>
    @yield('js')

</body>

</html>
