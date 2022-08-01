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
                    <h3 class="card-title">Tambah Alamat Kantor</h3>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('/TambahAlamat') ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="inputName">Kabupaten/Kota</label>
                            <input type="text" name="kabupaten_kota" id="inputName" class="form-control" placeholder="Kabupaten/Kota" required>
                        </div>
                        <div class="form-group">
                            <label for="inputName">Alamat</label>
                            <input type="text" name="alamat" id="inputName" class="form-control" placeholder="Alamat" required>
                        </div>
                        <div class="form-group">
                            <label for="inputName">Nomor Telepon</label>
                            <input type="text" name="nomor_telepon" id="inputName" class="form-control" placeholder="Nomor Telepon" required>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Link Google Maps</label>
                            <textarea class="form-control" name="google_maps" rows="4" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputClientCompany">Pilih Foto</label>
                            <input type="File" name="foto" id="inputClientCompany" class="form-control" required>
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