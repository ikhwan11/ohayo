<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Tambah Stok <?= $barang['nama_barang']; ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <form action="/Admin_equipment/update_stok/<?= $barang['id_barang']; ?>">
                <label for="nama">Stok Awal :</label>
                <input type="number" class="form-control form-control-user " name="stok_awal" id="stok_awal" value="<?= $barang['jumlah_barang']; ?>" readonly><br>

                <label for="nama">jumlah Stok yang ditambahkan :</label>
                <input type="number" class="form-control form-control-user" name="stok_tambah" id="stok_tambah" value="" autofocus>

                <button type="submit" class="btn btn-primary mt-3">Tambah Stok</button>
        </div>
        </form>
    </div>
</div>

<?= $this->endSection(); ?>