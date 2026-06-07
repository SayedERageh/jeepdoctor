<!-- Floating Contact Buttons -->
<div class="floating-contact">

    <!-- Phone -->
    <a href="tel:01224351919" class="float-btn phone" title="اتصال">
        <i class="fa fa-phone"></i>
    </a>

    <!-- WhatsApp -->
    <a href="https://wa.me/201224351919" target="_blank" class="float-btn whatsapp" title="واتساب">
        <i class="fab fa-whatsapp"></i>
    </a>

</div>
<style>
    .floating-contact {
    position: fixed;
    bottom: 20px;
    left: 20px;
    display: flex;
    flex-direction: column;
    gap: 10px;
    z-index: 9999;
}

.float-btn {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 20px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    transition: 0.3s;
    text-decoration: none;
}

/* لون الاتصال أحمر */
.float-btn.phone {
    background: #e60000;
}

/* واتساب أخضر */
.float-btn.whatsapp {
    background: #25D366;
}

.float-btn:hover {
    transform: scale(1.1);
}
</style>