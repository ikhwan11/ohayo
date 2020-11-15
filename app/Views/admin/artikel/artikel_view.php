<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Buat Artikel Baru</h1>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <form action="/Admin_kelolaWebsite/submit" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="">Input Judul</label>
                        <input type="text" class="form-control form-control-user" id="nama_admin" name="nama_admin" placeholder="Text here..." value="<?= session()->get('nama'); ?>" hidden><br>

                        <input type="text" class="form-control form-control-user <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" value="<?= old('judul'); ?>" autofocus placeholder="Text here...">
                        <div class="invalid-feedback">
                            <?= $validation->getError('judul'); ?>
                        </div><br>

                        <label>Upload Banner</label>

                        <img src="/img/banner_artikel/default_artikel.jpg" class="img-thumbnail img-preview">

                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('banner')) ? 'is-invalid' : ''; ?>" id="banner" name="banner" onchange="previewImg()">
                            <div class="invalid-feedback">
                                <?= $validation->getError('banner'); ?>
                            </div>
                            <label class="custom-file-label" for="banner">Pilih Banner..</label>
                        </div>

                        <label class="mt-3">Kategori Artikel</label>
                        <select class="form-control" name="kategori" id="kategori">
                            <option value="">== pilih kategori Artikel==</option>
                            <option value="Art">Art</option>
                            <option value="Painting">Painting</option>
                            <option value="Manga">Manga</option>
                            <option value="Anime">Anime</option>
                            <option value="Event">Event</option>
                            <option value="News">News</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="">Input Keterangan Singkat</label>
                        <textarea name="keterangan" id="keterangan" rows="8" class="form-control form-control-user"></textarea>
                    </div>

                </div>

                <div class="form-group">
                    <div class="col">
                        <label for="">Isi artikel</label>
                        <textarea name="isi" id="isi" rows="20" class="form-control form-control-user"></textarea>
                    </div>
                </div>
                <button type="submit" href="" class="btn btn-primary btn-lg btn-block">Submit</button>
            </form>
            <a href="/Admin_kelolaWebsite/manajemen_artikel" class="btn btn-warning mt-3">
                << Manajemen Artikel</a> </div> </div> </div> <?= $this->endSection(); ?>