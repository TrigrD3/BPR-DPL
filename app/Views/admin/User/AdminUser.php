<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<section class="content">

    <!-- Default box -->
    <div class="card">
        <?= session()->getFlashdata('message'); ?>
        <div class="card-header">
            <h3 class="card-title">Admin</h3>

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
                            Nama
                        </th>
                        <th style="width: 30%">
                            Username
                        </th>
                        <!-- <th>
                            Password
                        </th> -->
                        <th style="width: 30%">
                            Level
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($Akun as $data) :
                    ?>
                        <tr>
                            <td>
                                <?= $no; ?>
                            </td>
                            <td>
                                <?= $data->nama; ?>
                            </td>
                            <td>
                                <?= $data->username; ?>
                            </td>
                            <!-- <td class="project_progress">
                                <?= $data->password; ?>
                            </td> -->
                            <td>
                                <?php if ($data->level == "super_admin") { ?>
                                    <span class="badge badge-success">Admin Utama</span>
                                <?php } else { ?>
                                    <span class="badge badge-warning">Operator</span>
                                <?php } ?>
                                <!-- <?= $data->level; ?> -->
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="<?= base_url("/EditUser/$data->id_user") ?>">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="<?= base_url("/DeleteUser/$data->id_user") ?>">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; ?>
                </tbody>
                <a class="btn ml-2 mt-2 btn-success btn-sm" href="TambahUser">
                    <i class="fas fa-plus-circle"></i>
                    Tambah
                </a>
            </table>
        </div>
        <!-- /.card-body -->
    </div>


</section>
<?= $this->endSection(''); ?>