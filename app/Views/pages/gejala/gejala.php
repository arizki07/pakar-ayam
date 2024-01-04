<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>

<!-- Main content -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Data Gejala</h1>
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
                        <h3 class="card-title">Data Gejala</h3>
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
                                <th>Kode Gejala</th>
                                <th>Nama Gejala</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($Gejalas as $gejala) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $gejala['kode_gejala']; ?></td>
                                        <td><?= $gejala['nama_gejala']; ?></td>
                                        <td>
                                            <a class="btn btn-warning btn-sm mx-1" href="<?php echo base_url('admin/gejala/edit/' . $gejala['id_gejala']); ?>"><i class="fas fa-pencil-alt"></i></a>
                                            <a class="btn btn-danger btn-sm mx-1" href="<?php echo base_url('admin/gejala/delete/' . $gejala['id_gejala']); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus gejala ini?');">
                                                <i class="fas fa-trash"></i>
                                            </a>

                                        </td>
                                    </tr>
                                <?php endforeach; ?>
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
                        <h3 class="card-title">Tambah Data Gejala</h3>
                    </div>
                    <div class="card-body p-0">
                        <div class="card-body">
                            <form action="<?= base_url('admin/gejala/store') ?>" method="post" id="add-gejala" name="add-gejala">
                                <?= csrf_field() ?>
                                <div class="form-group">
                                    <label for="kode_gejala">Kode Gejala</label>
                                    <input type="text" class="form-control" id="kode_gejala" name="kode_gejala" placeholder="Kode Gejala">
                                </div>
                                <div class="form-group">
                                    <label for="nama_gejala">Nama Gejala</label>
                                    <input type="text" class="form-control" id="nama_gejala" name="nama_gejala" placeholder="Nama Gejala">
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-warning ">Save</button>
                                    <!-- type="submit"  -->
                                    <button href="/gejala" class="btn btn-default float-right">Cancel</button></a>
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