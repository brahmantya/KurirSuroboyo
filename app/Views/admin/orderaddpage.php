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
    <link rel="stylesheet" type="text/css" href="<?= base_url('/css/app-invoice.css') ?>">
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
                <!-- app invoice View Page -->
                <section class="invoice-edit-wrapper">
                    <div class="row">
                        <!-- invoice view page -->
                        <form action="<?= $action ?>" method="post" enctype="multipart/form-data" onkeydown="return event.key != 'Enter';">
                            <?php csrf_field(); ?>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body pb-0 mx-25">
                                        <!-- header section -->
                                        <div class="row mx-0">
                                            <div class="col-xl-4 col-md-12 d-flex align-items-center pl-0">
                                                <h6 class="invoice-number mr-75">Id Pemesanan</h6>
                                                <input type="text" class="form-control" id="id_pemesanan" name="id_pemesanan" value="<?= (isset($datapemesanan)) ? $datapemesanan['id_pemesanan'] : '' ?>" readonly>
                                            </div>
                                            <div class="col-xl-4 col-md-12 d-flex align-items-center pl-0">
                                                <h6 class="invoice-number mr-75">Admin</h6>
                                                <input type="text" class="form-control" id="nama_admin" name="nama_admin" value="<?= (isset($datapemesanan)) ? $datapemesanan['nama_admin'] : '' ?>" readonly>
                                            </div>
                                            <div class="col-xl-4 col-md-12 d-flex align-items-center pl-0">
                                                <h6 class="invoice-number mr-75">Telp Admin</h6>
                                                <input type="text" class="form-control" id="no_admin" name="no_admin" value="<?= (isset($datapemesanan)) ? $datapemesanan['no_admin'] : '' ?>" readonly>
                                            </div>
                                        </div>
                                        <hr>
                                        <fieldset>
                                            <?php if (session()->getFlashData('success')) : ?>
                                                <div class="alert alert-success" role="alert">
                                                    <?= session()->getFlashData('success'); ?>
                                                </div>
                                            <?php elseif (session()->getFlashData('error')) : ?>
                                                <div class="alert alert-danger" role="alert">
                                                    <?= session()->getFlashData('error'); ?>
                                                </div>
                                            <?php endif; ?>
                                            <legend><b>Pengirim</b></legend>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group require">
                                                        <label for="Nama_pengirim" class="require">Nama</label>
                                                        <input id="Nama_pengirim" name="Nama_pengirim" type="text" class="form-control validate[required]" placeholder="Masukkan nama anda" value="<?= (isset($datapengirim)) ? $datapengirim['nama_pengirim'] : ''; ?>" />
                                                        <input id="id_pengirim" name="id_pengirim" type="hidden" value="<?= (isset($datapengirim)) ? $datapengirim['id_pengirim'] : ''; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group require">
                                                        <label for="Telp_pengirim">No.Telp</label>
                                                        <input id="Telp_pengirim" name="Telp_pengirim" type="text" class="form-control validate[custom[phone],required]" placeholder="Masukkan nomor telepon anda" oninput="this.value = this.value.replace(/[e\+\-]/gi, '');" value="<?= (isset($datapengirim)) ? $datapengirim['telp_pengirim'] : ''; ?>" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group require">
                                                        <label for="Alamat_pengirim">Alamat</label>
                                                        <input id="Alamat_pengirim" name="Alamat_pengirim" class="form-control validate[required]" placeholder="Masukkan alamat lengkap anda " onchange="addressChanged(true)" rows="5" onblur="placeValidation(0,this)" value="<?= (isset($datapengirim)) ? $datapengirim['alamat_pengirim'] : ''; ?>">
                                                        <input id="geometrypengirim" name="geometrypengirim" type="hidden">
                                                        <!--                                            <div id="Alamat_pengirim"></div>-->
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="Keterangan_pengirim">Keterangan</label>
                                                        <textarea id="Keterangan_pengirim" name="Keterangan_pengirim" type="text" class="form-control" placeholder="Catatan : Sebelah Masjid, Warung, Pagar putih" rows="5"><?= (isset($datapengirim)) ? $datapengirim['keterangan_pengirim'] : ''; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" id="kota_pengirim" name="kota_pengirim" value="<?= (isset($datapengirim)) ? $datapengirim['id_kota'] : ''; ?>">
                                        </fieldset>
                                        <hr>
                                        <div class="card-body pt-50">
                                            <!-- product details table-->

                                            <div class="invoice-product-details ">
                                                <div class="input_fields_warp" id="penerima">
                                                    <?php $index = 1;?>
                                                    <?php foreach ($datapenerima as $penerima) :?>
                                                    <div data-repeater-list="group-a" id="group_penerima<?= $index; ?>">
                                                        <legend><b>Penerima <?= $index; ?></b></legend>
                                                        <div data-repeater-item>
                                                            <div class="invoice-item d-flex border rounded mb-1">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group require">
                                                                            <label for="Penerima<?= $index; ?>" class="require">Nama</label>
                                                                            <input id="Penerima<?= $index; ?>" name="Penerima<?= $index; ?>" type="text" class="form-control validate[required]" placeholder="Masukkan Nama Penerima" value="<?= (isset($penerima)) ? $penerima['nama_penerima'] : '' ?>" />
                                                                            <input type="hidden" id="id_penerima<?= $index; ?>" name="id_penerima<?= $index; ?>" value="<?= (isset($penerima)) ? $penerima['id_penerima'] : '' ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group require">
                                                                            <label for="telp_penerima<?= $index; ?>">No.Telp</label>
                                                                            <input id="telp_penerima<?= $index; ?>" name="telp_penerima<?= $index; ?>" type="tel" class="form-control validate[custom[phone],required]" oninput="this.value = this.value.replace(/[e\+\-]/gi, '');" placeholder="Masukkan Nomor Telp Penerima" value="<?= (isset($penerima)) ? $penerima['no_telp'] : '' ?>" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group require">
                                                                            <label for="alamat_penerima<?= $index; ?>">Alamat</label>
                                                                            <input id="alamat_penerima<?= $index; ?>" name="alamat_penerima<?= $index; ?>" type="text" class="form-control validate[required]" placeholder="Masukkan Alamat Lengkap Penerima" onblur="placeValidation(1,this)" onchange="addressChanged(true)" rows="5" value="<?= (isset($penerima)) ? $penerima['alamat_penerima'] : '' ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <label for="Keterangan_penerima<?= $index; ?>">Keterangan</label>
                                                                            <textarea id="Keterangan_penerima<?= $index; ?>" name="Keterangan_penerima<?= $index; ?>" type="text" class="form-control" placeholder="Catatan : Sebelah Masjid, Warung, Pagar putih" rows="5"><?= (isset($penerima)) ? $penerima['keterangan_penerima'] : '' ?></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <input type="hidden" id="kota_penerima<?= $index; ?>" name="kota_penerima<?= $index; ?>" value="<?= (isset($penerima)) ? $penerima['id_kota'] : '' ?>">
                                                                </div>
                                                                <div class="invoice-icon d-flex flex-column justify-content-between border-left p-25">
                                                                    <button class="btn btn-light-primary btn-sm" data-repeater-delete type="button" id="delete_penerima<?= $index; ?>" onclick="deletePenerima(<?= $index; ?>)">
                                                                        <i class="bx bx-x"></i>
                                                                        <span class="invoice-repeat-btn">hapus</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <?php $index++;?>
                                                    <?php endforeach;?>
                                                    <div class="form-group">
                                                        <div class="col p-0">
                                                            <button class="btn btn-light-primary btn-sm" id="add_penerima" name="add_penerima" data-repeater-create type="button">
                                                                <i class="bx bx-plus"></i>
                                                                <span class="invoice-repeat-btn">Add Item</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <hr>

                                                </div>
                                                    <fieldset>
                                                        <div class="control-group after-add-more">
                                                            <legend><b>Tarif</b></legend>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group require">
                                                                        <label for="Jenis_barang">Jenis Produk</label>
                                                                        <input id="Jenis_barang" name="Jenis_barang" type="text" class="form-control validate[required]" placeholder="Masukkan jenis produk anda" value="<?= (isset($datapemesanan)) ? $datapemesanan['jenis_barang'] : '' ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group require">
                                                                        <label class="berat_barang">Berat Produk</label>
                                                                        <div class="input-group">
                                                                            <input type="number" class="form-control" id="berat_barang" name="berat_barang" class="form-control" placeholder="Masukkan berat produk" onchange="hitungSubTotal()" value="<?= (isset($datapemesanan)) ? $datapemesanan['berat'] : '' ?>">
                                                                            <div class="input-group-append">
                                                                                <span class="input-group-text" id="basic-addon2">Kg</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group require">
                                                                        <label for="tanggal" class="require">Tanggal Pengambilan</label>
                                                                        <input id="tanggal" name="tanggal" type="date" class="form-control validate[required]" placeholder="2021-01-30" value="<?= (isset($datapemesanan)) ? $datapemesanan['tanggal_kirim'] : '' ?>" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group require">
                                                                        <label for="jam" class="require">Jam Pengambilan</label>
                                                                        <input id="jam" name="jam" type="time" min="08:00:00" max="20:00:00" class="form-control validate[required]" value="<?= (isset($datapemesanan)) ? $datapemesanan['jam'] : ''?>" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group require">
                                                                        <label for="Tarif" class="require">Tarif</label>
                                                                        <select class="custom-select" id="Tarif" name="Tarif" onchange="hitungSubTotal()" required data-validation-required-message="Tarif harus diisi">
                                                                            <option selected value="0">Silahkan Pilih Tarif</option>
                                                                            <?php foreach ($datatarif as $tarif) : ?>
                                                                                <?php if ($tarif['id_tarif'] == $datapemesanan['id_tarif']) : ?>
                                                                                    <option value="<?= $tarif['id_tarif']; ?>" selected><?= $tarif['nama_tarif'] ?></option>

                                                                                <?php else : ?>
                                                                                    <option value="<?= $tarif['id_tarif']; ?>"><?= $tarif['nama_tarif'] ?></option>
                                                                                <?php endif; ?>
                                                                            <?php endforeach; ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group require">
                                                                        <label for="pembayaran" class="require">Pembayaran</label>
                                                                        <select id="pembayaran" name="pembayaran" class="custom-select" required="">
                                                                            <option selected value="0">Silahkan Pilih Cara Bayar</option>
                                                                            <optgroup label="Cash">
                                                                                <option value="1" <?= ($datapemesanan['id_metode'] == 1) ? 'selected' : '' ?>>Cash Pengirim</option>
                                                                                <option value="2" <?= ($datapemesanan['id_metode'] == 2) ? 'selected' : '' ?>>Cash Penerima</option>
                                                                            </optgroup>
                                                                            <optgroup label="Transfer">
                                                                                <option value="3" <?= ($datapemesanan['id_metode'] == 3) ? 'selected' : '' ?>>BCA - 6720184875</option>
                                                                                <option value="4" <?= ($datapemesanan['id_metode'] == 4) ? 'selected' : '' ?>>Mandiri - 1410019389881</option>
                                                                                <option value="5" <?= ($datapemesanan['id_metode'] == 5) ? 'selected' : '' ?>>Mandiri Syariah - 7133260239</option>
                                                                            </optgroup>
                                                                            <option value="6" <?= ($datapemesanan['id_metode'] == 6) ? 'selected' : '' ?>>COD</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="harga_produk">Harga Produk Jika COD</label>
                                                                        <input id="harga_produk" name="harga_produk" type="number" class="form-control" placeholder="Masukkan harga produk anda" onchange="hitungTotal()" value="<?= (isset($datapemesanan)) ? $datapemesanan['harga_barang'] : ''?>">
                                                                    </div>
                                                                </div>
                                                                <input type="hidden" id="jarak" name="jarak" value="<?= (isset($datapemesanan)) ? $datapemesanan['jarak'] : ''?>">
                                                                <input type="hidden" id="jumlahpenerima" name="jumlahpenerima" value="<?= (isset($datapemesanan) && $datapemesanan['jumlahpenerima']!=null) ? $datapemesanan['jumlahpenerima'] : '1' ?>">
                                                                <input type="hidden" id="deleted_penerima" name="deleted_penerima">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="Sub_Total">Sub Total :</label>
                                                                        <input type="number" name="Sub_Total" id="Sub_Total" class="form-control" onchange="hitungTotal()" value="<?= (isset($datapemesanan)) ? $datapemesanan['ongkir'] : '' ?>" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="diskon">Voucher Diskon</label>
                                                                        <input id="diskon" name="diskon" type="text" class="form-control" placeholder="Masukkan voucher anda" oninput="getDiskon()" value="<?= (isset($datapemesanan['kode_diskon'])) ? $datapemesanan['kode_diskon'] : '' ?>" />
                                                                        <input id="id_diskon" name="id_diskon" type="hidden" value="<?= (isset($datapemesanan['id_diskon'])) ? $datapemesanan['id_diskon'] : '' ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="Total">Total :</label>
                                                                        <input type="number" name="Total" id="Total" class="form-control" value="<?= (isset($datapemesanan)) ? $datapemesanan['total_harga'] : '' ?>" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group marginbot-clear">
                                                            <input id="kirim" type="submit" value="Kirim" class="btn btn-primary" />
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
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
<!--    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtcenQsMCh4peC8zzCGgBzKTO-_VC2x3Y&callback=initAutocomplete&libraries=places&v=weekly" async></script>-->

    <script src="<?= base_url('js/jquery.min.js')?>"></script>

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
        let deleted_penerima = [];
        var x = 1;

        function addressChanged(state) {
            addresschanged = state;
            if (document.getElementById("Tarif").value != "0" && document.getElementById("berat_barang").value != "") {
            }
        }

        function resetAddressValidState() {
            placevalid = false;
        }


        function checkEligibleTarif() {
            if (parseInt(document.getElementById("jumlahpenerima").value) > 3) {
                document.getElementById("Tarif").getElementsByTagName("option")[3].disabled = true
            }
        }

        function setTimeLimit() {
            let tarif = document.getElementById("Tarif").value;
            if (tarif === "1") {
                document.getElementById("jam").min = "08:00:00";
                document.getElementById("jam").max = "20:00:00";
                document.getElementById("diskon").disabled = true;
            } else if (tarif === "2") {
                document.getElementById("jam").min = "08:00:00";
                document.getElementById("jam").max = "17:00:00";
                document.getElementById("diskon").disabled = false;
            } else if (tarif === "3") {
                document.getElementById("jam").min = "07:00:00";
                document.getElementById("jam").max = "20:00:00";
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
            if (tarif === "1") {
                document.getElementById("tanggal").value = "";
                date.setDate(date.getDate() + 1);
            }
            date = date.toISOString().slice(0, 10);
            let datemax = new Date();
            datemax.setDate(datemax.getDate() + 7);
            document.getElementById("tanggal").setAttribute("min", date);
            document.getElementById("tanggal").max = datemax.toISOString().slice(0, 10);
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
                    // alert("Terjadi Masalah");
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


        async function calculateDistance(callback) {
            if (addresschanged) {
                let alamatpengirim = document.getElementById("Alamat_pengirim").value;
                let origin = [];
                origin.splice(0, 0, alamatpengirim);
                let destination = [];
                let jumlahpenerima = parseInt(document.getElementById("jumlahpenerima").value);
                for (let i = 1; i <= jumlahpenerima; i++) {
                    if (i <= jumlahpenerima - 1) {
                        origin.splice(i, 0, document.getElementById(`alamat_penerima${i}`).value)
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
                    hitungSubTotal();
                }
            });
            thisautocomplete.addListener("place_changed", function() {
                let place = "";
                place = thisautocomplete.getPlace({
                    fields: ['formatted_address', 'geometry'],
                    sessionToken: sessiontoken
                });
                if (!place.geometry) {
                    elementPenerima1.value = "";
                    placevalid[1] = false;
                } else {
                    placevalid[1] = true
                    document.getElementById("kota_penerima1").value = convertCodeCity(place.formatted_address);
                    elementPenerima1.value = place.formatted_address;
                    hitungSubTotal();
                }
            });
            autocompletepenerima.push(thisautocomplete);
        }

        function setAutoCompleteListener(elementid) {
            let inputPenerima = document.querySelector(`#alamat_penerima${elementid}`);
            let elementPenerima = document.getElementById(`alamat_penerima${elementid}`);
            let newautocomplete = new google.maps.places.Autocomplete(inputPenerima, options);
            placevalid.push(false);
            newautocomplete.addListener("place_changed", function() {
                let place = "";
                place = newautocomplete.getPlace({
                    fields: ['formatted_address', 'geometry'],
                    sessionToken: sessiontoken
                });
                if (!place.geometry) {
                    elementPenerima.value = "";
                    placevalid[elementid] = false;
                } else {
                    placevalid[elementid] = true
                    document.getElementById(`kota_penerima${elementid}`).value = convertCodeCity(place.formatted_address);
                    elementPenerima.value = place.formatted_address;
                    hitungSubTotal();
                }
            });
            autocompletepenerima.push(newautocomplete);
        }

        function placeValidation(elementid,element) {
            if (!placevalid[elementid]) {
                element.value = "";
            }
        }

        function resetField(element) {
            element.value = "";
        }

        function initializeAutocompletePenerima(){
            let jumlahpenerima = parseInt(document.getElementById("jumlahpenerima").value);
            for (let i = 2; i<=jumlahpenerima; i++){
                setAutoCompleteListener(i);
            }
        }
        function deletePenerima(index) {
            if (x >1 ) {
                let idpenerima = document.getElementById(`id_penerima${index}`).value;
                $(`#group_penerima${index}`).remove();
                --x;
                document.getElementById("jumlahpenerima").value = x;
                hitungSubTotal();
                deleted_penerima.push(idpenerima);
                document.getElementById("deleted_penerima").value = JSON.stringify(deleted_penerima);
            } else {
                alert("Tidak dapat menghapus penerima minimal terdapat 1 penerima di setiap pemesanan");
            }

        }


        $(document).ready(function() {
            var max_fields = 4; //maximum input boxes allowed
            var wrapper = $(".input_fields_warp"); //Fields wrapper
            var add_button = $("#add_penerima"); //Add button ID
           //initlal text box count
            getDiskon();
            let jumlahpenerima = parseInt(document.getElementById("jumlahpenerima").value);
            if (x<=jumlahpenerima){
                for (let i = 2; i<=jumlahpenerima; i++){
                    x++;
                    setAutoCompleteListener(i);
                    getDiskon();
                }
            }

            $(add_button).click(function(e) { //on add input button click
                e.preventDefault();
                if (x < max_fields) {
                    ++x; //text box increment
                    let htmlpenerima = ` <div data-repeater-list="group-a" id="group_penerima${x}">
                                                        <legend><b>Penerima${x}</b></legend>
                                                        <div data-repeater-item>
                                                            <div class="invoice-item d-flex border rounded mb-1">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group require">
                                                                            <label for="Penerima${x}" class="require">Nama</label>
                                                                            <input id="Penerima${x}" name="Penerima${x}" type="text" class="form-control validate[required]" placeholder="Masukkan Nama Penerima" value="" />
                                                                            <input type="hidden" id="id_penerima${x}" name="id_penerima${x}" value="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group require">
                                                                            <label for="telp_penerima${x}">No.Telp</label>
                                                                            <input id="telp_penerima${x}" name="telp_penerima${x}" type="tel" class="form-control validate[custom[phone],required]" oninput="this.value = this.value.replace(/[e\+\-]/gi, '');" placeholder="Masukkan Nomor Telp Penerima" value="" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group require">
                                                                            <label for="alamat_penerima${x}">Alamat</label>
                                                                            <input id="alamat_penerima${x}" name="alamat_penerima${x}" type="text" class="form-control validate[required]" placeholder="Masukkan Alamat Lengkap Penerima" onblur="placeValidation(1,this)" onchange="addressChanged(true)" rows="5" value="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <label for="Keterangan_penerima${x}">Keterangan</label>
                                                                            <textarea id="Keterangan_penerima${x}" name="Keterangan_penerima${x}" type="text" class="form-control" placeholder="Catatan : Sebelah Masjid, Warung, Pagar putih" rows="5"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <input type="hidden" id="kota_penerima${x}" name="kota_penerima${x}" value="SBY">
                                                                </div>
                                                                <div class="invoice-icon d-flex flex-column justify-content-between border-left p-25">
                                                                    <button class="btn btn-light-primary btn-sm" data-repeater-delete type="button" id="delete_penerima${x}" onclick="deletePenerima(${x})">
                                                                        <i class="bx bx-x"></i>
                                                                        <span class="invoice-repeat-btn">hapus</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>`;
                    // $(wrapper).append(`<div class="row"><legend><b>Penerima ${x}</b></legend><div class="col-sm-6"><div class="form-group require"><label for="Penerima${x}" class="require">Nama</label><input id="Penerima${x}" name="Penerima${x}" type="text" class="form-control validate[required]" placeholder="Masukkan Nama Penerima" /></div></div><div class="col-sm-6"><div class="form-group require"><label for="telp_penerima${x}">No.Telp</label><input id="telp_penerima${x}" name="telp_penerima${x}" type="tel" class="form-control validate[custom[phone],required]" oninput="this.value = this.value.replace(/[e\+\-]/gi, '');" placeholder="Masukkan Nomor Telp Penerima" /></div></div><div class="col-sm-12"><div class="form-group require"><label for="alamat_penerima${x}">Alamat</label><input id="alamat_penerima${x}" name="alamat_penerima${x}" type="text" class="form-control validate[required]" placeholder="Masukkan Alamat Lengkap Penerima" onchange="addressChanged(true)" onblur="placeValidation(${x},this)" rows="5" /></div></div><div class="col-sm-12"><div class="form-group"><label for="Keterangan_penerima${x}">Keterangan</label><textarea id="Keterangan_penerima${x}" name="Keterangan_penerima${x}" type="text" class="form-control" placeholder="Catatan : Sebelah Masjid, Warung, Pagar putih" rows="5"></textarea></div></div><input type="hidden" id="kota_penerima${x}" name="kota_penerima${x}" value="SBY"><div style="background-color:red;" class="remove_field btn btn-info active"><i class="glyphicon glyphicon-trash"></i> Hapus Penerima</div></div>`); //add input box
                    $(wrapper).append(htmlpenerima);
                    document.getElementById("jumlahpenerima").value = x;
                    setAutoCompleteListener(x);
                }
            });
            // $(wrapper).on("click", "#delete_penerima", function(e) { //user click on remove text
            //     e.preventDefault();
            //     $(this).parent('div').parent('div').parent('div').parent('div').remove();
            //     --x;
            //     document.getElementById("jumlahpenerima").value = x;
            //     hitungSubTotal();
            //
            // });

            // $('#pembayaran').change(function() {
            //     if ($(this).val() == 6) {
            //         $('#harga_produk').prop("disabled", true);
            //     } else {
            //         $('#harga_produk').prop("disabled", false);
            //         $('#harga_produk').val("");
            //         hitungTotal();
            //     }
            // });
            // $('#SignupForm').on('keyup', function (e) {
            //     var keyCode = e.keyCode || e.which;
            //     if (keyCode === 13) {
            //         e.preventDefault();
            //         return false;
            //     }
            // });
            $('.btn next').click(function(e) {
                hitungSubTotal();
                checkEligibleTarif();
            });

        });
        // google.maps.event.addDomListener(window, 'load', initAutocomplete);
    </script>
    <script async
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtcenQsMCh4peC8zzCGgBzKTO-_VC2x3Y&libraries=geometry,places&callback=initAutocomplete">
    </script>
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
    <script src="<?= base_url('/js/form/jquery.repeater.min.js') ?>"></script>
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
    <script src="<?= base_url('/js/pages/app-invoice.js') ?>"></script>
    <!-- END: Page JS-->


</body>
<!-- END: Body-->

</html>