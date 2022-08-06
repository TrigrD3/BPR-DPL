<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<div class="container">

    <div id="carouselExampleIndicators" class="carousel slide pb-5 pt-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner ">
            <?php $no = 0;
            foreach ($HomeIklan as $data) :
                if ($no == 0) {
            ?>
                    <div class="carousel-item active">
                        <img src="<?= base_url('uploads/Home/Iklan') . '/' . $data->foto ?>" height="450px" class="d-block w-100" alt="...">
                    </div>
                <?php } else { ?>
                    <div class="carousel-item">
                        <img src="<?= base_url('uploads/Home/Iklan') . '/' . $data->foto ?>" height="450px" class="d-block w-100" alt="...">
                    </div>
            <?php }
                $no++;
            endforeach; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="bg-light p-5 pt-5 rounded">
        <?php
        foreach ($HomeDeskripsiWebsite as $data) :
        ?>
            <?= $data->deskripsi; ?>
        <?php endforeach; ?>
    </div>


    <div class="album py-5 pt-3">
        <div class="container">
            <?php
            foreach ($HomeFotoLogo as $data) :
            ?>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <a href="<?= base_url("/Kredit") ?>">
                            <div class="card card-layanan bg-dark text-dark border-0">
                                <img src="<?= base_url('uploads/Home/Logo') . '/' . $data->foto_kredit ?>" width="100%" height="225" class="card-img" alt="...">
                                <div class="card-img-overlay card-heading">
                                    <h5 class="card-title position-absolute top-0 start-50 translate-middle-x">KREDIT</h5>
                                    <div class="card-img-detail">
                                        <p class="card-text position-absolute top-50 start-50 translate-middle">KREDIT</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col">
                        <a href="<?= base_url("/Deposito") ?>">
                            <div class="card card-layanan bg-dark text-dark border-0">
                                <img src="<?= base_url('uploads/Home/Logo') . '/' . $data->foto_deposito ?>" width="100%" height="225" class="card-img" alt="...">
                                <div class="card-img-overlay card-heading">
                                    <h5 class="card-title position-absolute top-0 start-50 translate-middle-x">DEPOSITO</h5>
                                    <div class="card-img-detail">
                                        <p class="card-text position-absolute top-50 start-50 translate-middle">DEPOSTIO</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="<?= base_url("/Tabungan") ?>">
                            <div class="card card-layanan bg-dark text-dark border-0">
                                <img src="<?= base_url('uploads/Home/Logo') . '/' . $data->foto_tabungan ?>" width="100%" height="225" class="card-img" alt="...">
                                <div class="card-img-overlay card-heading">
                                    <h5 class="card-title position-absolute top-0 start-50 translate-middle-x">TABUNGAN</h5>
                                    <div class="card-img-detail">
                                        <p class="card-text position-absolute top-50 start-50 translate-middle">TABUNGAN</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<section class="berita-home">
    <div class="container-scroller">
        <div class="main-panel">
            <!-- partial -->

            <div class="content-wrapper">
                <div class="container berita">
                    <div class="row" data-aos="fade-up">
                        <div class="col-xl-8 grid-margin">
                            <?php
                            foreach ($NewesBerita as $data) :
                            ?>
                                <div class="card bg-dark text-white main-berita">
                                    <img src="<?= base_url('uploads/Home/Berita') . '/' . $data->foto ?>" height="450px" class="card-img" alt="...">
                                    <div class="card-img-overlay">
                                        <a href="<?= base_url("/LihatBerita/$data->id_berita") ?>">
                                            <h6 class="card-title fs-3"><?= $data->judul ?></h6>
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="col-xl-4 stretch-card grid-margin">
                            <div class="card  text-white bg-gradient-bpr">
                                <div class="card-body ">
                                    <h2>Latest news</h2>
                                    <a href="<?= base_url('PusatBerita') ?>" class="end-0">Berita Lainnya</a>
                                    <?php $no = 1;
                                    foreach ($NewsBerita as $data) :
                                        if ($no == 2) {
                                    ?>
                                            <div class="row g-0 pt-4">
                                                <div class="col-md-4">
                                                    <img src="<?= base_url('uploads/Home/Berita') . '/' . $data->foto ?>" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <a href="<?= base_url("/LihatBerita/$data->id_berita") ?>">
                                                            <h6 class="card-title title"><?= $data->judul ?></h6>
                                                        </a>
                                                        <p class="card-text"><small class=""><?= $data->tanggal ?></small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        } elseif ($no == 3) { ?>
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="<?= base_url('uploads/Home/Berita') . '/' . $data->foto ?>" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <a href="<?= base_url("/LihatBerita/$data->id_berita") ?>">
                                                            <h6 class="card-title title"><?= $data->judul ?></h6>
                                                        </a>
                                                        <p class="card-text"><small class=""><?= $data->tanggal ?></small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        } elseif ($no == 4) { ?>
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="<?= base_url('uploads/Home/Berita') . '/' . $data->foto ?>" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <a href="<?= base_url("/LihatBerita/$data->id_berita") ?>">
                                                            <h6 class="card-title title"><?= $data->judul ?></h6>
                                                        </a>
                                                        <p class="card-text"><small class=""><?= $data->tanggal ?></small></p>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php }
                                        $no++;
                                    endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?= $this->endSection(); ?>