<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        <?= $judul; ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url('assets/publik/') ?>images/icons/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="<?= base_url('assets/publik/') ?>vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="<?= base_url('assets/publik/') ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/publik/') ?>fonts/themify/themify-icons.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/publik/') ?>vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="<?= base_url('assets/publik/') ?>vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="<?= base_url('assets/publik/') ?>vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/publik/') ?>vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="<?= base_url('assets/publik/') ?>vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/publik/') ?>vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="<?= base_url('assets/publik/') ?>vendor/lightbox2/css/lightbox.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/publik/') ?>css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/publik/') ?>css/main.css">
    <!--===============================================================================================-->
</head>

<body class="animsition">

    <!-- Header -->
    <header>
        <!-- Header desktop -->
        <div class="wrap-menu-header gradient1 trans-0-4">
            <div class="container h-full">
                <div class="wrap_header trans-0-3">
                    <!-- Logo -->

                    <a href="<?= base_url('') ?>">
                        <h2 class="logo_font">
                            <?= $konfig->judul_website; ?>
                        </h2>
                    </a>

                    <!-- Menu -->
                    <div class="wrap_menu p-l-45 p-l-0-xl">
                        <nav class="menu">
                            <ul class="main_menu">
                                <li>
                                    <a href="<?= base_url('') ?>">Home</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('reservasi/') ?>">Reservation</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('menu/') ?>">Menu</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('about/') ?>">About</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('blog/') ?>">Blog</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('gallery/') ?>">Gallery</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('kontak/') ?>">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <!-- Social -->
                    <div class="social flex-w flex-l-m p-r-20">
                        <a href="<?= $konfig->instagram; ?>" target="_blank" class="fs-15 c-white"><i
                                class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="<?= $konfig->facebook; ?>" target="_blank" class="fs-15 c-white"><i
                                class="fa fa-facebook m-l-18" aria-hidden="true"></i></a>
                        <a href="<?= $konfig->tiktok; ?>" target="_blank" class="fs-15 c-white"><i
                                class="fa-brands fa-tiktok m-l-18"></i>
                            </i></a>

                        <button class="btn-show-sidebar m-l-33 trans-0-4"></button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Sidebar -->
    <aside class="sidebar trans-0-4">
        <!-- Button Hide sidebar -->
        <button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

        <!-- - -->
        <ul class="menu-sidebar p-t-95 p-b-70">
            <li class="t-center m-b-13">
                <a href="<?= base_url('') ?>" class="txt19">Home</a>
            </li>

            <li class="t-center m-b-13">
                <a href="<?= base_url('about/') ?>" class="txt19">About</a>
            </li>
            <li class="t-center m-b-13">
                <a href="<?= base_url('reservasi/') ?>" class="txt19">Reservation</a>
            </li>
            <li class="t-center m-b-13">
                <a href="<?= base_url('menu/') ?>" class="txt19">Menu</a>
            </li>
            <li class="t-center m-b-13">
                <a href="<?= base_url('blog/') ?>" class="txt19">Blog</a>
            </li>
            <li class="t-center m-b-13">
                <a href="<?= base_url('gallery/') ?>" class="txt19">Gallery</a>
            </li>
            <li class="t-center m-b-33">
                <a href="<?= base_url('kontak/') ?>" class="txt19">Contact</a>
            </li>

            <li class="t-center">
                <!-- Button3 -->
                <a href="<?= base_url('admin/auth/') ?>" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto">
                    Login
                </a>
            </li>
        </ul>

        <!-- - -->
        <div class="gallery-sidebar t-center p-l-60 p-r-60 p-b-40">
            <!-- - -->
            <h4 class="txt20 m-b-33">
                Gallery
            </h4>
            <!-- Gallery -->

            <div class="wrap-gallery-sidebar flex-w">
                <?php $no = 1;
                foreach ($gallery as $tt) { ?>
                    <a class="item-gallery-sidebar wrap-pic-w"
                        href="<?= base_url('assets/upload/gallery/' . $tt['foto']); ?>" data-lightbox="gallery-footer">
                        <img src="<?= base_url('assets/upload/gallery/' . $tt['foto']); ?>" alt="GALLERY">
                    </a>
                    <?php $no++;
                } ?>
            </div>

        </div>
    </aside>

    <?php echo $contents ?>


    <!-- Footer -->
    <footer class="bg1">
        <div class="container p-t-40 p-b-70">
            <div class="row">
                <div class="col-sm-6 col-md-4 p-t-50">
                    <!-- - -->
                    <h4 class="txt13 m-b-33">
                        Contact Us
                    </h4>

                    <ul class="m-b-70">
                        <li class="txt14 m-b-14">
                            <i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i>
                            <?= $konfig->alamat; ?>
                        </li>

                        <li class="txt14 m-b-14">
                            <i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>
                            <?= $konfig->no_wa; ?>
                        </li>

                        <li class="txt14 m-b-14">
                            <i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>
                            <?= $konfig->email; ?>
                        </li>
                    </ul>

                    <!-- - -->
                    <h4 class="txt13 m-b-32">
                        Opening Times
                    </h4>

                    <ul>
                        <li class="txt14">
                            <?= $konfig->jam_buka; ?>
                        </li>

                        <li class="txt14">
                            Every Day
                        </li>
                    </ul>
                </div>

                <div class="col-sm-6 col-md-4 p-t-50">
                    <!-- - -->
                    <h4 class="txt13 m-b-33">
                        Link
                    </h4>

                    <div class="m-b-25">
                        <span class="fs-13 color2 m-r-5">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </span>
                        <a href="<?= base_url(''); ?>" class="txt18">
                            Home
                        </a>
                    </div>
                    <div class="m-b-25">
                        <span class="fs-13 color2 m-r-5">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </span>
                        <a href="<?= base_url('reservasi/'); ?>" class="txt18">
                            Reservasi
                    </div>
                    <div class="m-b-25">
                        <span class="fs-13 color2 m-r-5">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </span>
                        <a href="<?= base_url('menu/'); ?>" class="txt18">
                            Menu
                        </a>
                    </div>
                    <div class="m-b-25">
                        <span class="fs-13 color2 m-r-5">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </span>
                        <a href="<?= base_url('about/'); ?>" class="txt18">
                            About
                        </a>
                    </div>
                    <div class="m-b-25">
                        <span class="fs-13 color2 m-r-5">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </span>
                        <a href="<?= base_url('blog/'); ?>" class="txt18">
                            Blog
                        </a>
                    </div>
                    <div class="m-b-25">
                        <span class="fs-13 color2 m-r-5">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </span>
                        <a href="<?= base_url('gallery/'); ?>" class="txt18">
                            Gallery
                        </a>
                    </div>
                    <div class="m-b-25">
                        <span class="fs-13 color2 m-r-5">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </span>
                        <a href="<?= base_url('kontak/'); ?>" class="txt18">
                            Contact
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 p-t-50">
                    <!-- - -->
                    <h4 class="txt13 m-b-38">
                        Gallery
                    </h4>

                    <!-- Gallery footer -->
                    <div class="wrap-gallery-footer flex-w">
                        <?php $no = 1;
                        foreach ($gallery as $yy) { ?>
                            <a class="item-gallery-footer wrap-pic-w"
                                href="<?= base_url('assets/upload/gallery/' . $yy['foto']); ?>"
                                data-lightbox="gallery-footer">
                                <img src="<?= base_url('assets/upload/gallery/' . $yy['foto']); ?>" alt="GALLERY">
                            </a>
                            <?php $no++;
                        } ?>
                    </div>

                </div>
            </div>
        </div>

        <div class="end-footer bg2">
            <div class="container">
                <div class="flex-sb-m flex-w p-t-22 p-b-22">
                    <div class="p-t-5 p-b-5">
                        <a href="<?= $konfig->instagram; ?>" target="_blank" class="fs-15 c-white"><i
                                class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="<?= $konfig->facebook; ?>" target="_blank" class="fs-15 c-white"><i
                                class="fa fa-facebook m-l-18" aria-hidden="true"></i></a>
                        <a href="<?= $konfig->tiktok; ?>" target="_blank" class="fs-15 c-white"><i
                                class="fa-brands fa-tiktok m-l-18"></i>
                            </i></a>
                    </div>

                    <div class="txt17 p-r-20 p-t-5 p-b-5">
                        Copyright &copy; 2023 All rights reserved | This Website is made with <i
                            class="fa fa-heart"></i> by
                        <?= $konfig->judul_website; ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Back to top -->
    <div class="btn-back-to-top bg0-hov" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="fa fa-angle-double-up" aria-hidden="true"></i>
        </span>
    </div>

    <!-- Container Selection1 -->
    <div id="dropDownSelect1"></div>

    <!-- Modal Video 01-->
    <div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">

        <div class="modal-dialog" role="document" data-dismiss="modal">
            <div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

            <div class="wrap-video-mo-01">
                <div class="w-full wrap-pic-w op-0-0"><img
                        src="<?= base_url('assets/publik/') ?>images/icons/video-16-9.jpg" alt="IMG"></div>
                <div class="video-mo-01">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $konfig->id_yt; ?>"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>



    <!--===============================================================================================-->
    <script type="text/javascript" src="<?= base_url('assets/publik/') ?>vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="https://kit.fontawesome.com/c1847bbd37.js" crossorigin="anonymous"></script>
    <!--===============================================================================================-->
    <script type="text/javascript"
        src="<?= base_url('assets/publik/') ?>vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="<?= base_url('assets/publik/') ?>vendor/bootstrap/js/popper.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/publik/') ?>vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="<?= base_url('assets/publik/') ?>vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="<?= base_url('assets/publik/') ?>vendor/daterangepicker/moment.min.js"></script>
    <script type="text/javascript"
        src="<?= base_url('assets/publik/') ?>vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="<?= base_url('assets/publik/') ?>vendor/slick/slick.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/publik/') ?>js/slick-custom.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="<?= base_url('assets/publik/') ?>vendor/parallax100/parallax100.js"></script>
    <script type="text/javascript">
        $('.parallax100').parallax100();
    </script>
    <!--===============================================================================================-->
    <script type="text/javascript"
        src="<?= base_url('assets/publik/') ?>vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="<?= base_url('assets/publik/') ?>vendor/lightbox2/js/lightbox.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/publik/') ?>vendor/isotope/isotope.pkgd.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/publik/') ?>js/main.js"></script>

</body>

</html>