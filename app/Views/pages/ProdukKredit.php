<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div>
        <center>
            <p class="h1"><?= $iklan_kredit->nama; ?></p>
        </center>
        <div class="text-center">
            <img src="<?= base_url('uploads/Kredit/ProdukKredit') . '/' . $iklan_kredit->foto; ?>" class="img-fluid" alt="GambarProdukKredit">
        </div>
    </div>
    <div class="my-4">
        <?= $iklan_kredit->deskripsi; ?>
    </div>
</div>
<div class="row row-cols-md-4 row-cols-sm-1 justify-content-center">
    <?php
    foreach ($KreditForm as $data) :
    ?>
        <a href="<?= $data->g_form; ?>" target="_blank">
        <?php endforeach; ?>
        <button type="button" class=" ">
            <img src="images/b1.png" alt=""> Pengajuan Kredit
        </button>
        </a>

</div>

<?= $this->endSection(); ?>