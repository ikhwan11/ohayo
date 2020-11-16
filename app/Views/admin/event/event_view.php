<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <H1>Daftar Event</H1>
        </div>
    </div>
    <a href="/Admin_kelolaWebsite/buat_event" class="btn btn-primary mb-3">Buat Event Baru</a>
    <?= session()->get('pesan'); ?>

    <form action="" method="POST" class="form-inline">
        <div class="input-group">
            <input type="text" class="form-control form-control-user" name="keyword" id="keyword" placeholder="Cari event..">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit" name="submit">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>

    <div class="row">
        <?php foreach ($event as $e) : ?>
            <div class="col-md-4">
                <div class="card mt-3" style="width: 18rem;">
                    <img class="card-img-top" src="/img/banner_event/<?= $e['banner']; ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?= $e['judul_event']; ?></h5>
                        <p class="card-text"><?= $e['ket']; ?></p>
                        <a href="/Admin_kelolaWebsite/detail_event/<?= $e['id_event']; ?>" class="btn btn-info mr-4">Detail Event</a>
                        <span class="badge badge-secondary"><?= $e['tanggal_acara']; ?></span>

                        <?php
                        if ($e['status'] == 'aktif') {
                            echo '<span class="badge badge-success">aktif</span>';
                        } else {
                            echo '<span class="badge badge-danger">selesai</span>';
                        } ?>

                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection(); ?>