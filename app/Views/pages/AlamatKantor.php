<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">

    <?php
    foreach ($TentangLestariAlamat as $data) :
    ?>
        <div class="d-flex align-items-center justify-content-center my-3">
            <div class="row">
                <div class="col-lg-7 order-1 order-lg-1 text-center text-lg-start">
                    <iframe src="<?= $data->google_maps; ?>" style="border:0; width:100%; height:100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-5 order-2 order-lg-2 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                    <img src="<?= base_url('uploads/TentangLestari/Alamat') . '/' . $data->foto ?>" class="img-fluid">
                    <span class="mb-2"><?= $data->kabupaten_kota; ?></span>
                    <p>
                        <?= $data->alamat; ?>
                    </p>
                    <span><?= $data->nomor_telepon; ?></span>
                </div>
            </div>
        </div>
        <hr>
    <?php endforeach; ?>
</div>

<?= $this->endSection(); ?>