<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Lowongan Kerja</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputName">Foto</label>
                        <input type="file" id="inputName" class="form-control" value="AdminLTE">
                    </div>
                    <div class="form-group">
                        <label for="inputDescription">Judul</label>
                        <input type="text" id="inputName" class="form-control" value="AdminLTE">
                    </div>
                    <div class="form-group">
                        <label for="inputClientCompany">Deskripsi</label>
                        <textarea name="editor1" id="editor" class="form-control" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputProjectLeader">Link Loker</label>
                        <input type="text" id="inputProjectLeader" class="form-control">
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

    </div>
    <div class="row">
        <div class="col-12">
            <a href="#" class="btn btn-secondary">Cancel</a>
            <input type="submit" value="add" class="btn btn-success float-right">
        </div>
    </div>
</section>
<?= $this->endSection(''); ?>