<?php

namespace App\Controllers;

use App\Models\PendaftaranModel;

class Web_pendaftaran extends BaseController
{
    protected $PendaftaranModel;

    public function __construct()
    {
        $this->PendaftaranModel = new PendaftaranModel();
    }
    public function index()
    {
        $course = 'Ohayo |';
        $data = [
            'tittle' => $course . ' Pendaftaran',
            'validation' => \Config\Services::validation()
        ];

        return view('costumer/formPendaftaran_view', $data);
    }

    public function simpan()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'gender' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'tanggal_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'no_wa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'usia' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'nama_ayah' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'nama_ibu' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'asal_sekolah' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'jenis_kursus' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();

            return redirect()->to('/Web_pendaftaran/')->withInput()->with('validation', $validation);
        }

        $this->PendaftaranModel->save([
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
        pendaftaran berhasil silahkan konfimasi dan menghubungi admin kami
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        return redirect()->to('/Web_pendaftaran/');
    }
}
