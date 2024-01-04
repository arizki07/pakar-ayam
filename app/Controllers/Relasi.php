<?php

namespace App\Controllers;

use App\Models\RelasiModel;
use App\Models\GejalaModel;
use App\Models\PenyakitModel;

class Relasi extends BaseController
{
    public function index()
    {
        $relasiModel = new RelasiModel();
        $gejalaModel = new GejalaModel();
        $penyakitModel = new PenyakitModel();

        $relations = $relasiModel->getAllRelations();

        $data['relations'] = array_map(function ($relation) use ($gejalaModel, $penyakitModel) {
            $gejala = $gejalaModel->find($relation['id_gejala']);
            $penyakit = $penyakitModel->find($relation['id_penyakit']);

            if ($gejala !== null) {
                $relation['kode_gejala'] = $gejala['kode_gejala'];
                $relation['nama_gejala'] = $gejala['nama_gejala'];
            } else {
                $relation['kode_gejala'] = null;
                $relation['nama_gejala'] = null;
            }

            if ($penyakit !== null) {
                $relation['kode_penyakit'] = $penyakit['kode_penyakit'];
                $relation['nama_penyakit'] = $penyakit['nama_penyakit'];
            } else {
                $relation['kode_penyakit'] = null;
                $relation['nama_penyakit'] = null;
            }

            return $relation;
        }, $relations);

        $data['penyakit'] = $penyakitModel->findAll();
        $data['gejala'] = $gejalaModel->findAll();

        return view('pages/relasi/relasi', $data);
    }

    public function create()
    {
        $relasiModel = new RelasiModel();

        $kodeGejala = $this->request->getPost('kode_gejala');
        $kodePenyakit = $this->request->getPost('kode_penyakit');

        // Validasi kode gejala dan kode penyakit
        if (empty($kodeGejala) || empty($kodePenyakit)) {
            session()->setFlashdata('gagal', 'Kode gejala dan kode penyakit harus diisi.');
            return redirect()->to('admin/relasi');
        }

        // Cek apakah kode gejala dan kode penyakit sudah ada di database
        $existingRelasi = $relasiModel->where('id_gejala', $kodeGejala)->where('id_penyakit', $kodePenyakit)->first();
        if ($existingRelasi) {
            session()->setFlashdata('gagal', 'Kode gejala dan kode penyakit sudah ada dalam relasi yang sama.');
            return redirect()->to('admin/relasi');
        }

        $data = [
            'id_gejala' => $kodeGejala,
            'id_penyakit' => $kodePenyakit,
            'mb' => $this->request->getPost('mb'),
            'md' => $this->request->getPost('md'),
        ];

        $result = $relasiModel->insert($data);

        if ($result) {
            // Data berhasil ditambahkan
            session()->setFlashdata('sukses', 'Data berhasil ditambahkan.');
        } else {
            // Gagal menambahkan data
            session()->setFlashdata('gagal', 'Gagal menambahkan data.');
        }

        return redirect()->to('admin/relasi')->with('success', 'Data relasi berhasil ditambahkan.');
    }


    public function add()
    {
        $relasiModel = new RelasiModel();
        $gejalaModel = new GejalaModel();
        $penyakitModel = new PenyakitModel();

        $gejala = $gejalaModel->findAll();
        $penyakit = $penyakitModel->findAll();

        $relations = [];

        foreach ($gejala as $gejalaItem) {
            foreach ($penyakit as $penyakitItem) {
                $relation = [
                    'id_gejala' => $gejalaItem['id_gejala'],
                    'id_penyakit' => $penyakitItem['id_penyakit'],
                ];

                $relations[] = $relation;
            }
        }

        $relasiModel->insertBatch($relations);

        return view('pages/relasi/add');
    }

    public function edit($id = null)
    {
        $relasiModel = new RelasiModel();
        $gejalaModel = new GejalaModel();
        $penyakitModel = new PenyakitModel();

        $data['relation'] = $relasiModel->find($id);

        $data['penyakit'] = $penyakitModel->findAll();
        $data['gejala'] = $gejalaModel->findAll();
        $data['relasi'] = $relasiModel->findAll();

        $data['mbOptions'] = ['0.8', '0.6', '0.4', '1'];
        $data['mdOptions'] = ['1', '0.8', '0.6', '0.4', '0.2', '0'];


        return view('pages/relasi/edit', $data);
    }

    public function update($id)
    {
        $relasiModel = new RelasiModel();
        $gejalaModel = new GejalaModel();
        $penyakitModel = new PenyakitModel();

        // Cek apakah data dengan ID yang diberikan ada dalam database
        $relation = $relasiModel->find($id);
        if (!$relation) {
            return redirect()->to('admin/relasi')->with('error', 'Data relasi tidak ditemukan');
        }

        // Validasi input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'kode_penyakit' => 'required',
            'kode_gejala' => 'required',
            'mb' => 'required',
            'md' => 'required'
        ]);
        if (!$validation->withRequest($this->request)->run()) {
            $errors = $validation->getErrors();
            return redirect()->back()->withInput()->with('errors', $errors);
        }

        // Ambil data dari form
        $kodePenyakit = $this->request->getPost('kode_penyakit');
        $kodeGejala = $this->request->getPost('kode_gejala');
        $mb = $this->request->getPost('mb');
        $md = $this->request->getPost('md');

        // Cek apakah kode gejala dan penyakit valid
        $gejala = $gejalaModel->find($kodeGejala);
        $penyakit = $penyakitModel->find($kodePenyakit);
        if (!$gejala || !$penyakit) {
            return redirect()->to('admin/relasi')->with('error', 'Kode gejala atau penyakit tidak valid');
        }

        // Cek apakah kode gejala dan kode penyakit sudah ada dalam relasi yang lain
        $existingRelasi = $relasiModel->where('id_gejala', $kodeGejala)->where('id_penyakit', $kodePenyakit)->first();
        if ($existingRelasi && $existingRelasi['id'] != $id) {
            return redirect()->to('admin/relasi')->with('error', 'Kode gejala dan kode penyakit sudah ada dalam relasi yang sama');
        }

        // Simpan data ke dalam database
        $updatedData = [
            'id_gejala' => $kodeGejala,
            'id_penyakit' => $kodePenyakit,
            'mb' => $mb,
            'md' => $md
        ];

        if ($relasiModel->update($id, $updatedData)) {
            // Data berhasil diupdate
            $updatedRelasi = $relasiModel->find($id); // Mengambil data relasi setelah diupdate
            if ($updatedRelasi['id_gejala'] == $kodeGejala && $updatedRelasi['id_penyakit'] == $kodePenyakit) {
                session()->setFlashdata('sukses', 'Data berhasil diupdate.');
            } else {
                session()->setFlashdata('gagal', 'Gagal mengupdate data.');
            }
        } else {
            // Gagal mengupdate data
            session()->setFlashdata('gagal', 'Gagal mengupdate data.');
        }

        return redirect()->to('admin/relasi')->with('success', 'Data relasi berhasil diperbarui');
    }


    public function delete($id)
    {
        $relasiModel = new RelasiModel();

        // Cek apakah data dengan ID yang diberikan ada dalam database
        $relation = $relasiModel->find($id);
        if (!$relation) {
            return redirect()->to('admin/relasi')->with('error', 'Data relasi tidak ditemukan');
        }

        if (!$relasiModel) {
            // Gejala dengan ID yang diberikan tidak ditemukan
            session()->setFlashdata('gagal', 'Data gejala tidak ditemukan.');
        } else {
            $deleted = $relasiModel->delete($id);

            if ($deleted) {
                // Data berhasil dihapus
                session()->setFlashdata('sukses', 'Data berhasil dihapus.');
            } else {
                // Gagal menghapus data
                session()->setFlashdata('gagal', 'Gagal menghapus data.');
            }
        }

        return redirect()->to('admin/relasi')->with('success', 'Data relasi berhasil dihapus');
    }
}
