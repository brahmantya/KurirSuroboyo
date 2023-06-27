<?php

namespace App\Models;

class KritikSaranModel extends \CodeIgniter\Model
{
    protected $table = 'kritik_saran';
    protected $primaryKey = 'id_kritik';
    protected $useTimestamps = false;
    protected $useSoftDeletes = false;
    protected $allowedFields =['nama','email', 'kritiksaran'];
}