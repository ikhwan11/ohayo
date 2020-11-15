<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Murid Daftar Baru</h1>
        </div>
    </div>
    <?= session()->get('pesan'); ?>
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
                                <a href="/Admin_kelolaPeserta/edit_pendaftaran/<?= $daftar['id_pendaftaran']; ?>" class="btn btn-warning"><i class="fas fa-file-import"> Import data</i></a>

                                <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#hapusdatapendaftaranModal">
                                    <i class="fas fa-trash"></i>
                                    Hapus
                                </a>
                            </td>
                        </tr>

                    </tbody>
                <?php endforeach; ?>
            </table>
        </div>
    </div><br>

    <a href="/Admin_dashboard" class="btn btn-primary mb-3 mr-3">Kembali Ke Dashboard</a>


</div>

<!-- hapus data pendafataranmodal-->
<div class="modal fade" id="hapusdatapendaftaranModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin menghapus data?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">data yang di hapus berarti sudah digunakan </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <form action="/Admin_kelolaPeserta/delete_pendaftaran<?= $daftar['id_pendaftaran']; ?>" method="POST" class="d-inline">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger"> Hapus </i></button>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>