<?= $this->extend('template/landing_main'); ?>
<?= $this->section('content'); ?>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <i class="bi-back"></i>
            <span>SISPAK AYAM</span>
        </a>

        <div class="d-lg-none ms-auto me-4">
            <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" style="margin-left: 400px;" id="navbarNav">
            <ul class="navbar-nav ms-lg-5 me-lg-auto">
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_1">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_2">Hasil Diagnosa</a>
                </li>

                <!-- <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_3">Informasi</a>
                </li> -->

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="<?= base_url('mulai-diagnosa') ?>">Cek Diagnosa Kembali</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-12 mx-auto">
                <h1 class="text-white text-center">HASIL DIAGNOSIS</h1>

                <h6 class="text-center">Hasil diagnosis ini berdasarkan perhitungan sistem menggunakan metode certainty factor</h6>
            </div>

        </div>
    </div>
</section>


<section class="explore-section section-padding" id="section_2">
    <div class="container">

        <div class="col-12 text-center">
            <h2 class="mb-4">Hasil Perhitungan</h1>
        </div>

    </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="design-tab" data-bs-toggle="tab" data-bs-target="#design-tab-pane" type="button" role="tab" aria-controls="design-tab-pane" aria-selected="true">Penyakit</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="education-tab" data-bs-toggle="tab" data-bs-target="#education-tab-pane" type="button" role="tab" aria-controls="education-tab-pane" aria-selected="false">Solusi Penanganan</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="marketing-tab" data-bs-toggle="tab" data-bs-target="#marketing-tab-pane" type="button" role="tab" aria-controls="marketing-tab-pane" aria-selected="false">Daftar Penyakit Lain</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="finance-tab" data-bs-toggle="tab" data-bs-target="#finance-tab-pane" type="button" role="tab" aria-controls="finance-tab-pane" aria-selected="false">Detail Perhitungan</button>
                </li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-12">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="design-tab-pane" role="tabpanel" aria-labelledby="design-tab" tabindex="0">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 text-center">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="#">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Penyakit Dialami</h5>

                                                <p class="mb-0">Berdasarkan perhitungan terbesar, ayam anda mengalami penyakit</p>
                                            </div>
                                        </div>
                                        <div class="row mt-5">
                                            <h4><?= $resultDiagnosa['nama_penyakit']; ?> (<?= $resultDiagnosa['kode_penyakit']; ?>)</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 text-center">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="#">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Nilai CF</h5>

                                                <p class="mb-0">Berdasarkan perhitungan terbesar, nilai CF pada ayam anda sebesar</p>
                                            </div>
                                        </div>
                                        <div class="row mt-5">
                                            <h3><?= $resultDiagnosa['tingkat_kepercayaan']; ?></h3>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-12 text-center">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="#">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Presentase Penyakit</h5>

                                                <p class="mb-0">Berdasarkan nilai CF, maka presentase penyakitnya adalah</p>
                                            </div>
                                        </div>
                                        <div class="row mt-5">
                                            <h3><?= $resultDiagnosa['presentase']; ?>%</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="marketing-tab-pane" role="tabpanel" aria-labelledby="marketing-tab" tabindex="0">
                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-12 mb-4 mb-lg-3">
                                <div class="custom-block bg-white shadow-lg">
                                    <div class="text-center">
                                        <div>
                                            <h5 class="mb-2">Daftar Penyakit Lain</h5>

                                            <p class="mb-0">Daftar penyakit sebagai perbandingan nilai CF akhir</p>
                                        </div>
                                    </div>
                                    <?php if (count($listPenyakit) > 1) : ?>
                                        <br />
                                        <br />
                                        <div class="card card-info">
                                            <div class="card-header">
                                                <div class="card-tools">
                                                    <form>
                                                        <?php foreach ($listPenyakit as $penyakit) : ?>
                                                            <div class="col-lg-12 col-12 m-auto mt-2">
                                                                <div class="accordion" id="accordionExample">
                                                                    <div class="accordion-item">
                                                                        <h2 class="accordion-header" id="headingOne">
                                                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                                Penyakit <?= $penyakit['kode_penyakit']; ?>
                                                                            </button>
                                                                        </h2>

                                                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                                            <div class="accordion-body">
                                                                                <div class="card-body">
                                                                                    <div class="form-group row py-1">
                                                                                        <label class="col-sm-2 col-form-label text-black">Nama Penyakit</label>
                                                                                        <div class="col-sm-10">
                                                                                            <input type="text" class="form-control" value="<?= $penyakit['nama_penyakit']; ?>" readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row py-1">
                                                                                        <label class="col-sm-2 col-form-label text-black">Nilai CF</label>
                                                                                        <div class="col-sm-10">
                                                                                            <input type="text" class="form-control" value="<?= $penyakit['nilai_cf']; ?>" readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row py-1">
                                                                                        <label class="col-sm-2 col-form-label text-black">Deskripsi</label>
                                                                                        <div class="col-sm-10">
                                                                                            <textarea row="2" type="text" class="form-control" readonly><?= $penyakit['deskripsi']; ?></textarea>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row py-1">
                                                                                        <label class="col-sm-2 col-form-label text-black">Solusi</label>
                                                                                        <div class="col-sm-10">
                                                                                            <textarea row="2" type="text" class="form-control" readonly><?= $penyakit['solusi']; ?></textarea>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        <?php endforeach; ?>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="finance-tab-pane" role="tabpanel" aria-labelledby="finance-tab" tabindex="0">
                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-12 mb-4 mb-lg-0">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="#">
                                        <div class="text-center">
                                            <div>
                                                <h5 class="mb-2">Detail Perhitungan Gejala</h5>

                                                <p class="mb-0">Perhitungan ini dilakukan berdasarkan perhitungan gejala yang anda pilih</p>
                                            </div>
                                        </div>
                                        <div class="card-body mt-4">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Kode Gejala</th>
                                                        <th>Gejala Terpilih</th>
                                                        <th>Tingkat Kepercayaan</th>
                                                        <th>Kode Penyakit</th>
                                                        <th>CF Pakar</th>
                                                        <th>CF User</th>
                                                        <th>CF User * CF Pakar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1; ?>
                                                    <?php foreach ($resultDiagnosa['gejala'] as $gejala) : ?>
                                                        <tr>
                                                            <td><?= $i++; ?></td>
                                                            <td><?= $gejala['kode_gejala']; ?></td>
                                                            <td><?= $gejala['nama_gejala']; ?></td>
                                                            <td><?= $gejala['tingkat_kepercayaan']; ?></td>
                                                            <td>
                                                                <?php foreach ($penyakitCodes as $kode_penyakit) : ?>
                                                                    <?php if (in_array($kode_penyakit, $gejala['kode_penyakit'])) : ?>
                                                                        <p><?= $kode_penyakit ?></p>
                                                                    <?php endif; ?>
                                                                <?php endforeach; ?>
                                                            </td>
                                                            <td>
                                                                <?php foreach ($cf as $item) : ?>
                                                                    <?php if ($item['id_gejala'] == $gejala['id_gejala']) : ?>
                                                                        <p><?= $item['cf']; ?></p>
                                                                    <?php endif; ?>
                                                                <?php endforeach; ?>
                                                            </td>
                                                            <td><?= $gejala['cf_user']; ?></td>
                                                            <td>
                                                                <?php foreach ($cf as $value) : ?>
                                                                    <?php if ($value['id_gejala'] == $gejala['id_gejala']) : ?>
                                                                        <p><?= $value['nilai_cf']; ?></p>
                                                                    <?php endif; ?>
                                                                <?php endforeach; ?>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="tab-pane fade" id="education-tab-pane" role="tabpanel" aria-labelledby="education-tab" tabindex="0">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-3">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="#">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Deskripsi Penyakit <?= $resultDiagnosa['nama_penyakit']; ?></h5>

                                                <p class="mb-0"><?= $resultDiagnosa['deskripsi']; ?></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="#">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Solusi Penanganan <?= $resultDiagnosa['nama_penyakit']; ?></h5>

                                                <p class="mb-0"><?= $resultDiagnosa['solusi_penyakit']; ?></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</section>

<footer class="site-footer section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-12 mb-4 pb-2">
                <a class="navbar-brand mb-2" href="index.html">
                    <i class="bi-back"></i>
                    <span>SISPAK AYAM</span>
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
                <h6 class="site-footer-title mb-3">Aksi</h6>

                <ul class="site-footer-links">
                    <li class="site-footer-link-item">
                        <a href="<?= base_url('/') ?>" class="site-footer-link">Home</a>
                    </li>

                    <li class="site-footer-link-item">
                        <a href="<?= base_url('/') ?>" class="site-footer-link">Tentang</a>
                    </li>

                    <li class="site-footer-link-item">
                        <a href="<?= base_url('/') ?>" class="site-footer-link">FAQ</a>
                    </li>

                    <li class="site-footer-link-item">
                        <a href="<?= base_url('/') ?>" class="site-footer-link">Kontak</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-4 col-6 mb-4 mb-lg-0">
                <h6 class="site-footer-title mb-3">Information</h6>

                <p class="text-white d-flex mb-1">
                    <a href="tel: 305-240-9671" class="site-footer-link">
                        305-240-9671
                    </a>
                </p>

                <p class="text-white d-flex">
                    <a href="mailto:info@company.com" class="site-footer-link">
                        ahmadriski@gmail.com
                    </a>
                </p>
            </div>

            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-lg-0 ms-auto">
                <div class="dropdown">

                    <ul class="dropdown-menu">
                        <li><button class="dropdown-item" type="button">Thai</button></li>

                        <li><button class="dropdown-item" type="button">Myanmar</button></li>

                        <li><button class="dropdown-item" type="button">Arabic</button></li>
                    </ul>
                </div>

                <p class="copyright-text mt-lg-5 mt-4">Copyright © 2023 Riski Devv. All rights reserved.
                    <br><br>Design: <a rel="nofollow" href="https://templatemo.com" target="_blank">TemplateMo</a> Distribution <a href="https://themewagon.com">ThemeWagon</a>
                </p>

            </div>

        </div>
    </div>
</footer>

<?= $this->endSection(); ?>