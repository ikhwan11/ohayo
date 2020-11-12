<?php

namespace App\Controllers;

use App\Models\TransaksiModel;

class Admin_dataTransaksi extends BaseController
{
    protected $TransaksiModel;
    public function __construct()
    {
        $this->TransaksiModel = new TransaksiModel();
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

        return view('admin/dataTransaksi_view', $data);
    }
}
