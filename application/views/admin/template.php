<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $judul_title; ?>
    </title>
    <link rel="shortcut icon" type="image/png"
        href="<?= base_url('assets/admin/') ?>src/assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>src/assets/css/styles.min.css" />
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js">
    <!-- Place the first <script> tag in your HTML's <head> -->
    <script src=" https://cdn.tiny.cloud/1/aq37vou6o6fl7r2lfo92721t18z6173r03hevnh6qpu52i0f/tinymce/6/tinymce.min.js"
        referrerpolicy="origin">
        </script>
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="<?= base_url(); ?>" class="text-nowrap logo-img">
                        <img src="<?= base_url('assets/admin/') ?>src/assets/images/logos/logo2.png" alt=""
                            style="margin-top: 20px;height: 100px;" />
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Home</span>
                        </li>
                        <li class="sidebar-item" <?= activate_menu('dashboard'); ?>>
                            <a class="sidebar-link" href="<?= base_url('admin/dashboard/index') ?>"
                                aria-expanded="false">
                                <span>
                                    <i class="ti ti-layout-dashboard"></i>
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Extra</span>
                        </li>
                        <?php if ($this->session->userdata('level') == 'admin') { ?>
                            <li class="sidebar-item" <?= activate_menu('pengguna'); ?>>
                                <a class="sidebar-link" href="<?= base_url('admin/user/') ?>" aria-expanded="false">
                                    <span>
                                        <i class="ti ti-user-plus"></i>
                                    </span>
                                    <span class="hide-menu">Pengguna</span>
                                </a>
                            </li>
                        <?php } ?>
                        <div class="dropdown">
                            <li class="sidebar-item" type="button" data-bs-toggle="dropdown">
                                <a class="sidebar-link" aria-expanded="false">
                                    <span>
                                        <i class="ti ti-list"></i>
                                    </span>
                                    <span class="hide-menu">Kategori </span>
                                </a>
                            </li>
                            <ul class="dropdown-menu">
                                <li class="sidebar-item" <?= activate_menu('kategori'); ?>>
                                    <a class="sidebar-link" href="<?= base_url('admin/kategori/') ?>"
                                        aria-expanded="false">
                                        <span>
                                            <i class="ti ti-point"></i>
                                        </span>
                                        <span class="hide-menu">Kategori Blog</span>
                                    </a>
                                </li>
                                <li class="sidebar-item" <?= activate_menu('menu'); ?>>
                                    <a class="sidebar-link" href="<?= base_url('admin/menu/') ?>" aria-expanded="false">
                                        <span>
                                            <i class="ti ti-point"></i>
                                        </span>
                                        <span class="hide-menu">Kategori Menu</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <li class="sidebar-item" <?= activate_menu('konten'); ?>>
                            <a class="sidebar-link" href="<?= base_url('admin/konten') ?>" aria-expanded="false">
                                <span>
                                    <i class="ti ti-cards"></i>
                                </span>
                                <span class="hide-menu">Konten Blog</span>
                            </a>
                        </li>
                        <li class="sidebar-item" <?= activate_menu('reservasi'); ?>>
                            <a class="sidebar-link" href="<?= base_url('admin/reservasiad') ?>" aria-expanded="false">
                                <span>
                                    <i class="ti ti-clipboard-text"></i>
                                </span>
                                <span class="hide-menu">Data Reservasi</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="<?= base_url('admin/pricelist') ?>" aria-expanded="false">
                                <span>
                                    <i class="ti ti-receipt"></i>
                                </span>
                                <span class="hide-menu">PriceList Menu</span>
                            </a>
                        </li>
                        <li class="sidebar-item" <?= activate_menu('konfigurasi'); ?>>
                            <a class="sidebar-link" href="<?= base_url('admin/konfigurasi') ?>" aria-expanded="false">
                                <span>
                                    <i class="ti ti-aperture"></i>
                                </span>
                                <span class="hide-menu">Konfigurasi</span>
                            </a>
                        </li>
                        <li class="sidebar-item" <?= activate_menu('caraousel'); ?>>
                            <a class="sidebar-link" href="<?= base_url('admin/caraousel') ?>" aria-expanded="false">
                                <span>
                                    <i class="ti ti-album"></i>
                                </span>
                                <span class="hide-menu">Caraousel</span>
                            </a>
                        </li>
                        <li class="sidebar-item" <?= activate_menu('gallery'); ?>>
                            <a class="sidebar-link" href="<?= base_url('admin/gallery') ?>" aria-expanded="false">
                                <span>
                                    <i class="ti ti-photo-plus"></i>
                                </span>
                                <span class="hide-menu">Gallery</span>
                            </a>
                        </li>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-hover" style="font-size: 14px;font-weight: bold;">
                                <?= $judul_title; ?>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <a href="<?= base_url('admin/auth/logout') ?>" onclick="Anda yakin logout?"
                                class="btn btn-danger mx-3 mt-2 d-block">Logout</a>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->
            <div class="container-fluid">
                <div class="content">
                    <div class="card mt-4">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold mb-4">
                                <?php echo $contents ?>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Place the following <script> and <textarea> tags your HTML's <body> -->
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    </script>
    <script src="<?= base_url('assets/admin/') ?>src/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>src/assets/js/sidebarmenu.js"></script>
    <script src="<?= base_url('assets/admin/') ?>src/assets/js/app.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>src/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>src/assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="<?= base_url('assets/admin/') ?>src/assets/js/dashboard.js"></script>
    <script src="<?= base_url(); ?>assets/ckeditor/ckeditor.js"> </script>
    <script>
        CKEDITOR.replace('konten');
    </script>
    <script>
        $('#myalert').delay('slow').slideDown('slow').delay(4000).slideUp(600);
    </script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
</body>

</html>