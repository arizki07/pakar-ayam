<?php

namespace App\Models;

use CodeIgniter\Model;

class RelasiModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'relasi';
    protected $primaryKey       = 'id_relasi';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_gejala',
        'id_penyakit',
        'mb',
        'md',
    ];


    public function getAllRelations()
    {
        return $this->select('relasi.*, gejala.kode_gejala, gejala.nama_gejala, penyakit.kode_penyakit, penyakit.nama_penyakit')
            ->join('gejala', 'gejala.id_gejala = relasi.id_gejala')
            ->join('penyakit', 'penyakit.id_penyakit = relasi.id_penyakit')
            ->findAll();
    }

    public function findByIdGejala($idGejala)
    {
        return $this->select()->where('id_gejala', $idGejala)->find();
    }

    public function findByIdPeyakit($idPenyakit)
    {
        return $this->select()->where('id_penyakit', $idPenyakit)->find();
    }


    public function penyakit()
    {
        return $this->belongsTo(PenyakitModel::class, 'id_penyakit', 'id_penyakit');
    }

    public function gejala()
    {
        return $this->belongsTo(GejalaModel::class, 'id_gejala', 'id_gejala');
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
