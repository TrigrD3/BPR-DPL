<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<main>
    <?php
    foreach ($TentangLestariStrukturOrganisasi as $data) :
    ?>
        <div class="container my-4">
            <img src="<?= base_url('uploads/TentangLestari/StrukturOrganisasi') . '/' . $data->foto ?>">
        </div>
    <?php
    endforeach; ?>
</main>

<?= $this->endSection(); ?>