<?php

namespace App\Models;

class UserModel extends \CodeIgniter\Model
{
    protected $table = 'user';
    protected $primaryKey = 'username';
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $useAutoIncrement = false;
    protected $allowedFields = ['username','id_pengirim','id_level', 'password', 'no_telp'];
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function dataUserAll(){
        $condition = ['user.deleted_at =' => null];
        return $this->db->table('user')
            ->select('user.username,pengirim.id_pengirim,pengirim.nama_pengirim,user.no_telp,pengirim.alamat_pengirim, pengirim.keterangan_pengirim')
            ->join('pengirim','user.id_pengirim=pengirim.id_pengirim', 'left')
            ->where($condition)->get()->getResultArray();
    }

    public function dataUserDetails($username){
        $condition = ['user.deleted_at =' => null, 'user.username =' => $username];
        return $this->db->table('user')
            ->select('user.username,pengirim.id_pengirim,pengirim.nama_pengirim,user.no_telp,pengirim.alamat_pengirim,pengirim.keterangan_pengirim,pengirim.id_kota')
            ->join('pengirim','user.id_pengirim=pengirim.id_pengirim', 'left')
            ->where($condition)->get()->getResultArray()[0];
    }

    public function getUserLoginData($notelp){
        return $this->db->table($this->table)
            ->where('no_telp',$notelp)
            ->limit(1)
            ->get()->getResultArray()[0];
    }

    public function generateUserId(){
        $kode = 0;
        $lastkode = $this->db->table($this->table)
            ->selectMax($this->primaryKey)->get()->getRowArray()[$this->primaryKey];
        if (is_null($lastkode)){
            $kode = "USER000000001";
        } else {
            $kode = ++$lastkode;
        }
        return $kode;
    }

    public function getCountUser(){
        return $this->db->table($this->table)
            ->selectCount('username')
            ->where('deleted_at', null)
            ->get()->getResultArray()[0];
    }
}