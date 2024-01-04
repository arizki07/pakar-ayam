<?php

namespace App\Controllers;

use App\Models\PenyakitModel;
use App\Models\RelasiModel;

class Penyakit extends BaseController
{
    public function index()
    {
        $Penyakits = new PenyakitModel();
        $data['penyakits'] = $Penyakits->findAll();
        return view('pages/penyakit/penyakit', $data);
    }

    public function store()
    {
        $Penyakits = new PenyakitModel();

        $kodePenyakit = $this->request->getVar('kode_penyakit');
        $namaPenyakit = $this->request->getVar('nama_penyakit');

        // Validate kode_penyakit
        if (empty($kodePenyakit)) {
            session()->setFlashdata('gagal', 'Kode penyakit harus diisi.');
            return redirect()->to(site_url('admin/penyakit'));
        }



        // Cek apakah kode penyakit sudah ada di database
        $existingKodePenyakit = $Penyakits->where('kode_penyakit', $kodePenyakit)->first();
        if ($existingKodePenyakit) {
            session()->setFlashdata('gagal', 'Kode penyakit sudah ada.');
            return redirect()->to(site_url('admin/penyakit'));
        }

        // Cek apakah nama penyakit sudah ada di database
        $existingNamaPenyakit = $Penyakits->where('nama_penyakit', $namaPenyakit)->first();
        if ($existingNamaPenyakit) {
            session()->setFlashdata('gagal', 'Nama penyakit sudah ada.');
            return redirect()->to(site_url('admin/penyakit'));
        }

        // if (!preg_match('/^P\d{2}$/', $kodePenyakit)) {
        //     session()->setFlashdata('gagal', 'Kode penyakit harus diawali dengan "P" dan diikuti oleh dua angka (misal: P01).');
        //     return redirect()->to(site_url('admin/penyakit'));
        // }

        $data = [
            'kode_penyakit' => $kodePenyakit,
            'nama_penyakit' => $namaPenyakit,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'solusi_penyakit' => $this->request->getVar('solusi_penyakit'),
        ];

        $result = $Penyakits->insert($data);

        if ($result) {
            session()->setFlashdata('sukses', 'Data berhasil ditambahkan.');
        } else {
            session()->setFlashdata('gagal', 'Gagal menambahkan data.');
        }

        return redirect()->to(site_url('admin/penyakit'));
    }


    public function edit($id = null)
    {
        $Penyakits = new PenyakitModel();
        $data['Penyakits'] = $Penyakits->find($id);
        return view('pages/penyakit/edit', $data);
    }


    public function update($id)
    {
        $Penyakits = new PenyakitModel();
        $existingPenyakit = $Penyakits->find($id);

        if (!$existingPenyakit) {
            // Penyakit dengan ID yang diberikan tidak ditemukan
            return redirect()->to(site_url('admin/penyakit'));
        }

        $kodePenyakit = $this->request->getVar('kode_penyakit');
        $namaPenyakit = $this->request->getVar('nama_penyakit');



        // Cek apakah kode penyakit sudah ada di database, kecuali untuk penyakit yang sedang diperbarui
        $existingKodePenyakit = $Penyakits->where('kode_penyakit', $kodePenyakit)->where('id_penyakit !=', $id)->first();
        if ($existingKodePenyakit) {
            session()->setFlashdata('gagal', 'Kode penyakit sudah ada.');
            return $this->response->redirect(site_url('admin/penyakit'));
        }

        // Cek apakah nama penyakit sudah ada di database, kecuali untuk penyakit yang sedang diperbarui
        $existingNamaPenyakit = $Penyakits->where('nama_penyakit', $namaPenyakit)->where('id_penyakit !=', $id)->first();
        if ($existingNamaPenyakit) {
            session()->setFlashdata('gagal', 'Nama penyakit sudah ada.');
            return $this->response->redirect(site_url('admin/penyakit'));
        }

        // // Validate kode_penyakit
        // if ($kodePenyakit !== 'P') {
        //     session()->setFlashdata('gagal', 'Kode penyakit harus "P"');
        //     return redirect()->to(site_url('admin/penyakit'));
        // }

        $data = [
            'kode_penyakit' => $kodePenyakit,
            'nama_penyakit' => $namaPenyakit,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'solusi_penyakit' => $this->request->getVar('solusi_penyakit'),
        ];

        if ($Penyakits->update($id, $data)) {
            // Data berhasil diupdate
            $updatedPenyakit = $Penyakits->find($id); // Mengambil data penyakit setelah diupdate
            if ($updatedPenyakit['kode_penyakit'] == $data['kode_penyakit'] && $updatedPenyakit['nama_penyakit'] == $data['nama_penyakit']) {
                session()->setFlashdata('sukses', 'Data berhasil diupdate.');
            } else {
                session()->setFlashdata('gagal', 'Gagal mengupdate data.');
            }
        } else {
            // Gagal mengupdate data
            session()->setFlashdata('gagal', 'Gagal mengupdate data.');
        }

        return $this->response->redirect(site_url('admin/penyakit'));
    }


    public function delete($id = null)
    {
        $Penyakits = new PenyakitModel();

        // Cek apakah data penyakit memiliki relasi
        $existingPenyakit = $Penyakits->find($id);
        if (!$existingPenyakit) {
            // Data penyakit dengan ID yang diberikan tidak ditemukan
            session()->setFlashdata('gagal', 'Data penyakit tidak ditemukan.');
        } else {
            // Cek apakah data penyakit terkait dengan relasi
            $hasRelation = $this->checkPenyakitRelation($id);
            if ($hasRelation) {
                // Data penyakit memiliki relasi, tidak dapat dihapus
                session()->setFlashdata('gagal', 'Data penyakit terkait dengan relasi, tidak dapat dihapus.');
            } else {
                // Hapus data penyakit
                $deleted = $Penyakits->delete($id);

                if ($deleted) {
                    // Data berhasil dihapus
                    session()->setFlashdata('sukses', 'Data berhasil dihapus.');
                } else {
                    // Gagal menghapus data
                    session()->setFlashdata('gagal', 'Gagal menghapus data.');
                }
            }
        }

        return $this->response->redirect(site_url('admin/penyakit'));
    }

    // Fungsi untuk memeriksa apakah data penyakit terkait dengan relasi
    private function checkPenyakitRelation($id)
    {
        // Lakukan pemeriksaan relasi data penyakit di sini
        // Anda dapat menggunakan model atau query sesuai dengan struktur relasi yang dimiliki

        // Contoh menggunakan model yang terkait dengan relasi
        $RelasiModel = new RelasiModel();
        $relasi = $RelasiModel->where('id_penyakit', $id)->first();

        // Jika relasi ditemukan, return true; jika tidak, return false
        return ($relasi !== null);
    }
}
