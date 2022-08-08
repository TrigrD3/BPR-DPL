<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="px-4 py-5 my-1 text-center">
    <h1 class="display-5 fw-bold judul">LAPORAN PUBLIKASI</h1>
    <div class="col-lg-6 mx-auto text-center">
        <label for="country" class="form-label">Pilih Tahun Laporan Publikasi</label>
        <button type="button" class="form-select col-md-7" data-bs-toggle="dropdown" aria-expanded="false">
            Pilih Tahun
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width: 48%;">
            <?php foreach ($tahun as $data) : ?>
                <li><a class="dropdown-item" href="<?= base_url('Publikasi') . '/' . $data->tahun ?>"><?= $data->tahun ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <?php
    if (!empty($file)) {
    ?>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center pt-2 pb-5"></div>
        <div class="container p-5 pt-2 mw-48" style="background-color: #EFF8FC;">
            <table class="table table-borderless report d-flex justify-content-center">
                <tr class="text-color trawal">
                    <!-- <td rowspan="<?= $jumlah[0]->jumlah + 1; ?>"></td> -->
                    <td>
                        <h2>REPORT</h2>
                    </td>
                </tr>
                <?php foreach ($file as $data) : ?>
                    <tr class="text-color trawal">
                        <td>Triwulan 1 :</td>
                    </tr>
                    <tr class="text-color text-left">
                        <td>
                            <a href="<?= base_url('uploads/Header/Publikasi') . '/' . $data->file ?>" target="_blank"><?= $data->nama ?> - <?= $data->tahun ?></a>
                        </td>
                    </tr>
                    <tr class="text-color trawal">
                        <td>Triwulan 2 :</td>
                    </tr>
                    <tr class="text-color text-left">
                        <td>
                            <a href="<?= base_url('uploads/Header/Publikasi') . '/' . $data->file ?>" target="_blank"><?= $data->nama ?> - <?= $data->tahun ?></a>
                        </td>
                    </tr>
                    <tr class="text-color trawal">
                        <td>Triwulan 3 :</td>
                    </tr>
                    <tr class="text-color text-left">
                        <td>
                            <a href="<?= base_url('uploads/Header/Publikasi') . '/' . $data->file ?>" target="_blank"><?= $data->nama ?> - <?= $data->tahun ?></a>
                        </td>
                    </tr>
                    <tr class="text-color trawal">
                        <td>Triwulan 4 :</td>
                    </tr>

                    <tr class="text-color text-left">
                        <td>
                            <a href="<?= base_url('uploads/Header/Publikasi') . '/' . $data->file ?>" target="_blank"><?= $data->nama ?> - <?= $data->tahun ?></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    <?php
    } ?>
</div>
</div>
<?= $this->endSection(); ?>