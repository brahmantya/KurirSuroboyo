<?php

namespace App\Controllers;

class Courier extends BaseController
{
    public function index(){
        $data = [
            'datakurir' => $this->kurirModel->findAll()
        ];
        return view('admin/courierlistpage', $data);
    }

    public function addCourierPage(){
        $data = [
          'action' => '/courieradd',
            'courier_id' => $this->kurirModel->generateKode()
        ];
     return view('admin/courieraddpage',$data);
    }

    public function editCourierPage($id_kurir){
        $datakurir = $this->kurirModel->find($id_kurir);
        $data = [
            'action' => '/courierupdate',
            'datakurir' => $datakurir
        ];
        return view('admin/courieraddpage',$data);
    }

    public function addCourier(){
        $data = [
            'id_kurir' => $this->request->getVar('id_kurir'),
            'nama_kurir' => $this->request->getVar('nama_kurir'),
            'alamat_kurir' => $this->request->getVar('alamat_kurir'),
            'telp_kurir' => $this->request->getVar('telp_kurir')


        ];
        $this->kurirModel->insert($data);
        if ($this->kurirModel->checkAffectedRows()!=0){
            session()->setFlashdata('success', 'Berhasil Menambahkan Kurir Baru');
            return redirect()->to('/courierlist');
        } else {
            session()->setFlashdata('error', 'Gagal Menambahkan Kurir Baru');
            return redirect()->to('/courieradd');
        }
    }

    public function updateCourier(){
        $id_kurir = $this->request->getVar('id_kurir');
        $data = [
            'id_kurir' => $id_kurir,
            'nama_kurir' => $this->request->getVar('nama_kurir'),
            'alamat_kurir' => $this->request->getVar('alamat_kurir'),
            'telp_kurir' => $this->request->getVar('telp_kurir')
        ];
        if ($this->kurirModel->updateData($data)){
            session()->setFlashdata('success', 'Berhasil Memperbarui Data Kurir');
            return redirect()->to('/courierlist');
        } else {
            session()->setFlashdata('error', 'Gagal Memperbarui Data Kurir');
            return redirect()->to("/courieradd/$id_kurir");
        }
    }

    public function courierDelete($id_kurir){
        if ($this->kurirModel->where('id_kurir',$id_kurir)->delete($id_kurir)) {
            session()->setFlashdata('success', 'Kurir Berhasil Dihapus');
            return redirect()->to('/courierlist');
        } else {
            session()->setFlashdata('error', 'Gagal Hapus Kurir');
            return redirect()->to('/courierlist');
        }
    }
}