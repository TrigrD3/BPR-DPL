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
                    <form action="<?= base_url('EditLoker') . '/' . $header_loker->id_loker ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="inputClientCompany">Pilih Foto</label>
                            <br>
                            <input type="text" name="namafoto" hidden value="<?= $header_loker->foto ?>" required>
                            <img src="<?= base_url('uploads/Header/Loker') . '/' . $header_loker->foto ?>" width="200px" height="200px" alt="foto-bank" class="img-thumbnail">
                            <input type="File" name="foto" id="foto" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Judul</label>
                            <input type="text" name="judul" id="inputName" class="form-control" value="<?= $header_loker->judul ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="inputClientCompany">Deskripsi</label>
                            <textarea name="editor1" id="editor" class="form-control" rows="4" required><?= $header_loker->deskripsi ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputProjectLeader">Link Loker</label>
                            <input type="text" name="link" id="inputProjectLeader" class="form-control" value="<?= $header_loker->link ?>" required>
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