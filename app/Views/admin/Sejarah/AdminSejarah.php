<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Laporan Publikasi</h3>

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
                        Keterangan
                    </th>
                    <th style="width: 20%">
                        Tanggal
                    </th>
                    <th>
                        Deskripsi
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
                            Pendirian awal
                        </a>
                        <br />
                    </td>
                    <td>
                        <a>
                            17 Agustus 1945
                        </a>
                    </td>
                    <td class="project_progress">
                        <a>
                            Pembangunan awal dilaksanakan dengan cara di
                        </a>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-info btn-sm" href="EditSejarah">
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
            <a class="btn ml-2 mt-2 btn-info btn-sm" href="TambahSejarah">
                <i class="fas fa-plus-circle"></i>
                Tambah
            </a>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
<?= $this->endSection(''); ?>