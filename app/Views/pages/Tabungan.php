<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container my-4 text-center">
    <?php
    foreach ($TabunganIklan as $data) :
    ?>
        <img src="<?= base_url('uploads/Tabungan/Iklan') . '/' . $data->foto; ?>" class="img-fit img-deposito" alt="GambarDeposito">
    <?php endforeach; ?>
    <div class="row row-cols-md-3 row-cols-sm-1 justify-content-center">
        <?php
        foreach ($TabunganProduk as $data) :
        ?>
            <a href="<?= base_url("/LihatIklanTabungan/$data->id_produk") ?>">
                <div class="my-3 mx-2 ">
                    <div class="card col-auto">
                        <img class="card-img-top card-image img-fit" src="<?= base_url('uploads/Tabungan/Produk') . '/' . $data->foto; ?>" height="200" alt="Card image cap">
                        <div class="card-img-overlay">
                            <p class="info-box"><?= $data->nama; ?></p>
                        </div>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection(); ?>