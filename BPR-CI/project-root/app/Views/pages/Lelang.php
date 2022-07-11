<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<main>


<div class="container justify-content-center">
    <h1 >LELANG</h1>
    <div class="row mt-3 mx-2 flex-column ">
        <div class="col d-flex justify-content-center" >
        <img  src="images/lelang.jpg" class="img-fluid pro-img img-lelang"   alt="">
        </div>
    </div>


    <div class="row row-cols-md-6 row-cols-sm-1 justify-content-center thumb-img">
        <a href="#">
        <div class="my-3 mx-2 ">
            <div class="card col-auto" onclick="changeImage(this)">
                <img class="card-img-top card-image " src="images/lelang.jpg" alt="Card image cap">
            </div>
        </div>
        </a>

        <a href="#">
        <div class="my-3 mx-2 ">
            <div class="card col-auto" onclick="changeImage(this)">
                <img id="list" class="card-img-top card-image " src="images/lelang2.jpg"  alt="Card image cap">
            </div>
        </div>
        </a>

        <a href="#">
        <div class="my-3 mx-2 ">
            <div class="card col-auto" onclick="changeImage(this)">
                <img id="list" class="card-img-top card-image " src="images/lelang3.jpg"  alt="Card image cap">
            </div>
        </div>
        </a>

        <a href="#">
        <div class="my-3 mx-2 ">
            <div class="card col-auto" onclick="changeImage(this)">
                <img id="list" class="card-img-top card-image " src="images/lelang4.jpg"  alt="Card image cap">
            </div>
        </div>
        </a>

        <a href="#">
        <div class="my-3 mx-2 ">
            <div class="card col-auto" onclick="changeImage(this)">
                <img id="list" class="card-img-top card-image " src="images/lelang4.jpg"  alt="Card image cap">
            </div>
        </div>  
        </a>

        <a href="#">
        <div class="my-3 mx-2 ">
            <div class="card col-auto" onclick="changeImage(this)">
                <img id="list" class="card-img-top card-image " src="images/lelang4.jpg"  alt="Card image cap">
            </div>
        </div>
        </a>

        <a href="#">
        <div class="my-3 mx-2 ">
            <div class="card col-auto" onclick="changeImage(this)">
                <img id="list" class="card-img-top card-image " src="images/lelang4.jpg"  alt="Card image cap">
            </div>
        </div>  
        </a>
        
        <a href="#">
        <div class="my-3 mx-2 ">
            <div class="card col-auto" onclick="changeImage(this)">
                <img id="list" class="card-img-top card-image " src="images/lelang4.jpg"  alt="Card image cap">
            </div>
        </div>
        </a>
    </div>

</div>
</main>
<script src="<?= base_url(); ?>/assets/js/lelang.js"></script>
<?= $this->endSection(); ?>