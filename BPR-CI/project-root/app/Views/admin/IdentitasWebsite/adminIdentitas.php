<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<section class="content">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Link Sosial Media </h3>

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
                        <th style="width: 40%">
                            Link
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
                                https://chat.whatsapp.com/LQx0EwxWRkM9jZE6mGdJeX
                            </a>
                            <br />
                        </td>
                        <td class="project-actions text-right" style="width: 10%">
                            <a class="btn btn-info btn-sm" href="editIdentitas">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            2
                        </td>
                        <td>
                            <a>
                                https://Facebook.com/LQx0EwxWRkM9jZE6mGdJeX
                            </a>
                            <br />
                        </td>
                        <td class="project-actions text-right" style="width: 10%">
                            <a class="btn btn-info btn-sm" href="editIdentitas">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            3
                        </td>
                        <td>
                            <a>
                                https://Instagram.com/
                            </a>
                            <br />
                        </td>
                        <td class="project-actions text-right" style="width: 10%">
                            <a class="btn btn-info btn-sm" href="editIdentitas">
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
    <!-- produk yang ditawarkan -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Logo Website</h3>

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
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            <a>
                                <img src="images/PLN.png" alt="" width="200px">
                            </a>
                            <br />
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="editIdentitas">
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