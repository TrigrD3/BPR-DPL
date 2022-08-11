<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<div class="container">

    <div id="carouselExampleIndicators" class="carousel slide pb-5 pt-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url('/assets/img/bank1.png'); ?>" class="d-block w-100" alt="...">
            </div>
        </div>

    </div>



    <div class="album py-5 pt-3">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">

                    <!-- <a href="<?= base_url("/Kredit") ?>">
                            <div class="card card-layanan bg-dark text-dark border-0">
                                <img src="<?= base_url('uploads/Home/Logo') . '/' . $data->foto_kredit ?>" width="100%" height="225" class="card-img" alt="...">
                                <div class="card-img-overlay card-heading">
                                    <h5 class="card-title position-absolute top-0 start-50 translate-middle-x">KREDIT</h5>
                                    <div class="card-img-detail">
                                        <p class="card-text position-absolute top-50 start-50 translate-middle">KREDIT</p>
                                    </div>
                                </div>
                            </div>
                        </a> -->

                    <a href="<?= base_url("/Kredit") ?>">
                        <div class="card col-auto card-layanan bg-dark text-light border-0">
                            <img src="<?= base_url('uploads/Home/Logo') . '/' . $data->foto_kredit ?>" width="100%" height="225" class="card-img" alt="...">
                            <div class="card-img-overlay card-heading">

                                <h5 class="card-title position-absolute top-0 start-50 translate-middle-x background-transparan hitam">
                                    <div class="mt-1">KREDIT</div>
                                </h5>

                                <div class="card-img-detail deskripsi">
                                    <p class="card-text position-absolute top-50 start-50 translate-middle ">KREDIT</p>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col">
                    <!-- <a href="<?= base_url("/Deposito") ?>">
                            <div class="card card-layanan bg-dark text-dark border-0">
                                <img src="<?= base_url('uploads/Home/Logo') . '/' . $data->foto_deposito ?>" width="100%" height="225" class="card-img" alt="...">
                                <div class="card-img-overlay card-heading">
                                    <h5 class="card-title position-absolute top-0 start-50 translate-middle-x">DEPOSITO</h5>
                                    <div class="card-img-detail">
                                        <p class="card-text position-absolute top-50 start-50 translate-middle">DEPOSTIO</p>
                                    </div>
                                </div>
                            </div>
                        </a> -->

                    <a href="<?= base_url("/Deposito") ?>">
                        <div class="card col-auto card-layanan bg-dark text-light border-0">
                            <img src="<?= base_url('uploads/Home/Logo') . '/' . $data->foto_deposito ?>" width="100%" height="225" class="card-img" alt="...">
                            <div class="card-img-overlay card-heading">

                                <h5 class="card-title position-absolute top-0 start-50 translate-middle-x background-transparan hitam">
                                    <div class="mt-1">DEPOSITO</div>
                                </h5>

                                <div class="card-img-detail deskripsi">
                                    <p class="card-text position-absolute top-50 start-50 translate-middle ">DEPOSITO</p>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="col">

                    <!-- <a href="<?= base_url("/Tabungan") ?>">
                            <div class="card card-layanan bg-dark text-dark border-0">
                                <img src="<?= base_url('uploads/Home/Logo') . '/' . $data->foto_tabungan ?>" width="100%" height="225" class="card-img" alt="...">
                                <div class="card-img-overlay card-heading">
                                    <h5 class="card-title position-absolute top-0 start-50 translate-middle-x">TABUNGAN</h5>
                                    <div class="card-img-detail">
                                        <p class="card-text position-absolute top-50 start-50 translate-middle">TABUNGAN</p>
                                    </div>
                                </div>
                            </div>
                        </a> -->

                    <a href="<?= base_url("/Tabungan") ?>">
                        <div class="card col-auto card-layanan bg-dark text-light border-0">
                            <img src="<?= base_url('uploads/Home/Logo') . '/' . $data->foto_tabungan ?>" width="100%" height="225" class="card-img" alt="...">
                            <div class="card-img-overlay card-heading">

                                <h5 class="card-title position-absolute top-0 start-50 translate-middle-x background-transparan hitam">
                                    <div class="mt-1">TABUNGAN</div>
                                </h5>

                                <div class="card-img-detail deskripsi">
                                    <p class="card-text position-absolute top-50 start-50 translate-middle ">TABUNGAN</p>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
            </div>

        </div>
    </div>

</div>



<?= $this->endSection(); ?>