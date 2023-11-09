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
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="<?= base_url('assets/admin/') ?>src/assets/images/logos/cms.png"
                                        width="280" alt="">
                                </a>
                                <form action="<?= base_url('admin/auth/login') ?>" method="post">
                                    <p class="text-center">Your Admin CMS</p>
                                    <div class="mb-3">
                                        <label class="form-label">Username</label>
                                        <input type="text" class="form-control" placeholder="Masukan Username"
                                            name="username">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" placeholder="Masukkan Password"
                                            name="password">
                                    </div>
                                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Login</button>
                                </form>
                                <div id='myalert'>
                                    <?= $this->session->flashdata('alert', true); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url('assets/admin/') ?>src/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>