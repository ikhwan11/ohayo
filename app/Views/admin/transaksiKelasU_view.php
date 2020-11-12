<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <H1>TAMBAH KELAS</H1>
        </div>

    </div>
    <div class="row">
        <div class="col-md-4">
            <form action="/Admin_transaksiKelas/transaksi_kelas/<?= $peserta['id_peserta']; ?>" method="POST">
                <div class="form-group row">

                    <label for="">Nama</label>
                    <input type="text" class="form-control form-control-user" id="nama" name="nama" value="<?= $peserta['nama']; ?>"><br>

                    <label>paket kelas</label>
                    <select class="form-control" name="paket_kelas" id="paket_kelas">
                        <option value="">== pilih paket==</option>
                        <option value="12">3 bulan</option>
                        <option value="24">6 bulan</option>
                    </select> <br>

                    <label>Total</label>
                    <select class="form-control" name="total" id="total">
                        <option value=""></option>
                        <option value="2300000">Rp 2.300.000</option>
                        <option value="4600000">Rp 4.600.000</option>
                    </select> <br>

                    <button type="submit" class="btn btn-primary btn-lg mt-3">Kofirmasi</button>

                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>