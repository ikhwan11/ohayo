<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Form Tambah Kategori Artikel</h1>
        </div>
    </div>
    <?= session()->get('pesan'); ?>
    <div class="row">
        <div class="col-md-4">
            <form action="/Admin_kelolaWebsite/tambah_kategori_simpan" method="POST">
                <input type="text" class="form-control form-control-user <?= ($validation->hasError('nama_kategori')) ? 'is-invalid' : ''; ?>" id="nama_kategori" name="nama_kategori" value="<?= old('nama_kategori'); ?>" autofocus placeholder="Text here...">
                <div class="invalid-feedback">
                    <?= $validation->getError('nama_kategori'); ?>
                </div><br>
                <button type="submit" href="" class="btn btn-primary btn-lg ">Submit</button>
            </form>
            <a href="/Admin_kelolaWebsite/manajemen_artikel" class="btn btn-warning mt-3">
                Manajemen Artikel</a>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>