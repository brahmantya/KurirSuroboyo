<?php


namespace App\Models;


use CodeIgniter\Model;

class JenisBarangModel extends Model
{
    protected $table = 'jenis_barang';
    protected $primaryKey = 'id_jenis';
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $allowedFields =['id_jenis', 'nama_jenis' ];
}