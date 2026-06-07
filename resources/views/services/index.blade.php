@extends('layouts.app')

@section('title', 'الخدمات')

@section('content')
 <!-- Page Header Start -->
 <style>
  /* كارت الخدمة */
.service-item {
    background: #fff;
    border-radius: 18px;
    overflow: hidden;
    position: relative;
    transition: 0.4s ease;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
}

/* تأثير Hover عام */
.service-item:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 50px rgba(0,0,0,0.15);
}

/* صورة 16:9 */
.service-img {
    width: 100%;
    aspect-ratio: 16 / 9;
    overflow: hidden;
}

.service-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: 0.5s ease;
}

/* تكبير بسيط عند الهوفر */
.service-item:hover .service-img img {
    transform: scale(1.08);
}

/* المحتوى */
.details {
    padding: 20px;
    position: relative;
}

/* 🌟 الإطار المضيء المتحرك */
.service-item::before {
    content: "";
    position: absolute;
    inset: 0;
    border-radius: 18px;
    padding: 2px;
    background: linear-gradient(120deg,
        #cc00ff,
        #ff0000,
        #ffccc0,
        #ff0073
    );
    background-size: 300% 300%;
    animation: borderGlow 5s linear infinite;

    /* يخلي الإطار بس مش يغطي المحتوى */
    -webkit-mask: 
        linear-gradient(#000 0 0) content-box,
        linear-gradient(#000 0 0);
    -webkit-mask-composite: xor;
    mask-composite: exclude;

    pointer-events: none;
}

@keyframes borderGlow {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}
 </style>
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-2.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">الخــدمات</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('services.index') }}">services</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        </div>
<main class="main">
<section id="services" class="services section" dir="rtl">

  <div class="container section-title" data-aos="fade-up">
    <h2>الخدمات</h2>
    <p>تعرف على أهم خدماتنا</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-5">

      @foreach($services as $service)

        <div class="col-xl-4 col-md-6" data-aos="zoom-in">

          <div class="service-item">

            
             <div class="img service-img">
  <img src="{{ asset('uploads/' . $service->image) }}"
       alt="{{ $service->title }}">
</div>
            

            <div class="details position-relative">

              <div class="icon">
                <i class="bi bi-activity"></i> 
              </div>

              <a href="{{ route('services.show', $service->slug) }}" class="stretched-link">
                <h3>{{ $service->title }}</h3>
              </a>

              <p>
                {{ $service->short_description }}
              </p>
  <!-- زر التفاصيل -->
  <a href="{{ route('services.show', $service->slug) }}" class="btn btn-primary mt-2">
    عرض التفاصيل
  </a>
            </div>

          </div>

        </div>

      @endforeach

    </div>

  </div>

</section>
</main>

@endsection