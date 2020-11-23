<?= $this->extend('layout/print_layout'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center mt-5">Laporan transaksi bulan ini</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h5>Data-data transaksi :</h5>
            <table class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Jenis Transaksi</th>
                        <th>Keterangan</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <?php $no = 1;
                foreach ($data as $t) : ?>
                    <tbody>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $t->created_at; ?></td>
                            <td><?= $t->jenis_transaksi; ?></td>
                            <td><?= $t->ket; ?></td>
                            <td><?= $t->total; ?></td>
                        </tr>
                    </tbody>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">Total pemasukan bulan ini :</h5>
                <div class="card-body">
                    <p class="btn btn-success">Rp. <?= $masuk; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">Total pengeluaran bulan ini :</h5>
                <div class="card-body">
                    <p class="btn btn-danger">Rp. <?= $keluar; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>