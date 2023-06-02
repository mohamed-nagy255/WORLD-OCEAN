@extends('front-end.layouts.app')
@section('title')
    الوجهات السياحية
@endsection
@section('css')
    {{-- Css Fils --}}
    <link rel="stylesheet" href="{{ URL::asset('assets/front-end/css/landing.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/front-end/css/country.css') }}">
@endsection
@section('content')
    {{-- ======Landing====== --}}
    <div class="landing">
        <img src="{{ URL('assets/front-end/images/countries.webp') }}" alt="">
        <div class="text">
            <h2 data-aos="zoom-in">الوجهات السياحية</h2>
            <p data-aos="zoom-in">تواصلكم يسعدنا
                لأي طلب او سؤال او استشارة او حجزحول العالم
            </p>
        </div>
    </div>
    {{-- ======content====== --}}
    {{-- ======City====== --}}
    <section class="country">
        <div class="container">
            <div class="title">
                <h2 data-aos="zoom-in">استكشف أكثر<br> من 200 وجهة سياحية حول العالم</h2>
            </div>
            <div class="content">
                @foreach ($countries as $country)    
                <a class="col-content" href="/more/category/{{ $country -> name }}" data-aos="zoom-in">
                    <img src="{{ URL('assets/front-end/images/countries', $country -> image) }}" 
                    alt="{{ $country -> name }}">
                    <h4>{{ $country -> name }}</h4>
                </a>
                @endforeach
            </div>
            <div class="pagination">
                {{ $countries -> links() }}
            </div>
        </div>
    </section>
@endsection
@section('js')
@endsection
