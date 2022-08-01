<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<div class="container">

    <div id="carouselExampleIndicators" class="carousel slide pb-5 pt-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <?php $no = 0;
            foreach ($HomeIklan as $data) :
                if ($no == 0) {
            ?>
                    <div class="carousel-item active">
                        <img src="<?= base_url('uploads/Home/Iklan') . '/' . $data->foto ?>" class="d-block w-100" alt="...">
                    </div>
                <?php } else { ?>
                    <div class="carousel-item">
                        <img src="<?= base_url('uploads/Home/Iklan') . '/' . $data->foto ?>" class="d-block w-100" alt="...">
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

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <a href="<?= base_url("/Kredit") ?>">
                        <div class="card shadow-sm">

                            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="<?= base_url('uploads/Home/Berita') ?>" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Kredit</title>

                            </img>

                            <div class="card-body">
                                <p class="card-text deskripsi">Kredit</p>
                                <div class="d-flex justify-content-between align-items-center">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col">
                    <a href="<?= base_url("/Deposito") ?>">
                        <div class="card shadow-sm">

                            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="<?= base_url('uploads/Home/Berita') ?>" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Deposito</title>

                            </img>

                            <div class="card-body">
                                <p class="card-text deskripsi">Deposito</p>
                                <div class="d-flex justify-content-between align-items-center">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="<?= base_url("/Tabungan") ?>">
                        <div class="card shadow-sm">

                            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="<?= base_url('uploads/Home/Berita') ?>" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Tabungan</title>

                            </img>

                            <div class="card-body">
                                <p class="card-text deskripsi">Tabungan</p>
                                <div class="d-flex justify-content-between align-items-center">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-scroller">
        <div class="main-panel">
            <!-- partial -->

            <div class="content-wrapper">
                <div class="container">
                    <div class="row" data-aos="fade-up">
                        <div class="col-xl-8 stretch-card grid-margin">
                            <?php
                            foreach ($NewesBerita as $data) :
                            ?>
                                <div class="position-relative">
                                    <img src="<?= base_url('uploads/Home/Berita') . '/' . $data->foto ?>" alt="banner" class="img-fluid" />
                                    <div class="banner-content">
                                        <div class="badge badge-danger fs-12 font-weight-bold mb-3">

                                        </div>
                                        <h1 class="mb-0"><?= $data->judul ?></h1>
                                        <h1 class="mb-2">
                                            <!-- <= $data->isi_berita ?> -->
                                        </h1>
                                        <div class="fs-12">

                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="col-xl-4 stretch-card grid-margin">
                            <div class="card  text-white" style="background-image: linear-gradient(to right, #0d509d, #1769c6); color: white;">
                                <div class="card-body">
                                    <h2>Latest news</h2>
                                    <a href="<?= base_url('PusatBerita') ?>">Lainnya</a>
                                    <?php $no = 1;
                                    foreach ($NewsBerita as $data) :
                                        if ($no == 2) {
                                    ?>
                                            <div class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between">
                                                <div class="pr-3">
                                                    <h5><?= $data->judul ?></h5>
                                                    <div class="fs-12">
                                                    </div>
                                                </div>
                                                <div class="rotate-img">
                                                    <img src="<?= base_url('uploads/Home/Berita') . '/' . $data->foto ?>" alt="thumb" class="img-fluid img-lg" />
                                                </div>
                                            </div>
                                        <?php
                                        } elseif ($no == 3) { ?>
                                            <div class="d-flex border-bottom-blue pb-4 pt-4 align-items-center justify-content-between">
                                                <div class="pr-3">
                                                    <h5><?= $data->judul ?></h5>
                                                    <div class="fs-12">
                                                    </div>
                                                </div>
                                                <div class="rotate-img">
                                                    <img src="<?= base_url('uploads/Home/Berita') . '/' . $data->foto ?>" alt="thumb" class="img-fluid img-lg" />
                                                </div>
                                            </div>
                                        <?php
                                        } elseif ($no == 4) { ?>
                                            <div class="d-flex pt-4 align-items-center justify-content-between">
                                                <div class="pr-3">
                                                    <h5><?= $data->judul ?></h5>
                                                    <div class="fs-12">
                                                    </div>
                                                </div>
                                                <div class="rotate-img">
                                                    <img src="<?= base_url('uploads/Home/Berita') . '/' . $data->foto ?>" alt="thumb" class="img-fluid img-lg" />
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
</div>



<?= $this->endSection(); ?>