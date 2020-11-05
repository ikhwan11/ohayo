<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Admin_kelolaUser extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UsersModel();
    }

    public function index()
    {
        $users = $this->userModel->findAll();
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Kelola User',
            'users' => $users
        ];

        return view('admin/kelolaUser_view', $data);
    }

    public function delete($id)
    {
        $this->userModel->delete($id);
        session()->setFlashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        user berhasil dihapus
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        return redirect()->to('/Admin_kelolaUser/');
    }

    public function edit($id)
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Edit User',
            'validation' => \Config\Services::validation(),
            'users' => $this->userModel->getUser($id)
        ];

        return view('admin/formEditUser_view', $data);
    }

    public function update($id)
    {
        $usernameLama = $this->userModel->getUser($this->request->getVar('id'));
        if ($usernameLama['username'] == $this->request->getVar('username')) {
            $rule_username = 'required';
        } else {
            $rule_username = 'required|is_unique[users.username]';
        }

        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'username' => [
                'rules' => $rule_username,
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

            return redirect()->to('/Admin_kelolaUser/edit/' . $this->request->getVar('id'))->withInput()->with('validation', $validation);
        }

        $this->userModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'level' => $this->request->getVar('level'),
        ]);
        session()->setFlashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        data user berhasil diubah
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        return redirect()->to('/Admin_kelolaUser/');
    }
}