<!-- Favicons -->
<link href="{{ URL::asset('assets/img/favicon.png') }}" rel="icon">
<link href="{{ URL::asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

{{-- Css Fils --}}
<link rel="stylesheet" href="{{ URL::asset('assets/front-end/css/main.css') }}">

{{-- Normalize File Library --}}
<link rel="stylesheet" href="{{ URL::asset('assets/front-end/css/normalize.css') }}">

{{-- Font Awesome Library --}}
<link rel="stylesheet" href="{{ URL::asset('assets/front-end/css/all.min.css') }}">

{{-- BootStrap --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

{{-- Animation On Scroll --}}
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

@yield('css')
