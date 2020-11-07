<?= $this->extend('layout/main_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col tittle">
            <h1 class="mb-30 title_color judul">Form Pendaftaran</h1>
            <hr>
        </div>
    </div><br>
    <?= session()->get('pesan'); ?>
    <div class="row">
        <div class="col formulir">
            <form action="/Web_pendaftaran/simpan" method="POST">
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <div class="col-md-6 mt-5">
                        <label for="nama" style="color: black;">Nama</label>
                        <input type="text" id="nama" name="nama" placeholder="text here.." class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" autofocus value="<?= old('nama'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('nama'); ?>
                        </div><br>

                        <label for="gender" style="color: black;">Jenis Kelamin</label>
                        <select class="form-select <?= ($validation->hasError('gender')) ? 'custom-select' : ''; ?> " name="gender" id="gender" required value="<?= old('gender'); ?>">
                            <option value=" ">== pilih akses==</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                        <div class="invalid-feedback">
                            <?= $validation->getError('gender'); ?>
                        </div><br>

                        <label for="tanggal_lahir" style="color: black;">Tanggal Lahir</label>
                        <input type="Date" id="tanggal_lahir" name="tanggal_lahir" class="form-control <?= ($validation->hasError('tanggal_lahir')) ? 'is-invalid' : ''; ?>" value="<?= old('tanggal_lahir'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('tanggal_lahir'); ?>
                        </div><br>

                        <label for="usia" style="color: black;">Usia</label>
                        <input type="text" id="usia" name="usia" class="form-control <?= ($validation->hasError('usia')) ? 'is-invalid' : ''; ?>" value="<?= old('usia'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('usia'); ?>
                        </div><br>

                        <label for="alamat" style="color: black;">Alamat</label>
                        <input type="text" id="alamat" name="alamat" placeholder="text here.." class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" value="<?= old('alamat'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('alamat'); ?>
                        </div><br>


                    </div>

                    <div class="col-md-6 mt-5">
                        <label for="no_wa" style="color: black;">No hp</label>
                        <input type="text" id="no_wa" name="no_wa" placeholder="text here.." class="form-control <?= ($validation->hasError('no_wa')) ? 'is-invalid' : ''; ?>" value="<?= old('no_wa'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('no_wa'); ?>
                        </div><br>

                        <label for="nama_ayah" style="color: black;">Nama Ayah</label>
                        <input type="text" id="nama_ayah" name="nama_ayah" placeholder="text here.." class="form-control <?= ($validation->hasError('nama_ayah')) ? 'is-invalid' : ''; ?>" value="<?= old('nama_ayah'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('nama_ayah'); ?>
                        </div><br>

                        <label for="nama_ibu" style="color: black;">Nama Ibu</label>
                        <input type="text" id="nama_ibu" name="nama_ibu" placeholder="text here.." class="form-control <?= ($validation->hasError('nama_ibu')) ? 'is-invalid' : ''; ?>" value="<?= old('nama_ibu'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('nama_ibu'); ?>
                        </div><br>

                        <label for="asal_sekolah" style="color: black;">Asal sekolah</label>
                        <input type="text" id="asal_sekolah" name="asal_sekolah" placeholder="text here.." class="form-control <?= ($validation->hasError('asal_sekolah')) ? 'is-invalid' : ''; ?>" value="<?= old('asal_sekolah'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('asal_sekolah'); ?>
                        </div><br>

                        <label for="jenis_kursus" style="color: black;">Jenis Kursus</label>
                        <select class="form-select <?= ($validation->hasError('jenis_kursus')) ? 'custom-select' : ''; ?>" name="jenis_kursus" id="jenis_kursus" required value="<?= old('jenis_kursus'); ?>">
                            <option value=" ">== pilih kursus==</option>
                            <option value="manga">Manga</option>
                            <option value="painting">Painting</option>
                            <option value="digital art">Digital Art</option>
                            <option value="crayon">crayon</option>
                        </select>
                        <div class="invalid-feedback">
                            <?= $validation->getError('jenis_kursus'); ?>
                        </div><br>

                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <button type="submit" class="genric-btn success radius btn-lg">Daftar Kursus</button>
                </div>

        </div>
        </form>
    </div>
</div>
</div>

<?= $this->endSection(); ?>