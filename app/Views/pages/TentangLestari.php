<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<div class="container">



    <div class="album py-5 pt-3">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <?php $no = 1;
                    foreach ($TentangLestariDepanSejarah as $data) :
                    ?>
                        <a href="<?= base_url("/Sejarah") ?>">
                            <div class="card col-auto card-layanan bg-dark text-light border-0">
                                <img src="<?= base_url('uploads/TentangLestari/Sejarah/depan') . '/' . $data->foto; ?>" width="100%" height="225" class="card-img" alt="...">
                                <div class="card-img-overlay card-heading">

                                    <h5 class="card-title position-absolute top-0 start-50 translate-middle-x background-transparan hitam">
                                        <div class="mt-1">Sejarah</div>
                                    </h5>

                                    <div class="card-img-detail deskripsi">
                                        <p class="card-text position-absolute top-50 start-50 translate-middle ">SEJARAH</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php $no++; ?>
                    <?php endforeach; ?>
                </div>

                <div class="col">
                    <?php $no = 1;
                    foreach ($TentangLestariDepanProfil as $data) :
                    ?>

                        <a href="<?= base_url("/Profil") ?>">
                            <div class="card col-auto card-layanan bg-dark text-light border-0">
                                <img src="<?= base_url('uploads/TentangLestari/Profil/depan') . '/' . $data->foto; ?>" width="100%" height="225" class="card-img" alt="...">
                                <div class="card-img-overlay card-heading">

                                    <h5 class="card-title position-absolute top-0 start-50 translate-middle-x background-transparan hitam">
                                        <div class="mt-1">Profil</div>
                                    </h5>

                                    <div class="card-img-detail deskripsi">
                                        <p class="card-text position-absolute top-50 start-50 translate-middle ">PROFIL</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php $no++; ?>
                    <?php endforeach; ?>
                </div>
                <div class="col">

                    <?php $no = 1;
                    foreach ($TentangLestariDepanVisiMisi as $data) :
                    ?>
                        <a href="<?= base_url("/VisiMisi") ?>">
                            <div class="card col-auto card-layanan bg-dark text-light border-0">
                                <img src="<?= base_url('uploads/TentangLestari/VisiMisi/depan') . '/' . $data->foto; ?>" width="100%" height="225" class="card-img" alt="...">
                                <div class="card-img-overlay card-heading">

                                    <h5 class="card-title position-absolute top-0 start-50 translate-middle-x background-transparan hitam">
                                        <div class="mt-1">Visi dan Misi</div>
                                    </h5>

                                    <div class="card-img-detail deskripsi">
                                        <p class="card-text position-absolute top-50 start-50 translate-middle ">VISI dan MISI</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php $no++; ?>
                    <?php endforeach; ?>
                </div>
                <div class="col">

                    <?php $no = 1;
                    foreach ($TentangLestariDepanStrukturOrganisasi as $data) :
                    ?>
                        <a href="<?= base_url("/StrukturOrganisasi") ?>">
                            <div class="card col-auto card-layanan bg-dark text-light border-0">
                                <img src="<?= base_url('uploads/TentangLestari/StrukturOrganisasi/depan') . '/' . $data->foto; ?>" width="100%" height="225" class="card-img" alt="...">
                                <div class="card-img-overlay card-heading">

                                    <h5 class="card-title position-absolute top-0 start-50 translate-middle-x background-transparan hitam">
                                        <div class="mt-1">Struktur Organisasi</div>
                                    </h5>

                                    <div class="card-img-detail deskripsi">
                                        <p class="card-text position-absolute top-50 start-50 translate-middle ">STRUKTUR ORGANISASI</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php $no++; ?>
                    <?php endforeach; ?>
                </div>
                <div class="col">

                    <?php $no = 1;
                    foreach ($TentangLestariDepanAlamat as $data) :
                    ?>
                        <a href="<?= base_url("/AlamatKantor") ?>">
                            <div class="card col-auto card-layanan bg-dark text-light border-0">
                                <img src="<?= base_url('uploads/TentangLestari/Alamat/depan') . '/' . $data->foto; ?>" width="100%" height="225" class="card-img" alt="...">
                                <div class="card-img-overlay card-heading">

                                    <h5 class="card-title position-absolute top-0 start-50 translate-middle-x background-transparan hitam">
                                        <div class="mt-1">Alamat</div>
                                    </h5>

                                    <div class="card-img-detail deskripsi">
                                        <p class="card-text position-absolute top-50 start-50 translate-middle ">ALAMAT</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php $no++; ?>
                    <?php endforeach; ?>
                </div>
                <div class="col">
                    <?php $no = 1;
                    foreach ($TentangLestariDepanBerita as $data) :
                    ?>
                        <a href="<?= base_url("/PusatBerita") ?>">
                            <div class="card col-auto card-layanan bg-dark text-light border-0">
                                <img src="<?= base_url('uploads/TentangLestari/Berita/depan') . '/' . $data->foto; ?>" width="100%" height="225" class="card-img" alt="...">
                                <div class="card-img-overlay card-heading">

                                    <h5 class="card-title position-absolute top-0 start-50 translate-middle-x background-transparan hitam">
                                        <div class="mt-1">Berita Lestari</div>
                                    </h5>

                                    <div class="card-img-detail deskripsi">
                                        <p class="card-text position-absolute top-50 start-50 translate-middle ">BERITA LESTARI</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php $no++; ?>
                    <?php endforeach; ?>

                </div>

            </div>


        </div>
    </div>

</div>



<?= $this->endSection(); ?>