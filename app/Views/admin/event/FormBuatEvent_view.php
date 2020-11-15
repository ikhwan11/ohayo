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
            <form action="">
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="">Judul event</label>
                        <input type="text" class="form-control form-control-user" id="judul_event" name="judul_event" placeholder="Text here..." autofocus><br>

                        <label for="">Tanggal Acara</label>
                        <input type="date" class="form-control form-control-user" id="tanggal_acara" name="tanggal_acara" placeholder="Text here..."><br>

                        <label for="">Tempat Acara</label>
                        <input type="text" class="form-control form-control-user" id="tempat_acara" name="tempat_acara" placeholder="Text here..."><br>

                        <label for="">Limit Peserta</label>
                        <input type="number" class="form-control form-control-user" id="limit_peserta" name="limit_peserta"><br>


                        <label for="">Keterangan</label>
                        <textarea name="ket" id="ket" rows="8" class="form-control form-control-user"></textarea>
                    </div>

                    <div class="col-md-6">
                        <label>Upload Banner</label>

                        <img src="/img/banner_artikel/default_artikel.jpg" class="img-thumbnail img-preview">

                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="banner" name="banner" onchange="previewImg()">
                            <div class="invalid-feedback">
                            </div>
                            <label class="custom-file-label" for="banner">Pilih Banner..</label>
                        </div><br>

                        <label class="mt-3">Kategori Acara</label>
                        <select class="form-control" name="kategori_acara" id="kategori_acara">
                            <option value="">== pilih kategori acara==</option>
                            <option value="lomba">Lomba</option>
                            <option value="sosialisasi">Sosialisasi</option>
                            <option value="workshop">Workshop</option>
                            <option value="minggu kreatifitas">Minggu kreatifitas</option>
                            <option value="hari besar">Hari besar</option>
                        </select><br>

                        <label for="">Biaya Pendaftaran</label>
                        <input type="text" class="form-control form-control-user" id="biaya" name="biaya" placeholder="Text here..."><br>

                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Detail Acara</label>
                        <textarea name="detail_acara" id="detail_acara" rows="8" class="form-control form-control-user"></textarea><br>

                        <button type="submit" class="btn btn-primary btn-lg btn-block">Buat Event</button>
                    </div>
                </div>


            </form>
        </div>

    </div>
</div>

<?= $this->endSection(); ?>