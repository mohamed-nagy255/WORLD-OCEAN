<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @yield('meta')

    <title>@yield('title')</title>

    @include('front-end.layouts.head-css')

</head>

<body>

    @include('front-end.layouts.header')

    @include('front-end.layouts.media-icon')

    @yield('content')

    @include('front-end.layouts.live-chat')

    @include('front-end.layouts.footer')

    @include('front-end.layouts.footer-js')
</body>

</html>
