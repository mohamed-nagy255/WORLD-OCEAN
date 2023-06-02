@extends('front-end.layouts.app')
@section('title')
    {{ $meta->meta_title }}
@endsection
@section('meta')
    <meta name="description" content="{{ $meta->meta_description }}">
    <meta name="keywords" content="{{ $meta->meta_keywords }}">
@endsection
@section('css')
    {{-- Css Fils --}}
    <link rel="stylesheet" href="{{ URL::asset('assets/front-end/css/home.css') }}">
@endsection
@section('content')
    {{-- ======Landing====== --}}
    <main class="landing">
        <div class="slide">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($sliders as $slide)
                        <div class="carousel-item @if ($loop->first) active @endif">
                            <img src="{{ URL('assets/front-end/images', $slide->image) }}" loading="lazy"
                                alt="world ocean">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="container">
            <div class="content">
                <h1 data-aos="zoom-in">محيط العالم للسفر والسياحة</h1>
                <p data-aos="zoom-in">واحدة من أفضل شركات السفر و
                    حجوزات الفنادق في المملكة العربية السعودية. تأسست الشركة في الرياض، وتمتلك مجموعة واسعة من الخدمات
                    السياحية لتلبية احتياجات العملاء.</p>
                <a target="_blank" href="https://wa.me/+966536466763" aria-label="whatsapp" class="whatsapp" data-aos="zoom-in"><i
                        class="fa-brands fa-whatsapp fa-beat"></i> تواصل
                    معنا عبر
                    الوتساب </a>
            </div>
        </div>
    </main>

    {{-- ====== Features ====== --}}
    <section class="features">
        <div class="container">
            <div class="title">
                <h2 data-aos="zoom-in">اهم خدماتنا</h2>
            </div>
            <div class="content">
                <div class="col">
                    <a href="https://wa.me/+966536469055" target="_blank" aria-label="whatsapp" class="card" data-aos="zoom-in">
                        <div class="icon">
                            <i class="fa-solid fa-passport fa-beat"></i>
                        </div>
                        <h3>إصدار التأشيرات</h3>
                        <p>
                            لدينا خبراء متخصصون في استخراج المستندات والتصاريح اللازمة للسفر
                        </p>
                    </a>
                    <a href="https://wa.me/+966536469055" target="_blank" aria-label="whatsapp" class="card" data-aos="zoom-in">
                        <div class="icon">
                            <i class="fa-solid fa-shield-halved fa-beat"></i>
                        </div>
                        <h3>التأمين على السفر</h3>
                        <p>
                            مظلة تأمينية تُقدِم المساعدة الفورية للمسافر في حالة تعرضه لأي حادث أثناء رحلة السفر
                        </p>
                    </a>
                    <a href="https://wa.me/+966536469055" target="_blank" aria-label="whatsapp" class="card" data-aos="zoom-in">
                        <div class="icon">
                            <i class="fa-solid fa-ticket fa-beat"></i>
                        </div>
                        <h3>حجز تذاكر الطيران</h3>
                        <p>
                            لأننا وكلاء لجميع شركات الطيران حول العالم، نوفر لك أفضل الأسعار على مدار العام
                        </p>
                    </a>
                    <a href="https://wa.me/+966536469055" target="_blank" aria-label="whatsapp" class="card" data-aos="zoom-in">
                        <div class="icon">
                            <i class="fa-solid fa-car fa-beat"></i>
                        </div>
                        <h3>تاجير سيارات</h3>
                        <p>
                            يمكنك من خلالنا طلب تأجير سيارة خاصة بسائق أو بدون في أي مكان تذهب إليه
                        </p>
                    </a>
                    <a href="https://wa.me/+966536469055" target="_blank" aria-label="whatsapp" class="card" data-aos="zoom-in">
                        <div class="icon">
                            <i class="fa-solid fa-earth-americas fa-beat"></i>
                        </div>
                        <h3>برامج السفر والرحلات</h3>
                        <p>
                            مع أروى تورز يمكنك الاستمتاع بأفضل برامج السفر والترحال حول العالم بأسعار تنافسية
                        </p>
                    </a>
                    <a href="https://wa.me/+966536469055" target="_blank" aria-label="whatsapp" class="card" data-aos="zoom-in">
                        <div class="icon">
                            <i class="fa-solid fa-hotel fa-beat"></i>
                        </div>
                        <h3>حجز الفنادق</h3>
                        <p>
                            دعنا نقوم عنك باختيار أماكن الإقامة الأنسب لك ولأسرتك التي تتوافق مع متطلباتك
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ======City====== --}}
    <section class="country">
        <div class="container">
            <div class="title">
                <h2 data-aos="zoom-in">استكشف أكثر<br> من 200 وجهة سياحية حول العالم</h2>
            </div>
            <div class="content">
                @foreach ($countries as $country)    
                <a class="col-content" href="/more/category/{{ $country -> name }}" aria-label="{{ $country -> name }}" data-aos="zoom-in">
                    <img src="{{ URL('assets/front-end/images/countries', $country -> image) }}" loading="lazy"
                    alt="{{ $country -> name }}">
                    <h2>{{ $country -> name }}</h2>
                </a>
                @endforeach
            </div>
            <div class="country-more" data-aos="zoom-in">
                <a href="/more/countries">
                    المزيد من الوجهات
                </a>
            </div>
        </div>
    </section>

    {{-- ======Counter====== --}}
    <section class="counter">
        <div class="container">
            <div class="title-box">
                <p data-aos="zoom-in">ليش تختار وكالة</p>
                <h1 data-aos="zoom-in">محيط العالم للسفر و السياحة</h1>
            </div>
            <div class="boxs">
                <div class="box" data-aos="zoom-in">
                    <div class="icon"><i class="fa-solid fa-plane-departure fa-beat"></i></div>
                    <div class="text">اكثر من</div>
                    <div class="num" data-goal="112000">111700</div>
                    <div class="text">رحلة</div>
                </div>
                <div class="box" data-aos="zoom-in">
                    <div class="icon"><i class="fa-solid fa-person-walking-luggage fa-beat"></i></div>
                    <div class="text">اكثر من</div>
                    <div class="num" data-goal="15000">14700</div>
                    <div class="text">عميل سعيد</div>
                </div>
                <div class="box" data-aos="zoom-in">
                    <div class="icon"><i class="fa-solid fa-book-open-reader fa-beat"></i></div>
                    <div class="text">اكثر من</div>
                    <div class="num" data-goal="40">0</div>
                    <div class="text">وجهة</div>
                </div>
                <div class="box" data-aos="zoom-in">
                    <div class="icon"><i class="fa-solid fa-shield fa-beat"></i></div>
                    <div class="text">اكثر من</div>
                    <div class="num" data-goal="5">0</div>
                    <div class="text">سنين خبرة </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Offers --}}
    <section class="offer-section">
        <div class="container">
            <div class="title">
                <h2 data-aos="zoom-in">عروضنا المميزة</h2>
            </div>
            <div class="content">
                @foreach ($offers as $offer)
                    <div class="box" data-aos="zoom-in">
                        <div class="thum">
                            <img src="{{ URL('assets/front-end/images/offers/', $offer -> image) }}" loading="lazy"
                                alt="world ocean">
                            <h3>{{ $offer -> name }}</h3>
                            <a href="/more/offers/{{ $offer -> name }}" class="more">تفاصيل العرض</a>
                        </div>
                        <div class="des-content">
                            <div class="location">
                                <h3>السعر للشخص</h3>
                                <p>{{ $offer -> price }} /ريال</p>
                            </div>
                            <div class="location">
                                <h3>مدة الرحلة</h3>
                                <p>{{ $offer -> day_cont }}/ايام</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src="{{ URL::asset('assets/front-end/js/counter.js') }}"></script>
@endsection
