<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        return view('loginpage');
    }

    public function login(){
        $session = session();
        $notelp = $this->request->getVar('telp');
        $password = $this->request->getVar('pass');
        $user = $this->userModel->getUserLoginData($notelp);
        if (!empty($user)){
            if (password_verify($password, $user['password'])) {
                $sessiondata = [
                    'username' => $user['username'],
                    'user_level' => $user['id_level'],
                    'logged_in' => true
                ];
                $session->set($sessiondata);
                switch ($user['id_level']) {
                    case "ADM" :
                        return redirect()->to('/dashboard');
                        break;

                    default :
                        return redirect()->to('/');
                        break;
                }
            }
        }
        session()->setFlashdata('error', 'Username atau Password salah');
        return redirect()->to('/login');
    }

    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
