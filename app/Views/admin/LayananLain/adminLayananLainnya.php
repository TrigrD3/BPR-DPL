<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<section class="content">

    <div class="card">
        <?= session()->getFlashdata('message'); ?>
        <div class="card-header">
            <h3 class="card-title">Deskripsi Layanan Lainnya</h3>

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
                        <th style="width: 80%">
                            Deskripsi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($LayananLainPembayaran as $data) :
                    ?>
                        <tr>
                            <td>
                                <?= $no; ?>
                            </td>
                            <td class="deskripsi">
                                <p><?=
                                    $new = htmlspecialchars($data->deskripsi, ENT_QUOTES);
                                    echo $new; ?></p>
                            </td>

                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="<?= base_url("/EditDeskripsiLL/$data->id_pembayaran") ?>">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="<?= base_url("/HapusDeskripsiLL/$data->id_pembayaran") ?>">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; ?>
                </tbody>
                <a class="btn ml-2 mt-2 btn-success btn-sm" href="TambahDeskripsiLL">
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
            <h3 class="card-title">Iklan Halaman Utama</h3>

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
                    foreach ($LayananLainIklan as $data) :
                    ?>
                        <tr>
                            <td>
                                <img src="<?= base_url('uploads/LayananLain/Iklan') . '/' . $data->foto; ?>" width="50%" height="50%" alt="iklan-kredit" class="img-thumbnail">

                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="<?= base_url("/EditIklanLayananLain/$data->id_iklan") ?>">
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
    <!-- produk yang ditawarkan -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Produk Yang Ditawarkan</h3>

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
                        <th style="width: 30%">
                            Foto
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($LayananLainProduk as $data) :
                    ?>
                        <tr>
                            <td>
                                <?= $no; ?>
                            </td>
                            <td>
                                <img src="<?= base_url('uploads/LayananLain/ProdukLL') . '/' . $data->foto; ?>" width="50%" height="50%" alt="iklan-kredit" class="img-thumbnail">
                                <br />
                            </td>
                            <td>
                            </td>

                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="<?= base_url("/EditFotoLL/$data->id_produk") ?>">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="<?= base_url("/HapusFotoLL/$data->id_produk") ?>">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; ?>
                </tbody>
                <a class="btn ml-2 mt-2 btn-success btn-sm" href="TambahFotoLL">
                    <i class="fas fa-plus-circle"></i>
                    Tambah
                </a>
            </table>
        </div>
        <!-- /.card-body -->
    </div>

</section>
<?= $this->endSection(''); ?>