@extends('front-end.layouts.app')
@section('title')
    {{ $country -> name }}
@endsection
@section('css')
    {{-- Css Fils --}}
    <link rel="stylesheet" href="{{ URL::asset('assets/front-end/css/landing.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/front-end/css/country.css') }}">
@endsection
@section('content')
    {{-- ======Landing====== --}}
    <div class="landing">
        <img src="{{ URL('assets/front-end/images/countries', $country -> image) }}" alt="">
        <div class="text">
            <h2 data-aos="zoom-in">{{ $country -> name }}</h2>
            <p data-aos="zoom-in">اختر الفئة التي تريدها</p>
        </div>
    </div>
    {{-- ======content====== --}}
    {{-- ======City====== --}}
    <section class="country">
        <div class="container">
            <div class="content" style="padding-bottom: 80px">
                @foreach ($categories as $category)    
                <a class="col-content" href="/more/category/{{ $country -> name }}/{{ $category -> name }}" data-aos="zoom-in">
                    <img src="{{ URL('assets/front-end/images/categories', $category -> image) }}" 
                    alt="{{ $category -> name }}">
                    <h4>{{ $category -> name }}</h4>
                </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
@section('js')
@endsection
