<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<!-- Default box -->
<div class="card">
    <?= session()->getFlashdata('message'); ?>
    <div class="card-header">
        <h3 class="card-title">Sejarah</h3>

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
                    <th style="width: 1%">
                        No
                    </th>
                    <th style="width: 20%">
                        Keterangan
                    </th>
                    <th style="width: 20%">
                        Tanggal
                    </th>
                    <th>
                        Deskripsi
                    </th>
                    <th style="width: 20%">
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($TentangLestariSejarah as $data) :
                ?>
                    <tr>
                        <td>
                            <?= $no; ?>
                        </td>
                        <td>
                            <?= $data->judul; ?>
                        </td>
                        <td>
                            <?= $data->tanggal; ?>
                        </td>
                        <td class="project_progress deskripsi">
                            <aside><?= $data->deskripsi; ?></aside>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="<?= base_url("/EditSejarah/$data->id_sejarah") ?>">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="<?= base_url("/HapusSejarah/$data->id_sejarah") ?>">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
                    </tr>
                    <?php $no++; ?>
                <?php endforeach; ?>
            </tbody>
            <a class="btn ml-2 mt-2 btn-success btn-sm" href="TambahSejarah">
                <i class="fas fa-plus-circle"></i>
                Tambah
            </a>
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
                foreach ($TentangLestariDepanSejarah as $data) :
                ?>
                    <tr>
                        <td>
                            <img src="<?= base_url('uploads/TentangLestari/Sejarah/depan') . '/' . $data->foto; ?>" width="50%" height="50%" alt="foto" class="img-thumbnail">

                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="<?= base_url("/EditDepanSejarah/$data->id_depan_sejarah") ?>">
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
<!-- /.card -->
<?= $this->endSection(''); ?>