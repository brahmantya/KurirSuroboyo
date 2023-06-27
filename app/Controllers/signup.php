<?php

namespace App\Controllers;

class Signup extends BaseController
{
    public function index()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('signuppage', $data);
    }

    public function createAccountUser(){
        if (!$this->validate([
            'nama' => 'required',
            'telp' => 'required',
            'alamat' => 'required',
            'pass' => 'required'
        ])){
            $validation = \Config\Services::validation();
            session()->setFlashdata('error', 'Pendaftaran Akun Gagal Cek Kembali Data');
            return redirect()->to('/signup')->withInput()->with('validation', $validation);
        }
        $nama = $this->request->getVar('nama');
        $telp = $this->request->getVar('telp');
        $alamat = $this->request->getVar('alamat');
        $keterangan = $this->request->getVar('keterangan');
        $pass = password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT);
        $idpengirim = $this->pengirimModel->generateKode();
        $newpengirimdata = [
            'id_pengirim' => $idpengirim,
            'username' => $this->userModel->generateUserId(),
            'id_pemesanan' => null,
            'id_kota' => null,
            'nama_pengirim' => $nama,
            'telp_pengirim' => $telp,
            'alamat_pengirim' => $alamat,
            'keterangan_pengirim' => $keterangan
        ];
        if($this->pengirimModel->insert($newpengirimdata)) {
            $newaccountdata = [
                'username' => $this->userModel->generateUserId(),
                'id_pengirim' => $idpengirim,
                'id_level' => 'USER',
                'password' => $pass,
                'no_telp' => $telp
            ];

            if ($this->userModel->save($newaccountdata)){
                session()->setFlashdata('success', 'Pendaftaran Akun Berhasil');
                return redirect()->to('/signup');
            } else {
                session()->setFlashdata('error', 'Pendaftaran Akun Gagal');
                return redirect()->to('/signup');
            }
        }
    }
}
