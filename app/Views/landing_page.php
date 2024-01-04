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

        <div class="collapse navbar-collapse" style="margin-left: 500px;" id="navbarNav">
            <ul class="navbar-nav ms-lg-5 me-lg-auto">
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_1">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_2">Tentang</a>
                </li>

                <!-- <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_3">Informasi</a>
                </li> -->

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_3">FAQs</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_4">Kontak</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Diagnosa</a>

                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li><a class="dropdown-item" href="<?= base_url('mulai-diagnosa') ?>">Mulai Diagnosa</a></li>

                        <li><a class="dropdown-item" href="<?= base_url('admin/login') ?>">Admin Access</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>


<section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-12 mx-auto">
                <h1 class="text-white text-center">SISPAK AYAM BOILER</h1>

                <h6 class="text-center">Sistem Pakar Untuk Mendiagnosa Penyakit Pada Ayam Boiler</h6>

                <!-- <form class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search"> -->
                <div class="col-12 text-center mt-5">
                    <p class="text-white">
                        <a href="<?= base_url('mulai-diagnosa') ?>" class="btn custom-btn custom-border-btn ms-3">Mulai Diagnosa</a>
                    </p>
                </div>
                <!-- </form> -->
            </div>

        </div>
    </div>
</section>



<section class="timeline-section section-padding" id="section_2">
    <div class="section-overlay"></div>

    <div class="container">
        <div class="row">

            <div class="col-12 text-center">
                <h2 class="text-white mb-4">Tentang Aplikasi</h1>
            </div>

            <div class="col-lg-10 col-12 mx-auto">
                <div class="timeline-container">
                    <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                        <div class="list-progress">
                            <div class="inner"></div>
                        </div>

                        <li>
                            <h4 class="text-white mb-3">Apa Itu Sispak Ayam Boiler?</h4>

                            <p class="text-white">Sistem pakar untuk mendiagnosa penyakit pada ayam. Sistem pakar ini merupakan aplikasi berbasis web yang dapat digunakan oleh pakar sebagai admin dan User. Admin menggunakan sistem untuk mengolah data user yang mengakses aplikasi sistem pakar diagnosa penyakit pada ayam dan mengola data-data lainnya yaitu data gejala, data penyakit, data relasi dan data hasil diagnosa yang sudah masuk ke dalam sistem. Aplikasi sistem pakar ini berjalan menggunakan metode Forward Chaining dan Certainty Faktor yang nantinya untuk perhitungan diagnosa penyakit pada ayam sudah diatur sesuai dengan perhitungan FC dan CF. Selain itu juga Admin juga bisa mencetak laporan diagnosa user yang sudah masuk ke dalam sistem yang nantinya bisa tercetak menjadi PDF, dan bisa di cetak langsung tanpa harus mengunduh filenya terlebih dahulu.</p>

                            <div class="icon-holder">
                                <i class="bi-search"></i>
                            </div>
                        </li>

                        <li>
                            <h4 class="text-white mb-3">Metode Yang Digunakan</h4>

                            <p class="text-white">Certainty Faktor (CF) adalah untuk mengakomodasikan ketidakpastian pemikiran (inexact reasoning) seorang pakar yang diusulkan oleh Shorlife dan Buchanan pada tahun 1975. Seorang pakar sering menganalisis informasi yang dengan ungkapan dengan ketidakpastian, untuk mengakomodasikan hal ini digunakan Centainty factor guna menggambarkan tingkat keyakinan pakar terhadap masalah yang sedang dihadapi </p>

                            <div class="icon-holder">
                                <i class="bi-bookmark"></i>
                            </div>
                        </li>

                        <li>
                            <h4 class="text-white mb-3">Manfaat Sispak Ayam Boiler</h4>

                            <p class="text-white">Dengan adanya sistem pakar diagnosis penyakit pada ayam boiler berbasis web yang menggunakan metode forward chaining dan certainty factor, peternak atau petugas kesehatan hewan dapat dengan mudah dan cepat mendapatkan diagnosis yang akurat serta solusi pengobatan yang tepat. Hal ini diharapkan dapat mengurangi dampak negative dari penyakit ayam boiler dan meningkatkan porduktivitas peternakan secara keseluruhan..</p>

                            <div class="icon-holder">
                                <i class="bi-book"></i>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-12 text-center mt-5">
                <p class="text-white">
                    Mulai Diagnosa?
                    <a href="<?= base_url('mulai-diagnosa') ?>" class="btn custom-btn custom-border-btn ms-3">Click Here!</a>
                </p>
            </div>
        </div>
    </div>
</section>


<section class="faq-section section-padding" id="section_3">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12">
                <h2 class="mb-4">FAQ</h2>
            </div>

            <div class="clearfix"></div>

            <div class="col-lg-5 col-12">
                <img src="<?= base_url() ?>homepage/images/faq_graphic.jpg" class="img-fluid" alt="FAQs">
            </div>

            <div class="col-lg-6 col-12 m-auto">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Apa Itu Ayam Boiler?
                            </button>
                        </h2>

                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Jelasin disini penjelasan ayam boiler kuk. Topic Listing is free Bootstrap 5 CSS template. <strong>You are not allowed to redistribute this template</strong> on any other template collection website without our permission. Please contact TemplateMo for more detail. Thank you.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Apakah penyakit ayam bisa disembuhkan?
                            </button>
                        </h2>

                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Bebas pertanyaane. You can search on Google with <strong>keywords</strong> such as templatemo portfolio, templatemo one-page layouts, photography, digital marketing, etc.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Pertanyaan 3 terserah?
                            </button>
                        </h2>

                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="contact-section section-padding section-bg" id="section_4">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12 text-center">
                <h2 class="mb-5">Kontak</h2>
            </div>

            <div class="col-lg-5 col-12 mb-4 mb-lg-0">
                <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.486694224849!2d108.53427167422022!3d-6.710301593285439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ee217af90f9eb%3A0xe2e79b46868b87eb!2sUniversitas%20Muhammadiyah%20Cirebon%20Kampus%201!5e0!3m2!1sid!2sid!4v1690910701786!5m2!1sid!2sid" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-3 mb-lg- mb-md-0 ms-auto">
                <h4 class="mb-3">UMC</h4>

                <p>Jalan Watubelah Cirebon Jawa Barat</p>

                <hr>

                <p class="d-flex align-items-center mb-1">
                    <span class="me-2">Phone</span>

                    <a href="tel: 305-240-9671" class="site-footer-link">
                        305-240-9671
                    </a>
                </p>

                <p class="d-flex align-items-center">
                    <span class="me-2">Email</span>

                    <a href="mailto:info@company.com" class="site-footer-link">
                        umc.ac.id
                    </a>
                </p>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mx-auto">
                <h4 class="mb-3">Developer </h4>

                <p>Jamblang Kabupaten Cirebon Jawa Barat</p>

                <hr>

                <p class="d-flex align-items-center mb-1">
                    <span class="me-2">Phone</span>

                    <a href="tel: 110-220-3400" class="site-footer-link">
                        110-220-3400
                    </a>
                </p>

                <p class="d-flex align-items-center">
                    <span class="me-2">Email</span>

                    <a href="mailto:info@company.com" class="site-footer-link">
                        info@ahmadriski@gmail.com.com
                    </a>
                </p>
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
                        <a href="#" class="site-footer-link">Home</a>
                    </li>

                    <li class="site-footer-link-item">
                        <a href="#" class="site-footer-link">Tentang</a>
                    </li>

                    <li class="site-footer-link-item">
                        <a href="#" class="site-footer-link">FAQ</a>
                    </li>

                    <li class="site-footer-link-item">
                        <a href="#" class="site-footer-link">Kontak</a>
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