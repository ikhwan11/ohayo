<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Detail Peserta</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col">
                        <div class="card-body">
                            <h5 class="card-title"><?= $peserta['nama']; ?></h5>
                            <p class="card-text"><b>Alamat :</b> <?= $peserta['alamat']; ?></p>
                            <p class="card-text"><b>Tanggal Lahir :</b> <?= $peserta['tanggal_lahir']; ?></p>
                            <p class="card-text"><b>Usia :</b> <?= $peserta['usia']; ?></p>
                            <p class="card-text"><b>Jenis Kelamin :</b> <?= $peserta['gender']; ?></p>
                            <p class="card-text"><b>Nama Ayah :</b> <?= $peserta['nama_ayah']; ?></p>
                            <p class="card-text"><b>Nama Ibu :</b> <?= $peserta['nama_ibu']; ?></p>
                            <p class="card-text"><b>Asal Sekolah :</b> <?= $peserta['asal_sekolah']; ?></p>
                            <p class="card-text"><b>Jenis Kelas :</b> <?= $peserta['jenis_kursus']; ?></p>
                            <p class="card-text"><b>Status :</b> <?= $peserta['status']; ?></p>
                            <p class="card-text"><b>Sisa Kelas :</b> <?= $peserta['total_kelas']; ?></p>
                            <p class="card-text"><b>No Hp : </b><?= $peserta['no_wa']; ?></p>
                            <p class="card-text"><b>Bergabung Pada : </b> <?= $peserta['created_at']; ?></p>


                            <br>
                            <a href="/Admin_dataPeserta/edit/<?= $peserta['id_peserta']; ?>" class="btn btn-warning">Edit</a>
                            <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#hapusPesertaModal">
                                Hapus
                            </a>
                            <?php
                            if ($peserta['status'] == 'aktif') {
                                echo '<a class="btn btn-success" href="#" data-toggle="modal" data-target="#cutiTrueModal">
                                Cuti
                                </a><br>';
                            } else {
                                echo '<a class="btn btn-secondary" href="#" data-toggle="modal" data-target="#cutiFalseModal">
                                Batal Cuti
                                </a><br>';
                            } ?><br>

                            <a href="/Admin_dataPeserta/">Kembali ke daftar peserta</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- hapus modal-->
<div class="modal fade" id="hapusPesertaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin menghapus peserta?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">peserta yang dihapus adalah peserta yang sudah tidak aktif atau keluar </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <form action="/Admin_dataPeserta/<?= $peserta['id_peserta']; ?>" method="POST" class="d-inline">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger"> Hapus </i></button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- cuti true modal-->
<div class="modal fade" id="cutiTrueModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">peserta tersebut cuti?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">peserta yang cuti masih bisa bergabung tanpa trial dan biaya registrasi sesuai dengan ketentuan yang berlaku </div>
            <div class="modal-footer">
                <button class="btn btn-warning" type="button" data-dismiss="modal">Cancel</button>
                <a href="/Admin_dataPeserta/cuti_true/<?= $peserta['id_peserta']; ?>" class="btn btn-success">Yes</a>
            </div>
        </div>
    </div>
</div>
<!-- cuti false modal-->
<div class="modal fade" id="cutiFalseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">peserta tersebut cuti?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">peserta yang cuti masih bisa bergabung tanpa trial dan biaya registrasi sesuai dengan ketentuan yang berlaku </div>
            <div class="modal-footer">
                <button class="btn btn-warning" type="button" data-dismiss="modal">Cancel</button>
                <a href="/Admin_dataPeserta/cuti_false/<?= $peserta['id_peserta']; ?>" class="btn btn-success">Yes</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>