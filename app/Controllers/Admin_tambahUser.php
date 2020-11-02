<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Admin_tambahUser extends BaseController
{
    public function index()
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Kelola User',
        ];

        return view('admin/formTambahUser_view', $data);
    }
    public function register()
    {

        $data = array(
            'nama' => $this->request->getVar('nama'),
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'level' => $this->request->getVar('level'),
        );
        $model = new UsersModel;
        $model->insert($data);
        session()->setFlashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        user berhasil ditambahkan
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        return redirect()->to('/admin/tambah_user');
    }
}
