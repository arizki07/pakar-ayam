<?php

namespace App\Controllers;

use App\Models\CFUserModel;
use App\Models\DiagnosaGejalaModel;
use App\Models\DiagnosaModel;
use App\Models\GejalaModel;
use App\Models\PenyakitModel;
use App\Models\RelasiModel;

class MulaiDiagnosa extends BaseController
{
    public function index()
    {
        $diagnosa = new DiagnosaModel();
        $cfUserModel = new CFUserModel();
        $gejala = new GejalaModel();

        $data['result'] = $diagnosa->findAll();
        $data['result'] = $gejala->findAll();
        $data['listCFUser'] = $cfUserModel->findAll();
        return view('pages/mulai_diagnosa', $data);
    }

    public function start()
    {
        $relasiModel = new RelasiModel();
        $diagnosaModel = new DiagnosaModel();
        $diagnosaGejalaModel = new DiagnosaGejalaModel();
        $gejalaModel = new GejalaModel();
        $penyakitModel = new PenyakitModel();
        $CFUserModel = new CFUserModel();

        $username = $this->request->getVar('username');
        $listSelectedGejala = $this->request->getVar('selectedGejala');
        $listCF = $this->request->getVar('cf');


        if (empty($listSelectedGejala) || empty($listCF)) {
            return redirect()->back()->withInput()->with('error', 'Pilih Gejala Minimal 1 disertakan dengan tingkat kepercayaannya');
        }

        $mergedData = array();
        foreach ($listSelectedGejala as $key => $idGejala) {
            $cfUserId = $listCF[$key];

            $cfKepercayaan = $CFUserModel->where('id', $cfUserId)->first();

            $mergedData[$key] = [
                'id_gejala' => $idGejala,
                'tingkat_kepercayaan' => $cfKepercayaan['nama_nilai'],
                'cf_user' => $cfKepercayaan['cf'],
            ];
        }

        $cf = array();
        $listGejala = array();
        $penyakitCodes = array();

        for ($i = 0; $i < count($mergedData); $i++) {
            $val = $mergedData[$i];
            $relation = $relasiModel->where('id_gejala', $val['id_gejala'])->findAll();
            $gejala = $gejalaModel->where('id_gejala', $val['id_gejala'])->first();

            if ($relation != null && count($relation) > 0) {
                $listGejalaValue['id_gejala'] = $gejala['id_gejala'];
                $listGejalaValue['kode_gejala'] = $gejala['kode_gejala'];
                $listGejalaValue['nama_gejala'] = $gejala['nama_gejala'];
                $listGejalaValue['tingkat_kepercayaan'] = $val['tingkat_kepercayaan'];
                $listGejalaValue['cf_user'] = $val['cf_user'];
                $listGejalaValue['nilai_cf'] = 0;
                $listGejalaValue['id_penyakit'] = 0;
                $listGejalaValue['kode_penyakit'] = array();

                for ($r = 0; $r < count($relation); $r++) {

                    $gejala = $gejalaModel->where('id_gejala', $relation[$r]['id_gejala'])->first();
                    $penyakit = $penyakitModel->find($relation[$r]['id_penyakit']);

                    $value['id_gejala'] = $gejala['id_gejala'];
                    $value['kode_gejala'] = $gejala['kode_gejala'];
                    $value['kode_gejala'] = $gejala['kode_gejala'];
                    $value['nama_gejala'] = $gejala['nama_gejala'];
                    $value['tingkat_kepercayaan'] = $val['tingkat_kepercayaan'];
                    $value['cf_user'] = $val['cf_user'];
                    $value['cf'] = $relation[$r]['cf'];
                    $value['nilai_cf'] = 0;
                    $value['id_penyakit'] = 0;
                    $value['kode_penyakit'][] = $penyakit ? $penyakit['kode_penyakit'] : '';

                    $value['id_penyakit'] = $relation[$r]['id_penyakit'];
                    $value['nilai_cf'] = $val['cf_user'] * $relation[$r]['cf'];

                    $listGejalaValue['nilai_cf'] = $val['cf_user'] * $relation[$r]['cf'];
                    $listGejalaValue['id_penyakit'] = $val['cf_user'] * $relation[$r]['cf'];
                    $listGejalaValue['kode_penyakit'][] = $penyakit ? $penyakit['kode_penyakit'] : '';

                    array_push($cf, $value);

                    if (!in_array($penyakit['kode_penyakit'], $penyakitCodes)) {
                        array_push($penyakitCodes, $penyakit['kode_penyakit']);
                    }
                }

                array_push($listGejala, $listGejalaValue);
            }
        }


        /// TODO
        // Perhitungan CF Combine
        $cfCombine = 0;

        $groupByPenyakit = array();

        foreach ($cf as $apa) {
            $groupByPenyakit[$apa['id_penyakit']][] = $apa;
        }

        $anyar = array();

        if (count($cf) > 1) {
            for ($i = 0; $i < count($cf) - 1; $i++) {
                $jos = $groupByPenyakit[$cf[$i]['id_penyakit']];

                if (count($jos) > 1) {
                    for ($j = 0; $j < count($jos); $j++) {
                        $gandos = $jos[$j];

                        if ($j == 0) {
                            $cfCombine = $gandos['nilai_cf'] + $jos[$j + 1]['nilai_cf'] * (1.0 - $gandos['nilai_cf']);

                            if (count($jos) - 1 == 1) {
                                $anyar[$i]["nilai_cf"] = $cfCombine;
                                $anyar[$i]["id_penyakit"] = $cf[$i]['id_penyakit'];
                                break;
                            }
                        } else {
                            if ($j + 1 == count($jos)) {
                                $anyar[$i]["nilai_cf"] = $cfCombine;
                                $anyar[$i]["id_penyakit"] = $cf[$i]['id_penyakit'];
                                break;
                            }
                            $cfCombine = $cfCombine + $jos[$j + 1]['nilai_cf'] * (1.0 - $cfCombine);
                        }
                    }
                } else {
                    $cfCombine = $cf[$i]['nilai_cf'];
                    $anyar[$i]["nilai_cf"] = $cfCombine;
                    $anyar[$i]["id_penyakit"] = $cf[$i]['id_penyakit'];
                }
            }
        } else {
            $cfCombine = $cf[0]['nilai_cf'];
            $anyar[0]["nilai_cf"] = $cfCombine;
            $anyar[0]["id_penyakit"] = $cf[0]['id_penyakit'];
        }

        $listPenyakit = array();

        $hasDuplicates = count($anyar) != count(array_values(array_unique($anyar, SORT_REGULAR)));

        if ($hasDuplicates) {
            $anyar = array_values(array_unique($anyar, SORT_REGULAR));
        }

        for ($i = 0; $i < count($anyar); $i++) {
            $penyakitData = $penyakitModel->find($anyar[$i]['id_penyakit']);
            $listPenyakit[$i]['kode_penyakit'] = $penyakitData['kode_penyakit'];
            $listPenyakit[$i]['nama_penyakit'] = $penyakitData['nama_penyakit'];
            $listPenyakit[$i]['deskripsi'] = $penyakitData['deskripsi'];
            $listPenyakit[$i]['solusi'] = $penyakitData['solusi_penyakit'];
            $listPenyakit[$i]['nilai_cf'] = $anyar[$i]['nilai_cf'];
        }

        // $different = count($cf) - count($anyar);

        // if ($different != 0) {
        //     array_splice($anyar, $different);
        //     array_splice($listPenyakit, $different);
        // }

        // dd($anyar, $listPenyakit);

        $nilaiPenyakitTerbesar = max($anyar)['nilai_cf'];
        $idPenyakitTerbesar = max($anyar)['id_penyakit'];


        // Ambil data penyakit dengan CF terbesar
        // Ambil deskripsi dan solusi penyakit
        $penyakitData = $penyakitModel->find($idPenyakitTerbesar);
        $kodePenyakit = $penyakitData['kode_penyakit'];
        $namaPenyakit = $penyakitData['nama_penyakit'];
        $deskripsi = $penyakitData['deskripsi'];
        $solusi = $penyakitData['solusi_penyakit'];

        // Simpan diagnosa dengan id_penyakit yang sesuai
        $diagnosaModel->save([
            'id_penyakit' => $idPenyakitTerbesar,
            'nama_user' => $username,
            'cf' => $nilaiPenyakitTerbesar,
            'presentase' => number_format($nilaiPenyakitTerbesar * 100, 2),
        ]);

        $diagnosaGejala = array();

        foreach ($cf as $val) {
            array_push($diagnosaGejala, [
                'id_diagnosa' => $diagnosaModel->getInsertID(),
                'id_gejala' => $val['id_gejala'],
            ]);
        }

        $diagnosaGejalaModel->insertBatch($diagnosaGejala);

        $resultDiagnosa = [
            'nama_user' => $username,
            'tingkat_kepercayaan' => $nilaiPenyakitTerbesar,
            'gejala' => $listGejala,
            'presentase' => number_format($nilaiPenyakitTerbesar * 100, 2),
            'deskripsi' => $deskripsi,
            'solusi_penyakit' => $solusi,
            'nama_penyakit' => $namaPenyakit,
            'kode_penyakit' => $kodePenyakit,
        ];

        $data['resultDiagnosa'] = $resultDiagnosa;
        $data['resultDiagnosa']['gejala'] = $listGejala;
        $data['penyakitCodes'] = $penyakitCodes;
        $data['cf'] = $cf;
        $data['listPenyakit'] = $listPenyakit;

        return view('pages/hasil_diagnosa', $data);
    }
}
