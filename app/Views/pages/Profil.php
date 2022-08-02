<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container my-4">
    <?php
    foreach ($TentangLestariProfil as $data) :
    ?>
        <h1><?= $data->judul ?></h1>
        <section class="pt-5">
            <p><?= $data->deskripsi ?>
            </p>
        </section>
    <?php
    endforeach; ?>
</div>

<?= $this->endSection(); ?>