<?php

namespace App\Controllers;

use App\Models\EventPesertaModel;
use App\Models\EventPesertaKonfirm;
use App\Models\EventModel;

class Admin_acara extends BaseController
{
    public function __construct()
    {
        $this->EventPesertaModel = new EventPesertaModel();
        $this->EventPesertaKonfirm = new EventPesertaKonfirm();
        $this->EventModel = new EventModel();
    }

    public function index()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $judul = $this->EventPesertaKonfirm->search($keyword);
        } else {
            $judul = $this->EventPesertaKonfirm;
        }

        $currentPage = $this->request->getVar('page_peserta') ? $this->request->getVar('page_peserta') : 1;
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Data peserta event',
            'peserta' => $judul->paginate(5, 'event_pesertakonfirm'),
            'judul' => $this->EventModel->findAll(),
            'pager' => $this->EventPesertaKonfirm->pager,
            'currentPage'    => $currentPage,

        ];

        return view('admin/acara/dataPeserta_view', $data);
    }

    public function peserta_masuk()
    {
        $currentPage = $this->request->getVar('page_peserta') ? $this->request->getVar('page_peserta') : 1;
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Detail peserta',
            'peserta' => $this->EventPesertaModel->paginate(5, 'event_pesertakonfirm'),
            'pager' => $this->EventPesertaModel->pager,
            'currentPage'    => $currentPage,
        ];

        return view('admin/acara/dataPesertaMasuk_view', $data);
    }

    public function detail($id)
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Detail peserta',
            'peserta' => $this->EventPesertaModel->find($id)
        ];

        return view('admin/acara/detailPesertaEvent_view', $data);
    }

    public function konfirm($id)
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Konfirmasi peserta',
            'peserta' => $this->EventPesertaModel->find($id)
        ];

        return view('admin/acara/formKonfirmPeserta_view', $data);
    }

    public function konfirm_submit($id)
    {
        $this->EventPesertaKonfirm->save([
            'nama_peserta' => $this->request->getVar('nama_peserta'),
            'usia' => $this->request->getVar('usia'),
            'judul_event' => $this->request->getVar('judul_event'),
            'no_wa' => $this->request->getVar('no_wa'),
        ]);

        $this->EventPesertaModel->delete($id);

        session()->setFlashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Peserta Event Ditambahkan.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
         </div>');
        return redirect()->to('/Admin_acara/');
    }

    public function download($id)
    {
        return $this->response->download('/img/bukti_event/' . $id, null);
    }
}
