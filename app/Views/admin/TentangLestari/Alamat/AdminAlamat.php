<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<section class="content">
    <div class="card">
        <?= session()->getFlashdata('message'); ?>
        <div class="card-header">
            <h3 class="card-title">List Alamat</h3>

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
                        <th style="width: 10%">
                            Kabupaten/Kota
                        </th>
                        <th style="width: 20%">
                            Alamat
                        </th>
                        <th style="width: 15%">
                            Nomor Telepon
                        </th>
                        <th style="width: 20%">
                            Google Maps
                        </th>
                        <th style="width: 15%">
                            Foto
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($TentangLestariAlamat as $data) :
                    ?>
                        <tr>
                            <td>
                                <?= $no; ?>
                            </td>
                            <td>
                                <?= $data->kabupaten_kota; ?>
                            </td>
                            <td class="deskripsi">
                                <?= $data->alamat; ?>
                            </td>
                            <td>
                                <?= $data->nomor_telepon; ?>
                            </td>
                            <td class="link">
                                <p><?= $data->google_maps; ?></p>
                            </td>
                            <td>
                                <img src="<?= base_url('uploads/TentangLestari/Alamat') . '/' . $data->foto ?>" width="50%" height="50%" alt="foto-bank" class="img-thumbnail">
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="<?= base_url("/EditAlamat/$data->id_alamat_kantor") ?>">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="<?= base_url("/HapusAlamat/$data->id_alamat_kantor") ?>">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; ?>
                </tbody>
                <a class="btn ml-2 mt-2 btn-success btn-sm" href="TambahAlamat">
                    <i class="fas fa-plus-circle"></i>
                    Tambah
                </a>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Foto Thumbnail</h3>

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
                    foreach ($TentangLestariDepanAlamat as $data) :
                    ?>
                        <tr>
                            <td>
                                <img src="<?= base_url('uploads/TentangLestari/Alamat/depan') . '/' . $data->foto; ?>" width="50%" height="50%" alt="foto" class="img-thumbnail">

                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="<?= base_url("/EditDepanAlamat/$data->id_depan_alamat_kantor") ?>">
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