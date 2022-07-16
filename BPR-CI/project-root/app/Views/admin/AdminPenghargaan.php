<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<section class="content">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Profil</h3>

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
                    <tr>
                        <td>
                            Foto
                        </td>
                        <td>
                            <a>
                                Perkembangan Usaha asdasd asd asdasd
                            </a>
                            <br />
                        </td>

                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="#">
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