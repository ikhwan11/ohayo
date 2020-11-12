<?php

namespace App\Controllers;

use App\Models\TransaksiModel;

class Admin_transaksiLain extends BaseController
{
    public function index()
    {
        $transaksi = new TransaksiModel();

        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Kelola User',
            'transaksi' => $transaksi
        ];

        return view('admin/transaksiLain_view', $data);
    }

    public function tambah()
    {
        $transaksi = new TransaksiModel();
        $transaksi->save([
            'jenis_transaksi' => 'Transaksi keluar',
            'ket' => $this->request->getVar('ket'),
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
