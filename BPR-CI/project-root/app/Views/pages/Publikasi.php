<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold">LAPORAN PUBLIKASI</h1>
    <div class="col-lg-6 mx-auto text-center">
        <label for="country" class="form-label">Pilih Tahun Laporan Publikasi</label>
        <button type="button" class="form-select col-md-7" data-bs-toggle="dropdown" aria-expanded="false">
            Pilih Tahun
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width: 48%;">
            <li><a class="dropdown-item" href="#">Menu item</a></li>
            <li><a class="dropdown-item" href="#">Menu item</a></li>
            <li><a class="dropdown-item" href="#">Menu item</a></li>
        </ul>
    </div>

    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center pt-5 pb-5">
        <button type="button" class="btn btn-primary btn-lg px-4 gap-3" style="background: linear-gradient(253.61deg, #1D80F0 0%, #0D509D 100%);">Cari</button>
    </div>

    <div class="container p-5 pt-5 mw-48" style="background-color: #EFF8FC;">
        <table class="table table-borderless">
            <tr class="text-color">
                <td rowspan="5">Report:</td>
                <td>Publikasi November dan Desember 2022.pdf</td>
            </tr>
            <tr class="text-color">
                <td>Publikasi November dan Desember 2022.pdf</td>
            </tr>
            <tr class="text-color">
                <td>Publikasi November dan Desember 2022.pdf</td>
            </tr>
            <tr class="text-color">
                <td>Publikasi November dan Desember 2022.pdf</td>
            </tr>
            <tr class="text-color">
                <td>Publikasi November dan Desember 2022.pdf</td>
            </tr>
        </table>
    </div>
</div>
</div>
<?= $this->endSection(); ?>