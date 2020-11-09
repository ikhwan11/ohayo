<?php

namespace App\Controllers;

use App\Models\PesertaModel;

class Admin_dashboard extends BaseController
{
    protected $pesertaModel;
    public function __construct()
    {
        $this->pesertaModel = new PesertaModel();
    }

    public function index()
    {
        $tot = $this->pesertaModel->tot_aktif();

        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Dashboard',
            'total' => $tot
        ];

        return view('admin/dashboardAdmin_view', $data);
    }
}
