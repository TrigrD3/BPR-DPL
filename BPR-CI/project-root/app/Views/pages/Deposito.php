<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container my-4 text-center">
    <img src="images/fotoDeposito.png" class="img-fluid" width="1200" alt="GambarDeposito">
    <div class="row row-cols-md-3 row-cols-sm-1 justify-content-center">
        <?php for ($x = 1; $x <= 5; $x++) : ?>
            <a href="ProdukDeposito">
                <div class="my-3 mx-2 ">
                    <div class="card col-auto">
                        <img class="card-img-top card-image" src="images/fotoDeposito.png" alt="Card image cap">
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