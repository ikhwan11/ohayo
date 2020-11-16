<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Form Weekly Art Post</h1>
        </div>
    </div>
    <?= session()->get('pesan'); ?>
    <a href="/Admin_kelolaWebsite/weekly_data" class="btn btn-primary">Kembali</a>
    <div class="row">
        <div class="col">
            <form action="/Admin_kelolaWebsite/weekly_save" method="POST" enctype="multipart/form-data">

                <label class="mt-3">Nama Peserta</label>
                <input type="text" class="form-control form-control-user <?= ($validation->hasError('nama_peserta')) ? 'is-invalid' : ''; ?>" name="nama_peserta" id="nama_peserta" placeholder="Text here..." value="<?= old('nama_peserta'); ?>" autofocus>
                <div class="invalid-feedback">
                    <?= $validation->getError('nama_peserta'); ?>
                </div>
                <br>

                <label>Judul Karya</label>
                <input type="text" class="form-control form-control-user <?= ($validation->hasError('judul_karya')) ? 'is-invalid' : ''; ?>" name="judul_karya" id="judul_karya" placeholder="Text here..." value="<?= old('judul_karya'); ?>" autofocus>
                <div class="invalid-feedback">
                    <?= $validation->getError('judul_karya'); ?>
                </div>
                <br>

                <label>Umur</label>
                <input type="number" class="form-control form-control-user <?= ($validation->hasError('umur')) ? 'is-invalid' : ''; ?>" name="umur" id="umur" placeholder="Text here..." value="<?= old('umur'); ?>" autofocus>
                <div class="invalid-feedback">
                    <?= $validation->getError('umur'); ?>
                </div>
                <br>

                <label>Keterangan Karya</label>
                <textarea name="keterangan" id="keterangan" rows="10" class="form-control form-control-user"></textarea><br>

                <label>Upload Karya :</label>
                <div class="col-sm-4">
                    <img src="/img/weekly_art/weekly_default.jpg" class="img-thumbnail img-preview">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input <?= ($validation->hasError('banner')) ? 'is-invalid' : ''; ?>" id="banner" name="banner" onchange="previewImg()">
                        <div class="invalid-feedback">
                            <?= $validation->getError('banner'); ?>
                        </div>
                        <label class="custom-file-label" for="banner">Pilih karya..</label>
                    </div>
                </div>

                <button type="submit" href="" class="btn btn-primary btn-lg btn-block mt-3">Submit</button>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>