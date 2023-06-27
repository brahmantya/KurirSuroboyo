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
                <!-- register section starts -->
                <section class="row flexbox-container">
                    <div class="col-xl-6 col-11">
                        <div class="card bg-authentication mb-0">
                            <div class="row m-0">
                                <!-- register section left -->
                                <div class="col-md-12 col-12 px-0">
                                    <div class="card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center">
                                        <div class="card-header pb-1">
                                            <div class="card-title">
                                                <h4 class="text-center mb-2">Daftar</h4>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <p> <small> Silahkan mendaftar dengan mengisi semua kolom dengan benar</small>
                                            </p>
                                        </div>
                                        <div class="card-content">
                                            <div class="card-body">
                                                <form id="Signup" method="POST" action="/createaccount" enctype="multipart/form-data">
                                                    <?php csrf_field(); ?>
                                                    <?php if (session()->getFlashData('success')) : ?>
                                                        <div class="alert alert-success" role="alert">
                                                            <?= session()->getFlashData('success'); ?>
                                                        </div>
                                                    <?php elseif (session()->getFlashData('error')) : ?>
                                                        <div class="alert alert-danger" role="alert">
                                                            <?= session()->getFlashData('error'); ?>
                                                        </div>
                                                    <?php endif; ?>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6 mb-50">
                                                            <label class="text-bold-600" for="exampleInputUsername1">Nama</label>
                                                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                                                            <div class="invalid-feedback">
                                                                <?= $validation->getError('nama'); ?>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-6 mb-50">
                                                            <label class="text-bold-600" for="exampleInputEmail1">Nomor Telepon</label>
                                                            <input type="telp" class="form-control" id="telp" name="telp" oninput="this.value = this.value.replace(/[e\+\-]/gi, '');" placeholder="Nomor Telepon">
                                                            <div class="invalid-feedback">
                                                                <?= $validation->getError('telp'); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-50">
                                                        <label class="text-bold-600" for="exampleInputPassword1">Alamat</label>
                                                        <input type="text" class="form-control" id="alamat" name="alamat" onblur="placeValidation()" placeholder="Alamat">
                                                        <div class="invalid-feedback">
                                                            <?= $validation->getError('alamat'); ?>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="kota" id="kota" value="">
                                                    <div class="form-group mb-50">
                                                        <label class="text-bold-600" for="exampleInputPassword1">Keterangan Alamat</label>
                                                        <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan Alamat">
                                                        <div class="invalid-feedback">
                                                            <?= $validation->getError('keterangan'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-2">
                                                        <label class="text-bold-600" for="exampleInputPassword1">Kata Sandi</label>
                                                        <input type="password" class="form-control" id="pass" name="pass" placeholder="Kata Sandi">
                                                        <div class="invalid-feedback">
                                                            <?= $validation->getError('pass'); ?>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary glow position-relative w-100">Daftar<i id="icon-arrow" class="bx bx-right-arrow-alt"></i></button>
                                                </form>
                                                <hr>
                                                <div class="text-center"><small class="mr-25">Sudah memiliki akun?</small><a href="/login"><small>Masuk</small> </a></div>
                                                <div class="text-center"><small class="mr-25">Kembali ke </small><a href="/"><small>Beranda</small> </a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- register section endss -->
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <!-- START JAVASCRIPT -->

    <script type="text/javascript">
        let autocomplete;
        let sessiontoken;
        const center = {
            lat: -7.2574719,
            lng: 112.7520883
        };
        const defaultBounds = {
            north: center.lat + 0.4,
            south: center.lat - 0.4,
            east: center.lng + 0.4,
            west: center.lng - 0.4,
        };
        let options;
        let placevalid = false;

        function initAutocomplete() {
            sessiontoken = new google.maps.places.AutocompleteSessionToken();
            options = {
                bounds: defaultBounds,
                componentRestrictions: {
                    country: "id"
                },
                fields: ['formatted_address', 'geometry'],
                strictBounds: true,
                sessionToken: sessiontoken,
            };
            let inputAlamatPengirim = document.querySelector("#alamat");
            let elementPengirim = document.getElementById("alamat");
            autocomplete = new google.maps.places.Autocomplete(inputAlamatPengirim, options);
            autocomplete.addListener("place_changed", function() {
                let place = "";
                place = autocomplete.getPlace();
                if (!place.geometry) {
                    elementPengirim.value = "";
                    placevalid = false;
                } else {
                    placevalid = true
                    document.getElementById("kota").value = convertCodeCity(place.formatted_address);
                    elementPengirim.value = place.formatted_address;
                }
            });
        }

        function placeValidation() {
            if (!placevalid) {
                document.getElementById("alamat").value = "";
            }
        }


        function convertCodeCity(kota) {
            if (kota.includes("Surabaya") || kota.includes("SBY")) {
                return "SBY";
            } else if (kota.includes("Sidoarjo")) {
                return "SDA";
            } else if (kota.includes("Gresik")) {
                return "GRS";
            } else {
                console.log("Unknown City");
            }
        }

        $(document).ready(function() {
            $(document).keypress(
                function(event) {
                    if (event.which == '13') {
                        event.preventDefault();
                    }
                });
            $('#Signup').find('.input').keypress(function(e) {
                if (e.which == 13) // Enter key = keycode 13
                {
                    $(this).next().focus(); //Use whatever selector necessary to focus the 'next' input
                    return true;
                }
            });
        });

        // google.maps.event.addDomListener(window, 'load', initAutocomplete);
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtcenQsMCh4peC8zzCGgBzKTO-_VC2x3Y&callback=initAutocomplete&libraries=places&v=weekly" async defer></script>


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