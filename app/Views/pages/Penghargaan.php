<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container text-center">

    <p class="h1 mt-4 judul" style="font-weight:bold; ">PENGHARGAAN YANG TELAH DICAPAI OLEH <br> BPR DANAPERMATA LESTARI</p>
    <div class="row justify-content-center">
        <?php
        foreach ($HeaderPenghargaan as $data) :

        ?>
            <div class="col-md-6 my-4">
                <img src="<?= base_url('uploads/Header/Penghargaan') . '/' . $data->foto ?>" class="img-fluid" width="500">
                <p class="my-3"><?= $data->deskripsi  ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection(); ?>