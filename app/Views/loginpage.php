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
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="css/admin/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/admin/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="css/admin/colors.css">
    <link rel="stylesheet" type="text/css" href="css/admin/components.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="css/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="css/authentication.css">
    <!-- END: Page CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout 1-column  navbar-sticky footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column" data-layout="semi-dark-layout">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- login page start -->
                <section id="auth-login" class="row flexbox-container">
                    <div class="col-xl-6 col-11">
                        <div class="card bg-authentication mb-0">
                            <div class="row m-0">
                                <!-- left section-login -->
                                <div class="col-md-12 col-12 px-0">
                                    <div class="card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center">
                                        <div class="card-header pb-1">
                                            <div class="card-title">
                                                <h4 class="text-center mb-2">Masuk</h4>
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <div class="card-body">
                                                <form method="POST" action="/login" enctype="multipart/form-data">
                                                    <?php csrf_field(); ?>
                                                    <div class="form-group">
                                                        <?php if (session()->getFlashData('success')) : ?>
                                                            <div class="alert alert-success" role="alert">
                                                                <?= session()->getFlashData('success'); ?>
                                                            </div>
                                                        <?php elseif (session()->getFlashData('error')) : ?>
                                                            <div class="alert alert-danger" role="alert">
                                                                <?= session()->getFlashData('error'); ?>
                                                            </div>
                                                        <?php endif; ?>
                                                        <div class="form-group mb-50">
                                                            <label class="text-bold-600" for="exampleInputEmail1">Nomor Telepon</label>
                                                            <input type="text" class="form-control" id="telp" name="telp" placeholder="Nomor Telepon">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="text-bold-600" for="exampleInputPassword1">Kata Sandi</label>
                                                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Kata Sandi">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary glow w-100 position-relative">Masuk<i id="icon-arrow" class="bx bx-right-arrow-alt"></i></button>
                                                </form>
                                                <hr>
                                                <div class="text-center"><small class="mr-25">Apakah anda belum memiliki akun?</small><a href="/register"><small>Daftar</small></a></div>
                                                <div class="text-center"><small class="mr-25">Kembali ke </small><a href="/"><small>Beranda</small> </a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- login page ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="js/vendors.min.js"></script>
    <script src="js/fonts/LivIconsEvo.tools.js"></script>
    <script src="js/fonts/LivIconsEvo.defaults.js"></script>
    <script src="js/fonts/LivIconsEvo.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="js/configs/vertical-menu-light.js"></script>
    <script src="js/core/app-menu.js"></script>
    <script src="js/core/app.js"></script>
    <script src="js/scripts/components.js"></script>
    <script src="js/scripts/footer.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>