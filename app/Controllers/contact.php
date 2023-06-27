<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {
        return view('contactpage');
    }

    public function saveKritikSaran(){
        $datakritik = [
            'nama' => $this->request->getVar('name'),
            'email' => $this->request->getVar('notelp'),
            'kritiksaran' => $this->request->getVar('message')
        ];
        $this->kritiksaranModel->save($datakritik);
        session()->setFlashdata('success', 'Terima Kasih Atas Masukannya');
        return redirect()->to('/contact');
    }
}
