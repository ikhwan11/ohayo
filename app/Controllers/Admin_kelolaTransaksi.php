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

    public function filter_laporan()
    {

        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Laporan transaksi',
            'data' => $this->TransaksiModel->findAll(),
            'validation' => \Config\Services::validation(),
        ];

        return view('admin/transaksi/filterLaporan_view', $data);
    }

    public function filterLaporan_aksi()
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

            return redirect()->to('/Admin_kelolaTransaksi/filter_laporan')->withInput();
        }

        $dari = $this->request->getVar('dari');
        $sampai = $this->request->getVar('sampai');

        $query = $this->TransaksiModel->query("SELECT * FROM transaksi WHERE date(created_at)>= '$dari' AND date(created_at)<= '$sampai'");
        $row = $query->getResult();

        $i = $this->TransaksiModel->query("SELECT * From transaksi where jenis_transaksi = 'Transaksi Keluar'");
        $keluar = $i->getResult();
        $total_kel = 0;
        foreach ($keluar as $tot_kel) {
            $total_kel += $tot_kel->total;
        }

        $a = $this->TransaksiModel->query("SELECT * From transaksi where jenis_transaksi = 'Transaksi Masuk'");
        $masuk = $a->getResult();

        $total_mas = 0;
        foreach ($masuk as $tot_mas) {
            $total_mas += $tot_mas->total;
        }


        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Laporan transaksi',
            'data' => $row,
            'masuk' => $total_mas,
            'keluar' => $total_kel

        ];

        return view('admin/transaksi/laporan_view', $data);
    }
}
