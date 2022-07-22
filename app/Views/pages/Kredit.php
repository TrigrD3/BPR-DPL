<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container my-4 text-center">
    <img src="images/fotoDeposito.png" class="img-fit img-deposito" alt="GambarDeposito">
    <div class="row row-cols-md-3 row-cols-sm-1 justify-content-center">
        <?php for ($x = 1; $x <= 8; $x++) : ?>
            <a href="ProdukKredit">
                <div class="my-3 mx-2 ">
                    <div class="card col-auto">
                        <img class="card-img-top card-image img-fit" src="images/tabungan.jpg" height="200" alt="Card image cap">
                        <div class="card-img-overlay">
                            <p class="info-box">Contoh Deposito</p>
                        </div>
                    </div>
                </div>
            </a>
        <?php endfor; ?>
    </div>
</div>

<?= $this->endSection(); ?>