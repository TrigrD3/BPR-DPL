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
                    foreach ($TabunganProduk as $data) :
                    ?>
                        <tr>
                            <td>
                                <?= $no; ?>
                            </td>
                            <td>
                                <?= $data->nama; ?>
                                <br />
                            </td>
                            <td class="deskripsi">
                                <p><?=
                                    $new = htmlspecialchars($data->deskripsi, ENT_QUOTES);
                                    echo $new; ?></p>
                            </td>
                            <td class="project_progress">
                                <img src="<?= base_url('uploads/Tabungan/Produk') . '/' . $data->foto; ?>" width="50%" height="50%" alt="produk-tabungan" class="img-thumbnail">
                            </td>
                            <td>
                                <img src="<?= base_url('uploads/Tabungan/Produk') . '/' . $data->foto_depan; ?>" width="50%" height="50%" alt="produk-tabungan" class="img-thumbnail">
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="<?= base_url("/EditProdukTabungan/$data->id_produk") ?>">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="<?= base_url("/HapusProdukTabungan/$data->id_produk") ?>">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; ?>
                </tbody>
                <a class="btn ml-2 mt-2 btn-success btn-sm" href="TambahProdukTabungan">
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
                <thead>
                </thead>
                <tbody>
                    <?php
                    foreach ($TabunganIklan as $data) :
                    ?>
                        <tr>
                            <td>
                                <a>
                                    <img src="<?= base_url('uploads/Tabungan/Iklan') . '/' . $data->foto; ?>" width="10%" height="10%" alt="iklan-tabungan" class="img-thumbnail">
                                </a>
                                <br />
                            </td>

                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="<?= base_url("/EditIklanTabungan/$data->id_iklan") ?>">
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
                    foreach ($TabunganForm as $data) :
                    ?>
                        <tr>
                            <td>
                                <a>
                                    <?= $data->g_form; ?>
                                </a>
                                <br />
                            </td>

                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="<?= base_url("/EditFormTabungan/$data->id_form") ?>">
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