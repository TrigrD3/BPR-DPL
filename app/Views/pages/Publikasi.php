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
            <?php foreach ($tahun as $data) : ?>
                <li><a class="dropdown-item" href="<?= base_url('Publikasi') . '/' . $data->tahun ?>"><?= $data->tahun ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <?php
    if (!empty($file)) {
    ?>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center pt-5 pb-5"></div>
        <div class="container p-5 pt-5 mw-48" style="background-color: #EFF8FC;">
            <table class="table table-borderless">
                <tr class="text-color">
                    <td rowspan="<?= $jumlah[0]->jumlah + 1; ?>">Report:</td>
                    <td></td>
                </tr>
                <?php foreach ($file as $data) : ?>
                    <tr class="text-color">
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