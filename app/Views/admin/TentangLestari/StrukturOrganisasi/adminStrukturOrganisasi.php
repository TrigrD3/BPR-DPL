<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<section class="content">
    <div class="card">
        <?= session()->getFlashdata('message'); ?>
        <div class="card-header">
            <h3 class="card-title">Struktur Organisasi</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>

            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 50%">
                            Foto
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($TentangLestariStrukturOrganisasi as $data) :
                    ?>
                        <tr>
                            <td>
                                <a>
                                    <img src="<?= base_url('uploads/TentangLestari/StrukturOrganisasi') . '/' . $data->foto ?>" width="50%" height="50%" alt="foto-bank" class="img-thumbnail">
                                </a>
                                <br />
                            </td>

                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="<?= base_url("/EditStrukturOrganisasi/$data->id_struktur_organisasi") ?>">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">foto Halaman Utama</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>

            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <!-- <tr>
                        <th style="width: 1%">
                            No
                        </th>
                        <th style="width: 30%">
                            Foto
                        </th>
                        <th style="width: 20%">
                        </th>
                    </tr> -->
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($TentangLestariDepanStrukturOrganisasi as $data) :
                    ?>
                        <tr>
                            <td>
                                <img src="<?= base_url('uploads/TentangLestari/StrukturOrganisasi/depan') . '/' . $data->foto; ?>" width="50%" height="50%" alt="foto" class="img-thumbnail">

                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="<?= base_url("/EditDepanStrukturOrganisasi/$data->id_depan_struktur_organisasi") ?>">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                            </td>
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card-body -->
    </div>
</section>
<?= $this->endSection(''); ?>