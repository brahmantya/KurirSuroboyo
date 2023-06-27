<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="robots" content="index,follow">
	<link rel="icon" href="ico/logokotak.png">

	<title>Kurir Suroboyo</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Overwrite bootstrap style -->
	<link href="css/bootsnav.css" rel="stylesheet">
	<link href="css/overwrite.css" rel="stylesheet">

	<!-- Fonts -->
	<link href='fonts/opensans/stylesheet.css' rel='stylesheet' type='text/css'>

	<!-- Icons -->
	<link href="fonts/FontAwesome/font-awesome.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">

	<!-- Skins style -->
	<link id="skin" href="skins/default.css" rel="stylesheet">

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
	<script src="js/ie-emulation-modes-warning.js"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Start fixed -->
	<div class="fixed-bg">
		<div class="login-register-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="login-register">
							<ul class="nav nav-tabs log-tabs" role="tablist">
								<li role="presentation"><a href="login">Masuk</a></li>
								<li role="presentation" class="active"><a href="signup">Daftar</a></li>
							</ul>
							<div class="tab-content log-tabs-containt">
								<div role="tabpanel" class="tab-pane active" id="register">
									<form class="form-horizontal" id="Signup" method="POST" action="/createaccount" onkeydown="return event.key != 'Enter';" enctype="multipart/form-data">
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
										<div class="form-group">
											<div class="col-lg-12 text-left">
												<input type="text" class="form-control form-block" id="nama" name="nama" placeholder="Nama">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('nama'); ?>
                                                </div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-lg-12 text-left">
												<input type="tel" class="form-control form-block" id="telp" name="telp" placeholder="Nomor Telepon">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('telp'); ?>
                                                </div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-lg-12 text-left">
												<input type="text" class="form-control form-block" id="alamat" name="alamat" placeholder="Alamat">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('alamat'); ?>
                                                </div>
											</div>
										</div>
                                        <input type="hidden" name="kota" id="kota" value="">
										<div class="form-group">
											<div class="col-lg-12 text-left">
												<input type="text" class="form-control form-block" id="keterangan" name="keterangan" placeholder="Keterangan Alamat">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('keterangan'); ?>
                                                </div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-lg-12 text-left">
												<input type="password" class="form-control form-block" id="pass" name="pass" placeholder="Kata Sandi">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('pass'); ?>
                                                </div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-lg-12 text-center">
												<button class="btn btn-primary btn-lg">Daftar</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End fixed -->

	<!-- Start to top -->
	<a href="#" class="toTop">
		<i class="fa fa-chevron-up"></i>
	</a>
	<!-- End to top -->

	<!-- START JAVASCRIPT -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtcenQsMCh4peC8zzCGgBzKTO-_VC2x3Y&callback=initAutocomplete&libraries=places&v=weekly"
            async></script>
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

        function initAutocomplete() {
            sessiontoken = new google.maps.places.AutocompleteSessionToken();
            options = {
                bounds: defaultBounds,
                componentRestrictions: {
                    country: "id"
                },
                fields: ['address_components', 'formatted_address', 'geometry', 'name'],
                strictBounds: true,
                sessionToken: sessiontoken,
            };
            let inputAlamatPengirim = document.querySelector("#alamat");
            let elementPengirim = document.getElementById("alamat");
            autocomplete = new google.maps.places.Autocomplete(inputAlamatPengirim, options);
            autocomplete.addListener("place_changed", fillInAddress(elementPengirim));
        }

        function fillInAddress(idpenerima = null, element) {
            let place = "";
            if (idpenerima == null) {
                place = autocomplete.getPlaceDetails({
                    fields: ['address_components', 'formatted_address', 'geometry', 'name'],
                    sessionToken: sessiontoken
                });
                placedata = place;
            } else {
                place = autocompletepenerima[idpenerima].getPlaceDetails({
                    fields: ['address_components', 'formatted_address', 'geometry', 'name'],
                    sessionToken: sessiontoken
                });
                placedata = place;
            }
            let address1 = "";
            let postcode = "";

            for (const component of place.address_components) {
                const componentType = component.types[0];

                switch (componentType) {
                    case "street_number": {
                        address1 = `${component.long_name} ${address1}`;
                        break;
                    }
                    case "route": {
                        address1 += component.short_name;
                        break;
                    }
                    case "postal_code": {
                        postcode = `${component.long_name}${postcode}`;
                    }
                    case "postal_code_suffix": {
                        postcode = `${postcode}-${component.long_name}`;
                        break;
                    }
                    case "locality": {
                            document.getElementById("kota").value = convertCodeCity(component.long_name);
                        break;
                    }
                }
            }
            element.value = address1;
        }

        function convertCodeCity(kota) {
            let optiontarif = document.getElementById("Tarif").getElementsByTagName("option")
            if (kota.includes("Surabaya") || kota.includes("SBY")) {
                optiontarif[1].disabled = false;
                return "SBY";
            } else if (kota.includes("Sidoarjo")) {
                optiontarif[1].disabled = true;
                return "SDA";
            } else {
                console.log("Unknown City");
            }
        }
        $(document).ready(function () {
            $(document).keypress(
                function (event) {
                    if (event.which == '13') {
                        event.preventDefault();
                    }
                });
            $('#Signup').find('.input').keypress(function(e){
                if ( e.which == 13 ) // Enter key = keycode 13
                {
                    $(this).next().focus();  //Use whatever selector necessary to focus the 'next' input
                    return true;
                }
            });
        });
    </script>
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="js/ie10-viewport-bug-workaround.js"></script>

	<!-- Bootsnavs -->
	<script src="js/bootsnav/bootsnav.js"></script>

	<!-- Columns -->
	<script src="js/column/bootstrap-grid-columns.js"></script>

	<!-- Custom form -->
	<script src="js/form/jcf.js"></script>
	<script src="js/form/jcf.scrollable.js"></script>
	<script src="js/form/jcf.select.js"></script>
	<script>
		jcf.replaceAll();
	</script>

	<!-- ticker -->
	<script src="js/ticker/ticker.js"></script>

	<!-- Owl -->
	<script src="js/owl/owl.carousel.js"></script>
	<script src="js/owl/setting.js"></script>

	<!-- Parallax -->
	<script src="js/parallax/jarallax.js"></script>
	<script src="js/parallax/setting.js"></script>

	<!-- Twitter -->
	<!--[if lte IE 9]>
    	<script src="js/tweecool/jquery.xdomainrequest.min.js"></script>      
	<![endif]-->
	<script src="js/tweecool/tweecool.js"></script>
	<script src="js/tweecool/setting.js"></script>

	<!-- My Script -->
	<script type="text/javascript" src="js/custom.js"></script>

	<!-- END JAVASCRIPT -->

</body>

</html>