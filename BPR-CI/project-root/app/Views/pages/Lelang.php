<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container justify-content-center">
    <h1>LELANG</h1>
    <div class="row mt-3 mx-2 flex-column">
        <div class="col d-flex justify-content-center">
        <a href="https://goo.gl/maps/yt6wFnbT91EMDcFb7">
        <img  src="images/lelang.jpg" class="img-fluid img-lelang"  alt="">
        </a>
        </div>
    </div>


</div>
<script src="<?= base_url(); ?>/assets/js/lelang.js"></script>
<?= $this->endSection(); ?>