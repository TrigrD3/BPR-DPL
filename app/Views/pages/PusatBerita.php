<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="my-3">
        <center>
            <p class="h1">Berita Lestari</p>
        </center>
    </div>
    <?php
    foreach ($HomeBerita as $data) :
    ?>
        <div class="d-flex align-items-center section-bg my-3">
            <div class="row">
                <div class="col-lg-5 order-1 order-lg-1 text-center text-lg-start">
                    <img src="<?= base_url('uploads/Home/Berita') . '/' . $data->foto ?>" width="1050" class="img-fluid">
                </div>
                <div class="col-lg-7 order-2 order-lg-2 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start deskripsi">
                    <b><?= $data->judul; ?></b>
                    <span class="mb-2"><?= $data->tanggal; ?></span>
                    <aside>
                        <?= $data->isi_berita; ?>
                    </aside>


                    <div class="d-flex">
                        <a href="<?= base_url("/LihatBerita/$data->id_berita") ?>" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?= $this->endSection(); ?>