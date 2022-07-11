<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container my-4 text-center">
    <img src="https://via.placeholder.com/1920x600.png" class="img-fit img-deposito" alt="GambarDeposito">
    <div class="row row-cols-md-3 row-cols-sm-1 justify-content-center">
        <?php for ($x = 1; $x <= 5; $x++) : ?>
            <div class="my-3">
                <a href="ProdukDeposito">
                    <div class="card col-auto h-100">
                        <img class="card-img-top card-image" src="https://via.placeholder.com/800x600.png" alt="Card image cap">
                        <div class="card-img-overlay">
                            <h5 class="card-title info-box"><?= $namaproduk; ?></h5>
                            <p class="info-box"><?= $penjelasanproduk; ?></p>
                        </div>
                    </div>
                </a>
            </div>
        <?php endfor; ?>
    </div>
</div>

<?= $this->endSection(); ?>