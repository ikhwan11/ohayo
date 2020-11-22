<?= $this->extend('layout/main_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 style="color: #4dbf1c;" class="text-center mt-3">List Event</h1>
            <hr>
        </div>
    </div>
    <?= session()->get('pesan'); ?>
    <?php foreach ($event as $e) : ?>
        <div class="row">
            <div class="col event">
                <div class="card my-3 kartu">
                    <div class="card-header">
                        <h3><?= $e['judul_event']; ?></h3>
                    </div>
                    <div class="card-body">
                        <img src="/img/banner_event/<?= $e['banner']; ?>" class="img-fluid" alt="Responsive image">
                        <h5 class="card-title mt-3">Tanggal Acara: <?= $e['tanggal_acara']; ?></h5>
                        <h5 class="card-title">Tempat : <?= $e['tempat_acara']; ?></h5>
                        <p class="card-text"><?= $e['ket']; ?></p>
                        <a class="btn btn-danger" href="/Web_event/detail/<?= $e['id_event']; ?>">Detail </a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?= $this->endSection(); ?>