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
            <form action="Admin_tambahUser/register" method="POST">

                <div class="form-group row">
                    <div class="col-md-6">

                        <label for="nama">nama</label>
                        <input type="text" class="form-control form-control-user" name="nama" id="nama" placeholder="Text here..."><br>


                        <label for="username">username</label>
                        <input type="text" class="form-control form-control-user" name="username" id="username" placeholder="Text here..."><br>

                        <label for="password">password</label>
                        <input type="text" class="form-control form-control-user" name="password" id="password" placeholder="Text here..."><br>

                        <label for="level">hak akses</label>
                        <select class="form-control" name="level" id="level">
                            <option value="disable">== pilih akses==</option>
                            <option value="owner">Owner</option>
                            <option value="admin">Admin</option>
                            <option value="peserta">Peserta</option>

                        </select> <br>
                        <button type="submit" class="btn btn-primary btn-lg">Simpan</button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>