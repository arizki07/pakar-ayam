<?php

namespace App\Controllers;

use App\Models\DiagnosaModel;

class Diagnosa extends BaseController
{
    public function index()
    {
        $diagnosaModel = new DiagnosaModel();
        $data['result'] = $diagnosaModel->findAll();
        return view('pages/diagnosa/index', $data);
    }

    public function detail($id)
    {
        $diagnosaModel = new DiagnosaModel();
        $data['result'] = $diagnosaModel->getById($id);
        return view('pages/diagnosa/lihat', $data);
    }

    public function delete($id)
    {
        $diagnosaModel = new DiagnosaModel();
        $diagnosa = $diagnosaModel->find($id);

        if (!$diagnosaModel) {
            // Gejala dengan ID yang diberikan tidak ditemukan
            session()->setFlashdata('gagal', 'Data gejala tidak ditemukan.');
        } else {
            $deleted = $diagnosaModel->delete($id);

            if ($deleted) {
                // Data berhasil dihapus
                session()->setFlashdata('sukses', 'Data berhasil dihapus.');
            } else {
                // Gagal menghapus data
                session()->setFlashdata('gagal', 'Gagal menghapus data.');
            }
        }

        return redirect()->to(site_url('admin/diagnosa'));
    }
}
