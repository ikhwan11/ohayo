<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1><?= $peserta['nama_peserta']; ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-8">
                    <div class="card-body">

                        <p class="card-text"><b>Nama :</b> <?= $peserta['nama_peserta']; ?></p>
                        <p class="card-text"><b>Event :</b> <?= $peserta['judul_event']; ?> </p>
                        <p class="card-text"><b>Usia:</b> <?= $peserta['usia']; ?> </p>
                        <p class="card-text"><b>No whatsapp :</b> <?= $peserta['no_wa']; ?> </p>
                        <p class="card-text"><b>Bukti pembayaran : </b><a href="/Admin_acara/download/<?= $peserta['bukti']; ?>" class="btn btn-sm btn-success"><i class="fas fa-file-download"> Download </i></a></p>

                        <br><br>

                        <a href="/Admin_acara/konfirm/<?= $peserta['id_pes']; ?>" class="btn btn-warning"><i class="fas fa-edit"></i> Konfirmasi Peserta</a>
                        <a href="/Admin_acara/peserta_masuk" class="btn btn-primary btn-sm mt-3">Kembali ke data peserta masuk</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>