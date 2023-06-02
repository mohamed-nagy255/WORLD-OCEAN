@extends('front-end.layouts.app')
@section('title')
    تواصل معنا
@endsection
@section('css')
    {{-- Css Fils --}}
    <link rel="stylesheet" href="{{ URL::asset('assets/front-end/css/landing.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/front-end/css/contact.css') }}">
@endsection
@section('content')
    {{-- ======Landing====== --}}
    <div class="landing">
        <img src="{{ URL('assets/front-end/images/contact.webp') }}" alt="">
        <div class="text">
            <h2 data-aos="zoom-in">واصل مع مستشارك السياحي</h2>
            <p data-aos="zoom-in">تواصل مع مستشارك السياحي واخبره بما تبي وراح يسويلك برنامج سياحي يبيض وجهك</p>
        </div>
    </div>
    {{-- ======content====== --}}
    <div class="content" >
        <div class="container">
            <div class="contact">
                <div data-aos="zoom-in">
                    <i class="fa-solid fa-location-dot fa-beat"></i>
                    <span>الرياض/</span>
                        مجمع نجمة الدائري الطابق الثاني مكتب رقم 6 
                </div>
                <div data-aos="zoom-in">
                    <i class="fa-solid fa-phone fa-beat"></i>
                    966 53 646 6763+
                </div>
                <div data-aos="zoom-in">
                    <i class="fa-solid fa-phone fa-beat"></i>
                    966 53 646 9055+
                </div>
                <div data-aos="zoom-in">
                    <i class="fa-solid fa-envelope fa-beat"></i>
                    
                        <a href="mailto:worldoceansa@outlook.com">worldoceansa@outlook.com</a>
                    
                </div>
            </div>
            <div class="contact-form">
                <h3 data-aos="zoom-in">تواصل معنا</h3>
                <form class="contact" action="">
                    <input type="text" class="box-text" placeholder="الاسم" required data-aos="zoom-in">
                    <input type="email" class="box-text" placeholder="البريد الالكتروني" required data-aos="zoom-in">
                    <input type="text" class="box-text" placeholder="رقم الهاتف" required data-aos="zoom-in">
                    <textarea id="ma" rows="5" placeholder="ما هي رسالتك؟" required data-aos="zoom-in"></textarea>
                    <button type="submit" class="btn btn-primary" data-aos="zoom-in">ارسال</button>
                </form>
            </div>
        </div>
    </div>
    <div class="map" style="width: 100%; background-color:#fff;" >
        <iframe 
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3627.49335489798!2d46.7581337!3d24.6066754!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f09cb8a11aa1d%3A0x109b14d58b025f99!2z2YXYrdmK2Lcg2KfZhNi52KfZhNmFINmE2YTYs9mB2LEg2YjYp9mE2LPZitin2K3YqSBXb3JsZCBPY2VhbiBUcmF2ZWwgJiBUb3VyaXNt!5e0!3m2!1sen!2seg!4v1684888651199!5m2!1sen!2seg" style="border:0; width: 100%; height: 80vh; margin:0; padding: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection
@section('js')
@endsection
