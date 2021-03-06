<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Form tambah event</h1>
        </div>
    </div>
    <a href="/Admin_kelolaWebsite/event" class="btn btn-primary mb-3"> Kembali ke daftar event</a>
    <div class="row">
        <div class="col">
            <form action="/Admin_kelolaWebsite/submit_event" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="">Judul event</label>
                        <input type="text" class="form-control form-control-user <?= ($validation->hasError('judul_event')) ? 'is-invalid' : ''; ?>" id="judul_event" name="judul_event" placeholder="Text here..." value="<?= old('judul_event'); ?>" autofocus>
                        <div class="invalid-feedback">
                            <?= $validation->getError('judul_event'); ?>
                        </div><br>

                        <label for="">Tanggal Acara</label>
                        <input type="date" class="form-control form-control-user <?= ($validation->hasError('tanggal_acara')) ? 'is-invalid' : ''; ?>" id="tanggal_acara" name="tanggal_acara" placeholder="Text here..." value="<?= old('tanggal_acara'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('tanggal_acara'); ?>
                        </div><br>

                        <label for="">Tempat Acara</label>
                        <input type="text" class="form-control form-control-user <?= ($validation->hasError('tempat_acara')) ? 'is-invalid' : ''; ?>" id="tempat_acara" name="tempat_acara" placeholder="Text here..." value="<?= old('tempat_acara'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('tempat_acara'); ?>
                        </div><br>

                        <label for="">Limit Peserta</label>
                        <input type="number" class="form-control form-control-user <?= ($validation->hasError('limit_peserta')) ? 'is-invalid' : ''; ?>" id="limit_peserta" name="limit_peserta" value="<?= old('limit_peserta'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('limit_peserta'); ?>
                        </div><br>


                        <label for="">Keterangan</label>
                        <textarea name="ket" id="ket" rows="8" class="form-control form-control-user" value="<?= old('ket'); ?>"></textarea>
                    </div>

                    <div class="col-md-6">
                        <label>Upload Banner</label>

                        <img src="/img/banner_event/default_event.jpg" class="img-thumbnail img-preview">

                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('banner')) ? 'is-invalid' : ''; ?>" id="banner" name="banner" value="<?= old('banner'); ?>" onchange="previewImg()">
                            <div class="invalid-feedback">
                                <?= $validation->getError('banner'); ?>
                            </div>
                            <label class="custom-file-label" for="banner">Pilih Banner..</label>
                        </div><br>

                        <label class="mt-3">Kategori Acara</label>
                        <select class="form-control <?= ($validation->hasError('kategori_acara')) ? 'is-invalid' : ''; ?>" name="kategori_acara" id="kategori_acara" value="<?= old('kategori_acara'); ?>">
                            <option value="">== pilih kategori acara==</option>
                            <option value="lomba">Lomba</option>
                            <option value="sosialisasi">Sosialisasi</option>
                            <option value="workshop">Workshop</option>
                            <option value="minggu kreatifitas">Minggu kreatifitas</option>
                            <option value="hari besar">Hari besar</option>
                        </select>
                        <div class="invalid-feedback">
                            <?= $validation->getError('kategori_acara'); ?>
                        </div><br>

                        <label for="">Biaya Pendaftaran</label>
                        <input type="text" class="form-control form-control-user <?= ($validation->hasError('biaya')) ? 'is-invalid' : ''; ?>" id="biaya" name="biaya" value="<?= old('biaya'); ?>" placeholder="Text here...">
                        <div class="invalid-feedback">
                            <?= $validation->getError('biaya'); ?>
                        </div><br>

                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Detail Acara</label>
                        <textarea name="detail_acara" id="detail_acara" rows="8" class="form-control form-control-user" value="<?= old('detail_acara'); ?>"></textarea><br>


                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Buat Event</button>
            </form>

        </div>

    </div>
</div>

<?= $this->endSection(); ?>