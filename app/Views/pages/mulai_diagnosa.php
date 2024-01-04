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
    </div>
</nav>


<header class="site-header d-flex flex-column justify-content-center align-items-center">
    <div class="container">
        <div class="row justify-content-center align-items-center">

            <div class="col-lg-5 col-12 mb-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Homepage</a></li>

                        <li class="breadcrumb-item active" aria-current="page">Cek Diagnosa</li>
                    </ol>
                </nav>

                <h2 class="text-white">CEK DIAGNOSA<br> PENYAKIT AYAM BOILER </h2>

                <div class="d-flex align-items-center mt-5">
                    <a href="#topics-detail" class="btn custom-btn custom-border-btn smoothscroll me-4">Mulai Diagnosa</a>
                </div>
            </div>

            <div class="col-lg-5 col-12">
                <div class="topics-detail-block shadow-lg">
                    <img src="<?= base_url('landing_page/assets/img/ayam.png') ?>" class="topics-detail-block-image img-fluid">
                </div>
            </div>

        </div>
    </div>
</header>


<section class="topics-detail-section section-padding" id="topics-detail">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-12 m-auto text-center">
                <h3 class="mb-4">Pilih Gejala</h3>

                <p>Silahkan pilih gejala yang dialami oleh ayam boiler milik anda.</p>

                <p><strong>Tidak semua gejala harus dipilih</strong>. gejala wajib dipilih minimal 1 beserta dengan nilai kepercayaan yang anda percayai.</p>

            </div>

            <div class="card-body table-responsive p-0">
                <form action="<?= site_url('/mulai-diagnosa/start') ?>" method="post">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h5 class="card-title text-black">Form Gejala</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group py-2">
                                <label for="username" class="mb-2 text-black" style="float: left;">Nama Lengkap</label>
                                <input type="text" name="username" id="username" class="form-control" placeholder="Nama Lengkap" required>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <th>Pilih Gejala</th>
                                        <th>Kode Gejala</th>
                                        <th>Nama Gejala</th>
                                        <th>Tingkat Kepercayaan</th>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($result as $key => $gejala) : ?>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="selectedGejala[]" value="<?= $gejala['id_gejala'] ?>" id="check<?= $gejala['id_gejala'] ?>" onchange="">
                                                </td>
                                                <td>
                                                    <label class="form-check-label" for="check<?= $gejala['id_gejala'] ?>">
                                                        <?= $gejala['kode_gejala'] ?>
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="form-check-label" for="check<?= $gejala['id_gejala'] ?>">
                                                        <?= $gejala['nama_gejala'] ?>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <select class="form-select" name="cf[]" required>
                                                            <option selected disabled>--Pilih Nilai--</option>
                                                            <?php foreach ($listCFUser as $item) : ?>
                                                                <option value="<?= $item['id'] ?>">
                                                                    <?= $item['nama_nilai'] ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-center mt-3">
                                <button type="button" class="btn btn-secondary" onclick="history.back('/')">Kembali</button>
                                <button type="submit" class="btn btn-primary mr-2 mx-2">Diagnosa</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    </div>
</section>


<section class="section-padding section-bg">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-5 col-12">
                <img src="images/rear-view-young-college-student.jpg" class="newsletter-image img-fluid" alt="">
            </div>

            <div class="col-lg-5 col-12 subscribe-form-wrap d-flex justify-content-center align-items-center">
                <form class="custom-form subscribe-form" action="#" method="post" role="form">
                    <h4 class="mb-4 pb-2">Get Newsletter</h4>

                    <input type="email" name="subscribe-email" id="subscribe-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email Address" required="">

                    <div class="col-lg-12 col-12">
                        <button type="submit" class="form-control">Subscribe</button>
                    </div>
                </form>
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