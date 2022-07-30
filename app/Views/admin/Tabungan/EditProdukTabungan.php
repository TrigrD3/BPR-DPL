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
                    <h3 class="card-title">Edit Produk Tabungan</h3>

                    <div class="card-tools">
<<<<<<< HEAD
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
=======
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse" enctype="multipart/form-data">
>>>>>>> 50e6530e018f74e8e4b8f4ed519875c89284a7fb
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('EditProdukTabungan') . '/' . $produk_tabungan->id_produk ?>" method="post">
                        <div class="form-group">
                            <label for="inputName">Nama</label>
                            <input type="text" name="nama" id="inputName" class="form-control" placeholder="Nama" value="<?= $produk_tabungan->nama ?>">
                        </div>
                        <div class="form-group">
                            <label for="inputName">Deskripsi</label>
                            <textarea name="editor1" id="editor" class="form-control" rows="4"><?= $produk_tabungan->deskripsi ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputClientCompany">Pilih Foto</label>
                            <br>
                            <input type="text" name="namafoto" hidden value="<?= $produk_tabungan->foto ?>">
                            <img src="<?= base_url('uploads/Tabungan/ProdukTabungan') . '/' . $produk_tabungan->foto ?>" width="200px" height="200px" alt="produk-tabungan" class="img-thumbnail">
                            <a href="<?= base_url('uploads/Tabungan/ProdukTabungan') . '/' . $produk_tabungan->foto ?>" target="_blank"><?= $produk_tabungan->foto ?></a>
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