<?php


namespace App\Models;


use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'id_admin';
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $allowedFields =['id_admin','id_kota', 'nama_admin', 'no_admin'];

    public function getAdminNumber(){
        return $this->db->table($this->table)
            ->select('id_admin,No_admin')
            ->orderBy('No_admin','RANDOM')
            ->limit(1)
            ->get()->getResultArray()[0];
    }
}