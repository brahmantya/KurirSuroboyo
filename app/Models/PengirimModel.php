<?php


namespace App\Models;


use CodeIgniter\Model;

class PengirimModel extends Model
{
    protected $table = 'pengirim';
    protected $primaryKey = 'id_pengirim';
    protected $useAutoIncrement = false;
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $allowedFields =['id_pengirim','id_pemesanan','id_kota', 'nama_pengirim', 'telp_pengirim', 'alamat_pengirim','keterangan_pengirim'];
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function generateKode(){
        $kode = 0;
        $lastkode = $this->db->table($this->table)
            ->selectMax($this->primaryKey)->get()->getRowArray()[$this->primaryKey];
        if (is_null($lastkode)){
            $kode = "SNDR00000001";
        } else {
            $kode = ++$lastkode;
        }
        return $kode;
    }

    public function getPengirim($id_pengirim){
        $condition = [
            'id_pengirim' => $id_pengirim
        ];
        return $this->db->table($this->table)
            ->where($condition)->get()->getResultArray()[0];
    }

//    public function getPengirimByUsername(){
//        $condition = ['']
//        return $this->db->table($this->table)
//            ->select('id_pengirim')
//            ->where()
//    }
}