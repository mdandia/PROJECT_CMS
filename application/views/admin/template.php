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
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" />
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
                        <img src="<?= base_url('assets/admin/') ?>src/assets/images/logos/cms.png" width="150px" alt=""
                            style="margin-top: 20px;" />
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
                        <li class="sidebar-item" <?= activate_menu('kategori'); ?>>
                            <a class="sidebar-link" href="<?= base_url('admin/kategori/') ?>" aria-expanded="false">
                                <span>
                                    <i class="ti ti-article"></i>
                                </span>
                                <span class="hide-menu">Kategori barang</span>
                            </a>
                        </li>
                        <li class="sidebar-item" <?= activate_menu('konten'); ?>>
                            <a class="sidebar-link" href="<?= base_url('admin/konten') ?>" aria-expanded="false">
                                <span>
                                    <i class="ti ti-cards"></i>
                                </span>
                                <span class="hide-menu">Konten Barang</span>
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
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="<?= base_url('admin/pricelist') ?>" aria-expanded="false">
                                <span>
                                    <i class="ti ti-alert-circle"></i>
                                </span>
                                <span class="hide-menu">PriceList</span>
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
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="<?= base_url('assets/admin/') ?>src/assets/images/profile/user-1.jpg"
                                        alt="" width="35" height="35" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-user fs-6"></i>
                                            <p class="mb-0 fs-3">My Profile</p>
                                        </a>
                                        <a href="<?= base_url('admin/auth/logout') ?>" onclick="Anda yakin logout?"
                                            class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                    </div>
                                </div>
                            </li>
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
    <script>
        new DataTable('#coba');
    </script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
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
</body>

</html>