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
                    <h3 class="card-title">Edit Iklan LayananLain</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('EditIklanLayananLain') . '/' . $iklan_layananlain->id_iklan ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="inputClientCompany">Gambar (1920x600)</label>
                            <br>
                            <input type="text" name="namafoto" hidden value="<?= $iklan_layananlain->foto ?>" required>
                            <img src="<?= base_url('uploads/LayananLain/Iklan') . '/' . $iklan_layananlain->foto ?>" width="50%" height="50%" alt="iklan-layananlain" class="img-thumbnail">
                            <input type="File" name="foto" id="foto" class="form-control" required>
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
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>

    </div>

    </form>
</section>
<?= $this->endSection(''); ?>