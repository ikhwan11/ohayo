<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Transaksi</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="">
                    <div class="col-md-6">

                        <div class="form-group row">
                            <label for="">Jenis transaksi</label>
                            <input type="text" class="form-control form-control-user" id="" placeholder="Text here..."><br>

                            <label for="">Tanggal Transaksi</label>
                            <input type="date" class="form-control form-control-user" id="" placeholder="Text here..."><br>

                            <label for="">Nama toko</label>
                            <input type="text" class="form-control form-control-user" id="" placeholder="Text here..."><br>

                            <label for="">Total transaksi</label>
                            <input type="text" class="form-control form-control-user" id="" placeholder="Text here..."><br>
                        </div>

                        <a href="" class="btn btn-primary btn-lg">Simpan Transaksi</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>