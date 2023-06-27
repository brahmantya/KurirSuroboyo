<?php

namespace App\Controllers;

class CommentList extends BaseController
{
    public function index()
    {
        $data = [
            'kritiksarandata' => $this->kritiksaranModel->findAll()
        ];
        return view('admin/commentlistpage',$data);
    }
}
