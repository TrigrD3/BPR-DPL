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
                    <h3 class="card-title">Tambah Publikasi</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputName">Nama File</label>
                        <input type="text" id="inputName" class="form-control" value="AdminLTE">
                    </div>
                    <label for="inputName">Tahun</label>
                    <input type="text" class="form-control" name="datepicker" id="datepicker" />

                    <script>
                        $("#datepicker").datepicker({
                            format: "yyyy",
                            viewMode: "years",
                            minViewMode: "years",
                            autoclose: true //to close picker once year is selected
                        });
                    </script>
                    <div class="form-group">
                        <label for="inputClientCompany">Pilih File</label>
                        <input type="File" id="inputClientCompany" class="form-control" value="Deveint Inc">
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