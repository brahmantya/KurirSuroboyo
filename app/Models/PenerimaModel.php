<?php


namespace App\Models;


use CodeIgniter\Model;

class PenerimaModel extends Model
{
    protected $table = 'penerima';
    protected $primaryKey = 'id_penerima';
    protected $useAutoIncrement = false;
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $allowedFields =['id_penerima','id_kota', 'id_pemesanan',
        'nama_penerima', 'alamat_penerima','keterangan_penerima','no_telp', 'biaya' ];
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function generateKode(){
        $kode = 0;
        $lastkode = $this->db->table($this->table)
            ->selectMax($this->primaryKey)->get()->getRowArray()[$this->primaryKey];
        if (is_null($lastkode)){
            $kode = "RCVR00000001";
        } else {
            $kode = ++$lastkode;
        }
        return $kode;
    }

    public function getPenerima($id_pemesanan){
        $condition = ['deleted_at' => null, 'id_pemesanan' => $id_pemesanan];
        return $this->db->table($this->table)
            ->where($condition)->get()->getResultArray();
    }
}