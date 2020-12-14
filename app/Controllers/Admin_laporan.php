<?php

namespace App\Controllers;

use App\Models\PesertaModel;
use App\Models\FeedbackModel;
use App\Models\TransaksiModel;
use App\Models\BarangModel;

class Admin_laporan extends BaseController
{
    public function __construct()
    {
        $this->PesertaModel = new PesertaModel();
        $this->FeedbackModel = new FeedbackModel();
        $this->TransaksiModel = new TransaksiModel();
        $this->BarangModel = new BarangModel();
    }

    public function index()
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Laporan transaksi',
            'validation' => \Config\Services::validation(),
        ];

        return view('admin/laporan_view', $data);
    }

    public function filter_laporan_aksi()
    {
        if (!$this->validate([
            'dari' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'wajib diisi'
                ]
            ],
            'sampai' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'wajib diisi'
                ]
            ],

        ])) {

            return redirect()->to('/Admin_laporan/')->withInput();
        }

        $dari = $this->request->getVar('dari');
        $sampai = $this->request->getVar('sampai');

        // laporan peserta

        $peserta = $this->PesertaModel->query("SELECT * FROM peserta WHERE date(created_at)>= '$dari' AND date(created_at)<= '$sampai'");
        $peserta_row = $peserta->getResult();

        $peserta_cuti = $this->PesertaModel->query("SELECT * FROM peserta Where status_peserta = 'cuti'");
        $pesertaCuti_row = $peserta_cuti->getResult();

        // laporan transaksi
        $transaksi = $this->TransaksiModel->query("SELECT * FROM transaksi WHERE date(created_at)>= '$dari' AND date(created_at)<= '$sampai'");
        $transaksi_row = $transaksi->getResult();

        // laporan feedback

        $feedback = $this->FeedbackModel->query("SELECT * FROM feedback WHERE date(created_at)>= '$dari' AND date(created_at)<= '$sampai'");
        $feedback_row = $feedback->getResult();

        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Laporan',
            'total_peserta' => $this->PesertaModel->tot_aktif(),
            'peserta_baru' => $peserta_row,
            'peserta_cuti' => $pesertaCuti_row,
            'transaksi' => $transaksi_row,
            'feedback' => $feedback_row,
            'stok' => $this->BarangModel->findAll()

        ];

        return view('admin/layout_laporan', $data);
    }
}
