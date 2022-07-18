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
                    <h3 class="card-title">Edit Identitas</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="input-group">
                    <label class="input-group-text" for="inputGroupSelect01">Social Media</label>
                    <select class="form-select" id="inputGroupSelect01">
                        <option selected>Whatsapp</option>
                        <option value="Facebook">Facebook</option>
                        <option value="Instagram">Instagram</option>
                    </select>
                    </div>

                    <div class="form-group">
                        <label for="inputName">Link</label>
                        <input type="text" id="inputName" class="form-control" placeholder="AdminLTE">
                    </div>
                    <div class="form-group">
                        <label for="inputClientCompany">Logo</label>
                        <input type="File" id="inputClientCompany" class="form-control" >
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
            <input type="submit" value="save" class="btn btn-success float-right">
        </div>
    </div>
</section>
<?= $this->endSection(''); ?>