<?php


namespace App\Models;


class WhatsappSender extends \CodeIgniter\Model
{
    protected $table = 'whatsappsender';
    protected $primaryKey = 'id_wa';
    protected $useTimestamps = false;
    protected $useSoftDeletes = false;
    protected $allowedFields =['id_wa','nomor_wa', 'api_key'];

    public function getApiKey(){
        return $this->db->table($this->table)
            ->select('api_key')
            ->where('id_wa', 1)
            ->get()->getResultArray()[0]['api_key'];
    }

}