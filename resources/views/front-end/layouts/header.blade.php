<header>
    <div class="container">
        <div class="nav-bar">
            <a href="/" class="logo" aria-label="world ocean" data-aos="zoom-in">
                <img src="{{ URL::asset('assets/front-end/images/logo.webp') }}"
                alt="world ocean" loading="lazy">
            </a>
            <div class="icon" data-aos="zoom-in">
                <a target="_blank" aria-label="instagram" href="https://www.instagram.com/world_ocean_sa/">
                    <i class="fa-brands fa-instagram fa-beat"></i>
                </a>
                <a target="_blank" aria-label="snapchat" href="https://www.snapchat.com/add/worldoceansa">
                    <i class="fa-brands fa-square-snapchat fa-beat"></i>
                </a>
                <a target="_blank" aria-label="whatsapp" href="https://wa.me/+966536469055">
                    <i class="fa-brands fa-whatsapp fa-beat"></i>
                </a>
                <a target="_blank" aria-label="whatsapp" href="https://wa.me/+966536466763">
                    <i class="fa-brands fa-square-whatsapp fa-beat"></i>
                </a>
                <a target="_blank" aria-label="tiktok" href="https://www.tiktok.com/@world_ocean_sa">
                    <i class="fa-brands fa-tiktok fa-beat"></i>
                </a>
                <a target="_blank" aria-label="maps"
                    href="https://www.google.com/maps/place/%D9%85%D8%AD%D9%8A%D8%B7+%D8%A7%D9%84%D8%B9%D8%A7%D9%84%D9%85+%D9%84%D9%84%D8%B3%D9%81%D8%B1+%D9%88%D8%A7%D9%84%D8%B3%D9%8A%D8%A7%D8%AD%D8%A9+World+Ocean+Travel+%26+Tourism%E2%80%AD/@24.6066754,46.7581337,17z/data=!3m1!4b1!4m6!3m5!1s0x3e2f09cb8a11aa1d:0x109b14d58b025f99!8m2!3d24.6066754!4d46.7581337!16s%2Fg%2F11kj_g6b5x?hl=en-GB">
                    <i class="fa-solid fa-location-dot fa-beat"></i>
                </a>
            </div>
            <div class="navigation" data-aos="zoom-in">
                <div class="nav-items">
                    <i class="fa-solid fa-xmark"></i>
                    <a href="/" aria-label="world ocean" class="{{ request()->is('/') ? 'active' : '' }}"><i class="fa-solid fa-house"></i>الرئيسية</a>
                    <a href="/more/countries" aria-label="world ocean" class="{{ request()->is('more/countries') ? 'active' : '' }}">
                        <i class="fa-solid fa-panorama"></i>الوجهات
                    </a>
                    <a href="/more/offers" aria-label="world ocean" class="{{ request()->is('more/offers') ? 'active' : '' }}">
                        <i class="fa-solid fa-plane"></i> العروض المميزة
                    </a>
                    <a href="/about" aria-label="world ocean" class="{{ request()->is('about') ? 'active' : '' }}">
                        <i class="fa-solid fa-users"></i>من نحن
                    </a>
                    <a href="/contact" aria-label="world ocean" class="{{ request()->is('contact') ? 'active' : '' }}">
                        <i class="fa-solid fa-location-dot"></i>تواصل معنا
                    </a>
                </div>
            </div>
            <i class="fa-solid fa-bars" data-aos="zoom-in"></i>
        </div>
    </div>
</header>
