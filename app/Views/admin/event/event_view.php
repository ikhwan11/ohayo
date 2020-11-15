<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <H1>Daftar Event</H1>
        </div>
    </div>
    <a href="/Admin_kelolaWebsite/buat_event" class="btn btn-primary">Buat Event Baru</a>
    <div class="row">
        <div class="col-md-4">
            <div class="card mt-3" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Judul event</h5>
                    <p class="card-text">ket</p>
                    <a href="#" class="btn btn-success mr-4">Detail Event</a>
                    <span class="badge badge-secondary">tanggal</span>
                    <span class="badge badge-success">status</span>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>