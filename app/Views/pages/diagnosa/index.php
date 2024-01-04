<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>

<!-- Main content -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Data Diagnosa</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">

    <div class="container-fluid">
        <div class="col-md-12">
            <div class="card card-info">
                <?= $this->include('alerts/alert') ?>
                <div class="card-header">
                    <h3 class="card-title">Data Diagnosa</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-head-fixed text-nowrap" id="example1">
                        <thead>
                            <th>No</th>
                            <th>Nama User</th>
                            <th>Tanggal</th>
                            <th>Penyakit</th>
                            <th>CF Akhir</th>
                            <th>Presentase</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($result as $data) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $data['nama_user']; ?></td>
                                    <td><?= $data['tanggal']; ?></td>
                                    <td><?= $data['id_penyakit']; ?></td>
                                    <td><?= $data['cf']; ?></td>
                                    <td><?= $data['presentase']; ?></td>
                                    <td>
                                        <a class="btn btn-warning btn-sm mx-1" href="<?php echo base_url('admin/diagnosa/detail/' . $data['id']); ?>"><i class="fas fa fa-eye"></i></a>

                                        <a class="btn btn-danger btn-sm mx-1" href="<?php echo base_url('admin/diagnosa/delete/' . $data['id']); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus gejala ini?');">
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
</section>

<?= $this->endSection(); ?>