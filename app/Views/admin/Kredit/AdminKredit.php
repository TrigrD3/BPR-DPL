<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Produk</h3>

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
                            Nama
                        </th>
                        <th style="width: 30%">
                            Deskripsi
                        </th>
                        <th>
                            Foto
                        </th>
                        <th style="width: 20%">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($KreditProduk as $data) :
                    ?>
                        <tr>
                            <td>
                                <?= $no; ?>
                            </td>
                            <td>
                                <?= $data->nama; ?>
                            </td>
                            <td class="deskripsi">
                                <?= $data->deskripsi; ?>
                            </td>
                            <td class="project_progress">
                                <?= $data->foto; ?>
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="<?= base_url("/EditProdukKredit/$data->id_produk") ?>">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="<?= base_url("/HapusProdukKredit/$data->id_produk") ?>">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; ?>
                </tbody>
                <a class="btn ml-2 mt-2 btn-info btn-sm" href="TambahProdukKredit">
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
                        <th style="width: 30%">
                            Foto
                        </th>
                        <th style="width: 20%">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($KreditIklan as $data) :
                    ?>
                        <tr>
                            <td>
                                <?= $no; ?>
                            </td>
                            <td>
                                <?= $data->foto; ?>
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="<?= base_url("/EditIklanKredit/$data->id_iklan") ?>">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="<?= base_url("/HapusIklanKredit/$data->id_iklan") ?>">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; ?>
                </tbody>
                <a class="btn ml-2 mt-2 btn-info btn-sm" href="TambahIklanKredit">
                    <i class="fas fa-plus-circle"></i>
                    Tambah
                </a>
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
                        <th style="width: 30%">
                            Link
                        </th>
                        <th style="width: 20%">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            <a>
                                wwww.g-form.com
                            </a>
                            <br />
                        </td>

                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="EditLinkKredit">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
        <!-- /.card-body -->
    </div>

</section>
<?= $this->endSection(''); ?>