<?php

namespace App\Controllers;

use App\Models\PesertaModel;
use App\Models\TransaksiModel;

class Admin_transaksiKelas extends BaseController
{
    protected $pesertaModel;
    public function __construct()
    {
        $this->pesertaModel = new PesertaModel();
    }

    public function index()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $peserta = $this->pesertaModel->search($keyword);
        } else {
            $peserta = $this->pesertaModel;
        }

        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Transaksi',
            'peserta' => $peserta->paginate(4, 'peserta'),
            'pager' => $this->pesertaModel->pager,
        ];

        return view('admin/transaksiKelas_view', $data);
    }
    public function peserta_pilih($id)
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Transaksi',
            'peserta' => $this->pesertaModel->getData($id)
        ];

        return view('admin/TransaksiKelasU_view', $data);
    }

    public function transaksi_kelas($id)
    {
        $this->pesertaModel->save([
            'id_peserta' => $id,
            'total_kelas' => (int)$this->request->getVar('paket_kelas')
        ]);

        $transaksi = new TransaksiModel();
        $transaksi->save([
            'jenis_transaksi' => 'transaksi masuk',
            'ket' => 'Transaksi tambah kelas',
            'total' => $this->request->getVar('total')

        ]);
        session()->setFlashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Transaksi Berhasil
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        return redirect()->to('/Admin_dataTransaksi/');
    }
}
