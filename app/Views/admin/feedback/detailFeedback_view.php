<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Detail laporan dan saran <?= $feedback['nama_peserta']; ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Tanggal <?= $feedback['created_at']; ?></h4>
                <p><?= $feedback['laporan']; ?></p>
            </div>
            <a href="/Admin_feedback/" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>