<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="my-3">
    </div>
    <div>
        <p class="h1"><?= $produk_deposito->nama ?></p>
        <div class="text-center">
            <img src="<?= base_url('uploads/Deposito/ProdukDeposito') . '/' . $produk_deposito->foto ?>" class="img-fluid" alt="GambarProdukDeposito">
        </div>
    </div>
    <div class="my-4">
        <?= $produk_deposito->deskripsi ?>
    </div>
</div>
<div class="row row-cols-md-4 row-cols-sm-1 justify-content-center">
    <?php
    foreach ($DepositoForm as $data) :
    ?>
        <a href="<?= $data->g_form; ?>" target="_blank">
            <button type="button" class=" ">
                <img src="images/b1.png" alt=""> Pengajuan Deposit
            </button>
        </a>
    <?php endforeach; ?>

</div>

<?= $this->endSection(); ?>