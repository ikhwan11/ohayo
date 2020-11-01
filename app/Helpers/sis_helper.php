<?php

use App\Models\LoginModel;

function allow($level)
{
    $session = \Config\Services::session();
    $user = $session->get('username');
    $tabel = 'users';
    $model = new LoginModel;
    $row = $model->get_data_login($user, $tabel);
    if ($row != NULL) {
        if ($row->level == $level) {
            return true;
        } else {
            return false;
        }
    }
}
