<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container justify-content-center">
    <h1>LELANG</h1>
    <div class="row mt-3 mx-2 flex-column ">
        <div class="col d-flex justify-content-center">
        <img  src="images/lelang.jpg" class="img-fluid pro-img img-lelang"  alt="">
        </div>
    </div>

    <div class="row row-cols-md-6 row-cols-sm-1 justify-content-center thumb-img">
    <div class="my-3 mx-2 produk-lelang">
        <div class="card col-auto" onclick="changeImage(this)">
            <img class="card-img-top card-image " src="images/lelang.jpg" height="125" alt="Card image cap">
        </div>
    </div>
    
    <div class="my-3 mx-2 produk-lelang">
        <div class="card col-auto" onclick="changeImage(this)">
            <img id="list" class="card-img-top card-image " src="images/lelang2.jpg" height="125" alt="Card image cap">
        </div>
    </div>

    <div class="my-3 mx-2 produk-lelang">
        <div class="card col-auto" onclick="changeImage(this)">
            <img id="list" class="card-img-top card-image " src="images/lelang3.jpg" height="125" alt="Card image cap">
        </div>
    </div>

    <div class="my-3 mx-2 produk-lelang">
        <div class="card col-auto" onclick="changeImage(this)">
            <img id="list" class="card-img-top card-image " src="images/lelang4.jpg" height="125" alt="Card image cap">
        </div>
    </div>

    <div class="my-3 mx-2 produk-lelang">
        <div class="card col-auto" onclick="changeImage(this)">
            <img id="list" class="card-img-top card-image " src="images/lelang4.jpg" height="125" alt="Card image cap">
        </div>
    </div>

    <div class="my-3 mx-2 produk-lelang">
        <div class="card col-auto" onclick="changeImage(this)">
            <img id="list" class="card-img-top card-image " src="images/lelang4.jpg" height="125" alt="Card image cap">
        </div>
    </div>

    <div class="my-3 mx-2 produk-lelang">
        <div class="card col-auto" onclick="changeImage(this)">
            <img id="list" class="card-img-top card-image " src="images/lelang4.jpg" height="125" alt="Card image cap">
        </div>
    </div>

    <div class="my-3 mx-2 produk-lelang">
        <div class="card col-auto" onclick="changeImage(this)">
            <img id="list" class="card-img-top card-image " src="images/lelang4.jpg" height="125" alt="Card image cap">
        </div>
    </div>
    </div>

</div>
<script src="<?= base_url(); ?>/assets/js/lelang.js"></script>
<?= $this->endSection(); ?>