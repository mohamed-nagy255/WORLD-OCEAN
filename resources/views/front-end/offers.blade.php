@extends('front-end.layouts.app')
@section('title')
    @if (request()->is('more/offers'))
        عروضنا المميزة
    @else
        {{ $category->name }}
    @endif
@endsection
@section('css')
    {{-- Css Fils --}}
    <link rel="stylesheet" href="{{ URL::asset('assets/front-end/css/landing.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/front-end/css/offer.css') }}">
@endsection
@section('content')
    {{-- ======Landing====== --}}
    <div class="landing">
        @if (request()->is('more/offers'))
            <img src="{{ URL('assets/front-end/images/countries.webp') }}" alt="world ocean">
        @else
            <img src="{{ URL('assets/front-end/images/categories', $category->image) }}" alt="world ocean">
        @endif
        <div class="text">
            @if (request()->is('more/offers'))
                <h2 data-aos="zoom-in">استمتعوا بعطلة الأحلام مع خدمات سفر استثنائية!
                </h2>
                <p data-aos="zoom-in">
                    هل تتطلعون للقيام بجولة سياحية في أهم معالم أوروبا أم تفضلون القيام برحلة كروز بحرية بين أجمل موانئ
                    العالم؟
                </p>
            @else
                <h2 data-aos="zoom-in">{{ $category->name }}</h2>
                <p data-aos="zoom-in">
                    استمتع معنا بافضل عروض {{ $category->name }}
                </p>
            @endif
        </div>
    </div>
    {{-- ======content====== --}}
    {{-- Offers --}}
    <section class="offer-section">
        <div class="container">
            @if (request()->is('more/offers'))
                <div class="title">
                    <h2 data-aos="zoom-in">عروضنا المميزة</h2>
                </div>
            @else
                <div class="title">
                    <h2 data-aos="zoom-in">عروضنا {{ $category->name }} المميزة</h2>
                </div>
            @endif
            <div class="content">
                @foreach ($offers as $offer)
                    <div class="box" data-aos="zoom-in">
                        <div class="thum">
                            <img src="{{ URL('assets/front-end/images/offers/', $offer->image) }}" loading="lazy"
                                alt="world ocean">
                            <h3>{{ $offer->name }}</h3>
                            <a href="/more/offers/{{ $offer -> name }}" class="more">تفاصيل العرض</a>
                        </div>
                        <div class="des-content">
                            <div class="location">
                                <h3>السعر للشخص</h3>
                                <p>{{ $offer->price }} /ريال</p>
                            </div>
                            <div class="location">
                                <h3>مدة الرحلة</h3>
                                <p>{{ $offer->day_cont }}/ايام</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="pagination">
                {{ $offers->links() }}
            </div>
        </div>
    </section>
@endsection
@section('js')
@endsection
