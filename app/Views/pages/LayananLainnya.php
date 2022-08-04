<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<main>
    <div class="container my-4">
        <Section class="my-4">
            <h1>Layanan Lainnya</h1>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active img-fit">
                        <img src="images/fotoDeposito.png" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </Section>

        <section class="my-5">
            <h1>Pembayaran Resmi Online</h1>
            <?php
            foreach ($LayananLainPembayaran as $data) :
            ?>
                <?= $data->deskripsi; ?>
            <?php endforeach; ?>
        </section>

        <section class="my-5">
            <h1>Produk Yang Ditawarkan</h1>

            <div class="row row-cols-md-6 row-cols-sm-1 justify-content-center">
                <?php
                foreach ($LayananLainProduk as $data) :
                ?>
                    <a href="<?= base_url('uploads/LayananLain/ProdukLL') . '/' . $data->foto; ?>" target="_blank">
                        <div class="my-3 mx-2 ">
                            <div class="card col-auto">
                                <img class="card-img-top card-image img-fit" src="<?= base_url('uploads/LayananLain/ProdukLL') . '/' . $data->foto; ?>" alt="Card image cap">
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
            <div class="row row-cols-md-4 row-cols-sm-1 justify-content-center">

                <a href="<?= $IdentitasWebsite->whatsapp ?>">
                    <button type="button" class=" ">
                        <img src="images/LB.png" alt=""> Informasi Lebih Lanjut
                    </button>
                </a>

            </div>
        </section>
    </div>
</main>

<?= $this->endSection(); ?>