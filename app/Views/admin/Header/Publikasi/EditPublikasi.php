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
                    <h3 class="card-title">Edit Publikasi</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('EditPublikasi') . '/' . $header_publikasi->id_publikasi ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="inputName">Nama File</label>
                            <input type="text" name="nama" id="inputName" class="form-control" value="<?= $header_publikasi->nama ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="inputName">Triwulan</label>
                            <select name="triwulan" id="inputName" class="form-control" required>
                                <option value="" selected disabled>-- Pilih Triwulan --</option>
                                <option <?php if ($header_publikasi->triwulan == 1) { ?> selected <?php } ?> value="1">Triwulan 1</option>
                                <option <?php if ($header_publikasi->triwulan == 2) { ?> selected <?php } ?> value="2">Triwulan 2</option>
                                <option <?php if ($header_publikasi->triwulan == 3) { ?> selected <?php } ?> value="3">Triwulan 3</option>
                                <option <?php if ($header_publikasi->triwulan == 4) { ?> selected <?php } ?> value="4">Triwulan 4</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputName">Tahun</label>
                            <input type="text" name="tahun" autocomplete="off" class="form-control" name="datepicker" id="datepicker" value="<?= $header_publikasi->tahun ?>" required>

                            <script>
                                $("#datepicker").datepicker({
                                    format: "yyyy",
                                    viewMode: "years",
                                    minViewMode: "years",
                                    autoclose: true //to close picker once year is selected
                                });
                            </script>
                        </div>
                        <div class="form-group">
                            <label for="inputClientCompany">Pilih File</label>
                            <br>
                            <input type="text" name="namafile" hidden value="<?= $header_publikasi->file ?>">
                            <a href="<?= base_url('uploads/Header/Publikasi') . '/' . $header_publikasi->file ?>" target="_blank"><?= $header_publikasi->file ?></a>
                            <input type="File" name="file" id="file" class="form-control">
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