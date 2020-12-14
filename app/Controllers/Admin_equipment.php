<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Admin_equipment extends BaseController
{
    protected $BarangModel;
    public function __construct()
    {
        $this->BarangModel = new BarangModel();
    }

    public function index()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $Barang = $this->BarangModel->search($keyword);
        } else {
            $Barang = $this->BarangModel;
        }

        $currentPage = $this->request->getVar('page_barang') ? $this->request->getVar('page_barang') : 1;
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Stok barang',
            'barang' => $Barang->paginate(5, 'barang'),
            'pager' => $this->BarangModel->pager,
            'currentPage'    => $currentPage
        ];

        return view('admin/barang/equipment_view', $data);
    }

    public function tambah_stok()
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Tambah merk barang'
        ];

        return view('admin/barang/formTambahBarang_view', $data);
    }

    public function tambah_stok_form($id)
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Tambah stok barang',
            'barang' => $this->BarangModel->getData($id)
        ];

        return view('admin/barang/formTambahStok_view', $data);
    }

    public function update_stok($id)
    {

        $this->BarangModel->save([
            'id_barang' => $id,
            'jumlah_barang' => ((int)$this->request->getVar('stok_awal') + (int)$this->request->getVar('stok_tambah'))
        ]);
        session()->setFlashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Tambah stok berhasil
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        return redirect()->to('/Admin_equipment/');
    }

    public function tambah()
    {
        $this->BarangModel->save([
            'nama_barang' => $this->request->getVar('nama_barang'),
            'jenis_barang' => $this->request->getVar('jenis_barang'),
            'jumlah_barang' => ((int)$this->request->getVar('jumlah_barang'))
        ]);

        session()->setFlashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        data barang berhasil ditambahkan
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        return redirect()->to('/Admin_equipment/barang/tambah_stok');
    }
}
