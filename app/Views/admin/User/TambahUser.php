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
                    <h3 class="card-title">Tambah User</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('/TambahUser') ?>" method="post">
                        <div class="form-group">
                            <label for="inputClientCompany">Nama Lengkap</label>
                            <input type="text" id="inputClientCompany" name="nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="inputClientCompany">Username</label>
                            <input type="text" id="inputClientCompany" name="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="inputClientCompany">Password</label>
                            <input type="text" id="inputClientCompany" name="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="inputName">Level</label>
                            <select name="level" id="inputName" class="form-control" required>
                                <option value="" selected disabled>-- Pilih Level Admin --</option>
                                <option value="super_admin">Admin Utama</option>
                                <option value="admin">Operator</option>
                            </select>
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
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

    </div>

</section>
<?= $this->endSection(''); ?>