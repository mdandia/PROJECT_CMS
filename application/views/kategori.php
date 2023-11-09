<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        <?= $judul; ?>
    </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?= base_url('assets/publik/'); ?>img/icon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('assets/publik/'); ?>lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/publik/'); ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/publik/'); ?>lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('assets/publik/'); ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url('assets/publik/'); ?>css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">

    <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-3 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0">
                        <?= $konfig->judul_website; ?>
                    </h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="<?= base_url(); ?>" class="nav-item nav-link">Home</a>
                        <?php foreach ($kategori as $kate) { ?>
                            <a href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>" class="nav-item nav-link"><?= $kate['nama_kategori']; ?></a>
                        <?php } ?>
                    </div>
                    <a href="<?= base_url('admin/auth'); ?>"
                        class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Login</a>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-primary hero-header">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated slideInDown">
                                <?= $nama_kateg;?>
                            </h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- Navbar & Hero End -->
            <!-- Projects Start -->
            <div class="container-xxl py-5" id="konten">
                <div class="container py-5 px-lg-5">
                    <div class="wow fadeInUp" data-wow-delay="0.1s">
                        <p class="section-title text-secondary justify-content-center"><span></span>Our
                            Projects<span></span></p>
                        <h1 class="text-center mb-5">Projects
                            <?= $konfig->judul_website; ?>
                        </h1>
                    </div>
                    <div class="row g-4 portfolio-container">
                        <?php foreach ($konten as $konten) { ?>
                            <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp"
                                data-wow-delay="0.1s">
                                <div class="rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <img class="img-fluid w-80"
                                            src="<?= base_url('assets/upload/konten/' . $konten['foto']) ?>"
                                            style="width: 280px;">
                                        <div class="portfolio-overlay">
                                            <a class="btn btn-square btn-outline-light mx-1"
                                                href="<?= base_url('assets/upload/konten/' . $konten['foto']) ?>"
                                                data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                            <a class="btn btn-square btn-outline-light mx-1" href=""><i
                                                    class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="bg-light p-6">
                                        <h4 class="">
                                            <?= $konten['judul']; ?>
                                        </h4>
                                        <small class="mr-6"><i class="fa fa-folder text-primary"></i>
                                            <?= $konten['nama_kategori']; ?>
                                        </small>
                                        <small class="mr-3"><i class="fa fa-user text-primary"></i>
                                            <?= $konten['nama']; ?>
                                        </small>

                                    </div>
                                    <a href="<?= base_url('home/artikel/' . $konten['slug']) ?>"
                                        class="btn btn-primary px-8 mx-auto my-2">Read More</a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <!-- Projects End -->

                <!-- Footer Start -->
                <div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
                    <div class="container py-5 px-lg-5">
                        <div class="row g-5">
                            <div class="col-md-6 col-lg-3">
                                <p id="kontak" class="section-title text-white h5 mb-4">Address<span></span></p>
                                <p><i class="fa fa-map-marker-alt me-3"></i>
                                    <?= $konfig->alamat; ?>
                                </p>
                                <p><i class="fa fa-phone-alt me-3"></i>
                                    <?= $konfig->no_wa; ?>
                                </p>
                                <p><i class="fa fa-envelope me-3"></i>
                                    <?= $konfig->email; ?>
                                </p>
                                <div class="d-flex pt-2">
                                    <a class="btn btn-outline-light btn-social" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-light btn-social"
                                        href="http:// <?= $konfig->facebook; ?>"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light btn-social"
                                        href="http://<?= $konfig->instagram; ?>"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <p class="section-title text-white h5 mb-4">Quick Link<span></span></p>
                                <a href="<?= base_url(); ?>" class="btn btn-link">Home</a>
                                <?php foreach ($kategori as $yy) { ?>
                                    <a href="<?= base_url('home/kategori/' . $yy['id_kategori']) ?>"
                                        class="btn btn-link"><?= $yy['nama_kategori']; ?></a>
                                <?php } ?>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <p class="section-title text-white h5 mb-4">Gallery<span></span></p>
                                <?php foreach ($caraousel as $cara) { ?>
                                    <div class="row g-2">
                                        <div class="col-4">
                                            <img class="img-fluid"
                                                src="<?= base_url('assets/upload/carousel/' . $cara['foto']); ?>"
                                                alt="Image">
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <p class="section-title text-white h5 mb-4">Profil Perusahaan<span></span></p>
                                <p>
                                    <?= $konfig->profil_website; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container px-lg-5">
                        <div class="copyright">
                            <div class="row">
                                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                    &copy; <a class="border-bottom" href="#">
                                        <?= $konfig->judul_website; ?>
                                    </a>, All Right Reserved.
                                    Designed By ME
                                </div>
                                <div class="col-md-6 text-center text-md-end">
                                    <div class="footer-menu">
                                        <a href="">Home</a>
                                        <a href="">Cookies</a>
                                        <a href="">Help</a>
                                        <a href="">FQAs</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer End -->


                <!-- Back to Top -->
                <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i
                        class="bi bi-arrow-up"></i></a>
            </div>

            <!-- JavaScript Libraries -->
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="<?= base_url('assets/publik/'); ?>lib/wow/wow.min.js"></script>
            <script src="<?= base_url('assets/publik/'); ?>lib/easing/easing.min.js"></script>
            <script src="<?= base_url('assets/publik/'); ?>lib/waypoints/waypoints.min.js"></script>
            <script src="<?= base_url('assets/publik/'); ?>lib/counterup/counterup.min.js"></script>
            <script src="<?= base_url('assets/publik/'); ?>lib/owlcarousel/owl.carousel.min.js"></script>
            <script src="<?= base_url('assets/publik/'); ?>lib/isotope/isotope.pkgd.min.js"></script>
            <script src="<?= base_url('assets/publik/'); ?>lib/lightbox/js/lightbox.min.js"></script>

            <!-- Template Javascript -->
            <script src="<?= base_url('assets/publik/'); ?>js/main.js"></script>
</body>

</html>