<?php
namespace App\Models;


class KurirModel extends \CodeIgniter\Model
{
    protected $table = 'kurir';
    protected $primaryKey = 'id_kurir';
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $useAutoIncrement = true;
    protected $allowedFields =['id_kurir', 'nama_kurir','alamat_kurir', 'telp_kurir'];
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function getCountKurir(){
        return $this->db->table($this->table)
            ->selectCount('id_kurir')
            ->get()->getResultArray()[0];
    }

    public function generateKode(){
        $kode = 0;
        $lastkode = $this->db->table($this->table)
            ->selectMax($this->primaryKey)->get()->getRowArray()[$this->primaryKey];
        if (is_null($lastkode)){
            $kode = "0";
        } else {
            $kode = ++$lastkode;
        }
        return $kode;
    }
    public function checkAffectedRows(){
        return $this->db->affectedRows();
    }

    public function updateData($data){
        return $this->db->table($this->table)->update($data);
    }
}