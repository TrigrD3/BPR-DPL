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

    <div class="row ">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1150.5047508739021!2d114.58847762341026!3d-3.2967863808426325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de423a703d7d841%3A0xe9f668965e85df96!2sFaculty%20of%20Engineering%2C%20Lambung%20Mangkurat%20University!5e0!3m2!1sen!2sid!4v1657505220443!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>


    <div class="row row-cols-md-6 row-cols-sm-1 justify-content-center thumb-img">
        <a href="#">
        <div class="my-3 mx-2 ">
            <div class="card col-auto" onclick="changeImage(this)">
                <img class="card-img-top card-image " src="images/lelang.jpg" alt="Card image cap">
                <iframe class="gmap-main" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1150.5046721460017!2d114.5874580860682!3d-3.296854443761639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de423a6927e129d%3A0x45d0bb8fde401923!2sOpen%20Space%20Universitas%20Lambung%20Mangkurat!5e0!3m2!1sen!2sid!4v1657506677404!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

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