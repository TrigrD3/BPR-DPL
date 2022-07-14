<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="my-3">
        <a href="TentangLestari">Tentang Lestari</a> / <span style="color: #0d509e; font-weight: bold;">Berita Lestari</span>
        <p class="h1">Berita Lestari</p>
    </div>
    <div>
        <span>19 Agustus 2022</span>
        <p class="h1">Deposito Lestari</p>
        <div class="text-center">
            <img src="https://via.placeholder.com/1920x600.png" class="img-fluid" alt="GambarProdukDeposito">
        </div>
        <p class="text-wrap my-3" style="text-align: justify;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
    </div>
    <hr>
    <div>
        <div class="row row-cols-md-3 row-cols-sm-1 justify-content-center">
            <?php for ($x = 1; $x <= 3; $x++) : ?>
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
</div>

<?= $this->endSection(); ?>