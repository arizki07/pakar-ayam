<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>

<!-- Main content -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Data Penyakit</h1>
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
                        <h3 class="card-title">Edit Data Penyakit</h3>
                    </div>
                    <div class="card-body p-0">
                        <div class="card-body">
                            <form action="<?= site_url('admin/penyakit/update/' . $Penyakits['id_penyakit']) ?>" method="post" id="edit-penyakit" name="edit-penyakit">

                                <div class="form-group">
                                    <label for="nama_penyakit">Kode penyakit</label>
                                    <input type="text" class="form-control" value="<?= $Penyakits['kode_penyakit']; ?>" id="kode_penyakit" name="kode_penyakit" placeholder="Kode penyakit" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="nama_penyakit">Nama Penyakit</label>
                                    <input type="text" class="form-control" value="<?= $Penyakits['nama_penyakit']; ?>" id="nama_penyakit" name="nama_penyakit" placeholder="Nama Penyakit">
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi Penyakit</label>
                                    <input type="text" class="form-control" value="<?= $Penyakits['deskripsi']; ?>" id="deskripsi" name="deskripsi" placeholder="Deskripsi">
                                </div>
                                <div class="form-group">
                                    <label for="solusi_penyakit">Solusi Penyakit</label>
                                    <input type="text" class="form-control" value="<?= $Penyakits['solusi_penyakit']; ?>" id="solusi_penyakit" name="solusi_penyakit" placeholder="Solusi Penyakit">
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-warning ">Save</button>
                                    <!-- type="submit"  -->
                                    <a href="<?= site_url('admin/penyakit') ?>" class="btn btn-default float-right">Cancel</a>
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