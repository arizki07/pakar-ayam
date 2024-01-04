<?php

namespace App\Controllers;

use App\Models\GejalaModel;
use App\Models\PenyakitModel;

class Dashboard extends BaseController
{
    public function index()
    {
        //ini ambil data dari GejalaModel
        $modelgejala = new GejalaModel();
        $g = $modelgejala->findAll();

        //ini ambil data dari PenyakitModel
        $modelpenyakit = new PenyakitModel();
        $p = $modelpenyakit->findAll();
        $data = [
            'gejala' => $g,
            'penyakit' => $p,
        ];

        return view('pages/dashboard', $data);
    }
}
