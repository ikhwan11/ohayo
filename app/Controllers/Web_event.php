<?php

namespace App\Controllers;

use App\Models\EventModel;
use App\Models\EventPesertaModel;

class Web_event extends BaseController
{
    public function index()
    {
        $EventModel = new EventModel();
        $course = 'Ohayo |';
        $data = [
            'tittle' => $course . ' Event',
            'event' => $EventModel->findAll()
        ];

        return view('costumer/event_view', $data);
    }

    public function detail($id)
    {
        $EventModel = new EventModel();
        $course = 'Ohayo |';
        $data = [
            'tittle' => $course . ' Detail Event',
            'event' => $EventModel->find($id)
        ];

        return view('costumer/detailEvent_view', $data);
    }

    public function daftar_event()
    {
        $EventModel = new EventModel();
        $course = 'Ohayo |';
        $data = [
            'tittle' => $course . ' Daftar Event',
            'validation' => \Config\Services::validation(),
            'event' => $EventModel->findAll()
        ];

        return view('costumer/formDaftarEvent_view', $data);
    }

    public function submit()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'judul_event' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis event belum dipilih'
                ]
            ],
            'no_wa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor whatsapp wajib diisi'
                ]
            ],
            'usia' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'foto' => [
                'rules' => 'uploaded[foto]|max_size[foto,1024]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'upload bukti pembayaran',
                    'max_size' => 'ukuran gambar terlalu besar',
                    'is_image' => 'yang anda pilih bukan gambar',
                    'max_size' => 'ukuran gambar terlalu besar',
                    'mime_in' => 'yang anda pilih bukan gambar',
                ]
            ]
        ])) {

            return redirect()->to('/Web_event/daftar_event/')->withInput();
        }
        $this->EventPesertaModel = new EventPesertaModel();

        $filefoto = $this->request->getFile('foto');
        $namaFoto = $filefoto->getRandomName();
        $filefoto->move('img/bukti_event', $namaFoto);

        $this->EventPesertaModel->save([
            'judul_event' => $this->request->getVar('judul_event'),
            'nama_peserta' => $this->request->getVar('nama'),
            'no_wa' => $this->request->getVar('no_wa'),
            'usia' => $this->request->getVar('usia'),
            'bukti' => $namaFoto
        ]);
        session()->setFlashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Pendaftaran Berhasil, Admin akan segera menghubungi anda untuk info lebih lanjut.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        return redirect()->to('/Web_event/');
    }
}
