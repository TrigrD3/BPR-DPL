<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="my-3 judul">
        <center>
            <p class="h1">
                BERITA LESTARI
            </p>
        </center>
    </div>
    <div>
        <span><?= $berita->tanggal ?></span>
        <p class="h1 judul1"><?= $berita->judul ?></p>

        <div class="text-center">
            <img src="<?= base_url('uploads/Home/Berita') . '/' . $berita->foto ?>" width="800px" class="img-fluid" alt="GambarBerita">
        </div>


        <p class="text-wrap my-3" style="text-align: justify;">
            <?= $berita->isi_berita ?>
        </p>
    </div>
    <hr>
    <div class="my-4 text-center">
        <div class="row row-cols-md-3 row-cols-sm-1 justify-content-center berita">
            <?php
            foreach ($RandomBerita as $data) :
            ?>

                <a href="<?= base_url("/LihatBerita/$data->id_berita") ?>">
                    <div class="card card-layanan bg-dark border-0 mb-1">
                        <img class="img-fluid" src="<?= base_url('uploads/Home/Berita') . '/' . $data->foto ?>" height="200" alt="Card image cap">
                        <div class="card-img-overlay card-heading">
                            <h5 class="card-title "><?= $data->judul; ?></h5>
                            <div class="card-img-detail">
                                <p class="card-text position-absolute top-50 start-50 translate-middle"><?= $data->judul; ?></p>
                            </div>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            pagingType: 'full_numbers',
        });
    });
</script>