<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<main>
    <div class="container justify-content-center">
        <h1>LELANG</h1>
        <div class="row mt-3 mx-2 flex-column ">
            <div class="col d-flex justify-content-center">
                <img src="<?= base_url('uploads/Header/Lelang') . '/' . $RowLelang->foto ?>" class="img-fluid pro-img img-lelang" alt="">
            </div>
        </div>

        <div class="row">
            <iframe class="gmap" src="<?= $RowLelang->google_maps; ?>" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- start list lelang -->
        <div class="row row-cols-md-6 row-cols-sm-1 justify-content-center thumb-img ">
            <?php
            foreach ($HeaderLelang as $data) :
            ?>
                <a href="#">
                    <div class="my-3 mx-2 ">
                        <div class="card col-auto" onclick="changeContent(this)">
                            <img class="card-img-top card-image " src="<?= base_url('uploads/Header/Lelang') . '/' . $data->foto ?>" alt="Card image cap">
                            <iframe src="<?= $data->google_maps; ?>" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
        <!--end list lelang  -->
    </div>
</main>
<script src="<?= base_url(); ?>/assets/js/lelang.js"></script>

<?= $this->endSection(); ?>