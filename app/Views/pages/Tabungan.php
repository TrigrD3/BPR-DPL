<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container my-4 text-center">
    <?php
    foreach ($TabunganIklan as $data) :
    ?>
        <img src="<?= base_url('uploads/Tabungan/Iklan') . '/' . $data->foto; ?>" class="img-fit img-deposito" alt="GambarTabungan">
    <?php endforeach; ?>
    <div class="row row-cols-md-3 row-cols-sm-1 justify-content-center">
        <?php
        foreach ($TabunganProduk as $data) :
        ?>
            <a href="<?= base_url("/LihatIklanTabungan/$data->id_produk") ?>">
                <div class="card col-auto card-layanan bg-dark text-light border-0 my-4">
                    <img src="<?= base_url('uploads/Tabungan/Produk') . '/' . $data->foto; ?>" width="100%" height="225" class="card-img" alt="...">
                    <div class="card-img-overlay card-heading">

                        <h5 class="card-title position-absolute top-0 start-50 translate-middle-x background-transparan hitam">
                            <div class="mt-1"><?= $data->nama ?></div>
                        </h5>

                        <div class="card-img-detail deskripsi">
                            <p class="card-text position-absolute top-50 start-50 translate-middle "><?= $data->nama ?></p>
                        </div>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection(); ?>