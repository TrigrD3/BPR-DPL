<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>



<!------ Include the above in your HEAD tag ---------->

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1>SEJARAH</h1>
            <ul class="timeline">
                <?php
                foreach ($TentangLestariSejarah as $data) :
                ?>
                    <li>
                        <a><?= $data->judul; ?></a>
                        <a class="float-right"><?= $data->tanggal; ?></a>
                        <p><?= $data->deskripsi; ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>