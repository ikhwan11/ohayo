<?= $this->extend('layout/main_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 style="color: #4dbf1c;" class="mt-3">Form Daftar Event</h1>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 detail">
            <form action="/Web_event/submit" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <div class="col">
                        <select class="form-control mt-3 mb-3 <?= ($validation->hasError('judul_event')) ? 'is-invalid' : ''; ?>" name="judul_event" id="judul_event">
                            <option value="">== pilih Event==</option>
                            <?php foreach ($event as $k) : ?>
                                <option value="<?= $k['judul_event']; ?>"><?= $k['judul_event']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="invalid-feedback">
                            <?= $validation->getError('judul_event'); ?>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col">
                        <?php if (session()->get('level') == 'peserta') { ?>
                            <label for="nama" style="color: white;">Nama</label>
                            <input type="text" id="nama" name="nama" placeholder="text here.." class="form-control" value="<?= session()->get('nama'); ?>" disabled>
                            <br>
                        <?php } else { ?>
                            <label for="nama" style="color: white;">Nama</label>
                            <input type="text" id="nama" name="nama" placeholder="text here.." class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" autofocus value="<?= old('nama'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama'); ?>
                            </div><br>
                        <?php } ?>

                        <label for="no_wa" style="color: white;">No aktif whatsapp</label>
                        <input type="text" id="no_wa" name="no_wa" placeholder="text here.." class="form-control <?= ($validation->hasError('no_wa')) ? 'is-invalid' : ''; ?>" autofocus value="<?= old('no_wa'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('no_wa'); ?>
                        </div><br>

                        <label for="usia" style="color: white;">Usia</label>
                        <input type="text" id="usia" name="usia" placeholder="text here.." class="form-control <?= ($validation->hasError('usia')) ? 'is-invalid' : ''; ?>" autofocus value="<?= old('usia'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('usia'); ?>
                        </div><br>

                        <label>Upload Bukti pembayaran</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" id="foto" name="foto" onchange="previewImg()">
                            <div class="invalid-feedback">
                                <?= $validation->getError('foto'); ?>
                            </div>
                            <label class="custom-file-label" for="foto">Pilih foto..</label>
                        </div><br>
                    </div>
                </div>

                <button type="submit" class="btn btn-warning btn-lg mt-3">Daftar Event</button><br>
                <a href="/Web_event/" class="btn btn-primary mt-3">Kembali</a>

            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>