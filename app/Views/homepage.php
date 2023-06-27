<!--<!DOCTYPE html>-->
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

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
    <link href="https://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet" />
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>


    <![endif]-->
</head>

<body>
    <!-- Strat Top Menu -->
    <div class="top-menu">
        <div class="container">
            <ul class="menu-link">
                <?php if (session()->get('logged_in') == true) : ?>
                    <li><a href="/logout">Logout</a></li>
                <?php else : ?>
                    <li><a href="/register">Daftar gratis</a></li>
                    <li><a href="/login">Masuk</a></li>
                <?php endif; ?>

            </ul>
            <ul class="menu-icon">
                <li><a href="https://www.facebook.com/kurirsuroboyo/?ref=page_internal"><i class="fa fa-facebook"></i></a>
                </li>
                <li><a href="https://www.instagram.com/kurir_suroboyo/"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
    <!-- End Top Menu -->

    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-sticky bootsnav">
        <!-- Start Top Search -->
        <!-- <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div> -->
        <!-- End Top Search -->
        <div class="container">
            <!-- Start Atribute Navigation -->
            <!-- <div class="attr-nav">
            <ul>
                <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
            </ul>
        </div> -->
            <!-- End Atribute Navigation -->
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#brand"><img src="images/brand/namakotak.png" class="logo" alt=""></a>
            </div>
            <!-- End Header Navigation -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="active"><a href="/">Beranda</a></li>
                    <li><a href="/aboutus">Tentang Kami</a></li>
                    <li><a href="/service">Layanan</a></li>
                    <li><a href="/gallery">Galeri</a></li>
                    <li><a href="/contact">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navigation -->

    <div class="marquee">
        <marquee behavior="scroll" scrolldelay="100" onMouseOver='this.stop()' onMouseOut='this.start()'>
            Untuk pemesanan jam 17.00 - 08.00, harus melalui admin ( 0821 4060 2855 )
        </marquee>
    </div>

    <!--PopUp GiztaPop Start-->
    <div id="giztapop-pad">
        <div id="giztapop-content">
            <div class="giztapop-display">
                <span class="giztapop-name">Informasi<div class="giztapop-hide" data-bs-dismiss="modal" id="giztapop-hide"> X </div></span>

                <div class="giztapop-item">
                    <img src="images/bg/popup.png" height="90%" style="display:block; margin:auto;">


                </div>
            </div>
            <!-- <div class="giztapop-hide" id="giztapop-hide"><span>Tutup</span></div> -->
        </div>
    </div>
    <!-- <div id="myModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" id="mclose1">&times;</button>
                </div>
                <div class="modal-body">
                    <h3 class="modal-title" style="text-align: center;">Informasi</h3>
                    <img src="images/bg/popup.png" width="70%" style="display:block; margin:auto;">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="mclose2" style="display:block; margin:auto;">Tutup</button>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Start Home -->
    <div class="home">
        <div id="bg-home" class="bg-home"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!-- Start Heading home -->
                    <div class="heading-home">
                        <h1 class="title">Kurir Suroboyo</h1>
                        <p>
                            Pengiriman Cepat, Aman, dan Terjangkau
                        </p>
                    </div>
                    <!-- End Heading home -->
                    <!-- Start Form -->
                    <div class="form-home">
                        <form id="SignupForm" action="/savePemesanan" method="post" enctype="multipart/form-data" onsubmit="hitungSubTotal()" onkeydown="return event.key != 'Enter';">
                            <?php csrf_field(); ?>
                            <fieldset>
                                <legend>Pengirim</legend>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group require">
                                            <label for="Nama_pengirim" class="require">Nama Pengirim</label>
                                            <input id="Nama_pengirim" name="Nama_pengirim" type="text" class="form-control validate[required]" placeholder="Masukkan nama anda" value="<?= (isset($datapengirim)) ? $datapengirim['nama_pengirim'] : ''; ?>" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group require">
                                            <label for="Telp_pengirim">No.Telp Pengirim</label>
                                            <input id="Telp_pengirim" name="Telp_pengirim" type="text" oninput="this.value = this.value.replace(/[e\+\-]/gi, '');" class="form-control validate[custom[phone],required]" placeholder="Masukkan nomor telepon anda" value="<?= (isset($datapengirim)) ? $datapengirim['no_telp'] : ''; ?>" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group require">
                                            <label for="Alamat_pengirim">Alamat Pengirim</label>
                                            <input id="Alamat_pengirim" name="Alamat_pengirim" class="form-control validate[required]" placeholder="Masukkan alamat lengkap anda " onchange="addressChanged(true)" rows="5" onblur="placeValidation(0,this)" value="<?= (isset($datapengirim)) ? $datapengirim['alamat_pengirim'] : ''; ?>">
                                            <input id="geometrypengirim" name="geometrypengirim" type="hidden">
                                            <!--                                            <div id="Alamat_pengirim"></div>-->
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="Keterangan_pengirim">Keterangan Alamat Pengirim</label>
                                            <textarea id="Keterangan_pengirim" name="Keterangan_pengirim" type="text" class="form-control" placeholder="Catatan : Sebelah Masjid, Warung, Pagar putih" rows="5"><?= (isset($datapengirim)) ? $datapengirim['keterangan_pengirim'] : ''; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="kota_pengirim" name="kota_pengirim">
                            </fieldset>
                            <fieldset>
                                <div class="input_fields_warp" id="penerima">
                                    <legend>Penerima</legend>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group require">
                                                <label for="Penerima1" class="require">Nama Penerima</label>
                                                <input id="Penerima1" name="Penerima1" type="text" class="form-control validate[required]" placeholder="Masukkan Nama Penerima" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group require">
                                                <label for="telepon_penerima">No.Telp Penerima</label>
                                                <input id="telp_penerima1" name="telp_penerima1" type="tel" oninput="this.value = this.value.replace(/[e\+\-]/gi, '');" class="form-control validate[custom[phone],required]" placeholder="Masukkan Nomor Telp Penerima" />
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group require">
                                                <label for="alamat_penerima">Alamat Penerima</label>
                                                <input id="alamat_penerima1" name="alamat_penerima1" type="text" class="form-control validate[required]" placeholder="Masukkan Alamat Lengkap Penerima" onblur="placeValidation(1,this);" onchange="addressChanged(true)" rows="5">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="Keterangan_penerima">Keterangan Alamat Penerima</label>
                                                <textarea id="Keterangan_penerima1" name="Keterangan_penerima1" type="text" class="form-control" placeholder="Catatan : Sebelah Masjid, Warung, Pagar putih" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <input type="hidden" id="kota_penerima1" name="kota_penerima1" value="SBY">
                                        <div class="col-sm-12">
                                            <button style="background-color:green" type="button" class="add_field_button btn btn-info active">
                                                <i class="glyphicon glyphicon-plus-sign"></i> Tambah Penerima
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="control-group after-add-more">
                                    <legend>Tarif</legend>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group require">
                                                <label for="Jenis_barang">Jenis Produk</label>
                                                <input id="Jenis_barang" name="Jenis_barang" type="text" class="form-control validate[required]" placeholder="Masukkan jenis produk anda">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group require">
                                                <label class="berat_barang">Berat Produk</label>
                                                <div class="input-group">
                                                    <input type="number" id="berat_barang" name="berat_barang" min="1" class="form-control validate[required]" placeholder="Masukkan berat produk" onchange="hitungSubTotal()">
                                                    <div class="input-group-addon">Kg / L</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group require">
                                                <label for="tanggal" class="require">Tanggal Pengambilan Produk</label>
                                                <input id="tanggal" name="tanggal" type="date" class="form-control validate[required]" onclick="setDateLimit()" onchange="setDateLimit()" placeholder="2021-01-30" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group require">
                                                <label for="jam" class="require">Jam Pengambilan Produk</label>
                                                <input id="jam" name="jam" type="time" min="08:00:00" max="20:00:00" class="form-control validate[required]" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group require">
                                                <label for="Tarif" class="require">Tarif</label>
                                                <select id="Tarif" name="Tarif" class="form-control" onclick="setTimeLimit()" onfocus="checkEligibleTarif()" onchange="hitungSubTotal(); setDateLimit();" required>
                                                    <option selected disabled value="0">Silahkan Pilih Tarif</option>
                                                    <!-- <option value="1">Flat (Sekitar 6-8 Jam)</option> -->
                                                    <option value="2">Reguler (Sekitar 3.5 Jam)</option>
                                                    <option value="3">Express (Sekitar 2 Jam)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group require">
                                                <label for="pembayaran" class="require">Pembayaran</label>
                                                <select id="pembayaran" name="pembayaran" class="form-control" required>
                                                    <option selected disabled value="">Silahkan Pilih Cara Bayar</option>
                                                    <optgroup label="Cash">
                                                        <option value="1">Cash Pengirim</option>
                                                        <option value="2">Cash Penerima</option>
                                                    </optgroup>
                                                    <optgroup label="Transfer">
                                                        <option value="3">BCA - 6720184875</option>
                                                        <option value="4">Mandiri - 1410019389881</option>
                                                        <option value="5">Mandiri Syariah - 7133260239</option>
                                                    </optgroup>
                                                    <!-- <option value="6">COD</option> -->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="harga_produk">Harga Produk Jika COD</label>
                                                <input id="harga_produk" name="harga_produk" type="number" class="form-control" placeholder="Hanya diisi bila COD" oninput="hitungTotal()">
                                            </div>
                                        </div>
                                        <input type="hidden" id="jarak" name="jarak">
                                        <input type="hidden" id="jumlahpenerima" name="jumlahpenerima" value="1">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="Sub_Total">Sub Total :</label>
                                                <input type="number" name="Sub_Total" id="Sub_Total" class="form-control validate[required]" onchange="hitungTotal()" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="diskon">Voucher Diskon</label>
                                                <input id="diskon" name="diskon" type="text" class="form-control" placeholder="Masukkan voucher anda" oninput="getDiskon()" />
                                                <input id="id_diskon" name="id_diskon" type="hidden">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="Total">Total :</label>
                                                <input type="number" name="Total" id="Total" class="form-control validate[required]" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group marginbot-clear">
                                    <input id="kirim" type="submit" value="Kirim" onclick="hitungSubTotal()" class="btn btn-primary" />
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <!-- End Form -->
                </div>
            </div>
        </div>
    </div>

    <!-- End Home -->
    <!-- Start Section -->
    <div class="section dark paddingbot-clear">
        <div class="container">
            <div class="heading marginbot50">
                <h2 class="title">
                    Produk Kami
                </h2>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <!-- Start Text Icon -->
                    <div class="col-icon absolute-left">
                        <i class="fa fa-truck fa-2x"></i>
                        <h5 class="normal">Flat</h5>
                        <p>
                            - Tarif Rp 12.000 se Surabaya
                        </p>
                        <p>
                            - Tarif berlaku untuk berat produk maksimal 3 kg, selebihnya ada tambahan biaya
                        </p>
                        <p>
                            - Pengambilan produk sebelum pukul 12.00, terkirim sebelum pukul 18.00
                        </p>
                        <p>
                            - Pemesanan sehari sebelum pengiriman
                        </p>
                        <p>
                            - Bisa dikirim lebih dari 1 lokasi
                        </p>
                    </div>
                    <!-- End Text Icon -->
                </div>
                <div class="col-sm-4">
                    <!-- Start Text Icon -->
                    <div class="col-icon absolute-left">
                        <i class="fa fa-bicycle fa-2x"></i>
                        <h5 class="normal">Reguler</h5>
                        <p>
                            - Jam oprasional 08.00 - 17.00
                        </p>
                        <p>
                            - Produk terkirim kurang dari 3,5 jam
                        </p>
                        <p>
                            - Tarif berlaku untuk berat produk maksimal 5 kg, selebihnya ada tambahan biaya
                        </p>
                        <p>
                            - Bisa dikirim lebih dari 1 lokasi
                        </p>
                    </div>
                    <!-- End Text Icon -->
                </div>
                <div class="col-sm-4">
                    <!-- Start Text Icon -->
                    <div class="col-icon absolute-left">
                        <i class="fa fa-bolt fa-2x"></i>
                        <h5 class="normal">Express</h5>
                        <p>
                            - Produk terkirim kurang dari dua jam
                        </p>
                        <p>
                            - Jam oprasional 07.00 - 20.00
                        </p>
                    </div>
                    <!-- End Text Icon -->
                </div>
            </div>
        </div>
        <div class="triangle margintop10" data-height="85" data-color-bottom="#ffffff" data-color-top="transparent"></div>
    </div>
    <!-- End Section -->

    <div class="clearfix"></div>

    <!-- Start Section -->
    <div class="section paddingbot-clear">
        <div class="container">
            <!-- Start Heading -->
            <div class="heading marginbot30">
                <h2 class="title">
                    <span>Siapa Kami?</span>
                    Kurir Suroboyo
                </h2>
            </div>
            <!-- End Heading -->
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <p class="marginbot30">
                        Kurir Suroboyo adalah jasa pengantaran barang untuk wilayah Surabaya, Gresik dan Sidoarjo yang
                        berdiri pada tanggal 1 Juni 2020.
                    </p>
                    <img src="images/bike-image.png" alt="" class="img-responsive img-center">
                </div>
            </div>
        </div>
        <div class="triangle margin-mintop85" data-height="85" data-color-bottom="#f0f2f5" data-color-top="transparent"></div>
    </div>
    <!-- End Section -->
    <!-- Start Section -->
    <div class="section gray paddingbot-clear">
        <div class="container">
            <!-- Start Heading -->
            <div class="heading marginbot50">
                <h2 class="title">
                    Layanan Kami
                </h2>
            </div>
            <!-- End Heading -->
            <div class="row">
                <div class="col-md-3 col-sm-6 marginbot30">
                    <!-- Start Icon -->
                    <div class="text-icon-border">
                        <span class="icon"><i class="fa fa-rocket"></i></span>
                        <h5 class="title">Tarif 12 ribu sesurabaya</h5>
                        <p>
                            Pengiriman dengan tarif hanya Rp 12.000 dan barang sampai dihari yang sama
                        </p>
                    </div>
                    <!-- End Icon -->
                </div>
                <div class="col-md-3 col-sm-6 marginbot30">
                    <!-- Start Icon -->
                    <div class="text-icon-border">
                        <span class="icon"><i class="fa fa-motorcycle"></i></span>
                        <h5 class="title">Barang diambil langsung ke pengirim</h5>
                        <p>
                            Cukup duduk dan pesan online kurir akan sampai di depan rumahmu
                        </p>
                    </div>
                    <!-- End Icon -->
                </div>
                <div class="col-md-3 col-sm-6 marginbot30">
                    <!-- Start Icon -->
                    <div class="text-icon-border">
                        <span class="icon"><i class="fa fa-location-arrow"></i></span>
                        <h5 class="title">Pengiriman ke banyak alamat</h5>
                        <p>
                            Mempersingkat waktu dalam memesan dengan banyak penerima
                        </p>
                    </div>
                    <!-- End Icon -->
                </div>
                <div class="col-md-3 col-sm-6 marginbot30">
                    <!-- Start Icon -->
                    <div class="text-icon-border">
                        <span class="icon"><i class="fa fa-lock"></i></span>
                        <h5 class="title">Pengiriman aman</h5>
                        <p>
                            Pengiriman dengan motorbox terjamin aman hingga ke tempat tujuan
                        </p>
                    </div>
                    <!-- End Icon -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Section -->

    <!-- Start Section -->
    <div class="section paddingtop-clear paddingbot-clear">
        <div class="parallax" data-background="images/bg/bg02.jpg" data-jarallax='{"speed": 0.5}'></div>
        <div class="overlay"></div>
        <div class="triangle marginbot50" data-height="85" data-color-bottom="transparent" data-color-top="#f0f2f5"></div>
        <div class="container content-parallax">
            <!-- Start Heading -->
            <div class="heading marginbot25">
                <h2 class="title">
                    <span>Testimoni</span>
                    Yang pelanggan katakan tentang Kurir Suroboyo
                </h2>
            </div>
            <!-- End Heading -->
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <!-- Start Slide -->
                    <div class="wrap-single-slide">
                        <div class="single-slide">
                            <div class="item">
                                <!-- Start Item Testimoni -->
                                <div class="item-testimoni">
                                    <blockquote>
                                        Alhamdulillah punya pengalaman baik dengan Kurir Suroboyo.
                                        <strong>Pelayanannya ramah banget. Dari segi tarif sangat terjangkau.</strong>
                                        Kurir Suroboyo menjadi referensi untuk pengiriman selanjutnya,
                                        <strong>pokoknya recommended </strong> 👍 👍
                                    </blockquote>
                                    <div class="author">
                                        <div class="name">
                                            Brahmantya - <a href="https://www.instagram.com/braniclothes/?hl=id">braniclothes</a>
                                        </div>
                                        <img src="images/people/img01.jpg" alt="">
                                    </div>
                                </div>
                                <!-- End Item Testimoni -->
                            </div>
                            <div class="item">
                                <!-- Start Item Testimoni -->
                                <div class="item-testimoni">
                                    <blockquote>
                                        Sangat membantu untuk UMKM yang memiliki orderan banyak tapi
                                        ingin hemat di pengantaran. <strong>Pelayanan kurir ramah, amanah dan
                                            ketepatan waktu lebih cepat dari perkiraan.</strong> Semoga sukses
                                        terus usaha ini 😊😊
                                    </blockquote>
                                    <div class="author">
                                        <div class="name">
                                            <a href="https://www.instagram.com/sego_soge/?hl=id">sego soge</a>
                                        </div>
                                        <img src="images/people/img02.jpg" alt="">
                                    </div>
                                </div>
                                <!-- End Item Testimoni -->
                            </div>
                            <div class="item">
                                <!-- Start Item Testimoni -->
                                <div class="item-testimoni">
                                    <blockquote>
                                        Jasa pengiriman yang jos banget. Barang di terima dalam keadaan
                                        utuh tanpa lecet. <strong>Aman dan terpercaya.</strong>
                                    </blockquote>
                                    <div class="author">
                                        <div class="name">
                                            <a href="https://www.instagram.com/branicantikk/?hl=id">branicantikk</a>
                                        </div>
                                        <img src="images/people/img03.jpg" alt="">
                                    </div>
                                </div>
                                <!-- End Item Testimoni -->
                            </div>
                            <div class="item">
                                <!-- Start Item Testimoni -->
                                <div class="item-testimoni">
                                    <blockquote>
                                        <strong>Layanan Kurir Suroboyo memuaskan.</strong> CS merespon dengan baik dan
                                        cepat.
                                        Terima kasih dan sukses selalu Kurir Suroboyo 🙏🙏
                                    </blockquote>
                                    <div class="author">
                                        <div class="name">
                                            Canda Siomay
                                        </div>
                                        <img src="images/people/img04.jpg" alt="">
                                    </div>
                                </div>
                                <!-- End Item Testimoni -->
                            </div>
                        </div>
                    </div>
                    <!-- End Slide -->
                </div>
            </div>
        </div>
        <div class="triangle margin-mintop20" data-height="85" data-color-bottom="#ffffff" data-color-top="transparent"></div>
    </div>
    <!-- End Section -->
    <!-- Start Section -->
    <div class="section gray paddingbot-clear">
        <div class="container">
            <!-- Start Heading -->
            <div class="heading marginbot35">
                <h2 class="title">
                    <span>Bertemu dengan tim kami</span>
                    Kurir handal dan terpercaya
                </h2>
            </div>
            <!-- End Heading -->
            <!-- Start Content Slider -->
            <div class="wrap-slide">
                <div id="slide2" class="content-slide team-slide">
                    <div class="item">
                        <!-- Start Team 01 -->
                        <div class="team-item">
                            <div class="thumb">
                                <img src="images/people/team/img01.png" alt="">
                            </div>
                            <h5 class="name">Abid Habibi</h5>
                        </div>
                        <!-- End Team 01 -->
                    </div>
                    <div class="item">
                        <!-- Start Team 02 -->
                        <div class="team-item">
                            <div class="thumb">
                                <img src="images/people/team/img02.png" alt="">
                            </div>
                            <h5 class="name">Anjar Lukmana</h5>
                        </div>
                        <!-- End Team 02 -->
                    </div>
                    <div class="item">
                        <!-- Start Team 03 -->
                        <div class="team-item">
                            <div class="thumb">
                                <img src="images/people/team/img03.png" alt="">
                            </div>
                            <h5 class="name">Aries Presetyo</h5>
                        </div>
                        <!-- End Team 03 -->
                    </div>
                    <div class="item">
                        <!-- Start Team 04 -->
                        <div class="team-item">
                            <div class="thumb">
                                <img src="images/people/team/img04.png" alt="">
                            </div>
                            <h5 class="name">Heru Widodo</h5>
                        </div>
                        <!-- End Team 04 -->
                    </div>
                    <div class="item">
                        <!-- Start Team 05 -->
                        <div class="team-item">
                            <div class="thumb">
                                <img src="images/people/team/img05.png" alt="">
                            </div>
                            <h5 class="name">Kusdiawan</h5>
                        </div>
                        <!-- End Team 05 -->
                    </div>
                    <div class="item">
                        <!-- Start Team 06 -->
                        <div class="team-item">
                            <div class="thumb">
                                <img src="images/people/team/img06.png" alt="">
                            </div>
                            <h5 class="name">Miftachul Huda</h5>
                        </div>
                        <!-- End Team 06 -->
                    </div>
                    <div class="item">
                        <!-- Start Team 07 -->
                        <div class="team-item">
                            <div class="thumb">
                                <img src="images/people/team/img07.png" alt="">
                            </div>
                            <h5 class="name">Rachman Hidayat</h5>
                        </div>
                        <!-- End Team 07 -->
                    </div>
                    <div class="item">
                        <!-- Start Team 08 -->
                        <div class="team-item">
                            <div class="thumb">
                                <img src="images/people/team/img08.png" alt="">
                            </div>
                            <h5 class="name">Ratna Irawanti</h5>
                        </div>
                        <!-- End Team 08 -->
                    </div>
                    <div class="item">
                        <!-- Start Team 09 -->
                        <div class="team-item">
                            <div class="thumb">
                                <img src="images/people/team/img09.png" alt="">
                            </div>
                            <h5 class="name">Wisnu Kusumawardana</h5>
                        </div>
                        <!-- End Team 09 -->
                    </div>
                    <div class="item">
                        <!-- Start Team 10 -->
                        <div class="team-item">
                            <div class="thumb">
                                <img src="images/people/team/img10.png" alt="">
                            </div>
                            <h5 class="name">Abdul Aziz</h5>
                        </div>
                        <!-- End Team 10 -->
                    </div>
                </div>
            </div>
            <!-- End Content Slider -->
        </div>
        <div class="triangle margintop20" data-height="85" data-color-bottom="#ffffff" data-color-top="transparent"></div>
    </div>
    <!-- End Section -->
    <!-- Start footer -->
    <footer>
        <!-- Start main footer -->
        <div class="main-footer padding-bot30">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 widget-footer">
                        <h5 class="title">Jam Buka</h5>
                        <p>Senin - Sabtu (08.00 - 17.00)</p>
                        <p>Minggu (09.00 - 17.00)</p>
                        <div class="footer-network">
                            <a href="https://www.facebook.com/kurirsuroboyo/?ref=page_internal"><i class="fa fa-facebook icon-circle"></i></a>
                            <a href="https://www.instagram.com/kurir_suroboyo/"><i class="fa fa-instagram icon-circle"></i></a>
                        </div>
                    </div>
                    <div class="col-md-3 widget-footer">
                        <div class="row">
                            <div class="col-md-5 col-sm-6 col-xs-6">
                                <!-- Start Link -->
                                <ul class="footer-link">
                                    <li><a href="/aboutus">Tentang Kami</a></li>
                                    <li><a href="/service">Layanan</a></li>
                                    <li><a href="/gallery">Galeri</a></li>
                                    <li><a href="/contact">Kontak</a></li>
                                </ul>
                                <!-- End Link -->
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <!-- Start Link -->
                                <ul class="footer-link">
                                    <li><a href="https://www.freepik.com/vectors/logo">Logo vector created by mamewmy -
                                            www.freepik.com</a></li>
                                    <li><a href="https://www.freepik.com/vectors/food">Food vector created by mamewmy - www.freepik.com</a></li>
                                </ul>
                                <!-- End Link -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End main footer -->

        <!-- Start sub footer -->
        <div class="subfooter">
            <p>2021 &copy; Copyright Semut Pekerja Web. All rights Reserved.</p>
        </div>
        <!-- End sub footer -->
    </footer>
    <!-- End footer -->

    <!-- Start to top -->
    <a href="#" class="toTop">
        <i class="fa fa-chevron-up"></i>
    </a>
    <!-- End to top -->

    <!-- START JAVASCRIPT -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtcenQsMCh4peC8zzCGgBzKTO-_VC2x3Y&callback=initAutocomplete&libraries=places&v=weekly" async></script>
    <script src="https://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"></script>

    <script type="text/javascript">
        let origin;
        let destination;
        let jarak;
        let autocomplete;
        let autocompletepenerima = [];
        let addresschanged = true;
        let distancematrixresponse;
        let sessiontoken;
        let placedata;
        let diskon = null;
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
        let typingTimer;
        let doneTypingInterval = 3000;
        let placevalid = [];
        let kota;
        let invalidChars = [
            "-",
            "+",
            "e"
        ];

        function addressChanged(state) {
            // console.log("address state " + state);
            addresschanged = state;
            if (document.getElementById("Tarif").value != "0" && document.getElementById("berat_barang").value != "") {
                // hitungSubTotal();

            }

        }

        function resetAddressValidState() {
            placevalid = false;
        }


        function checkEligibleTarif() {
            if (parseInt(document.getElementById("jumlahpenerima").value) > 3) {
                document.getElementById("Tarif").getElementsByTagName("option")[3].disabled = true;
            }
            let arrayResultCheckAlamat = [];
            for (let i = 0; i <= parseInt(document.getElementById("jumlahpenerima").value); i++) {
                if (i === 0) {
                    arrayResultCheckAlamat.push(checkSurabayaCoverage(document.getElementById("Alamat_pengirim").value));
                } else {
                    arrayResultCheckAlamat.push(checkSurabayaCoverage(document.getElementById(`alamat_penerima${i}`).value));
                }
            }
            if (!compareAllArrayBoolean(arrayResultCheckAlamat)) {
                document.getElementById("Tarif").getElementsByTagName("option")[1].disabled = true;
                document.getElementById("Tarif").getElementsByTagName("option")[1].selected = false;
                document.getElementById("Tarif").getElementsByTagName("option")[2].selected = true;
                // console.log(document.getElementById("Tarif").value);
                // console.log(document.getElementById("Tarif").value == 1);
                // if (document.getElementById("Tarif").value == 1){
                //     resetSelectOptions(document.getElementById("Tarif"));
                // }
            }
        }

        function resetSelectOptions(selectElement) {
            selectElement.getElementsByTagName("option")[0].disabled = false;
            selectElement.selectedIndex = 0;
            selectElement.getElementsByTagName("option")[0].disabled = true;
        }

        function checkSurabayaCoverage(alamat) {
            return alamat.includes("Surabaya") || alamat.includes("SBY");
        }

        function compareAllArrayBoolean(array) {
            return !array.some((item) => item === false);
        }

        function setTimeLimit() {
            let tarif = document.getElementById("Tarif").value;
            if (tarif === "1") {
                document.getElementById("jam").min = "08:00:00";
                document.getElementById("jam").max = "16:15:00";
                document.getElementById("diskon").disabled = true;
            } else if (tarif === "2") {
                document.getElementById("jam").min = "08:00:00";
                document.getElementById("jam").max = "16:15:00";
                document.getElementById("diskon").disabled = false;
            } else if (tarif === "3") {
                document.getElementById("jam").min = "07:00:00";
                document.getElementById("jam").max = "16:15:00";
                document.getElementById("diskon").disabled = false;
            }
        }

        function getDiskon() {
            let kodediskon = document.getElementById("diskon").value;
            $.get(`/getdiskon/${kodediskon}`, function(result) {
                if (result != null) {
                    diskon = JSON.parse(result);
                    hitungTotal();
                } else {
                    hitungTotal();
                }
            });
        }

        function setDateLimit() {
            let tarif = document.getElementById("Tarif").value;
            let date = new Date();
            // console.log(date.getDate());
            if (tarif == "1") {
                // console.log(new Date(document.getElementById("tanggal").value).toLocaleDateString() <= date.toLocaleDateString());
                if (new Date(document.getElementById("tanggal").value).toLocaleDateString() === date.toLocaleDateString()) {
                    resetDate();
                }
                // document.getElementById("tanggal").value = "";
                date.setDate(date.getDate() + 1);
            }
            date = date.toISOString().slice(0, 10);
            let datemax = new Date();
            datemax.setDate(datemax.getDate() + 7);
            document.getElementById("tanggal").setAttribute("min", date);
            document.getElementById("tanggal").max = datemax.toISOString().slice(0, 10);
        }

        function resetDate() {
            document.getElementById("tanggal").value = "";
        }

        function hitungTotal() {
            let hargabarang = parseInt(document.getElementById("harga_produk").value) || 0;
            let subtotal = parseInt(document.getElementById("Sub_Total").value);
            let jumlahdiskon = 0;
            if (diskon != null) {
                document.getElementById("id_diskon").value = diskon.id_diskon;
                switch (diskon.satuan) {
                    case "Persen": {
                        let potongan = parseFloat(diskon.potongan);
                        let maxdiskon = parseFloat(diskon.max_diskon);
                        jumlahdiskon = subtotal * potongan / 100;
                        if (maxdiskon != 0 && jumlahdiskon > maxdiskon) {
                            jumlahdiskon = maxdiskon;
                        }
                        break;
                    }
                    case "Rp": {
                        jumlahdiskon = parseInt(diskon.potongan);
                        break;
                    }
                }
            }
            subtotal = subtotal - jumlahdiskon;

            if (hargabarang === 0) {
                document.getElementById("Total").value = roundUpTo(subtotal);
            } else {
                document.getElementById("Total").value = hargabarang + roundUpTo(subtotal);
            }
            setDateLimit();
        }

        function roundUpTo(n, x = 1000) {
            if (n % x === 0) {
                return n;
            } else {
                return Math.round((n + x / 2) / x) * x;
            }
        }

        async function hitungSubTotal() {
            let tarifcode = document.getElementById("Tarif").value;
            let berat = document.getElementById("berat_barang").value;
            let jumlahpenerima = document.getElementById("jumlahpenerima").value;
            calculateDistance(function(response, status) {
                distancematrixresponse = response;
                let arrayjarak = [];
                let totaljarak = 0;
                if (status === 'OK') {
                    var origins = response.originAddresses;
                    var destinations = response.destinationAddresses;
                    for (let i = 0; i < destinations.length; i++) {
                        let resultmeters = response.rows[i].elements[i].distance.value;
                        let resultkm = Math.ceil(resultmeters / 1000);
                        arrayjarak.splice(i, 0, resultkm);
                        totaljarak += resultkm;
                    }
                    document.getElementById("jarak").value = totaljarak;
                    let jsonjarak = JSON.stringify(arrayjarak);
                    if (tarifcode != 0 && berat !== "") {
                        $.get(`/hitungsubtotal/${tarifcode}/${jsonjarak}/${berat}/${jumlahpenerima}`, function(result) {
                            document.getElementById("Sub_Total").value = result;
                            document.getElementById("jarak").value = totaljarak;
                            hitungTotal();
                            // setCity();
                        });
                    }
                } else {
                    console.log("Failed Count Total!");
                    alert("Terjadi Masalah");
                }
            });
            return true;
        }

        function convertCodeCity(kota) {
            let optiontarif = document.getElementById("Tarif").getElementsByTagName("option")
            if (kota.includes("Surabaya") || kota.includes("SBY")) {
                // optiontarif[1].disabled = false;
                return "SBY";
            } else if (kota.includes("Sidoarjo")) {
                // optiontarif[1].disabled = true;
                return "SDA";
            } else if (kota.includes("Gresik")) {
                // optiontarif[1].disabled = true;
                return "GRS";
            } else {
                console.log("Unknown City");
            }
        }

        // function setCity() {
        //     let origin = distancematrixresponse.originAddresses;
        //     let destination = distancematrixresponse.destinationAddresses;
        //     let jumlahpenerima = parseInt(document.getElementById("jumlahpenerima").value);
        //     document.getElementById("kota_pengirim").value = convertCodeCity(origin[0]);
        //     for (let i = 1; i <= jumlahpenerima; i++) {
        //         document.getElementById(`kota_penerima${i}`).value = convertCodeCity(destination[i - 1]);
        //     }
        // }

        function calculateDistance(callback) {
            if (addresschanged) {
                // console.log("Calculate Distance");
                // console.log("Alamat = " + document.getElementById("alamat_penerima1").value);
                let alamatpengirim = document.getElementById("Alamat_pengirim").value;
                let origin = [];
                origin.splice(0, 0, alamatpengirim);
                let destination = [];
                let jumlahpenerima = parseInt(document.getElementById("jumlahpenerima").value);
                for (let i = 1; i <= jumlahpenerima; i++) {
                    if (i <= jumlahpenerima - 1) {
                        origin.splice(i, 0, document.getElementById(`alamat_penerima${i}`).value)
                    }
                    if (document.getElementById(`alamat_penerima${i}`).value == "") {
                        console.log("Alamat not detected !");
                    }
                    destination.splice(i - 1, 0, document.getElementById(`alamat_penerima${i}`).value);
                }
                addresschanged = false;
                var service = new google.maps.DistanceMatrixService();
                service.getDistanceMatrix({
                    origins: origin,
                    destinations: destination,
                    travelMode: 'DRIVING',
                    avoidHighways: false,
                    avoidTolls: true,
                }, callback);
            } else {
                // console.log("Using Current Distance Matrix")
                callback(distancematrixresponse, 'OK');
            }
        }

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
            let inputAlamatPengirim = document.querySelector("#Alamat_pengirim");
            let elementPengirim = document.getElementById("Alamat_pengirim");
            let inputAlamatPenerima = document.querySelector("#alamat_penerima1");
            let elementPenerima1 = document.getElementById("alamat_penerima1");
            autocomplete = new google.maps.places.Autocomplete(inputAlamatPengirim, options);
            placevalid.push(false);
            let thisautocomplete = new google.maps.places.Autocomplete(inputAlamatPenerima, options);
            placevalid.push(false);
            autocomplete.addListener("place_changed", function() {
                let place = "";
                place = autocomplete.getPlace({
                    fields: ['formatted_address', 'geometry'],
                    sessionToken: sessiontoken
                });
                if (!place.geometry) {
                    elementPengirim.value = "";
                    placevalid[0] = false;
                } else {
                    placevalid[0] = true
                    document.getElementById("kota_pengirim").value = convertCodeCity(place.formatted_address);
                    elementPengirim.value = place.formatted_address;
                }
            });
            thisautocomplete.addListener("place_changed", function() {
                let place = "";
                place = thisautocomplete.getPlace({
                    fields: ['address_components', 'formatted_address', 'geometry', 'name'],
                    sessionToken: sessiontoken
                });
                if (!place.geometry) {
                    elementPenerima1.value = "";
                    placevalid[1] = false;
                } else {
                    placevalid[1] = true
                    document.getElementById("kota_penerima1").value = convertCodeCity(place.formatted_address);
                    elementPenerima1.value = place.formatted_address;
                }
            });
            autocompletepenerima.push(thisautocomplete);
        }

        function setAutoCompleteListener(elementid) {
            let inputPenerima = document.querySelector(`#alamat_penerima${elementid}`);
            let elementPengirim = document.getElementById(`alamat_penerima${elementid}`);
            let elementtelp = document.getElementById(`telp_penerima${elementid}`);
            let newautocomplete = new google.maps.places.Autocomplete(inputPenerima, options);
            placevalid.push(false);
            newautocomplete.addListener("place_changed", function() {
                let place = "";
                place = newautocomplete.getPlace({
                    fields: ['address_components', 'formatted_address', 'geometry', 'name'],
                    sessionToken: sessiontoken
                });
                if (!place.geometry) {
                    elementPengirim.value = "";
                    placevalid[elementid] = false;
                } else {
                    placevalid[elementid] = true
                    document.getElementById(`kota_penerima${elementid}`).value = convertCodeCity(place.formatted_address);
                    elementPengirim.value = place.formatted_address;
                    if (document.getElementById("Tarif").value != 0) {
                        hitungSubTotal();
                    }
                }
            });
            autocompletepenerima.push(newautocomplete);
            elementtelp.addEventListener("keypress", function(evt) {
                if (evt.which != 8 && evt.which != 0 && evt.which < 48 || evt.which > 57) {
                    evt.preventDefault();
                }
            });
        }

        function placeValidation(elementid, element) {
            if (!placevalid[elementid]) {
                element.value = "";
            }
        }

        function resetField(element) {
            element.value = "";
        }

        $(document).ready(function() {
            var max_fields = 4; //maximum input boxes allowed
            var wrapper = $(".input_fields_warp"); //Fields wrapper
            var add_button = $(".add_field_button"); //Add button ID
            var x = 1; //initlal text box count
            $(add_button).click(function(e) { //on add input button click
                e.preventDefault();
                if (x < max_fields) {
                    ++x; //text box increment
                    $(wrapper).append(`<div class="row"><div class="col-sm-6"><div class="form-group require"><label for="Penerima${x}" class="require">Nama Penerima</label><input id="Penerima${x}" name="Penerima${x}" type="text" class="form-control validate[required]" placeholder="Masukkan Nama Penerima" /></div></div><div class="col-sm-6"><div class="form-group require"><label for="telp_penerima${x}">No.Telp Penerima</label><input id="telp_penerima${x}" name="telp_penerima${x}" type="tel"  class="form-control validate[custom[phone],required]" oninput="this.value = this.value.replace(/[e\+\-]/gi, '');"  placeholder="Masukkan Nomor Telp Penerima" /></div></div><div class="col-sm-12"><div class="form-group require"><label for="alamat_penerima${x}">Alamat Penerima</label><input id="alamat_penerima${x}" name="alamat_penerima${x}" type="text" class="form-control validate[required]" placeholder="Masukkan Alamat Lengkap Penerima" onchange="addressChanged(true)" onblur="placeValidation(${x},this)" rows="5" /></div></div><div class="col-sm-12"><div class="form-group"><label for="Keterangan_penerima${x}">Keterangan Alamat Penerima</label><textarea id="Keterangan_penerima${x}" name="Keterangan_penerima${x}" type="text" class="form-control" placeholder="Catatan : Sebelah Masjid, Warung, Pagar putih" rows="5"></textarea></div></div><input type="hidden" id="kota_penerima${x}" name="kota_penerima${x}" value="SBY"><div style="background-color:red;" class="remove_field btn btn-info active"><i class="glyphicon glyphicon-trash"></i> Hapus Penerima</div></div>`); //add input box
                    document.getElementById("jumlahpenerima").value = x;
                    setAutoCompleteListener(x)
                }
            });
            $(wrapper).on("click", ".remove_field", function(e) { //user click on remove text
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
                document.getElementById("jumlahpenerima").value = x;
            });

            $('.search-location').keypress(function(e) {
                if (e.which == 13) {
                    google.maps.event.trigger(autocomplete, 'place_changed');
                    return false;
                }
            });
            // $(".btn next").click(function(e) {
            //     hitungSubTotal();
            //     checkEligibleTarif();
            // })
            document.getElementById("step1Next").addEventListener('click', function() {
                checkEligibleTarif();
                hitungSubTotal();
            });
            // $("#step1Next").click(function (e) {
            //     hitungSubTotal();
            //     checkEligibleTarif();
            // });


            var next = document.getElementById('step0Next');
            var waktu = new Date();
            var jam = waktu.getHours();

            if (jam >= 07 && jam <= 20) {
                next.style.display = 'blok';
            } else {
                next.style.display = 'none';
            }
            // $(document).ready(function() {

            //     if (sessionStorage.getItem('.giztapop-pad') !== true) {
            //         $(".giztapop-pad").modal('show');
            //     } else if (sessionStorage.getItem('.giztapop-pad') === true) {
            //         $(".giztapop-pad").modal('hide');
            //     }
            //     $("#mclose1").click(function() {
            //         $(".giztapop-pad").modal('hide');
            //     });
            // });

            function setCookie(cname, cvalue, exdays) {
                var d = new Date;
                d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1e3);
                var expires = "expires=" + d.toUTCString();
                document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/"
            }

            function getCookie(cname) {
                var name = cname + "=";
                var decodedCookie = decodeURIComponent(document.cookie);
                var ca = decodedCookie.split(';');
                for (var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') {
                        c = c.substring(1)
                    }
                    if (c.indexOf(name) == 0) {
                        return c.substring(name.length, c.length)
                    }
                }
                return ""
            }
            document['\x62\x6f\x64\x79']['\x6f\x6e\x6c\x6f\x61\x64'] = function checkCookie() {
                var _0x9a2885 = '\x67\x69\x7a\x74\x61\x43\x6f\x6f\x6b\x69\x65',
                    _0x1274eb = getCookie(_0x9a2885),
                    _0x49098d = document['\x67\x65\x74\x45\x6c\x65\x6d\x65\x6e\x74\x42\x79\x49\x64']('\x67\x69\x7a\x74\x61\x70\x6f\x70\x2d\x70\x61\x64'),
                    _0x2dd7c1 = document['\x67\x65\x74\x45\x6c\x65\x6d\x65\x6e\x74\x42\x79\x49\x64']('\x67\x69\x7a\x74\x61\x70\x6f\x70\x2d\x68\x69\x64\x65');
                _0x1274eb != '' ? _0x49098d['\x73\x74\x79\x6c\x65']['\x64\x69\x73\x70\x6c\x61\x79'] = '\x6e\x6f\x6e\x65' : (_0x1274eb = _0x49098d['\x73\x74\x79\x6c\x65']['\x64\x69\x73\x70\x6c\x61\x79'] = '\x62\x6c\x6f\x63\x6b', _0x1274eb != '' && _0x1274eb != null && setCookie(_0x9a2885, _0x1274eb, 1)), _0x2dd7c1['\x6f\x6e\x63\x6c\x69\x63\x6b'] = function() {
                    _0x49098d['\x73\x74\x79\x6c\x65']['\x64\x69\x73\x70\x6c\x61\x79'] = '\x6e\x6f\x6e\x65';
                };
            };



        });
    </script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <!-- Bootsnavs -->
    <script src="js/bootsnav/bootsnav.js"></script>

    <!-- Columns -->
    <script src="js/column/bootstrap-grid-columns.js"></script>

    <!--    datepicker-->


    </script>

    <!-- Custom form -->
    <script src="js/form/jcf.js"></script>
    <script src="js/form/jcf.scrollable.js"></script>
    <script src="js/form/jcf.select.js"></script>
    <script>
        jcf.replaceAll();
    </script>

    <!-- ticker -->
    <script src="js/ticker/ticker.js"></script>

    <!-- Twitter -->
    <!--[if lte IE 9]>
<script src="js/tweecool/jquery.xdomainrequest.min.js"></script>
<![endif]-->
    <script src="js/tweecool/tweecool.js"></script>
    <script src="js/tweecool/setting.js"></script>

    <!-- Parallax -->
    <script src="js/parallax/jarallax.js"></script>
    <script src="js/parallax/setting.js"></script>

    <!-- Owl -->
    <script src="js/owl/owl.carousel.js"></script>
    <script src="js/owl/setting.js"></script>

    <!-- Form Wizard -->
    <script src="js/form-wizard/jquery.formtowizard.js"></script>
    <script src="js/form-wizard/jquery.validationEngine.min.js"></script>
    <script src="js/form-wizard/jquery.validationEngine-en.min.js"></script>
    <script src="js/form-wizard/setting.js"></script>

    <!-- Vegas -->
    <script src="js/vegas/vegas.js"></script>
    <script src="js/vegas/setting.js"></script>

    <!-- My Script -->
    <script type="text/javascript" src="js/custom.js"></script>
    <script src="<?= base_url() ?>/js/sweetalert2.all.min.js"></script>
    <?php if (session()->getFlashData('success')) : ?>
        <script>
            Swal.fire(
                'Pemesanan Berhasil !',
                'Pemesanan Akan Segera Di Proses',
                'success'
            )
            <?php session()->remove('success') ?>
        </script>
    <?php elseif (session()->getFlashData('error')) : ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Pemesanan Gagal',
                text: 'Pemesanan Gagal Di Kirim'
            })
        </script>
        <?php session()->remove('error') ?>
    <?php endif; ?>

    <!-- END JAVASCRIPT -->

</body>

</html>