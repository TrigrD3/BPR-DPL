<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="my-3">
        <a href="TentangLestari">Tentang Lestari</a> / <span style="color: #0d509e; font-weight: bold;">Berita Lestari</span>
        <p class="h1">Berita Lestari</p>
    </div>
    <?php for ($x = 1; $x <= 5; $x++) : ?>
        <div class="d-flex align-items-center section-bg my-3">
            <div class="row">
                <div class="col-lg-5 order-1 order-lg-1 text-center text-lg-start">
                    <img src="https://via.placeholder.com/400x300.png" class="img-fluid">
                </div>
                <div class="col-lg-7 order-2 order-lg-2 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                    <span class="mb-2">19 Agustus 2022</span>
                    <p>
                        Sed autem laudantium dolores. Voluptatem itaque ea consequatur
                        eveniet. Eum quas beatae cumque eum quaerat.Sed autem laudantium dolores. Voluptatem itaque ea consequatur
                        eveniet. Eum quas beatae cumque eum quaerat.
                    </p>
                    <div class="d-flex">
                        <a href="#" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endfor; ?>
</div>

<?= $this->endSection(); ?>