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
    <link rel="apple-touch-icon" href="ico/logokotak.ico">
    <link rel="shortcut icon" type="image/x-icon" href="ico/logokotak.png">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="css/extensions/swiper.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="css/admin/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/admin/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="css/admin/colors.css">
    <link rel="stylesheet" type="text/css" href="css/admin/components.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="css/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="css/dashboard-ecommerce.css">
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
                                <div class="user-nav d-sm-flex d-none"><span class="user-name">Admin</span><span class="user-status text-muted">Kurir Suroboyo</span></div><span><img class="round" src="ico/logocoklat.png" alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right pb-0"><a class="dropdown-item" href="/logout"><i class="bx bx-power-off mr-50"></i> Keluar</a>
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
                <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="bar-chart"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
                </li>
                <li class=" nav-item"><a href="/userlist"><i class="menu-livicon" data-icon="user"></i><span class="menu-title" data-i18n="User">Pelanggan</span></a>
                </li>
                <li class=" nav-item"><a href="/orderlist"><i class="menu-livicon" data-icon="shoppingcart"></i><span class="menu-title" data-i18n="User">Pemesanan</span></a>
                </li>
                <li class=" nav-item"><a href="/courierlist"><i class="menu-livicon" data-icon="truck"></i><span class="menu-title" data-i18n="User">Kurir</span></a>
                </li>
                <li class=" nav-item"><a href="/ratelist"><i class="menu-livicon" data-icon="us-dollar"></i><span class="menu-title" data-i18n="User">Tarif</span></a>
                </li>
                <li class=" nav-item"><a href="/discountlist"><i class="menu-livicon" data-icon="tag"></i><span class="menu-title" data-i18n="User">Diskon</span></a>
                </li>
                <li class=" nav-item"><a href="/commentlist"><i class="menu-livicon" data-icon="comments"></i><span class="menu-title" data-i18n="User">Kritik & Saran</span></a>
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
                <!-- Dashboard Ecommerce Starts -->
                <section id="dashboard-ecommerce">
                    <div class="row">
                        <!-- Greetings Content Starts -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="greeting-text">Selamat Datang,</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-end">
                                            <div class="dashboard-content-left">
                                                <h2 class="text-primary text-bold-500">Admin Kurir Suroboyo</h2>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="dashboard-content-left">
                                            <img src="images/cup.png" height="150" width="150" class="img-fluid" alt="Dashboard Ecommerce" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Multi Radial Chart Starts -->
                        <div class="col-xl-4 col-12 dashboard-users">
                            <div class="row  ">
                                <!-- Statistics Cards Starts -->
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-sm-6 col-12 dashboard-users-success">
                                            <div class="card text-center">
                                                <div class="card-content">
                                                    <div class="card-body py-1">
                                                        <div class="badge-circle badge-circle-lg badge-circle-light-success mx-auto mb-50">
                                                            <i class="bx bx-dollar font-medium-5"></i>
                                                        </div>
                                                        <div class="text-muted line-ellipsis">Pendapatan</div>
                                                        <h3 class="mb-0"><?= $pendapatan['ongkir']; ?></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-12 dashboard-users-danger">
                                            <div class="card text-center">
                                                <div class="card-content">
                                                    <div class="card-body py-1">
                                                        <div class="badge-circle badge-circle-lg badge-circle-light-warning mx-auto mb-50">
                                                            <i class="bx bx-user font-medium-5"></i>
                                                        </div>
                                                        <div class="text-muted line-ellipsis">Pelanggan</div>
                                                        <h3 class="mb-0"><?= $totaluser['username']; ?></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-12 dashboard-users-success">
                                            <div class="card text-center">
                                                <div class="card-content">
                                                    <div class="card-body py-1">
                                                        <div class="badge-circle badge-circle-lg badge-circle-light-danger mx-auto mb-50">
                                                            <i class="bx bx-cycling font-medium-5"></i>
                                                        </div>
                                                        <div class="text-muted line-ellipsis">Kurir</div>
                                                        <h3 class="mb-0"><?= $jumlahkurir['id_kurir']; ?></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-12 dashboard-users-danger">
                                            <div class="card text-center">
                                                <div class="card-content">
                                                    <div class="card-body py-1">
                                                        <div class="badge-circle badge-circle-lg badge-circle-light-info mx-auto mb-50">
                                                            <i class="bx bx-map font-medium-5"></i>
                                                        </div>
                                                        <div class="text-muted line-ellipsis">Pesanan</div>
                                                        <h3 class="mb-0"><?= $jumlahpesanan['id_pemesanan']; ?></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Revenue Growth Chart Starts -->
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Dashboard Ecommerce ends -->

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
    <script src="js/vendors.min.js"></script>
    <script src="js/fonts/LivIconsEvo.tools.js"></script>
    <script src="js/fonts/LivIconsEvo.defaults.js"></script>
    <script src="js/fonts/LivIconsEvo.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="js/charts/apexcharts.min.js"></script>
    <script src="js/extensions/swiper.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="js/configs/vertical-menu-light.js"></script>
    <script src="js/core/app-menu.js"></script>
    <script src="js/core/app.js"></script>
    <script src="js/scripts/components.js"></script>
    <script src="js/scripts/footer.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="js/dashboard-ecommerce.js"></script>
    <script src="js/charts/chart-apex.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>