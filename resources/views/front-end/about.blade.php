@extends('front-end.layouts.app')
@section('title')
    من نحن
@endsection
@section('css')
    {{-- Css Fils --}}
    <link rel="stylesheet" href="{{ URL::asset('assets/front-end/css/landing.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/front-end/css/about.css') }}">
@endsection
@section('content')
    {{-- ======Landing====== --}}
    <div class="landing">
        <img src="{{ URL('assets/front-end/images/about.jpeg') }}" alt="">
        <div class="text">
            <h2 data-aos="zoom-in">محيط العالم للسفر والسياحة</h2>
            <p data-aos="zoom-in">شركة محيط العالم مركزا داخل المملكة العربية السعودية، قامت بترتيب عشرات الآلاف من الرحـلات
                السياحيـة لعملائها إلى جميع الوجهات السياحية في العالم.</p>
        </div>
    </div>
    {{-- ======content====== --}}
    <div class="content">
        <div class="container">
            <div class="about">
                <img src="{{ URL('assets/front-end/images/target.jpeg') }}" data-aos="zoom-in" alt="world ocean">
                <div class="about-content">
                    <h2 data-aos="zoom-in">رؤيتنا</h2>
                    <p data-aos="zoom-in">
                        أن تصبح محيط العالم أكبر شركة سعودية مختصة بمهام السفر والسياحة في العالم العربي نستخدم شغفنا
                        اللامحدود بالسفر والسياحة والخدمات لتقديم الحماسة والتسلية بصورة جديدة رائعة، وهذا ما لا تفعله
                        إلا محيط العالم .
                    </p>
                    <a target="_blank" href="https://wa.me/+966536466763" aria-label="whatsapp" class="whatsapp"
                        data-aos="zoom-in"><i class="fa-brands fa-whatsapp fa-beat"></i> تواصل
                        معنا عبر
                        الوتساب </a>
                </div>
            </div>

            <div class="about">
                <div class="about-content">
                    <h2 data-aos="zoom-in">مهمتنا</h2>
                    <p data-aos="zoom-in">
                        توفير أقصي راحة للعميل مع العديد من الخدمات مثل الحجز المركزي الدعم الفني 24/7 والترجمة الفورية.
                        وأن تكون شركتنا هي الخيار الأول والأمثل لكل الراغبين في الحصول على أفضل الخدمات السياحية في المملكة
                        العربية السعودية .

                    </p>
                    <a target="_blank" href="https://wa.me/+966536466763" aria-label="whatsapp" class="whatsapp"
                        data-aos="zoom-in"><i class="fa-brands fa-whatsapp fa-beat"></i> تواصل
                        معنا عبر
                        الوتساب </a>
                </div>
                <img src="{{ URL('assets/front-end/images/target.jpeg') }}" data-aos="zoom-in" alt="world ocean">
            </div>
        </div>

        {{-- target section  --}}
        <div class="target">
            <div class="container">
                <div class="text-content">
                    <h2>هدفنا </h2>
                    <p>تقديم جميع الخدمات السياحية لجميع عملاء الشركات والمكاتب السياحية ومنظمي الرحلات السياحية والأفراد من
                        الجنسيات العربية الراغبين بزيارة وجهاتنا السياحية ، سواء أكانوا مجموعات أو عائلات أو عرسانًا أو
                        أفرادًا، بشكلٍ متميز.. منافس.. يناسب جميع المتطلبات من خلال النوع والصنف والسعر، وذلك من خلال طاقم
                        عمل مؤلَّف من مجموعة شابَّة مثقفة ذات خبرة عالية من مختلف الجنسيات، مؤهلة وجاهزة لتقديم جميع أنواع
                        الخدمات السياحية والسفر وحسب الطلب.
                    </p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="about">
                <img src="{{ URL('assets/front-end/images/target.jpeg') }}" data-aos="zoom-in" alt="world ocean">
                <div class="about-content">
                    <h2 data-aos="zoom-in">سياستنا</h2>
                    <p data-aos="zoom-in">
                        <ul>
                            <li>
                                <i class="fa-solid fa-star fa-shake"></i>
                                الحرص على علاقات جيدة ومتميزة مع جميع المتعاملين معنا.
                            </li>
                            <li>
                                <i class="fa-solid fa-star fa-shake"></i>
                                الحرص على الحفاظ وتطوير علاقات العمل والصداقة المتميزة التي تربطنا مع جميع المتعاملين.
                            </li>
                            <li>
                                <i class="fa-solid fa-star fa-shake"></i>
                                المساهمة في تطوير السياحة في وجهاتنا بما يلبِّي احتياجات زوَّارها.
                            </li>
                            <li>
                                <i class="fa-solid fa-star fa-shake"></i>
                                الالتزام بخدمة ما بعد البيع وتنفيذها على أكمل وجه.
                            </li>
                        </ul>
                    </p>
                    <a target="_blank" href="https://wa.me/+966536466763" aria-label="whatsapp" class="whatsapp"
                        data-aos="zoom-in"><i class="fa-brands fa-whatsapp fa-beat"></i> تواصل
                        معنا عبر
                        الوتساب </a>
                </div>
            </div>

            <div class="about">
                <div class="about-content">
                    <h2 data-aos="zoom-in">القيم الجوهرية</h2>
                    <p data-aos="zoom-in">
                        <ul>
                            <li>
                                <i class="fa-solid fa-star fa-shake"></i>
                                الحرص والالتزام بتقديم خدمات ممتازة تلبِّي طلب المتعامل بكل دقة واحترافية.
                            </li>
                            <li>
                                <i class="fa-solid fa-star fa-shake"></i>
                                توجيه الملاحظات والنصائح للعميل واضعين مصلحته فوق كل اعتبار.
                            </li>
                            <li>
                                <i class="fa-solid fa-star fa-shake"></i>
                                الالتزام بخدمة المتعامل بمستوى متميز وبناء علاقات قوية ودائمة.
                            </li>
                            <li>
                                <i class="fa-solid fa-star fa-shake"></i>
                                تقديم خدمات إضافية واهتمام خاص للعملاء الدائمين وعملاء الشركات والوكلاء ومنظمي الرحلات.
                            </li>
                        </ul>
                    </p>
                    <a target="_blank" href="https://wa.me/+966536466763" aria-label="whatsapp" class="whatsapp"
                        data-aos="zoom-in"><i class="fa-brands fa-whatsapp fa-beat"></i> تواصل
                        معنا عبر
                        الوتساب </a>
                </div>
                <img src="{{ URL('assets/front-end/images/target.jpeg') }}" data-aos="zoom-in" alt="world ocean">
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
