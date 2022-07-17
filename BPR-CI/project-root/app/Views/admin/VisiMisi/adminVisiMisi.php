<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<section class="content">
    <!-- start of visi -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Visi</h3>

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
            <table class="table table-striped projects text-center">
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
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            <p>MENJADI BPR YANG KOKOH DAN KOMITMEN TERHADAP USAHA MIKRO</p>
                            <br />
                        </td>

                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="EditVisi">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="#">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
                    </tr>
                </tbody>
                <a class="btn ml-2 mt-2 btn-info btn-sm" href="Tambah">
                    <i class="fas fa-plus-circle"></i>
                    Tambah
                </a>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- end of visi -->

    <!-- start of misi -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Misi</h3>

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
            <table class="table table-striped projects text-center">
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
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            <p>Meningkatkan kinerja dan tetap sebagai BPR yang sehat, profesional dan mampu bersaing serta berkesinambungan. Memberikan pelayanan yang terbaik kepada nasabah, berperan dalam pengembangan usaha Mikro, serta meningkatkan nilai tambah investasi pemegang saham dan kesejahteraan karyawan. </p>
                            <br />
                        </td>

                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="EditMisi">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="#">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
                    </tr>
                </tbody>
                <a class="btn ml-2 mt-2 btn-info btn-sm" href="Tambah">
                    <i class="fas fa-plus-circle"></i>
                    Tambah
                </a>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- end of misi -->
</section>
<?= $this->endSection(''); ?>