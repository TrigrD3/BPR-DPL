<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<main>
    <div class="container justify-content-center">
        <h1>LELANG</h1>
        <div class="row mt-3 mx-2 flex-column ">
            <div class="col d-flex justify-content-center">
                <img src="images/lelang.jpg" class="img-fluid pro-img img-lelang" alt="">
            </div>
        </div>

        <div class="row">
        <iframe class="gmap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.6057737531223!2d114.8363639277955!3d-3.4456473894704502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de68111c0bd08fd%3A0xb244e6b840343d9f!2sFaculty%20of%20Engineering%2C%20University%20of%20Lambung%20Mangkurat%20(ULM)!5e0!3m2!1sen!2sid!4v1658045853495!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <!-- start list lelang -->
        <div class="row row-cols-md-6 row-cols-sm-1 justify-content-center thumb-img ">
            <a href="#">
                <div class="my-3 mx-2 ">
                    <div class="card col-auto" onclick="changeContent(this)">
                        <img class="card-img-top card-image " src="images/lelang.jpg" alt="Card image cap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15479.299574294348!2d114.58312664814451!3d-3.2958171104253196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de423e6f3e479ed%3A0x40aa0f1e871933bf!2sAghan%20Starbuck!5e0!3m2!1sen!2sid!4v1658046335969!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </a>

            <a href="#">
                <div class="my-3 mx-2 ">
                    <div class="card col-auto" onclick="changeContent(this)">
                        <img id="list" class="card-img-top card-image " src="images/lelang2.jpg" alt="Card image cap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15932.405084901084!2d114.57403179908128!3d-3.325150299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de423f8d2f1da2d%3A0x1462f5ade8e3f1d6!2sStarbucks%20Lambung%20Mangkurat!5e0!3m2!1sen!2sid!4v1658046358782!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </a>

            <a href="#">
                <div class="my-3 mx-2 ">
                    <div class="card col-auto" onclick="changeContent(this)">
                        <img id="list" class="card-img-top card-image " src="images/lelang3.jpg" alt="Card image cap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13678651.164661724!2d128.15480138304676!3d33.174372004774604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34674e0fd77f192f%3A0xf54275d47c665244!2sJapan!5e0!3m2!1sen!2sid!4v1658047644241!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </a>

            <a href="#">
                <div class="my-3 mx-2 ">
                    <div class="card col-auto" onclick="changeContent(this)">
                        <img id="list" class="card-img-top card-image " src="images/lelang4.jpg" alt="Card image cap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30567386.369212072!2d93.78466081515477!3d-20.73577574386338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2b2bfd076787c5df%3A0x538267a1955b1352!2sAustralia!5e0!3m2!1sen!2sid!4v1658048022632!5m2!1sen!2sid" width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </a>

            <a href="#">
                <div class="my-3 mx-2 ">
                    <div class="card col-auto" onclick="changeContent(this)">
                        <img id="list" class="card-img-top card-image " src="images/lelang4.jpg" alt="Card image cap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30567386.369212072!2d93.78466081515477!3d-20.73577574386338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da11238a8b9375%3A0x887869cf52abf5c4!2sSingapore!5e0!3m2!1sen!2sid!4v1658048048259!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </a>

            <a href="#">
                <div class="my-3 mx-2 ">
                    <div class="card col-auto" onclick="changeContent(this)">
                        <img id="list" class="card-img-top card-image " src="images/lelang4.jpg" alt="Card image cap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127441.55122572121!2d114.65669635917851!3d-3.459310922348856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de686ad57aa9fdf%3A0xd1f27863d3f52ead!2sBanjarbaru%2C%20Banjarbaru%20City%2C%20South%20Kalimantan!5e0!3m2!1sen!2sid!4v1658048080243!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </a>

            <a href="#">
                <div class="my-3 mx-2 ">
                    <div class="card col-auto" onclick="changeContent(this)">
                        <img id="list" class="card-img-top card-image " src="images/lelang4.jpg" alt="Card image cap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126920.24416424653!2d106.6859898413256!3d-6.229727107184613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e945e34b9d%3A0x5371bf0fdad786a2!2sJakarta!5e0!3m2!1sen!2sid!4v1658048097699!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </a>

            <a href="#">
                <div class="my-3 mx-2 ">
                    <div class="card col-auto" onclick="changeContent(this)">
                        <img id="list" class="card-img-top card-image " src="images/lelang4.jpg" alt="Card image cap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.56785588917!2d107.49962941837487!3d-6.903427998711782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C%20Bandung%20City%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1658048111208!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </a>
        </div>
         <!--end list lelang  -->
    </div>
</main>
<script src="<?= base_url(); ?>/assets/js/lelang.js"></script>

<?= $this->endSection(); ?>