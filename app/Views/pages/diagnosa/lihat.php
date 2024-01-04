<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>

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
                            <th>Nama User</th>
                            <th>Tanggal</th>
                            <th>Penyakit</th>
                            <th>CF Akhir</th>
                            <th>Presentase</th>
                        </thead>
                        <tbody>
                            <?php if ($result) : ?> <tr>
                                    <td><?= $result['nama_user']; ?></td>
                                    <td><?= $result['tanggal']; ?></td>
                                    <td><?= $result['id_penyakit']; ?></td>
                                    <td><?= $result['cf']; ?></td>
                                    <td><?= $result['presentase']; ?>%</td>
                                </tr>
                            <?php else : ?>
                                <tr>
                                    <td colspan="6">Data tidak tersedia.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                    <div class="card-footer">
                        <a href="<?= base_url('admin/diagnosa') ?>" class="btn btn-primary btn-sm float-right"><i class="fas fa-chevron-left"></i> Kembali</a></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>