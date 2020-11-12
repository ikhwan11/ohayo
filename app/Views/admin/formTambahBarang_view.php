<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">

        <div class="col">
            <h1>Tambah barang baru</h1>
        </div>
    </div>
    <?= session()->get('pesan'); ?>
    <div class="row">
        <div class="col">
            <form action="/Admin_equipment/tambah" method="POST">

                <div class="form-group row">
                    <div class="col-md-6">

                        <label for="">nama barang</label>
                        <input type="text" class="form-control form-control-user" id="nama_barang" name="nama_barang" placeholder="Text here..."><br>

                        <label>jenis barang</label>
                        <select class="form-control" name="jenis_barang" id="jenis_barang">
                            <option value="disable">== pilih jenis==</option>
                            <option value="Painting Equipment">Painting</option>
                            <option value="Drawing Equipment">Drawing</option>
                            <option value="Crayon Equipment">Crayon</option>
                            <option value="Barang lain">Other</option>
                        </select> <br>

                        <label for="">jumlah barang</label>
                        <input type="number" class="form-control form-control-user" id="jumlah_barang" name="jumlah_barang" placeholder="Text here..."><br>

                        <button type="submit" class="btn btn-success btn-lg">Tambah</button>
                    </div>

                </div>
            </form>
            <a href="/Admin_equipment/" class="btn btn-primary btn-sm"> kembali ke data barang</a>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>