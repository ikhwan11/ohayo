<?php

namespace App\Controllers;

use App\Models\PesertaModel;

class Admin_tambahPeserta extends BaseController
{
    protected $pesertaModel;
    public function __construct()
    {
        $this->pesertaModel = new PesertaModel();
    }

    public function index()
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Tambah peserta'
        ];

        return view('admin/formPendaftaranOf_view', $data);
    }

    public function simpan()
    {
        $this->pesertaModel->save([
            'nama' => $this->request->getVar('nama'),
            'gender' => $this->request->getVar('gender'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'alamat' => $this->request->getVar('alamat'),
            'no_wa' => $this->request->getVar('no_wa'),
            'usia' => $this->request->getVar('usia'),
            'nama_ayah' => $this->request->getVar('nama_ayah'),
            'nama_ibu' => $this->request->getVar('nama_ibu'),
            'asal_sekolah' => $this->request->getVar('asal_sekolah'),
            'jenis_kursus' => $this->request->getVar('jenis_kursus'),
            'total_kelas' => (int)$this->request->getVar('jenis_paket'),
            'status' => 'aktif'
        ]);

        session()->setFlashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        data peserta baru berhasil ditambahkan
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        return redirect()->to('/Admin_tambahPeserta/');
    }
}
