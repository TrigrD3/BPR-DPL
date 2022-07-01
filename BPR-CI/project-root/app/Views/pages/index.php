<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<!-- Container -->
<div class="flex-container">
    <div class="logo">
        <img src="<?= base_url('/assets/img/LogoBPR.png'); ?>" alt="">
        <p class="bpr">BPR</p>
        <p class="dpl">DANA PERMATA LESTARI</p>
    </div>



    <div class="left-option">
        <!-- Card Input Data -->
        <div class="card zoom" onclick="location.href='DaftarDebiturMaster.php'">
            <div class="card-bg-input">
                <img src="<?= base_url('/assets/img/InputDataLogo.png'); ?>" alt="">
            </div>
            <div class="title-option">
                Input Data
            </div>
            <span class="sub-title">Halaman ini digunakan untuk melakukan penginputan data debitur. Halaman ini dapat diakses oleh Direktur, Analis, dan Account Officer.</span><br>
        </div>

        <!-- Card Pengelolaan Akun -->
        <div class="card zoom" onclick="location.href='FormAkun.php'">
            <div class="card-bg-akun">
                <img src="<?= base_url('/assets/img/KelolaAkun.png'); ?>" alt="">
            </div>
            <div class="title-option">
                Pengelolaan Akun
            </div>
            <span class="sub-title">Halaman ini digunakan untuk mengelola akun AO. Halaman ini hanya dapat diakses oleh Direktur.</span><br>

        </div>
    </div>

    <div class="right-option">
        <!-- Card Cek Skor Kredit -->
        <div class="card zoom" onclick="location.href='UbahBobotSkorCharacter.php'">
            <div class="card-bg-skor">
                <img src="<?= base_url('/assets/img/CekSkorKredit.png'); ?>" alt="">
            </div>
            <div class="title-option">
                Cek Skor Kredit
            </div>
            <span class="sub-title">Halaman ini digunakan untuk melakukan pengecekan skor kredit. Halaman ini dapat diakses oleh Direktur dan Analis.</span><br>

        </div>

        <!-- Card Manajemen Skor Kredit -->
        <div class="card zoom" onclick="location.href='UbahBobotSkorCharacter.php'">
            <div class="card-bg-mngskor">
                <img src="<?= base_url('/assets/img/ManageSkor.png'); ?>" alt="">
            </div>
            <div class="title-option">
                Manajemen Skor Kredit
            </div>
            <span class="sub-title">Halaman ini digunakan untuk mengelola Skor Kredit. Halaman ini hanya dapat diakses oleh Direktur.</span><br>
        </div>
    </div>

    <?= $this->endSection(); ?>