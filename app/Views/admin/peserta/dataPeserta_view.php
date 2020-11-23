<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <?= session()->get('pesan'); ?>
    <div class="row">
        <div class="col">
            <h1>Data Murid Ohayo Drawing School</h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col text-right">
        <a href="/Admin_kelolaTransaksi/filter_laporan/" class="btn btn-dark mb-2"> Buat laporan peserta bar</a>
    </div>
</div>
<div class="row">
    <div class="col">
        <table class="table table-hover table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Usia</th>
                    <th>Jenis Kelas</th>
                    <th>Status</th>
                    <th>Sisa Kelas</th>
                    <th>Aksi </th>

                </tr>
            </thead>
            <?php $no = 1 + (6 * ($currentPage - 1));
            foreach ($peserta as $siswa) : ?>
                <tbody>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $siswa['nama']; ?></td>
                        <td><?= $siswa['usia']; ?></td>
                        <td><?= $siswa['jenis_kursus']; ?></td>
                        <td><?= $siswa['status']; ?></td>
                        <td><?= $siswa['total_kelas']; ?></td>
                        <td>

                            <a href="/Admin_kelolaPeserta/detail/<?= $siswa['id_peserta']; ?>" class="btn btn-success">Detail</a>

                        </td>
                    </tr>
                </tbody>
            <?php endforeach; ?>
        </table>

        <?= $pager->links('peserta', 'admin_pagination'); ?>
    </div>
</div>

<?= $this->endSection(); ?>