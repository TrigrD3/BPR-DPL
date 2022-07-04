<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<!-- Container -->

        <main class=" container-simulasi ">
            <div class="container border1 rounded">
            <form class="" id="simulasiKredit">
                <h1 class="display-4 mb-3 text-center">Simulasi Kredit</h1>
                <div class="form-group">
                    <label for="jumlahKredit">Jumlah Kredit <em>(rupiah)</em>: </label>
                    <input type="number" class="form-control" id="jumlahKredit" name="jumlahKredit"
                        placeholder="Contoh: 150000000" value="5000000">
                </div>
                <div class="form-group">
                    <label for="jangkaWaktu">Jangka Waktu <em>(bulan)</em>: </label>
                    <input type="number" class="form-control" id="jangkaWaktu" name="jangkaWaktu"
                        placeholder="Contoh: 120" value="12">
                </div>
                <div class="form-group">
                    <label for="bungaPertahun">Bunga Pertahun <em>(%)</em>: </label>
                    <input type="number" class="form-control" id="bungaPertahun" name="bungaPertahun"
                        placeholder="Contoh: 10.5" value="1.5">
                </div>
                <div class="form-group1 ">
                    <div class="form-check-inline">
                        <label class="form-check-label" for="Flat">Flat</label>
                        <input type="radio" class="form-check-input" value="1" name="metode" id="Flat" checked>
                        
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="Efektif">Efektif</label>
                        <input type="radio" class="form-check-input" value="2" name="metode" id="Efektif">
                        
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="Anuitas">Anuitas</label>
                        <input type="radio" class="form-check-input" value="3" name="metode" id="Anuitas">
                        
                    </div>
                </div>
                <div class="form-group mb-3 mt-3">
                    <button id="btnHitung" type="submit" class="btn btn-primary">Hitung</button>
                    <button id="btnUlangi" type="submit" class="btn btn-secondary">Ulangi</button>
                </div>
            </form>
            </div>
            
        </main>
        <aside>
        
            <h1 class="display-5 mb-3 text-center">Pinjaman Anda</h1>
            
            <div class="row d-flex justify-content-center">
                <div class="col-4">Total Pinjaman</div>
                <div class="col-4">: <span id="resultTotalPinjaman"></span></div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-4">Lama Pinjaman</div>
                <div class="col-4">: <span id="resultLamaPinjaman"></span></div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-4">Bunga Pertahun</div>
                <div class="col-4">: <span id="resultBungaPertahun"></span></div>
            </div>
            <div class="flatOnly">
                <div class="row d-flex justify-content-center">
                    <div class="col-4">Angsuran Pokok Perbulan</div>
                    <div class="col-4">: <span id="resultAngPokokBulan"></span></div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-4">Angsuran Bunga Perbulan</div>
                    <div class="col-4">: <span id="resultAngBungaBulan"></span></div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-4">Total angsuran per bulan</div>
                    <div class="col-4">: <span id="resultAngBulan"></span></div>
                </div>
            
            </div>
            <div class="row d-flex justify-content-center mt-3">
                <table id="tableAngsuran" class="col-8 table-bordered">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Bulan</th>
                        <th scope="col">Pokok</th>
                        <th scope="col">Bunga</th>
                        <th scope="col">Angsuran</th>
                        <th scope="col">Sisa Pinjaman</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </aside>

<script src="<?= base_url(); ?>/assets/js/numeral.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/jquery-3.2.1.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/calculate.js"></script>
<script src="<?= base_url(); ?>/assets/js/jquery.validate.min.js"></script>

<?= $this->endSection(); ?>