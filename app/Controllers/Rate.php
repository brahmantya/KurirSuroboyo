<?php

namespace App\Controllers;

class Rate extends BaseController
{
    public function index(){
        $datatarif = $this->tarifModel->findAll();
        $data = [
            'datatarif' => $datatarif
        ];
        return view('admin/ratelistpage', $data);
    }

    public function editRatePage($idtarif){
        $datatarif = $this->tarifModel->find($idtarif);
        $data = [
            'action' => '/updaterate',
            'datatarif' => $datatarif,
            'datatarifall' => $this->tarifModel->findAll()
        ];
        return view ('admin/rateaddpage',$data);
    }

    public function updateRate(){
        $idtarif = $this->request->getVar('id_tarif');
        $dataupdate = [
            'id_tarif' => $idtarif,
            'nama_tarif' => $this->request->getVar('nama_tarif'),
            'tarif' => $this->request->getVar('tarif'),
            'hitungan' => $this->request->getVar('satuan'),
            'minim_ongkir' => $this->request->getVar('min_ongkir'),
            'max_berat' => $this->request->getVar('max_berat'),
            'extracostpenerima' => $this->request->getVar('extra_penerima'),
            'extracostberat' => $this->request->getVar('extra_berat')
        ];
        if($this->tarifModel->save($dataupdate)){
            session()->setFlashdata('success', 'Tarif Berhasil Diperbarui');
            return redirect()->to('/ratelist');
        } else {
            session()->setFlashdata('error', 'Gagal Update Tarif');
            return redirect()->to("/rateedit/$idtarif");
        }

    }

}