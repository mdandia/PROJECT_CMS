<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DGital - Digital Agency HTML Template</title>
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
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <div class="container-xxl py-5 bg-primary hero-header">
            <div class="container my-5 py-5 px-lg-5">
                <div class="row g-5 py-5">
                    <div class="col-12 text-center">
                        <h1 class="text-white animated slideInDown">Not Found</h1>
                        <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">404</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 404 Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container px-lg-5 text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="display-1">404</h1>
                    <h1 class="mb-4">Page Not Found</h1>
                    <p class="mb-4">We’re sorry, the page you have looked for does not exist in our website! Maybe
                        go to our home page or try to use a search?</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="<?= base_url('home'); ?>">Go Back To
                        Home</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
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




<div class="row g-4">
    <?php foreach ($konten as $konten) { ?>
        <div class="col-lg-4 col-md-6 <?= $konten['id_kategori']; ?> wow fadeInUp" data-wow-delay="0.1s">
            <div class="team-item bg-light rounded">
                <div class="text-center border-bottom p-4">
                    <img class="img-fluid rounded-circle mb-4"
                        src="<?= base_url('assets/upload/konten/' . $konten['foto']) ?>" alt="">
                    <h5>
                        <?= $konten['judul']; ?>
                    </h5>
                    <span>
                        <?= $konten['nama_kategori']; ?>
                    </span>
                </div>
                <div class="d-flex justify-content-center p-4">
                    <small class="mr-3"><i class="fa fa-user text-primary"></i>
                        <?= $konten['nama']; ?>
                    </small>
                </div>
            </div>
        </div>
    <?php } ?>
</div>