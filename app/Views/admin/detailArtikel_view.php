<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Preview artikel</h1>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h2 style="text-align: center;"><?= $artikel['judul']; ?></h2 style="text-align: center;">
            <img src="/assets/tes_foto/1.jpg" class="img-fluid" alt="Responsive image">
        </div>

    </div>
    <div class="row">
        <div class="col-sm-4">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    Penulis : <?= $artikel['nama_admin']; ?>
                </li>
                <li class="list-group-item">
                    Kategori : <?= $artikel['kategori']; ?>
                </li>
                <li class="list-group-item">
                    Tanggal publish : <?= $artikel['created_at']; ?>
                </li>
            </ul>
        </div>
        <div class="col-sm-8">
            <label class="mt-3">Keterangan singkat :</label>
            <textarea class="form-control mt-2" id="exampleFormControlTextarea1" rows="5" readonly><?= $artikel['keterangan']; ?></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <textarea class="form-control mt-5" id="exampleFormControlTextarea1" rows="30" readonly><?= $artikel['isi']; ?></textarea>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>