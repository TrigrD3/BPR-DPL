<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">List Alamat</h3>

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
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            Banjarmasin
                        </td>
                        <td>
                            Jln.Blablabla
                        </td>
                        <td>
                            08293782731
                        </td>
                        <td>
                            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15932.158688486461!2d114.58365774999999!3d-3.3403665499999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de423ada2d7e145%3A0xfa7934e04cd5311a!2sBANK%20BPR%20DANA%20PERMATA%20LESTARI!5e0!3m2!1sid!2sid!4v1657687751917!5m2!1sid!2sid" style="border:0; height:100%; width:100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                        </td>
                        <td>
                            FOTO
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="EditAlamat">
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
                <a class="btn ml-2 mt-2 btn-info btn-sm" href="TambahAlamat">
                    <i class="fas fa-plus-circle"></i>
                    Tambah
                </a>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</section>
<?= $this->endSection(''); ?>