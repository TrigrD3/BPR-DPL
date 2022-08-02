<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="my-3">
        <center>
            <p class="h1">
                Berita Lestari
            </p>
        </center>
    </div>
    <div>
        <span><?= $berita->tanggal ?></span>
        <p class="h1"><?= $berita->judul ?></p>
        <div class="text-center">
            <img src="<?= base_url('uploads/Home/Berita') . '/' . $berita->foto ?>" class="img-fluid" alt="GambarBerita">
        </div>
        <p class="text-wrap my-3" style="text-align: justify;">
            <?= $berita->isi_berita ?>
        </p>
    </div>
    <hr>
    <div class="my-4 text-center">
        <div class="row row-cols-md-3 row-cols-sm-1 justify-content-center">
            <?php
            foreach ($RandomBerita as $data) :
            ?>

                <div class="my-3">
                    <a href="<?= base_url("/LihatBerita/$data->id_berita") ?>">
                        <div class="card col-auto">
                            <img class="card-img-top card-image img-fit" src="<?= base_url('uploads/Home/Berita') . '/' . $data->foto ?>" height="200" alt="Card image cap">
                            <div class="card-img-overlay deskripsi">
                                <h5 class="card-title info-box"><?= $data->judul; ?></h5>
                                <p class="info-box"><?= $data->isi_berita; ?></p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>