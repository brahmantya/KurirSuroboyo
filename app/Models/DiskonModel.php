<?php

namespace App\Models;

class DiskonModel extends \CodeIgniter\Model
{
    protected $table = 'diskon';
    protected $primaryKey = 'id_diskon';
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $allowedFields =['id_diskon','kode_diskon', 'potongan', 'satuan','max_diskon'];

    public function generateKode(){
        $kode = 0;
        $lastkode = $this->db->table($this->table)
            ->selectMax('id_diskon')->get()->getRowArray()['id_diskon'];
        if (is_null($lastkode)){
            $kode = "1";
        } else {
            $kode = ++$lastkode;
        }
        return $kode;
    }
    public function checkAffectedRows(){
        return $this->db->affectedRows();
    }

}