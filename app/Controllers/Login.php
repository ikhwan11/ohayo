<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Login extends BaseController
{
  public function index()
  {
    return view('login_view');
  }

  public function masuk()
  {
    $model = new LoginModel;
    $table = 'users';
    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');
    $row = $model->get_data_login($username, $table);

    if ($row == NULL) {
      session()->setFlashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            username salah
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      return redirect()->to('/login/');
    }

    $cek = $model->get_data_login($username, $table);

    if (password_verify($password, $row->password)) {
      $data = array(
        'log' => TRUE,
        'nama' => $row->nama,
        'username' => $row->username,
        'level' => $row->level,
      );
      session()->set($data);

      switch ($cek->level) {
        case 'admin':
          return redirect()->to('/Admin_dashboard');
          break;
        case 'owner':
          return redirect()->to('/Owner_dashboard');
          break;
        case 'peserta':
          return redirect()->to('/Peserta_dashboard');
          break;
        default:
          break;
      }
    }
    session()->setFlashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        password salah
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
    return redirect()->to('/login/');
  }

  public function keluar()
  {
    $session = session();
    $session->destroy();
    return redirect()->to('/');
  }
}
