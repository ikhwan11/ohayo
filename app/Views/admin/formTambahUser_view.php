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
            <form action="">
                <div class="form-group row">
                    <div class="form-group row mt-2 ml-1">
                        <form class="form-inline">
                            <div class="form-group mb-2">
                                <label>Nama atau id</label>
                            </div>
                            <div class="form-group mx-sm-3 mb-2">
                                <input type="text" class="form-control" id="inputnama" placeholder="Text here..">
                            </div>
                            <button type="submit" class="btn btn-primary mb-2">cek peserta</button>
                        </form>

                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6">

                        <label for="">username</label>
                        <input type="text" class="form-control form-control-user" id="" placeholder="Text here..."><br>

                        <label for="">password</label>
                        <input type="text" class="form-control form-control-user" id="" placeholder="Text here..."><br>

                        <label>hak akses</label>
                        <select class="form-control" name="">
                            <option value="disable">== pilih akses==</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>

                        </select> <br>

                        <a href="" class="btn btn-primary btn-lg">Simpan</a>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>