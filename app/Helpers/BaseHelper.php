<?php

namespace App\Helpers;

use App\Models\AdminModel;
use App\Models\DiskonModel;
use App\Models\JenisBarangModel;
use App\Models\KritikSaranModel;
use App\Models\KurirModel;
use App\Models\MetodePembayaranModel;
use App\Models\PemesananModel;
use App\Models\PenerimaModel;
use App\Models\PengirimModel;
use App\Models\TarifModel;
use App\Models\UserModel;
use App\Models\WhatsappSender;

class BaseHelper
{
    protected $request;
    protected $adminModel;
    protected $jenisbarang;
    protected $kurirModel;
    protected $metodepembayaran;
    protected $pemesananModel;
    protected $penerimaModel;
    protected $pengirimModel;
    protected $tarifModel;
    protected $whatsappsender;
    protected $diskonModel;
    protected $userModel;
    protected $kritiksaranModel;

    public function __construct(){

    $this->adminModel = new AdminModel();
    $this->jenisbarang = new JenisBarangModel();
    $this->kurirModel = new KurirModel();
    $this->metodepembayaran = new MetodePembayaranModel();
    $this->pemesananModel = new PemesananModel();
    $this->penerimaModel = new PenerimaModel();
    $this->pengirimModel = new PengirimModel();
    $this->tarifModel = new TarifModel();
    $this->whatsappsender = new WhatsappSender();
    $this->diskonModel = new DiskonModel();
    $this->userModel = new UserModel();
    $this->kritiksaranModel = new KritikSaranModel();

    }

    public function formatRupiah($value){
        return "Rp ".number_format((float)$value,2,",", ".");
    }

    public function cleanNumberPhone($number){
        return ltrim($number, "0+62");
    }

    public function convertDate($date){
        $date = new \DateTime($date);
        return $date->format('d-m-Y');
    }

}