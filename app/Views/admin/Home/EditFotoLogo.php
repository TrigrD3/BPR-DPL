<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Foto Logo</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('EditFotoLogo') . '/' . $foto_logo->id_foto_logo ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="inputClientCompany">Pilih Foto Logo Kredit (800X600)</label>
                            <br>
                            <input type="text" name="namafotokredit" hidden value="<?= $foto_logo->foto_kredit ?>" required>
                            <img src="<?= base_url('uploads/Home/Logo') . '/' . $foto_logo->foto_kredit ?>" width="50%" height="50%" alt="foto-bank" class="img-thumbnail">
                            <input type="File" name="foto_kredit" id="foto_kredit" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputClientCompany">Pilih Foto Logo Deposito (800X600)</label>
                            <br>
                            <input type="text" name="namafotodeposito" hidden value="<?= $foto_logo->foto_deposito ?>" required>
                            <img src="<?= base_url('uploads/Home/Logo') . '/' . $foto_logo->foto_deposito ?>" width="50%" height="50%" alt="foto-bank" class="img-thumbnail">
                            <input type="File" name="foto_deposito" id="foto_deposito" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputClientCompany">Pilih Foto Logo Tabungan (800X600)</label>
                            <br>
                            <input type="text" name="namafototabungan" hidden value="<?= $foto_logo->foto_tabungan ?>" required>
                            <img src="<?= base_url('uploads/Home/Logo') . '/' . $foto_logo->foto_tabungan ?>" width="50%" height="50%" alt="foto-bank" class="img-thumbnail">
                            <input type="File" name="foto_tabungan" id="foto_tabungan" class="form-control">
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