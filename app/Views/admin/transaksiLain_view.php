<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Transaksi Keluar</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <form action="/Admin_transaksiLain/tambah" method="POST">

                <div class="form-group row">
                    <label>Keteranagan</label>
                    <select class="form-control" name="ket" id="ket">
                        <option value="">== Pilih keteranagan transaksi==</option>
                        <option value="Pembelian modul, bag, dll">Pembelian ke pusat</option>
                        <option value="Pembelian seragam">Pembelian seragam</option>
                        <option value="Pembelian peralatan lukis">Pembelian peralatan lukis</option>
                        <option value="Pembelian keperluan lain">Pembelian keperluan lain</option>
                    </select> <br>

                    <label>Total transaksi</label>
                    <input type="text" class="form-control form-control-user" id="total" name="total" placeholder="Text here...">
                    <p>angka tidak boleh mengandung simbol dan tulisan</p><br>
                </div>
                <button type="submit" class="btn btn-success btn-lg">Simpan Transaksi</button>

            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>