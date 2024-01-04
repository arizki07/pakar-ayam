<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>

<!-- Main content -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Data Gejala</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Edit Data Gejala</h3>
                    </div>
                    <div class="card-body p-0">
                        <div class="card-body">
                            <form action="<?= site_url('admin/gejala/update/' . $gejala['id_gejala']) ?>" method="post" id="edit-gejala" name="edit-gejala">

                                <div class="form-group">
                                    <label for="kode_gejala">Kode Gejala</label>
                                    <input type="text" class="form-control" value="<?= $gejala['kode_gejala']; ?>" id="kode_gejala" name="kode_gejala" placeholder="Kode Gejala" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="nama_gejala">Nama Gejala</label>
                                    <input type="text" class="form-control" value="<?= $gejala['nama_gejala']; ?>" id="nama_gejala" name="nama_gejala" placeholder="Nama Gejala">
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-warning">Save</button>
                                    <a href="<?= site_url('admin/gejala') ?>" class="btn btn-default float-right">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->

<?= $this->endSection(); ?>