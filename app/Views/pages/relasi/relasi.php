<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>

<!-- Main content -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Data Relasi</h1>
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
                        <h3 class="card-title">Data Relasi</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table" id="example1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Penyakit</th>
                                    <th>Kode Gejala</th>
                                    <th>Nama Penyakit</th>
                                    <th>Nama Gejala</th>
                                    <th>Mb</th>
                                    <th>Md</th>
                                    <th>Cf</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($relations as $index => $relation) : ?>
                                    <tr>
                                        <td><?= $index + 1 ?></td>
                                        <td><?= $relation['kode_penyakit'] ?></td>
                                        <td><?= $relation['kode_gejala'] ?></td>
                                        <td><?= $relation['nama_penyakit'] ?></td>
                                        <td><?= $relation['nama_gejala'] ?></td>
                                        <td><?= $relation['mb'] ?></td>
                                        <td><?= $relation['md'] ?></td>
                                        <td><?= $relation['cf'] ?></td>
                                        <td class="py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                                <a class="btn btn-warning btn-sm mx-1" href="<?php echo base_url('admin/relasi/edit/' . $relation['id_relasi']); ?>"><i class="fas fa-pencil-alt"></i></a>
                                                <a class="btn btn-danger btn-sm mx-1" href="<?php echo base_url('admin/relasi/delete/' . $relation['id_relasi']); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus relasi ini?');">
                                                    <i class="fas fa-trash"></i>
                                                </a>

                                            </div>
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
                        <h3 class="card-title">Tambah Data Relasi</h3>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('admin/relasi/create') ?>" method="post" name="add-relasi" id="add-relasi">
                            <?= csrf_field() ?>

                            <div class="form-group">
                                <label for="kode_penyakit">Pilih Kode Penyakit</label>
                                <select class="form-control" name="kode_penyakit" required>
                                    <option selected disabled>Pilih Kode Penyakit</option>
                                    <?php foreach ($penyakit as $item) : ?>
                                        <option value="<?= $item['id_penyakit'] ?>"><?= $item['kode_penyakit'] ?> - <?= $item['nama_penyakit'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="kode_gejala">Pilih Gejala</label>
                                <select class="form-control" name="kode_gejala" required>
                                    <option selected disabled>Pilih Kode Gejala</option>
                                    <?php foreach ($gejala as $item) : ?>
                                        <option value="<?= $item['id_gejala'] ?>"><?= $item['kode_gejala'] ?> - <?= $item['nama_gejala'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="mb">Pilih Nilai MB</label>
                                <select name="mb" class="form-control" required>
                                    <option selected>Pilih Nilai MB</option>
                                    <option>1</option>
                                    <option>0.2</option>
                                    <option>0.3</option>
                                    <option>0.4</option>
                                    <option>0.5</option>
                                    <option>0.6</option>
                                    <option>0.7</option>
                                    <option>0.8</option>
                                    <option>0.9</option>
                                    <option>1</option>
                                    <!-- Tambahkan opsi nilai MB sesuai kebutuhan -->
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="md">Pilih Nilai MD</label>
                                <select name="md" class="form-control" required>
                                    <option selected>Pilih Nilai MD</option>
                                    <option>0</option>
                                    <option>1</option>
                                    <option>0.8</option>
                                    <option>0.6</option>
                                    <option>0.4</option>
                                    <option>0.2</option>

                                    <!-- Tambahkan opsi nilai MD sesuai kebutuhan -->
                                </select>
                            </div>

                            <div class="card-footer">
                                <button type="submit" href="#" class="btn btn-warning">Save</button>
                                <a href="/relasi" class="btn btn-default float-right">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    </div>


</section>
<!-- /.content -->


<?= $this->endSection(); ?>