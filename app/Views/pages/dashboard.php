<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>


<!-- Main content -->

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-virus"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Data Gejala</span>
                        <span class="info-box-number"><?= count($gejala) ?></span>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-briefcase-medical"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Data Penyakit</span>
                        <span class="info-box-number"><?= count($penyakit) ?></span>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-book"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Data Relasi</span>
                        <span class="info-box-number"><?= count($penyakit) ?></span>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user-nurse"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Data Diagnosa</span>
                        <span class="info-box-number"><?= count($penyakit) ?></span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- /.content -->


<?= $this->endSection(); ?>