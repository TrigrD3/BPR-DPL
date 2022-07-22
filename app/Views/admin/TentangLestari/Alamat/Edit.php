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
                    <div class="form-group">
                        <label for="inputName">Kabupaten/Kota</label>
                        <input type="text" id="inputName" class="form-control" placeholder="Kabupaten/Kota">
                    </div>
                    <div class="form-group">
                        <label for="inputName">Alamat</label>
                        <input type="text" id="inputName" class="form-control" placeholder="Alamat">
                    </div>
                    <div class="form-group">
                        <label for="inputName">Nomor Telepon</label>
                        <input type="text" id="inputName" class="form-control" placeholder="Nomor Telepon">
                    </div>
                    <div class="form-group">
                        <label for="inputDescription">Link Google Maps</label>
                        <textarea class="form-control" rows="4">text</textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputClientCompany">Pilih Foto</label>
                        <input type="File" id="inputClientCompany" class="form-control">
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
            <input type="submit" value="Save" class="btn btn-success float-right">
        </div>
    </div>
</section>
<?= $this->endSection(''); ?>