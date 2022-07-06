<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<!-- Container -->
<div class="flex-container">
    <div class="logo">
        <img src="<?= base_url('/assets/img/LogoBPR.png'); ?>" alt="">
        <p class="bpr">BPR</p>
        <p class="dpl">DANA PERMATA LESTARI</p>
    </div>
</div>
<div class="container text-center">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15932.168951306585!2d114.60741274999998!3d-3.33973415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de42153a87751bf%3A0x953145b5a090dd44!2sHotel%20Banjarmasin%20International!5e0!3m2!1sid!2sid!4v1657112466880!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<?= $this->endSection(); ?>