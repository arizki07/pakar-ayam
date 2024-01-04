<?php

namespace App\Models;

use CodeIgniter\Model;

class PenyakitModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'penyakit';
    protected $primaryKey       = 'id_penyakit';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'kode_penyakit',
        'nama_penyakit',
        'deskripsi',
        'solusi_penyakit',
    ];

    // public function GenerateKode()
    // {
    //     $lastRecord = $this->orderBy('id_penyakit', 'DESC')->first();

    //     if ($lastRecord) {
    //         $lastKode = $lastRecord['id_penyakit'];
    //         $lastNumber = (int)substr($lastKode, -3);
    //         $newNumber = $lastNumber + 1;
    //     } else {
    //         $newNumber = 1;
    //     }
    //     $newKode = 'P' . str_pad($newNumber, 3, '0', STR_PAD_LEFT);

    //     return $newKode;
    // }
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
