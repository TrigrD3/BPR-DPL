<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container my-4 text-center">
    <?php
    foreach ($DepositoIklan as $data) :
    ?>
        <img src="<?= base_url('uploads/Deposito/IklanDeposito') . '/' . $data->foto; ?>" class="img-fit img-deposito" alt="GambarDeposito">
    <?php endforeach; ?>
    <div class="row row-cols-md-3 row-cols-sm-1 justify-content-center">
        <?php $no = 1;
        foreach ($DepositoProduk as $data) :
        ?>
            <a href="<?= base_url("/LihatIklanDeposito/$data->id_produk") ?>">
                <div class="my-3 mx-2 ">
                    <div class="card col-auto">
                        <img class="card-img-top card-image img-fit" src="<?= base_url('uploads/Deposito/ProdukDeposito') . '/' . $data->foto; ?>" height="200" alt="Card image cap">
                        <div class="card-img-overlay">
                            <p class="info-box"><?= $data->nama ?></p>
                        </div>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection(); ?>