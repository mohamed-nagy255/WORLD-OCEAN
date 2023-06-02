<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="/dashboard">
                <i class="bi bi-grid"></i>
                <span>لوحة التحكم</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>اعدادات الموقع</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav"
                class="nav-content collapse {{ request()->is('dashboard/setting*') ? 'show' : '' }}"
                data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('seo.index') }}"
                        class="{{ request()->is('dashboard/setting/seo*') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>SEO</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('slide.index') }}"
                        class="{{ request()->is('dashboard/setting/slides*') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Slider</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>اعدادات الفئات</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse 
            {{ request()->is('dashboard/country*') ? 'show' : '' }}
            || {{ request()->is('dashboard/category*') ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('country.index') }}"
                    class="{{ request()->is('dashboard/country*') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>جدول المدن</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('category.index') }}"
                    class="{{ request()->is('dashboard/category*') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>جدول الفئات</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Forms Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>اعدادات العروض</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse {{ request()->is('dashboard/offer*') ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('offer.index') }}" class="{{ request()->is('dashboard/offer') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>العروض</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('offer.create') }}" class="{{ request()->is('dashboard/offer/create') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>اضافة عرض</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->

        <!-- End Blank Page Nav -->

    </ul>

</aside><!-- End Sidebar-->
