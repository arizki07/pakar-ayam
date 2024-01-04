<?php

namespace App\Controllers;

use App\Models\GejalaModel;
use App\Models\RelasiModel;

class Gejala extends BaseController
{
    public function index()
    {
        $Gejalas = new GejalaModel();
        $data['Gejalas'] = $Gejalas->findAll();
        return view('pages/gejala/gejala', $data);
    }

    public function store()
    {
        $Gejalas = new GejalaModel();

        $kodeGejala = $this->request->getVar('kode_gejala');
        $namaGejala = $this->request->getVar('nama_gejala');



        // Cek apakah kode gejala sudah ada di database
        $existingGejala = $Gejalas->where('kode_gejala', $kodeGejala)->first();
        if ($existingGejala) {
            session()->setFlashdata('gagal', 'Kode gejala sudah ada.');
            return redirect()->to(site_url('admin/gejala'));
        }

        // Cek apakah nama gejala sudah ada di database
        $existingNamaGejala = $Gejalas->where('nama_gejala', $namaGejala)->first();
        if ($existingNamaGejala) {
            session()->setFlashdata('gagal', 'Nama gejala sudah ada.');
            return redirect()->to(site_url('admin/gejala'));
        }

        // Validasi kode_gejala
        if (empty($kodeGejala)) {
            session()->setFlashdata('gagal', 'Kode gejala harus diisi.');
            return redirect()->to(site_url('admin/gejala'));
        }
        $data = [
            'kode_gejala' => $kodeGejala,
            'nama_gejala' => $namaGejala,
        ];


        $result = $Gejalas->insert($data);

        if ($result) {
            session()->setFlashdata('sukses', 'Data berhasil ditambahkan.');
        } else {
            session()->setFlashdata('gagal', 'Gagal menambahkan data.');
        }

        return redirect()->to(site_url('admin/gejala'));
    }

    public function edit($id)
    {
        $Gejalas = new GejalaModel();
        $gejala = $Gejalas->find($id);

        if (!$gejala) {
            return redirect()->to(site_url('admin/gejala'));
        }

        $data = [
            'gejala' => $gejala,
        ];

        return view('pages/gejala/edit', $data);
    }

    public function update($id)
    {
        $Gejalas = new GejalaModel();
        $gejala = $Gejalas->find($id); // Mengambil data gejala berdasarkan ID

        if (!$gejala) {
            // Gejala dengan ID yang diberikan tidak ditemukan
            return redirect()->to(site_url('admin/gejala'));
        }

        $kodeGejala = $this->request->getVar('kode_gejala');
        $namaGejala = $this->request->getVar('nama_gejala');

        // Cek apakah kode gejala sudah ada di database, kecuali untuk gejala yang sedang diperbarui
        $existingKodeGejala = $Gejalas->where('kode_gejala', $kodeGejala)->where('id_gejala !=', $id)->first();
        if ($existingKodeGejala) {
            session()->setFlashdata('gagal', 'Kode gejala sudah ada.');
            return redirect()->to(site_url('admin/gejala'));
        }

        // Cek apakah nama gejala sudah ada di database, kecuali untuk gejala yang sedang diperbarui
        $existingNamaGejala = $Gejalas->where('nama_gejala', $namaGejala)->where('id_gejala !=', $id)->first();
        if ($existingNamaGejala) {
            session()->setFlashdata('gagal', 'Nama gejala sudah ada.');
            return redirect()->to(site_url('admin/gejala'));
        }

        $data = [
            'kode_gejala' => $kodeGejala,
            'nama_gejala' => $namaGejala,
        ];

        if ($Gejalas->update($id, $data)) {
            // Data berhasil diupdate
            session()->setFlashdata('sukses', 'Data berhasil diupdate.');
        } else {
            // Gagal mengupdate data
            session()->setFlashdata('gagal', 'Gagal mengupdate data.');
        }

        return redirect()->to(site_url('admin/gejala'));
    }


    public function delete($id = null)
    {
        $Gejalas = new GejalaModel();
        $RelasiModel = new RelasiModel();

        $gejala = $Gejalas->find($id); // Mengambil data gejala berdasarkan ID

        if (!$gejala) {
            // Gejala dengan ID yang diberikan tidak ditemukan
            session()->setFlashdata('gagal', 'Data gejala tidak ditemukan.');
        } else {
            // Periksa apakah gejala memiliki relasi
            $existingRelasi = $RelasiModel->where('id_gejala', $id)->first();
            if ($existingRelasi) {
                // Gejala memiliki relasi, sehingga tidak dapat dihapus
                session()->setFlashdata('gagal', 'Gejala tidak dapat dihapus karena terdapat relasi yang terkait.');
            } else {
                $deleted = $Gejalas->delete($id);

                if ($deleted) {
                    // Data berhasil dihapus
                    session()->setFlashdata('sukses', 'Data berhasil dihapus.');
                } else {
                    // Gagal menghapus data
                    session()->setFlashdata('gagal', 'Gagal menghapus data.');
                }
            }
        }

        return redirect()->to(site_url('admin/gejala'));
    }
}
