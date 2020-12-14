<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Filter Laporan</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <form action="/Admin_laporan/filter_laporan_aksi" method="POST">
                <div class="form-group">
                    <label for="">Dari tanggal :</label>
                    <input type="date" class="form-control form-control-user <?= ($validation->hasError('dari')) ? 'is-invalid' : ''; ?>" id="dari" name="dari">
                    <div class="invalid-feedback">
                        <?= $validation->getError('dari'); ?>
                    </div><br>
                    <label for="">sampai tanggal :</label>
                    <input type="date" class="form-control form-control-user <?= ($validation->hasError('sampai')) ? 'is-invalid' : ''; ?>" id="sampai" name="sampai">
                    <div class="invalid-feedback">
                        <?= $validation->getError('sampai'); ?>
                    </div><br>
                </div>
                <button type="submit" class="btn btn-success">Filter data</button>
            </form>
            <a href="/Admin_dashboard/" class="btn btn-primary mt-3">Kembali</a>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>