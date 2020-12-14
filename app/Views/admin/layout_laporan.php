<?= $this->extend('layout/print_layout'); ?>

<?= $this->section('content'); ?>


<div class="container">
    <!-- header -->
    <div class="row">
        <div class="col mt-3">
            <img src="/assets/ohayo_item/Logo_Ohayo.png" style="width: 150px;">
        </div>
        <div class="col-md-4 text-right mt-3">
            <h1>Laporan Bulan <?php date_default_timezone_set('Asia/Jakarta');
                                echo "" . date('F Y');
                                ?></h1>
        </div>
    </div>
    <hr style="border-top: 3px double #8c8b8b;">
    <!-- end header -->

    <!-- laporan peserta -->
    <div class="row mt-4">
        <div class="col">
            <h1>Data peserta baru</h1>
        </div>
        <table class="table table-hover table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>umur</th>
                    <th>Kelas</th>
                </tr>
            </thead>
            <?php $no = 1;
            foreach ($peserta_baru as $p) : ?>
                <tbody>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $p->nama; ?></td>
                        <td><?= $p->gender; ?></td>
                        <td><?= $p->usia; ?></td>
                        <td><?= $p->jenis_kursus; ?></td>
                    </tr>
                </tbody>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="row">
        <div class="col">
            <h1>Data peserta cuti</h1>
        </div>
        <table class="table table-hover table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Umur</th>
                    <th>Kelas</th>
                </tr>
            </thead>
            <?php $no = 1;
            foreach ($peserta_cuti as $c) : ?>
                <tbody>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $c->nama; ?></td>
                        <td><?= $c->gender; ?></td>
                        <td><?= $c->usia; ?></td>
                        <td><?= $c->jenis_kursus; ?></td>
                    </tr>
                </tbody>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="row">
        <div class="col">
            <div class="card text-center mb-3 mt-5">
                <div class="card-header">
                    <h1>Total Peserta aktif</h1>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Total peserta aktif adalah <b><?= $total_peserta; ?></b> peserta</h5>
                </div>

            </div>
        </div>
    </div>
    <!-- end laporan peserta -->
    <!-- laporan transaksi -->
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
                foreach ($transaksi as $t) : ?>
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
    <!-- end laporan transaksi -->
    <!-- laporanfeedback -->
    <div class="row mt-5">
        <div class="col mb-3">
            <h1>Laporan saran dan keluhan orangtua</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?php foreach ($feedback as $d) : ?>
                <div class="card">
                    <div class="card-header" style="background-color: darkgrey;">
                        <h4 style="color: white;"><?= $d->nama_peserta; ?></h4>
                    </div>
                    <div class="card-body">
                        <h6><?= $d->created_at; ?></h6>
                        <p><?= $d->laporan; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- end laporan feedback -->
    <!-- laporan stok barang -->
    <div class="row">
        <div class="col mt-3">
            <h1>Laporan stok barang</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Barang</td>
                        <td>Stok</td>
                    </tr>
                </thead>
                <?php $no = 1;
                foreach ($stok as $s) : ?>
                    <tbody>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $s['nama_barang']; ?></td>
                            <td><?= $s['jumlah_barang']; ?></td>
                        </tr>
                    </tbody>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
    <!-- end laporan stok barang -->

</div>

<?= $this->endSection(); ?>