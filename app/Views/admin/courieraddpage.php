<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="kurir suroboyo">
    <meta name="keywords" content="kurir suroboyo">
    <meta name="author" content="kurir suroboyo">
    <title>Kurir Suroboyo</title>
    <link rel="apple-touch-icon" href="<?= base_url('/ico/logokotak.ico') ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('/ico/logokotak.png') ?>">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('/css/vendors.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('/css/validation/form-validation.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('/css/select/select2.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('/css/pickadate/pickadate.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('/css/animate/animate.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('/css/extensions/sweetalert2.min.css') ?>">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('/css/admin/bootstrap.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('/css/admin/bootstrap-extended.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('/css/admin/colors.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('/css/admin/components.css') ?>">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('/css/vertical-menu.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('/css/page-users.css') ?>">
    <!-- END: Page CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <div class="header-navbar-shadow"></div>
    <nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top ">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon bx bx-menu"></i></a></li>
                        </ul>
                    </div>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-language="id" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-id"></i><span class="selected-language">Indonesia</span></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon bx bx-fullscreen"></i></a></li>
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name">Admin</span><span class="user-status text-muted">Kurir Suroboyo</span></div><span><img class="round" src="<?= base_url('/ico/logocoklat.png') ?>" alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right pb-0"><a class="dropdown-item" href="<?= base_url('/logout') ?>"><i class="bx bx-power-off mr-50"></i> Keluar</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="/dashboard">
                        <h2 class="brand-text mb-0">Kurir Suroboyo</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary"></i><i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary" data-ticon="bx-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="lines">
                <li class=" nav-item"><a href="<?= base_url('/dashboard') ?>"><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
                </li>
                <li class=" nav-item"><a href="<?= base_url('/userlist') ?>"><span class="menu-title" data-i18n="User">Pelanggan</span></a>
                </li>
                <li class=" nav-item"><a href="<?= base_url('/orderlist') ?>"><span class="menu-title" data-i18n="User">Pemesanan</span></a>
                </li>
                <li class=" nav-item"><a href="<?= base_url('/courierlist') ?>"><span class="menu-title" data-i18n="User">Kurir</span></a>
                </li>
                <li class=" nav-item"><a href="<?= base_url('/ratelist') ?>"><span class="menu-title" data-i18n="User">Tarif</span></a>
                </li>
                <li class=" nav-item"><a href="<?= base_url('/discountlist') ?>"><span class="menu-title" data-i18n="User">Diskon</span></a>
                </li>
                <li class=" nav-item"><a href="<?= base_url('/commentlist') ?>"><span class="menu-title" data-i18n="User">Kritik & Saran</span></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- users edit start -->
                <section class="users-edit">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active fade show" id="account" aria-labelledby="account-tab" role="tabpanel">
                                        <!-- users edit account form start -->
                                        <form action="<?= $action; ?>" method="post" enctype="multipart/form-data">
                                            <?php if (session()->getFlashData('success')) : ?>
                                                <div class="alert alert-success" role="alert">
                                                    <?= session()->getFlashData('success'); ?>
                                                </div>
                                            <?php elseif (session()->getFlashData('error')) : ?>
                                                <div class="alert alert-danger" role="alert">
                                                    <?= session()->getFlashData('error'); ?>
                                                </div>
                                            <?php endif; ?>
                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Id Kurir</label>
                                                            <input type="text" class="form-control" id="id_kurir" name="id_kurir" required data-validation-required-message="Id Kurir harus diisi" value="<?= (isset($courier_id)) ? $courier_id : $datakurir['id_kurir']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Nama</label>
                                                            <input type="text" id="nama_kurir" name="nama_kurir" class="form-control" required data-validation-required-message="Nama harus diisi" value="<?= (isset($datakurir)) ? $datakurir['nama_kurir'] : ''; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Alamat</label>
                                                            <input type="text" id="alamat_kurir" name="alamat_kurir" class="form-control" required data-validation-required-message="Alamat harus diisi" value="<?= (isset($datakurir)) ? $datakurir['alamat_kurir'] : ''; ?>">
                                                        </div>
                                                    </div>
                                                </div><div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Nomor Telp</label>
                                                            <input type="tel" id="telp_kurir" name="telp_kurir" oninput="this.value = this.value.replace(/[e\+\-]/gi, '');" class="form-control required data-validation-required-message="Nomor Telp harus diisi"  value="<?= (isset($datakurir)) ? $datakurir['telp_kurir'] : ''; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                    <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1" id="type-success">Simpan</button>
                                                    <button type="reset" class="btn btn-light">Batal</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- users edit account form ends -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- users edit ends -->
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-left d-inline-block">2021 &copy; Kurir Suroboyo</span><span class="float-right d-sm-inline-block d-none">Crafted with<i class="bx bxs-heart pink mx-50 font-small-3"></i>by Pekerja Semut Web</span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="bx bx-up-arrow-alt"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?= base_url('/js/vendors.min.js') ?>"></script>
    <script src="<?= base_url('/js/fonts/LivIconsEvo.tools.js') ?>"></script>
    <script src="<?= base_url('/js/fonts/LivIconsEvo.defaults.js') ?>"></script>
    <script src="<?= base_url('/js/fonts/LivIconsEvo.min.js') ?>"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?= base_url('/js/forms/select2.full.min.js') ?>"></script>
    <script src="<?= base_url('/js/validation/jqBootstrapValidation.js') ?>"></script>
    <script src="<?= base_url('/js/pickadate/picker.js') ?>"></script>
    <script src="<?= base_url('/js/pickadate/picker.date.js') ?>"></script>
    <script src="<?= base_url('/js/extensions/sweetalert2.all.min.js') ?>"></script>
    <script src="<?= base_url('/js/extensions/polyfill.min.js') ?>"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?= base_url('/js/configs/vertical-menu-light.js') ?>"></script>
    <script src="<?= base_url('/js/core/app-menu.js') ?>"></script>
    <script src="<?= base_url('/js/core/app.js') ?>"></script>
    <script src="<?= base_url('/js/scripts/components.js') ?>"></script>
    <script src="<?= base_url('/js/scripts/footer.js') ?>"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?= base_url('/js/pages/page-users.js') ?>"></script>
    <script src="<?= base_url('/js/scripts/navs/navs.js') ?>"></script>
    <script src="<?= base_url('/js/extensions/sweet-alerts.js') ?>"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>