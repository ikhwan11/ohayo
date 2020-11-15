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
        $currentPage = $this->request->getVar('page_peserta') ? $this->request->getVar('page_peserta') : 1;

        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Kelola User',
            'users' => $this->userModel->paginate(6, 'users'),
            'pager' => $this->userModel->pager,
            'currentPage'    => $currentPage
        ];

        return view('admin/user/kelolaUser_view', $data);
    }

    public function tambah_user_view()
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Kelola User',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/user/formTambahUser_view', $data);
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
            'foto' => [
                'rules' => 'max_size[foto,1024]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'ukuran gambar terlalu besar',
                    'is_image' => 'yang anda pilih bukan gambar',
                    'max_size' => 'ukuran gambar terlalu besar',
                    'mime_in' => 'yang anda pilih bukan gambar',
                ]
            ],

            'level' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
        ])) {

            return redirect()->to('/Admin_kelolaUser/tambah_user_view')->withInput();
        }

        $filefoto = $this->request->getFile('foto');
        if ($filefoto->getError() == 4) {
            $namafoto = 'default_user.jpg';
        } else {

            $namafoto = $filefoto->getRandomName();

            $filefoto->move('img/user_foto', $namafoto);
        }


        $data = array(
            'nama' => $this->request->getVar('nama'),
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'level' => $this->request->getVar('level'),
            'foto' => $namafoto,

        );
        $model = new UsersModel;
        $model->insert($data);
        session()->setFlashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        user berhasil ditambahkan
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        return redirect()->to('/admin_kelolaUser/tambah_user_view');
    }

    public function detail($id)
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Detail User',
            'users' => $this->userModel->getUser($id)
        ];

        return view('admin/user/detailUser_view', $data);
    }

    public function delete($id)
    {
        $foto = $this->userModel->find($id);

        if ($foto['foto'] != 'default_user.jpg') {

            unlink('img/user_foto/' . $foto['foto']);
        }

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

        return view('admin/user/formEditUser_view', $data);
    }

    public function update($id)
    {
        $filefoto = $this->request->getFile('foto');
        if ($filefoto->getError() == 4) {
            $namafoto = 'default_user.jpg';
        } else {

            $namafoto = $filefoto->getRandomName();

            $filefoto->move('img/user_foto', $namafoto);
        }

        $this->userModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'level' => $this->request->getVar('level'),
            'foto' => $namafoto,
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
