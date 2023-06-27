<?php


namespace App\Models;


use CodeIgniter\Model;
use function PHPUnit\Framework\isNull;

class PemesananModel extends Model
{
    protected $table = 'pemesanan';
    protected $primaryKey = 'id_pemesanan';
    protected $useAutoIncrement = false;
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $allowedFields =['id_pemesanan', 'id_tarif', 'id_admin',
        'id_pengirim','id_diskon', 'id_metode', 'id_kurir','jenis_barang', 'total_harga','harga_barang','ongkir' ,'diskon',
        'tanggal_kirim', 'jam', 'berat','jarak','jumlahpenerima'];
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

   public function generateKode(){
        $kode = 0;
        $lastkode = $this->db->table($this->table)
            ->selectMax('id_pemesanan')->get()->getRowArray()['id_pemesanan'];
        if (is_null($lastkode)){
            $kode = "ORDR00000001";
        } else {
            $kode = ++$lastkode;
        }
        return $kode;
   }
   public function getPendapatan(){
       return $this->db->table($this->table)
           ->selectSum('ongkir')
           ->get()->getResultArray()[0];
   }

   public function getJumlahPesanan(){
       return $this->db->table($this->table)
           ->selectCount('id_pemesanan')
           ->get()->getResultArray()[0];
   }

    public function getAllPemesanan(){
       $query = "SELECT pemesanan.id_pemesanan, pengirim.nama_pengirim, pengirim.telp_pengirim, pengirim.alamat_pengirim, pengirim.keterangan_pengirim,
        pemesanan.jenis_barang, pemesanan.berat, pemesanan.tanggal_kirim, pemesanan.jam, metode_pembayaran.nama_metode, pemesanan.harga_barang, pemesanan.ongkir,
       diskon.kode_diskon, pemesanan.total_harga, tarif.nama_tarif
       FROM `pemesanan` 
LEFT JOIN pengirim ON pemesanan.id_pengirim = pengirim.id_pengirim
LEFT JOIN tarif ON pemesanan.id_tarif = tarif.id_tarif
LEFT JOIN metode_pembayaran ON pemesanan.id_metode = metode_pembayaran.id_metode
LEFT JOIN diskon ON pemesanan.id_diskon = diskon.id_diskon
WHERE pemesanan.deleted_at IS NULL
GROUP BY pemesanan.id_pemesanan
ORDER BY pemesanan.id_pemesanan";
      $resultquery = $this->db->query($query);
      return $resultquery->getResultArray();
    }

   public function getPemesanan($id_pemesanan){
       $condition = ['pemesanan.id_pemesanan' => $id_pemesanan, 'pemesanan.deleted_at' => null];
       return $this->db->table($this->table)
           ->join('pengirim', 'pengirim.id_pengirim=pemesanan.id_pengirim')
           ->join('penerima', 'penerima.id_pemesanan=pemesanan.id_pemesanan')
           ->join('tarif','tarif.id_tarif=pemesanan.id_tarif')
           ->join('kota', 'pengirim.id_kota=kota.id_kota','left')
           ->join('admin', 'admin.id_admin=pemesanan.id_admin')
           ->join('metode_pembayaran', 'metode_pembayaran.id_metode=pemesanan.id_metode')
           ->join('diskon','diskon.id_diskon=pemesanan.id_diskon', 'left')
           ->where($condition)
           ->get()->getResultArray()[0];
   }

   public function getCurrentJumlahPemesanan($id_pemesanan){
       $condition = ['id_pemesanan' => $id_pemesanan, 'deleted_at' => null];
       return $this->db()->table($this->table)
           ->select('jumlahpenerima')
           ->where($condition)
           ->get()->getResultArray()[0]['jumlahpenerima'];
   }
}