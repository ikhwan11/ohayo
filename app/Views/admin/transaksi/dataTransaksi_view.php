<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <?= session()->get('pesan'); ?>
    <div class="row">
        <div class="col">
            <h1>Data Transaksi</h1>
        </div>
    </div>
    <div class="row">
        <div class="col text-right">
            <a href="/Admin_kelolaTransaksi/filter_laporan/" class="btn btn-dark mb-2"> Buat Laporan</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
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
                <?php $no = 1 + (6 * ($currentPage - 1));
                foreach ($transaksi as $t) : ?>
                    <tbody>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $t['created_at']; ?></td>
                            <td><?= $t['jenis_transaksi']; ?></td>
                            <td><?= $t['ket']; ?></td>
                            <td><?= $t['total']; ?></td>
                        </tr>
                    </tbody>
                <?php endforeach; ?>
            </table>
            <?= $pager->links('transaksi', 'admin_pagination'); ?>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>