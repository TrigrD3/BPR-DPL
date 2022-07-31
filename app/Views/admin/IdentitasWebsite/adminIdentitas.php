<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <?= session()->getFlashdata('message'); ?>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Identitas</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <form action="<?php echo base_url('adminIdentitas/update') ?>" method="POST" enctype="multipart/form-data">
                    <div class=" card-body">
                        <div class="form-group">
                            <label for="WhatsApp">WhatsApp</label>
                            <input type="text" id="id_identitas" name="id_identitas" class="form-control" value="<?= $IdentitasWebsite->id_identitas ?>" hidden>
                            <input type="text" id="whatsapp" name="whatsapp" class="form-control" value="<?= $IdentitasWebsite->whatsapp ?>" placeholder="WhatsApp" required>
                        </div>
                        <div class="form-group">
                            <label for="Facebook">Facebook</label>
                            <input type="text" id="facebook" name="facebook" class="form-control" value="<?= $IdentitasWebsite->facebook ?>" placeholder="Facebook" required>
                        </div>
                        <div class="form-group">
                            <label for="Instagram">Instagram</label>
                            <input type="text" id="instagram" name="instagram" class="form-control" value="<?= $IdentitasWebsite->instagram ?>" placeholder="Instagram" required>
                        </div>
                        <div class="form-group">
                            <label for="inputClientCompany">Logo</label>
                            <br>
                            <input type="text" name="namalogo" hidden value="<?= $IdentitasWebsite->logo ?>">
                            <img src="<?= base_url('uploads/IdentitasWebsite') . '/' . $IdentitasWebsite->logo ?>" width="20%" height="20%" alt="logo-bank" class="img-thumbnail">
                            <a href="<?= base_url('uploads/IdentitasWebsite') . '/' . $IdentitasWebsite->logo ?>" target="_blank"><?= $IdentitasWebsite->logo ?></a>
                            <input type="File" name="logo" id="logo" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-12">
                            <!-- <a href="#" class="btn btn-secondary" onclick="history.back()">Cancel</a> -->
                            <button type="submit" name="submit" value="Submit" class="btn btn-primary mb-3 btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-download"></i>
                                </span>
                                <span class="text">Simpan</span>
                            </button>
                        </div>
                    </div>
                </form>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

    </div>

</section>
<?= $this->endSection(''); ?>