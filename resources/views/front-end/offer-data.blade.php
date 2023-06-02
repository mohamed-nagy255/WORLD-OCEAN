@extends('front-end.layouts.app')
@section('title')
    {{ $offer->name }}
@endsection
@section('css')
    {{-- Css Fils --}}
    <link rel="stylesheet" href="{{ URL::asset('assets/front-end/css/landing.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/front-end/css/offer-data.css') }}">
@endsection
@section('content')
    {{-- ======Landing====== --}}
    <div class="landing">
        <img src="{{ URL('assets/front-end/images/offers', $offer->image) }}" alt="">
        <div class="text">
            <h2 data-aos="zoom-in">{{ $offer->name }}</h2>
            <p data-aos="zoom-in">تواصل مع مستشارك السياحي واخبره بما تبي وراح يسويلك برنامج سياحي يبيض وجهك</p>
        </div>
    </div>
    {{-- ======content====== --}}
    <section class="features">
        <div class="container">
            <div class="content">
                <div class="col">
                    <a href="https://wa.me/+966536469055" target="_blank" aria-label="whatsapp" class="card"
                        data-aos="zoom-in">
                        <div class="icon">
                            <i class="fa-solid fa-calendar-days fa-beat"></i>
                        </div>
                        <h3>مدة الرحلة</h3>
                        <p>{{ $offer->day_cont }} / ايام</p>
                    </a>
                    <a href="https://wa.me/+966536469055" target="_blank" aria-label="whatsapp" class="card"
                        data-aos="zoom-in">
                        <div class="icon">
                            <i class="fa-solid fa-sack-dollar fa-beat"></i>
                        </div>
                        <h3>السعر للشخص</h3>
                        <p>{{ $offer->price }} / ريال</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- target section  --}}
    <div class="target">
        <div class="container">
            <div class="text-content">
                <h2>تفاصيل البرنامج</h2>
                <div class="box">
                    @foreach ($offer->days as $day)
                        <div class="col">
                            <h3>{{ $day->name_day }}</h3>
                            <p><i class="fa-solid fa-circle-arrow-left fa-beat"></i>
                                {{ $day->description }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {{-- Offer --}}
    <section class="offer">
        <div class="container">
            <div class="title">
                <h2 data-aos="zoom-in">مشتملات الرحلة</h2>
            </div>
            <div class="content">
                @foreach ($offer -> proprety as $row)
                    
                @endforeach
                <p><i class="fa-solid fa-circle-check"></i>
                    {{ $row -> name_proprety }}
                </p>
            </div>
        </div>
    </section>

    <section class="offer-section">
        <div class="container">

            <div class="title">
                <h2 data-aos="zoom-in">المزيد من العروض</h2>
            </div>

            <div class="content">
                @foreach ($offers as $offer)
                    <div class="box" data-aos="zoom-in">
                        <div class="thum">
                            <img src="{{ URL('assets/front-end/images/offers/', $offer->image) }}" loading="lazy"
                                alt="world ocean">
                            <h3>{{ $offer->name }}</h3>
                            <a href="/more/offers/{{ $offer->name }}" class="more">تفاصيل العرض</a>
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
        </div>
    </section>
@endsection
@section('js')
@endsection
