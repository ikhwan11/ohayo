<?php

namespace App\Controllers;

use App\Models\PendaftaranModel;

class Admin_pendaftaran extends BaseController
{
    protected $pendaftaranModel;

    public function __construct()
    {
        $this->pendaftaranModel = new PendaftaranModel();
    }

    public function index()
    {
        $pendaftaran = $this->pendaftaranModel->findAll();
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Murid Terdaftar',
            'pendaftaran' => $pendaftaran
        ];

        return view('admin/pendaftaran_view', $data);
    }

    public function edit($id)
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Tambah peserta',
            // 'validation' => \Config\Services::validation(),
            'pendaftaran' => $this->pendaftaranModel->getData($id)
        ];

        return view('admin/formPendaftaranOl_view', $data);
    }

    public function delete($id)
    {
        $this->pendaftaranModel->delete($id);
        session()->setFlashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        data berhasil dihapus
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        return redirect()->to('/Admin_pendaftaran/');
    }
}
