<!-- Booking Start -->
<div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gx-5">

            <!-- Left Content -->
            <div class="col-lg-6 py-5">
                <div class="py-5">

                    <h1 class="text-white mb-4">
                        احجز خدمة صيانة Jeep Doctor الآن بسهولة عبر واتساب
                    </h1>

                    <p class="text-white mb-0">
                        نوفر لك خدمة حجز سريعة لصيانة سيارات الجيب الأمريكي
                        مع فحص دقيق وحل الأعطال مباشرة عبر فريق متخصص.
                        املأ البيانات وسيتم التواصل معك فورًا عبر واتساب.
                    </p>

                </div>
            </div>

            <!-- Right Form -->
            <div class="col-lg-6">

                <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn">

                    <h1 class="text-white mb-4">احجز عبر واتساب</h1>

                    <form id="bookingForm">

                        <div class="row g-3">

                            <!-- الاسم -->
                            <div class="col-12 col-sm-6">
                                <input type="text" id="name"
                                    class="form-control border-0"
                                    placeholder="اسمك"
                                    style="height: 55px;" required>
                            </div>

                            <!-- رقم الهاتف -->
                            <div class="col-12 col-sm-6">
                                <input type="tel" id="phone"
                                    class="form-control border-0"
                                    placeholder="رقم الهاتف"
                                    style="height: 55px;" required>
                            </div>

                            <!-- المشكلة -->
                            <div class="col-12">
                                <textarea id="message"
                                    class="form-control border-0"
                                    placeholder="اكتب المشكلة"
                                    style="height: 120px" required></textarea>
                            </div>

                            <!-- زر الإرسال -->
                            <div class="col-12">
                                <button class="btn btn-secondary w-100 py-3" type="submit">
                                    إرسال الطلب عبر واتساب
                                </button>
                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>
    </div>
</div>
<!-- Booking End -->

<!-- WhatsApp Script -->
<script>
document.getElementById("bookingForm").addEventListener("submit", function (e) {
    e.preventDefault();

    let name = document.getElementById("name").value.trim();
    let phone = document.getElementById("phone").value.trim();
    let message = document.getElementById("message").value.trim();

    if (!name || !phone || !message) {
        alert("من فضلك املأ جميع البيانات");
        return;
    }

    let text =
`🚗 طلب جديد من موقع Jeep Doctor

👤 الاسم: ${name}
📞 الهاتف: ${phone}

🛠 المشكلة:
${message}`;

    let url = "https://wa.me/201224351919?text=" + encodeURIComponent(text);

    window.open(url, "_blank");
});
</script>