<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lowongan Kerja</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 20%">
                            Foto
                        </th>
                        <th style="width: 20%">
                            Judul
                        </th>
                        <th style="width: 40%">
                            Deskripsi
                        </th>
                        <th>
                            Link
                        </th>
                        <th style="width: 20%">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($HeaderLoker as $data) :
                    ?>
                        <tr>
                            <td>
                                <?= $data->foto; ?>
                            </td>
                            <td>
                                <a>
                                    <?= $data->judul; ?>
                                </a>
                                <br />
                            </td>
                            <td>
                                <?= $data->deskripsi; ?>
                            </td>
                            <td class="project_progress">
                                <?= $data->link; ?>
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="<?= base_url("/EditLoker/$data->id_loker") ?>">
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


</section>
<?= $this->endSection(''); ?>