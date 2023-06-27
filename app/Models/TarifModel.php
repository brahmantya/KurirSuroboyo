<?php
namespace App\Models;

class TarifModel extends \CodeIgniter\Model
{
    protected $table = 'tarif';
    protected $primaryKey = 'id_tarif';
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $allowedFields =['id_tarif', 'nama_tarif', 'tarif', 'hitungan', 'minim_ongkir', 'max_berat','extracostpenerima', 'extracostberat'];

    public function getTarif($idtarif){
        return $this->db->table('tarif')
            ->select('tarif,minim_ongkir,max_berat,extracostpenerima,extracostberat')
            ->where('id_tarif', $idtarif)
            ->get()->getResultArray()[0];
    }

    public function getNamaTarif($idtarif){
        return $this->db->table($this->table)
            ->select('nama_tarif')
            ->where('id_tarif', $idtarif)
            ->get()->getResultArray()[0];
    }


}