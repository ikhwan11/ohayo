<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Daftar Laporan Keluhan dan Saran Peserta</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Peserta</th>
                        <th>Tanggal</th>
                        <th>Detail</th>
                    </tr>
                </thead>

                <?php $no = 1;
                foreach (Array_reverse($feedback) as $f) : ?>
                    <tbody>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $f['nama_peserta']; ?></td>
                            <td><?= $f['created_at']; ?></td>
                            <td><a href="/Admin_feedback/detail/<?= $f['id_feedback']; ?>" class="btn btn-success">Lihat detail</a></td>
                        </tr>
                    </tbody>
                <?php endforeach; ?>
            </table>

            <a href="/Admin_dashboard/" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>