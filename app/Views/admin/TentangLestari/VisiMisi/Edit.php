<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Visi Misi </h3>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('EditVisiMisi') . '/' . $tentang_visimisi->id_visi_misi ?>" method="post">
                        <div class="form-group">
                            <label for="inputDescription">Visi</label>
                            <textarea name="editor1" id="editor" class="form-control" rows="4" required><?= $tentang_visimisi->visi ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Misi</label>
                            <textarea name="editor2" id="editor" class="form-control" rows="4" required><?= $tentang_visimisi->misi ?></textarea>
                        </div>
                        <div class="row">
                            <div class="col-1">
                                <a href="#" class="btn btn-secondary" onclick="history.back()">Cancel</a>
                            </div>
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