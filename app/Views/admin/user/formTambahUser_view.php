<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Form tambah user</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?= session()->get('pesan'); ?>
            <form action="/Admin_kelolaUser/register" method="POST" enctype="multipart/form-data">

                <div class="form-group row">
                    <div class="col-md-6">

                        <label for="nama">Nama User</label>
                        <input type="text" class="form-control form-control-user <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" name="nama" id="nama" placeholder="Text here..." value="<?= old('nama'); ?>" autofocus>
                        <div class="invalid-feedback">
                            <?= $validation->getError('nama'); ?>
                        </div>
                        <br>


                        <label for="username">Username</label>
                        <input type="text" class="form-control form-control-user <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" name="username" id="username" placeholder="Text here..." value="<?= old('username'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('username'); ?>
                        </div>
                        <br>

                        <label for="password">Password</label>
                        <input type="text" class="form-control form-control-user <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" name="password" id="password" placeholder="Text here..." value="<?= old('password'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('password'); ?>
                        </div>
                        <br>


                        <img src="/img/user_foto/default_user.jpg" class="img-thumbnail img-preview">
                        <div class="custom-file mt-2">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" id="foto" name="foto" onchange="previewImgfoto()">
                            <div class="invalid-feedback">
                                <?= $validation->getError('foto'); ?>
                            </div>
                            <label class="custom-file-label" for="foto">Pilih foto..</label>

                        </div>

                        <label for="level" class="mt-2">Tentukan hak akses</label>
                        <select class="form-control <?= ($validation->hasError('level')) ? 'custom-select' : ''; ?>" name="level" id="level" required>
                            <option value=" ">== pilih akses==</option>
                            <option value="owner">Owner</option>
                            <option value="admin">Admin</option>
                            <option value="peserta">Peserta</option>

                        </select>
                        <div class="invalid-feedback">
                            <?= $validation->getError('level'); ?>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary btn-lg">Simpan</button>

                    </div>
                </div>
            </form>
        </div>
    </div>
    <a href="/Admin_kelolaUser/" class="btn btn-secondary">
        kembali ke data user</a>
</div> <?= $this->endSection(); ?>