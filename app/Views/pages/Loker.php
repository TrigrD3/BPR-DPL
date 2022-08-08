<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container py-4">

    <?php
    foreach ($HeaderLoker as $data) :
    ?>
        <div class="row align-items-md-stretch">
            <div class="col-md-6">
                <div class="h-100 p-5">
                    <img src="<?= base_url('uploads/Header/Loker') . '/' . $data->foto ?>" class="img-fluid">
                </div>
            </div>
            <div class="gambar col-md-6">
                <div class="h-100 p-5 ">
                    <h2 class="text-color judul1">
                        <?= $data->judul ?>
                    </h2>
                    <p><?= $data->deskripsi ?></p>
                    <div class="form">
                        <h4>Form :</h4>
                        <a href="<?= $data->link ?>"><img src="<?= base_url('/assets/img/form-loker.png'); ?>" class="img-fluid form-transition"></a>
                        <div class="mt-3">
                            <h4>Email :</h4>
                            <a href="mailto:hrd@banklestari.co.id"><img src="<?= base_url('/assets/img/loker-email.png'); ?>" class="img-fluid form-transition"></a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    <?php
    endforeach; ?>

</div>

<?= $this->endSection(); ?>