<?php


namespace App\Models;


use CodeIgniter\Model;

class MetodePembayaranModel extends Model
{
    protected $table = 'metode_pembayaran';
    protected $primaryKey = 'id_metode';
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $allowedFields =['id_metode', 'nama_metode'];

    public function getNamaPembayaran($idmetode){
        return $this->db->table($this->table)
            ->select('nama_metode')
            ->where('id_metode', $idmetode)
            ->get()->getResultArray()[0];
    }
}