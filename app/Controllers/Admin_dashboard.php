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
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $peserta = $this->pesertaModel->search($keyword);
        } else {
            $peserta = $this->pesertaModel;
        }

        $tot1 = $this->pesertaModel->tot_aktif();
        $tot2 = $this->pesertaModel->tot_cuti();

        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Dashboard',
            'total_aktif' => $tot1,
            'total_cuti' => $tot2,
            'peserta' => $peserta->paginate(4, 'peserta'),
            'pager' => $this->pesertaModel->pager,
        ];

        return view('admin/dashboardAdmin_view', $data);
    }

    public function absen($id)
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Form Absensi',
            'peserta' => $this->pesertaModel->getData($id)
        ];

        return view('admin/formAbsensi_view', $data);
    }

    public function absen_update($id)
    {
        $this->pesertaModel->save([
            'id_peserta' => $id,
            'total_kelas' => ((int)$this->request->getVar('total_kelas') - 1)
        ]);
        session()->setFlashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Absensi berhasil
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        return redirect()->to('/Admin_dashboard/');
    }
}
