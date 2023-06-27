<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index(){
        $data = [
          'datauser' => $this->userModel->dataUserAll()
        ];
        return view('admin/userlistpage',$data);
    }

    public function editUserPage($username){
        $data = [
            'datauser' => $this->userModel->dataUserDetails($username)
        ];
        return view('admin/useraddpage',$data);
    }

    public function updateUser(){
        $datauser = [];
        $datapengirim = [];
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('pass');
        if ($password == ""){
            $datauser = [
                'username' => $username,
                'no_telp' => $this->request->getVar('no_telp')
            ];
            $datapengirim = [
                'id_pengirim' => $this->request->getVar('idsender'),
                'nama_pengirim' => $this->request->getVar('nama'),
                'telp_pengirim' => $this->request->getVar('no_telp'),
                'alamat_pengirim' => $this->request->getVar('alamat'),
                'keterangan_pengirim' => $this->request->getVar('keterangan'),
                'id_kota' => $this->request->getVar('kota')
            ];
        } else {
            $datauser = [
                'username' => $username,
                'password' => password_hash($password,PASSWORD_DEFAULT),
                'no_telp' => $this->request->getVar('no_telp')
            ];
            $datapengirim = [
                'id_pengirim' => $this->request->getVar('idsender'),
                'nama_pengirim' => $this->request->getVar('nama'),
                'telp_pengirim' => $this->request->getVar('no_telp'),
                'alamat_pengirim' => $this->request->getVar('alamat'),
                'keterangan_pengirim' => $this->request->getVar('keterangan'),
                'id_kota' => $this->request->getVar('kota')
            ];
        }
        if ($this->userModel->save($datauser)&&$this->pengirimModel->save($datapengirim)){
                session()->setFlashdata('success', 'Data Pelanggan Berhasil Diperbarui ');
                return redirect()->to('/userlist');
        } else {
            session()->setFlashdata('error', 'Gagal Memperbarui Data Pelanggan');
            return redirect()->to("/useredit/$username");
        }
    }

    public function deleteUser($username){
        if($this->userModel->delete($username)){
            $data = [
                'no_telp' => ""
            ];
            $this->userModel->update($username, $data);
            session()->setFlashdata('success', 'Data Pelanggan Berhasil Diperbarui ');
            return redirect()->to('/userlist');
        } else {
            session()->setFlashdata('error', 'Data Pelanggan Berhasil Dihapus ');
            return redirect()->to("/useredit/$username");
        }
    }
}