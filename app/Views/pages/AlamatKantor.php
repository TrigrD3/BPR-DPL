<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="my-3">
        <a href="TentangLestari">Tentang Lestari</a> / <span style="color: #0d509e; font-weight: bold;">Berita Lestari</span>
        <p class="h1">Berita Lestari</p>
    </div>
    <?php for ($x = 1; $x <= 5; $x++) : ?>
        <div class="d-flex align-items-center justify-content-center my-3">
            <div class="row">
                <div class="col-lg-7 order-1 order-lg-1 text-center text-lg-start">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15932.158688486461!2d114.58365774999999!3d-3.3403665499999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de423ada2d7e145%3A0xfa7934e04cd5311a!2sBANK%20BPR%20DANA%20PERMATA%20LESTARI!5e0!3m2!1sid!2sid!4v1657687751917!5m2!1sid!2sid" style="border:0; width:100%; height:100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-5 order-2 order-lg-2 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                    <img src="https://via.placeholder.com/400x300.png" class="img-fluid">
                    <span class="mb-2">Banjarmasin</span>
                    <p>
                        Jl. A.Yani Km 6,3 No. 6 Kertak Hanyar
                    </p>
                    <span>089501034319</span>
                </div>
            </div>
        </div>
        <hr>
    <?php endfor; ?>
</div>

<?= $this->endSection(); ?>