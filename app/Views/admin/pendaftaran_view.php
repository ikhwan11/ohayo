<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Murid Daftar Baru</h1>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <table class="table table-hover table-striped table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama calon peserta</th>
                        <th>Usia</th>
                        <th>Jenis kelamin</th>
                        <th>Nama ayah</th>
                        <th>Nama ibu</th>
                        <th>No Hp</th>
                        <th>Kelas kursus</th>
                        <th>Tanggal daftar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <?php $no = 1;
                foreach ($pendaftaran as $daftar) : ?>
                    <tbody>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $daftar['nama']; ?></td>
                            <td><?= $daftar['usia']; ?></td>
                            <td><?= $daftar['gender']; ?></td>
                            <td><?= $daftar['nama_ayah']; ?></td>
                            <td><?= $daftar['nama_ibu']; ?></td>
                            <td><?= $daftar['no_wa']; ?></td>
                            <td><?= $daftar['jenis_kursus']; ?></td>
                            <td><?= $daftar['created_at']; ?></td>
                            <td>
                                <button class="btn btn-warning mb-2"><i class="fas fa-file-import"> Import ke form</i> </button>
                                <button class="btn btn-danger"><i class="fas fa-trash"> Hapus</i></button>
                            </td>
                        </tr>

                    </tbody>
                <?php endforeach; ?>
            </table>
        </div>
    </div><br>

    <a href="/Admin_dashboard" class="btn btn-primary mb-3 mr-3">Kembali Ke Dashboard</a>


</div>

<?= $this->endSection(); ?>