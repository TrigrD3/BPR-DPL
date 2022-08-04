<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container my-4">
    <section>
        <h1 class="judul">VISI</h1>
        <?php
        foreach ($TentangLestariVisiMisi as $data) :
        ?>
            <p><?= $data->visi ?></p>

    </section>

    <section>
        <h1 class="judul">MISI</h1>

        <p><?= $data->misi ?>
        </p>
    <?php
        endforeach; ?>
    </section>

</div>

<?= $this->endSection(); ?>