<?php

namespace App\Models;

use App\Controllers\Gejala;
use CodeIgniter\Model;

class GejalaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'gejala';
    protected $primaryKey       = 'id_gejala';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_gejala',
        'kode_gejala',
        'nama_gejala',
    ];

    public function GenerateKode()
    {
        $lastRecord = $this->orderBy('id_gejala', 'DESC')->first();

        if ($lastRecord) {
            $lastKode = $lastRecord['id_gejala'];
            $lastNumber = (int)substr($lastKode, -3);
            $newNumber = $lastNumber + 1;
        } else {
            $newNumber = 1;
        }
        $newKode = 'G' . str_pad($newNumber, 3, '0', STR_PAD_LEFT);

        return $newKode;
    }


    // // Dates
    // protected $useTimestamps = false;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // // Validation
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    // protected $cleanValidationRules = true;

    // // Callbacks
    // protected $allowCallbacks = true;
    // protected $beforeInsert   = [];
    // protected $afterInsert    = [];
    // protected $beforeUpdate   = [];
    // protected $afterUpdate    = [];
    // protected $beforeFind     = [];
    // protected $afterFind      = [];
    // protected $beforeDelete   = [];
    // protected $afterDelete    = [];
}
