<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<!-- Container -->
<div class="flex-container">
    <main class=" container-simulasi ">
        <div class="container border1 rounded">
            <form class="" id="simulasiDeposito">
                <h1 class="display-4 mb-3 text-center">Simulasi Deposito</h1>
                <div class="form-group">
                    <label for="jumlahDeposito">Jumlah Deposito <em>(rupiah)</em>: </label>
                    <br>
                    <span id="format-Rp"></span>
                    <input type="number" class="form-control" id="jumlahDeposito" name="jumlahDeposito" placeholder="Contoh: 150000000" value="">
                </div>
                <div class="form-group">
                    <label for="jangkaWaktu">Jangka Waktu <em>(bulan)</em>: </label>
                    <input type="number" class="form-control" id="jangkaWaktu" name="jangkaWaktu" placeholder="Contoh: 120" value="">
                </div>
                <div class="form-group">
                    <label for="bungaPertahun">Bunga<em>(%)</em>: </label>
                    <input type="number" class="form-control" id="bungaPertahun" name="bungaPertahun" placeholder="Contoh: 10.5" value="">
                </div>
                <div class="form-group">
                    <label for="pajak">Pajak<em>(%)</em>: </label>
                    <input type="number" class="form-control" id="pajak" name="pajak" placeholder="Contoh: 10.5" value="20">
                </div>
                <div class="form-group mb-3 mt-3">
                    <button id="btnHitung" type="submit" class="btn btn-primary mt-1">Hitung</button>
                    <button id="btnUlangi" type="submit" class="btn btn-secondary mt-1">Ulangi</button>
                </div>
            </form>
        </div>

    </main>

    <aside class="tableHasil">

        <h1 class="display-5 mb-3 text-center">Hasil Perhitungan</h1>

        <div class="row d-flex justify-content-center">
            <div class="col-4 border">Nominal Deposito</div>
            <div class="col-4 border">: <span id="resultNominalDeposito"></span></div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-4 border">Jangka Waktu (Bulan)</div>
            <div class="col-4 border">: <span id="resultJangkaWaktu"></span></div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-4 border">Bunga</div>
            <div class="col-4 border">: <span id="resultBungaPertahun"></span></div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-4 border">Pajak</div>
            <div class="col-4 border">: <span id="resultPajak"></span></div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-4 border">Bunga Perbulan</div>
            <div class="col-4 border">: <span id="resultBungaPerbulan"></span></div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-4 border">Total Akumulasi Bunga</div>
            <div class="col-4 border">: <span id="resultTotalAkumulasiBunga"></span></div>
        </div>
        <!-- <div class="row d-flex justify-content-center">
            <div class="col-4 border">Total Deposito Akhir</div>
            <div class="col-4 border">: <span id="resultTotalDepositoAkhir"></span></div>
        </div> -->
    </aside>
</div>
<script src="<?= base_url(); ?>/assets/js/numeral.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/jquery-3.2.1.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/calculateDeposito.js"></script>
<script src="<?= base_url(); ?>/assets/js/jquery.validate.min.js"></script>

<?= $this->endSection(); ?>