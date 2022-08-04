<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<section class="content">

    <div class="card">
        <?= session()->getFlashdata('message'); ?>
        <div class="card-header">
            <h3 class="card-title">Profil</h3>

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
                        <th style="width: 1%">
                            No
                        </th>
                        <th style="width: 20%">
                            judul
                        </th>
                        <th style="width: 30%">
                            Deskripsi
                        </th>
                        <th style="width: 20%">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($TentangLestariProfil as $data) :
                    ?>
                        <tr>
                            <td>
                                <?= $no; ?>
                            </td>
                            <td>
                                <?= $data->judul; ?>
                            </td>
                            <td class="deskripsi">
                                <aside><?= $data->deskripsi; ?></aside>
                                <br />
                            </td>

                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="<?= base_url("/EditProfil/$data->id_profil") ?>">
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


</section>
<?= $this->endSection(''); ?>