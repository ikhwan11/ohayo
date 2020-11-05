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
            'validation' => \Config\Services::validation()
        ];

        return view('admin/formTambahUser_view', $data);
    }
    public function register()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'username' => [
                'rules' => 'required|is_unique[users.username]',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                    'is_unique' => '{field} sudah dipakai.'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'level' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();

            return redirect()->to('/Admin_tambahUser/')->withInput()->with('validation', $validation);
        }

        $data = array(
            'nama' => $this->request->getVar('nama'),
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
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
        return redirect()->to('/admin_tambahUser/');
    }
}
