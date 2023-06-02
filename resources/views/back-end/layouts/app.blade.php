<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    @yield('meta')

    <title>@yield('title')</title>

    @include('back-end.layouts.head-css')

</head>

<body>

    @include('back-end.layouts.header')

    @include('back-end.layouts.sidebar')

    @yield('content')

    @include('back-end.layouts.footer')

    @include('back-end.layouts.arrow')

    @include('back-end.layouts.footer-js')

</body>

</html>
