
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-1.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Contact</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
         <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
    <h6 class="text-primary text-uppercase">// تواصل معنا //</h6>
    <h1 class="mb-3">احجز صيانة سيارتك الآن</h1>
    <p class="text-muted mx-auto" style="max-width: 700px;">
        فريق Jeep Doctor جاهز للرد على جميع استفساراتك وحجز مواعيد الصيانة
        والفحص لسيارات الجيب الأمريكي بأحدث أجهزة التشخيص.
    </p>
</div>
          ```html
<div class="row g-4" dir="rtl">

    <!-- Contact Cards -->
    <div class="col-12">
        <div class="row gy-4">

            <div class="col-md-4">
                <div class="bg-light d-flex flex-column justify-content-center p-4 text-end h-100">
                    <h5 class="text-uppercase">// الهاتف //</h5>
                    <p class="m-0">
                        <i class="fa fa-phone-alt text-primary ms-2"></i>
                        0122-435-19-19
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="bg-light d-flex flex-column justify-content-center p-4 text-end h-100">
                    <h5 class="text-uppercase">// واتساب //</h5>
                    <p class="m-0">
                        <a href="https://wa.me/201224351919" class="text-dark text-decoration-none">
                            <i class="fab fa-whatsapp text-primary ms-2"></i>
                            تواصل مباشرة عبر واتساب
                        </a>
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="bg-light d-flex flex-column justify-content-center p-4 text-end h-100">
                    <h5 class="text-uppercase">// العنوان //</h5>
                    <p class="m-0">
                        <i class="fa fa-map-marker-alt text-primary ms-2"></i>
                        السادس من أكتوبر – الحصري – شارع ريتش باك – مول الدوح
                    </p>
                </div>
            </div>

        </div>
    </div>

    <!-- Google Map -->
    <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
        <iframe
            class="position-relative rounded w-100 h-100"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3456.5375294101696!2d30.954693099999993!3d29.963978399999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145857d67c056131%3A0xc8cd7b4606954df8!2sJEEP%20Doctor%20-%20Mohamed%20El-Sakka!5e0!3m2!1sar!2seg!4v1780499807908!5m2!1sar!2seg"
            style="min-height:450px;border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>

    <!-- Contact Form -->
    <div class="col-md-6">
        <div class="wow fadeInUp" data-wow-delay="0.2s">

            <p class="mb-4 text-end">
                يمكنك إرسال استفسارك أو طلب حجز موعد صيانة، وسيتم التواصل معك
                في أقرب وقت ممكن بواسطة فريق Jeep Doctor.
            </p>

            ```html
<form id="whatsappForm">

    <div class="row g-3">

        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="name" placeholder="الاسم" required>
                <label>الاسم</label>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-floating">
                <input type="tel" class="form-control" id="phone" placeholder="رقم الهاتف" required>
                <label>رقم الهاتف</label>
            </div>
        </div>

        <div class="col-12">
            <div class="form-floating">
                <input type="text" class="form-control" id="service" placeholder="الخدمة المطلوبة">
                <label>الخدمة المطلوبة</label>
            </div>
        </div>

        <div class="col-12">
            <div class="form-floating">
                <textarea class="form-control" id="message" style="height:120px"></textarea>
                <label>تفاصيل المشكلة</label>
            </div>
        </div>

        <div class="col-12">
            <button type="button" onclick="sendToWhatsApp()"
                class="btn btn-primary w-100 py-3">
                إرسال عبر واتساب
            </button>
        </div>

    </div>

</form>

<script>
function sendToWhatsApp() {

    let name = document.getElementById('name').value;
    let phone = document.getElementById('phone').value;
    let service = document.getElementById('service').value;
    let message = document.getElementById('message').value;

    let text =
`🚗 *طلب جديد من موقع Jeep Doctor*

👤 الاسم: ${name}

📞 الهاتف: ${phone}

🔧 الخدمة المطلوبة: ${service}

📝 التفاصيل:
${message}`;

    let whatsappUrl =
    `https://wa.me/201224351919?text=${encodeURIComponent(text)}`;

    window.open(whatsappUrl, '_blank');
}
</script>
```


        </div>
    </div>

</div>
```

        </div>
    </div>
    <!-- Contact End -->

