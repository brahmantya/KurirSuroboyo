<?php

namespace App\Controllers;

class Discount extends BaseController
{
    public function index(){
        $data = [
            'diskonlist' => $this->diskonModel->findAll()
        ];
        return view('admin/discountlistpage',$data);
    }

    public function addDiscountPage(){
        $data = [
            'action' => '/discountadd',
            'id_diskon' => $this->diskonModel->generateKode(),
        ];
        return view('admin/discountaddpage',$data);
    }

    public function editDiscountPage($id_diskon){
        $data = [
            'action' => '/discountupdate',
            'dataupdate' => $this->diskonModel->find($id_diskon),
        ];
        return view('admin/discountaddpage',$data);
    }

    public function discountAdd(){
        $id_diskon = $this->request->getVar('id_diskon');
        if (!$this->validate([
            'id_diskon' => 'required',
            'kode_diskon' => 'required',
            'potongan' => 'required',
            'satuan' => 'required',
            'max_diskon' => 'required'
        ])){
            session()->setFlashdata('error', 'Tambah Diskon Gagal Pastikan Semua Field Terisi !');
            return redirect()->to("/discountadd")->withInput();
        }
        $datadiskon = [
            'id_diskon' => $id_diskon,
            'kode_diskon' => $this->request->getVar('kode_diskon'),
            'potongan' => $this->request->getVar('potongan'),
            'satuan' => $this->request->getVar('satuan'),
            'max_diskon' => $this->request->getVar('max_diskon')
        ];
        $this->diskonModel->insert($datadiskon);
        if ($this->diskonModel->checkAffectedRows()!=0) {
            session()->setFlashdata('success', 'Diskon Berhasil Ditambahkan');
            return redirect()->to('/discountlist');
        } else {
            session()->setFlashdata('error', 'Gagal Tambah Diskon');
            return redirect()->to("/discountadd")->withInput();
        }
    }

    public function discountUpdate(){
        $id_diskon = $this->request->getVar('id_diskon');
        if (!$this->validate([
            'id_diskon' => 'required',
            'kode_diskon' => 'required',
            'potongan' => 'required',
            'satuan' => 'required',
            'max_diskon' => 'required'
        ])){
            $validation = \Config\Services::validation();
            session()->setFlashdata('error', 'Update Diskon Gagal Pastikan Semua Field Terisi !');
            return redirect()->to("/discountedit/$id_diskon")->withInput()->with('validation', $validation);
        }
        $datadiskon = [
            'id_diskon' => $id_diskon,
            'kode_diskon' => $this->request->getVar('kode_diskon'),
            'potongan' => $this->request->getVar('potongan'),
            'satuan' => $this->request->getVar('satuan'),
            'max_diskon' => $this->request->getVar('max_diskon')
        ];
        if ($this->diskonModel->save($datadiskon)) {
            session()->setFlashdata('success', 'Diskon Berhasil Diperbarui');
            return redirect()->to('/discountlist');
        } else {
            session()->setFlashdata('error', 'Gagal Update Diskon');
            return redirect()->to("/discountedit/$id_diskon");
        }
    }

    public function deleteDiskon($id_diskon){
       if ($this->diskonModel->delete($id_diskon)) {
           session()->setFlashdata('success', 'Diskon Berhasil Dihapus');
           return redirect()->to('/discountlist');
       } else {
           session()->setFlashdata('error', 'Gagal Update Diskon');
           return redirect()->to('/discountlist');
       }
    }
}