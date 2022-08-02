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
                    <h3 class="card-title">Edit Alamat Kantor</h3>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('EditAlamat') . '/' . $tentang_alamat_kantor->id_alamat_kantor ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="inputName">Kabupaten/Kota</label>
                            <input type="text" name="kabupaten_kota" id="inputName" class="form-control" placeholder="Kabupaten/Kota" value="<?= $tentang_alamat_kantor->kabupaten_kota ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="inputName">Alamat</label>
                            <input type="text" name="alamat" id="inputName" class="form-control" placeholder="Alamat" value="<?= $tentang_alamat_kantor->alamat ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="inputName">Nomor Telepon</label>
                            <input type="text" name="nomor_telepon" id="inputName" class="form-control" placeholder="Nomor Telepon" value="<?= $tentang_alamat_kantor->nomor_telepon ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Link Google Maps</label>
                            <textarea name="google_maps" class="form-control" rows="4" required><?= $tentang_alamat_kantor->google_maps ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputClientCompany">Pilih Foto</label>
                            <input type="text" name="namafoto" hidden value="<?= $tentang_alamat_kantor->foto ?>">
                            <img src="<?= base_url('uploads/TentangLestari/Alamat') . '/' . $tentang_alamat_kantor->foto ?>" width="20%" height="20%" alt="foto-bank" class="img-thumbnail">
                            <input type="File" name="foto" id="foto" class="form-control">
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