<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Deskripsi Home</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('EditDeskripsiWebsite') . '/' . $deskripsi->id_deskripsi_website ?>" method="post">
                        <div class="form-group">
                            <label for="inputDescription">Deskripsi</label>
                            <textarea name="editor1" id="editor" class="form-control" rows="4"><?= $deskripsi->deskripsi ?></textarea>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <a href="#" class="btn btn-secondary">Cancel</a>
                                <button type="submit" name="submit" value="Submit" class="btn btn-primary mb-3 btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-download"></i>
                                    </span>
                                    <span class="text">Simpan</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

    </div>
</section>
<?= $this->endSection(''); ?>