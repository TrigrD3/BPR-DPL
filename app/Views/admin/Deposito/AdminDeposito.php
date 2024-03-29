<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<section class="content">

    <!-- Default box -->
    <div class="card">
        <?= session()->getFlashdata('message'); ?>
        <div class="card-header">
            <h3 class="card-title">Produk</h3>

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
                        <th style="width: 15%">
                            Nama
                        </th>
                        <th style="width: 25%">
                            Deskripsi
                        </th>
                        <th>
                            Foto
                        </th>
                        <th>
                            Thumbnail
                        </th>
                        <th style="width: 20%">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($DepositoProduk as $data) :
                    ?>
                        <tr>
                            <td>
                                <?= $no; ?>
                            </td>
                            <td>
                                <?= $data->nama; ?>
                            </td>
                            <td class="deskripsi">
                                <p><?=
                                    $new = htmlspecialchars($data->deskripsi, ENT_QUOTES);
                                    echo $new; ?></p>
                            </td>
                            <td class="project_progress">
                                <img src="<?= base_url('uploads/Deposito/ProdukDeposito') . '/' . $data->foto; ?>" width="50%" height="50%" alt="produk-deposito" class="img-thumbnail">
                            </td>
                            <td>
                                <img src="<?= base_url('uploads/Deposito/ProdukDeposito') . '/' . $data->foto_depan; ?>" width="50%" height="50%" alt="produk-deposito" class="img-thumbnail">
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="<?= base_url("/EditProdukDeposito/$data->id_produk") ?>">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="<?= base_url("/HapusProdukDeposito/$data->id_produk") ?>">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; ?>
                </tbody>
                <a class="btn ml-2 mt-2 btn-success btn-sm" href="TambahProdukDeposito">
                    <i class="fas fa-plus-circle"></i>
                    Tambah
                </a>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Iklan</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>

            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <tbody>
                    <?php
                    foreach ($DepositoIklan as $data) :
                    ?>
                        <tr>
                            <td>
                                <img src="<?= base_url('uploads/Deposito/IklanDeposito') . '/' . $data->foto; ?>" width="50%" height="50%" alt="iklan-deposito" class="img-thumbnail">
                            </td>

                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="<?= base_url("/EditIklanDeposito/$data->id_iklan") ?>">
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
    <!-- /.card -->
    <!-- /.card -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Link Google Form</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>

            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                </thead>
                <tbody>
                    <?php
                    foreach ($DepositoForm as $data) :
                    ?>
                        <tr>
                            <td>
                                <a>
                                    <?= $data->g_form; ?>
                                </a>
                                <br />
                            </td>

                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="<?= base_url("/EditFormDeposito/$data->id_form") ?>">
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
</section>
<?= $this->endSection(''); ?>