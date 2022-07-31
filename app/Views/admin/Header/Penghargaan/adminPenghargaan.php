<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<section class="content">

    <div class="card">
        <?= session()->getFlashdata('message'); ?>
        <div class="card-header">
            <h3 class="card-title">Penghargaan</h3>

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
                            FOTO
                        </th>
                        <th style="width: 30%">
                            Deskripsi
                        </th>
                        <th style="width: 20%">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($HeaderPenghargaan as $data) :
                    ?>
                        <tr>
                            <td>
                                <img src="<?= base_url('uploads/Header/Penghargaan') . '/' . $data->foto ?>" width="20%" height="20%" alt="foto-bank" class="img-thumbnail">
                            </td>
                            <td class="deskripsi">
                                <p><?= $data->deskripsi; ?></p>
                            </td>

                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="<?= base_url("/EditPenghargaan/$data->id_penghargaan") ?>">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="<?= base_url("/HapusPenghargaan/$data->id_penghargaan") ?>">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <a class="btn ml-2 mt-2 btn-success btn-sm" href="TambahPenghargaan">
                    <i class="fas fa-plus-circle"></i>
                    Tambah
                </a>
            </table>
        </div>
        <!-- /.card-body -->

    </div>


</section>
<?= $this->endSection(''); ?>