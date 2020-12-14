<?php

namespace App\Controllers;

use App\Models\TransaksiModel;
use App\Models\PesertaModel;


class Admin_kelolaTransaksi extends BaseController
{
    protected $TransaksiModel;
    public function __construct()
    {
        $this->TransaksiModel = new TransaksiModel();
        $this->pesertaModel = new pesertaModel();
    }

    public function index()
    {
        $currentPage = $this->request->getVar('page_transaksi') ? $this->request->getVar('page_transaksi') : 1;

        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Data transaksi',
            'transaksi' => $this->TransaksiModel->paginate(7, 'transaksi'),
            'pager' => $this->TransaksiModel->pager,
            'currentPage' => $currentPage
        ];

        return view('admin/transaksi/dataTransaksi_view', $data);
    }

    // tambah kelas

    public function tambah_kelas()
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

        return view('admin/transaksi/transaksiKelas_view', $data);
    }

    public function peserta_pilih($id)
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Transaksi',
            'peserta' => $this->pesertaModel->getData($id)
        ];

        return view('admin/transaksi/TransaksiKelasU_view', $data);
    }

    public function transaksi_kelas_update($id)
    {
        $this->pesertaModel->save([
            'id_peserta' => $id,
            'total_kelas' => (int)$this->request->getVar('paket_kelas')
        ]);

        $this->TransaksiModel->save([
            'jenis_transaksi' => 'Transaksi masuk',
            'ket' => 'Transaksi tambah kelas',
            'total' => (int)$this->request->getVar('total')

        ]);
        session()->setFlashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Transaksi Berhasil
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        return redirect()->to('/Admin_kelolaTransaksi/');
    }

    // transaksi lain

    public function transaksi_lain()
    {

        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Kelola User',
        ];

        return view('admin/transaksi/transaksiLain_view', $data);
    }

    public function tambah_transaksiLain()
    {

        $this->TransaksiModel->save([
            'jenis_transaksi' => 'Transaksi keluar',
            'ket' => $this->request->getVar('ket'),
            'total' => (int)$this->request->getVar('total')
        ]);
        session()->setFlashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Transaksi Berhasil
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        return redirect()->to('/Admin_kelolaTransaksi/');
    }
}
