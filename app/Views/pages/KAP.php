<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <p class="h1 text-center my-4 judul">LAPORAN KAP</p>
    <p class="text-center">LAPORAN AUDIT KANTOR AKUNTAN PUBLIK PT BPR DANAPERMATA LESTARI</p>
    <?php
    foreach ($HeaderPAT as $data) :
    ?>
        <ul style="list-style-type: none; padding: 0; margin: 0; text-align:center;">
            <li><a href="<?= base_url('uploads/Header/PAT/' . $data->file); ?>"><?= $data->nama ?> Tahun <?= $data->tahun ?></a></li>
        </ul>
    <?php
    endforeach; ?>
</div>

<?= $this->endSection(); ?>