<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <a href="/Admin_kelolaUser/" class="badge badge-secondary">
                << kembali ke data user</a> <h1>Form edit user</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?= session()->get('pesan'); ?>
            <form action="/Admin_kelolaUser/update/<?= $users['id']; ?>" method="POST">

                <div class="form-group row">
                    <div class="col-md-6">

                        <label for="nama">Ubah Nama User</label>
                        <input type="text" class="form-control form-control-user <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" name="nama" id="nama" placeholder="Text here..." value="<?= $users['nama']; ?>" autofocus>
                        <div class="invalid-feedback">
                            <?= $validation->getError('nama'); ?>
                        </div>
                        <br>


                        <label for="username">Ubah Username</label>
                        <input type="text" class="form-control form-control-user <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" name="username" id="username" placeholder="Text here..." value="<?= $users['username']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('username'); ?>
                        </div>
                        <br>

                        <label for="password">Ubah Password</label>
                        <input type="text" class="form-control form-control-user <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" name="password" id="password" placeholder="Text here..." value="<?= $users['password']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('password'); ?>
                        </div>
                        <br>

                        <label for="level">Tentukan hak akses baru</label>
                        <select class="form-control <?= ($validation->hasError('level')) ? 'custom-select' : ''; ?>" name="level" id="level" required>
                            <option value=" <?= $users['level']; ?> "><?= $users['level']; ?></option>
                            <option value=" ">== pilih akses==</option>
                            <option value="owner">Owner</option>
                            <option value="admin">Admin</option>
                            <option value="peserta">Peserta</option>

                        </select>
                        <div class="invalid-feedback">
                            <?= $validation->getError('level'); ?>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary btn-lg">Ubah Data</button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>