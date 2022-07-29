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
                    <h3 class="card-title">Edit KAT</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('EditPAT') . '/' . $header_pat->id_pat ?>" method="post">
                        <div class="form-group">
                            <label for="inputName">Nama File</label>
                            <input type="text" name="nama" id="inputName" class="form-control" value="<?= $header_pat->file ?>">
                        </div>
                        <label for="inputName">Tahun</label>
                        <input type="text" name="tahun" class="form-control" name="datepicker" id="datepicker" value="<?= $header_pat->tahun ?>">

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
                            <input type="File" id="inputClientCompany" name="file" class="form-control" value="Deveint Inc" value="<?= $header_pat->file ?>">
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
                <div class="row">
            </div>
            <!-- /.card -->
        </div>

    </div>

</section>
<?= $this->endSection(''); ?>