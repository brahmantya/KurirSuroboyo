<?php

namespace App\Controllers;

class dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'pendapatan' => $this->pemesananModel->getPendapatan(),
            'totaluser' => $this->userModel->getCountUser(),
            'jumlahkurir' => $this->kurirModel->getCountKurir(),
            'jumlahpesanan' => $this->pemesananModel->getJumlahPesanan()
        ];
        return view('admin/dashboardpage', $data);
    }
}
