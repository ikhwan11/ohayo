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

    public function update($id)
    {

        $this->pendaftaranModel->save([
            'id_pendaftaran' => $id,
            'nama' => $this->request->getVar('nama'),
            'gender' => $this->request->getVar('gender'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'alamat' => $this->request->getVar('alamat'),
            'no_wa' => $this->request->getVar('no_wa'),
            'usia' => $this->request->getVar('usia'),
            'nama_ayah' => $this->request->getVar('nama_ayah'),
            'nama_ibu' => $this->request->getVar('nama_ibu'),
            'asal_sekolah' => $this->request->getVar('asal_sekolah'),
            'jenis_kursus' => $this->request->getVar('jenis_kursus')
        ]);
        session()->setFlashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        data peserta berhasil ditambah
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        return redirect()->to('/Admin_dataPeserta/');
    }
}
