<!-- Topbar Start -->
<div class="container-fluid bg-light p-0">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-map-marker-alt text-primary me-2"></small>
                <small>السادس من أكتوبر – الحصري – شارع ريتش باك – مول الدوح</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center py-3">
                <small class="far fa-clock text-primary me-2"></small>
                <small>السبت - الخميس : 09:00 صباحاً - 09:00 مساءً</small>
            </div>
        </div>

   <div class="col-lg-5 px-5 text-end">
    <div class="h-100 d-inline-flex align-items-center py-3 me-4">
        <small class="fa fa-phone-alt text-primary me-2"></small>
        <small>01224351919</small>
    </div>

    <div class="h-100 d-inline-flex align-items-center">
        <!-- Facebook -->
        <a class="btn btn-sm-square bg-white text-primary me-1"
           href="https://www.facebook.com/elsakka4x4"
           target="_blank">
            <i class="fab fa-facebook-f"></i>
        </a>

        <!-- WhatsApp -->
        <a class="btn btn-sm-square bg-white text-primary me-1"
           href="https://wa.me/201224351919"
           target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>

        <!-- Instagram -->
        <a class="btn btn-sm-square bg-white text-primary me-1"
           href="https://www.instagram.com/elsakagada"
           target="_blank">
            <i class="fab fa-instagram"></i>
        </a>

        <!-- TikTok -->
        <a class="btn btn-sm-square bg-white text-primary me-1"
           href="https://www.tiktok.com/@saka.191919"
           target="_blank">
<i class="fa-brands fa-tiktok"></i>
        </a>

        <!-- YouTube -->
        <a class="btn btn-sm-square bg-white text-primary me-0"
           href="https://youtube.com/@mohamedelsaka-c2z"
           target="_blank">
            <i class="fab fa-youtube"></i>
        </a>
    </div>
</div>
    </div>
</div>
<!-- Topbar End -->

  

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0" dir="rtl">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-car me-3"></i>دكــتــور جـيـب</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse"  dir="rtl">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
   <a href="{{ route('home') }}"
   class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
    الرئيسية
</a>

<a href="{{ route('about') }}"
   class="nav-item nav-link {{ request()->routeIs('about') ? 'active' : '' }}">
    من نحن
</a>

<a href="{{ route('services.index') }}"
   class="nav-item nav-link {{ request()->routeIs('services.index') ? 'active' : '' }}">
    خدماتنا
</a>

<a href="{{ route('contact') }}"
   class="nav-item nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">
    التواصل
</a>


<a href="{{ route('posts.index') }}"
   class="nav-item nav-link {{ request()->routeIs('posts.index') ? 'active' : '' }}">
    المقالات
</a>
            
            </div>
            <a href="https://wa.me/201224351919" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">اتصل بنا<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

