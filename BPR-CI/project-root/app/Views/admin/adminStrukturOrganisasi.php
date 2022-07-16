<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Struktur Organisasi</h3>

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
                        <th style="width: 50%">
                            Foto
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
                            <img src="images/StrukturOrganisasi.png" alt="" width="400px">
                            </a>
                            <br />
                        </td>

                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="Edit">
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
</section>
<?= $this->endSection(''); ?>