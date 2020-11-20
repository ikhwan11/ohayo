<?php

namespace App\Controllers;

use App\Models\FeedbackModel;

class Peserta_feedback extends BaseController
{
    public function index()
    {
        $corp = 'Ohayo |';
        $data = [
            'tittle' => $corp . ' Feedback',
            'validation' => \Config\Services::validation()
        ];

        return view('costumer/feedback_view', $data);
    }

    public function submit_feedback()
    {
        if (!$this->validate([
            'text' => 'required'
        ])) {

            return redirect()->to('/Peserta_feedback/')->withInput();
        }

        $feedback = new FeedbackModel();
        $feedback->save([
            'nama_peserta' => $this->request->getVar('nama_peserta'),
            'laporan' => $this->request->getVar('text'),
        ]);

        session()->setFlashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Feedback berhasil terkirim
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        return redirect()->to('/Peserta_feedback/');
    }
}
