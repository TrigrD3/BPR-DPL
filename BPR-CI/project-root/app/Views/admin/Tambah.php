<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">General</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputName">Project Name</label>
                        <input type="text" id="inputName" class="form-control" value="AdminLTE">
                    </div>
                    <div class="form-group">
                        <label for="inputDescription">Project Description</label>
                        <textarea name="editor1" class="form-control" rows="4">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputStatus">Status</label>
                        <select id="inputStatus" class="form-control custom-select">
                            <option disabled>Select one</option>
                            <option>On Hold</option>
                            <option>Canceled</option>
                            <option selected>Success</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputClientCompany">Client Company</label>
                        <input type="text" id="inputClientCompany" class="form-control" value="Deveint Inc">
                    </div>
                    <div class="form-group">
                        <label for="inputProjectLeader">Project Leader</label>
                        <input type="text" id="inputProjectLeader" class="form-control" value="Tony Chicken">
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