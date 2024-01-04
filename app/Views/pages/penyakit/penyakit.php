<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>

<!-- Main content -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Data Penyakit</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-info">
                    <?= $this->include('alerts/alert') ?>
                    <div class="card-header">
                        <h3 class="card-title">Data Penyakit</h3>

                        <div class="card-tools">

                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>


                    </div>
                    <div class="card-body">
                        <table class="table table-head-fixed text-nowrap" id="example2">
                            <thead>
                                <th>No</th>
                                <th>Kode Penyakit</th>
                                <th>Nama Penyakit</th>
                                <th>Deskripsi Penyakit</th>
                                <th>Solusi Penyakit</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($penyakits as $penyakit) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $penyakit['kode_penyakit']; ?></td>
                                        <td><?= $penyakit['nama_penyakit']; ?></td>
                                        <td><?= $penyakit['deskripsi']; ?></td>
                                        <td><?= $penyakit['solusi_penyakit']; ?></td>
                                        <td>
                                            <a class="btn btn-warning btn-sm mx-1" href="<?php echo base_url('admin/penyakit/edit/' . $penyakit['id_penyakit']); ?>"><i class="fas fa-pencil-alt"></i></a>
                                            <a class="btn btn-danger btn-sm mx-1" href="<?php echo base_url('admin/penyakit/delete/' . $penyakit['id_penyakit']); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus penyakit ini?');">
                                                <i class="fas fa-trash"></i>
                                            </a>

                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                    </div>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Tambah Data Penyakit</h3>
                </div>
                <div class="card-body p-0">
                    <div class="card-body">
                        <form action="<?= base_url('admin/penyakit/store') ?>" method="post" id="add-penyakit" name="add-penyakit">
                            <?= csrf_field() ?>
                            <div class="form-group">
                                <label for="kode_penyakit">Kode Penyakit</label>
                                <input type="text" class="form-control" id="kode_penyakit" name="kode_penyakit" placeholder="Kode Penyakit">
                            </div>
                            <div class="form-group">
                                <label for="nama_penyakit">Nama Penyakit</label>
                                <input type="text" class="form-control" id="nama_penyakit" name="nama_penyakit" placeholder="Nama Penyakit">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi Penyakit</label>
                                <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi">
                            </div>
                            <div class="form-group">
                                <label for="solusi_penyakit">Solusi Penyakit</label>
                                <input type="text" class="form-control" id="solusi_penyakit" name="solusi_penyakit" placeholder="Solusi Penyakit">
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-warning ">Save</button>
                                <!-- type="submit"  -->
                                <button href="admin/penyakit" class="btn btn-default float-right">Cancel</button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->


<?= $this->endSection(); ?>