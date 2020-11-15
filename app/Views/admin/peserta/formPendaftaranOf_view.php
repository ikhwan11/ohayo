<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Form Tambah Data Peserta</h1>
        </div>
    </div>
    <?= session()->get('pesan'); ?>
    <div class="row">
        <div class="col">
            <form action="/Admin_kelolaPeserta/simpan" method="POST">
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="">Nama</label>
                        <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Text here..."><br>
                        <label for="">Alamat</label>
                        <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Text here..."><br>
                        <label for="">Tanggal lahir</label>
                        <input type="date" class="form-control form-control-user" id="tanggal_lahir" name="tanggal_lahir" placeholder="Text here..."><br>

                        <label for="">Nama ibu</label>
                        <input type="text" class="form-control form-control-user" id="nama_ibu" name="nama_ibu" placeholder="Text here..."><br>
                        <label for="">Nama Ayah</label>
                        <input type="text" class="form-control form-control-user" id="nama_ayah" name="nama_ayah" placeholder="Text here..."><br>



                    </div>
                    <div class="col-md-6">
                        <label for="">Asal sekolah</label>
                        <input type="text" class="form-control form-control-user" id="asal_sekolah" name="asal_sekolah" placeholder="Text here..."><br>

                        <label for="">Umur</label>
                        <input type="text" class="form-control form-control-user" id="usia" name="usia" placeholder="Text here...">
                        <br>

                        <label>Jenis kelamin</label>
                        <select class="form-control" name="gender" id="gender">
                            <option value="disable">== pilih gender==</option>
                            <option value="">Laki-Laki</option>
                            <option value="">Perempuan</option>

                        </select> <br>

                        <label for="">No hp</label>
                        <input type="text" class="form-control form-control-user" id="no_wa" name="no_wa" placeholder="Text here..."><br>


                        <label>Jenis kursus</label>
                        <select class="form-control" name="jenis_kursus" id="jenis_kursus">
                            <option value="">== pilih kursus==</option>
                            <option value="painting">Painting Class</option>
                            <option value="manga">Manga Class</option>
                            <option value="digital art">Digital Manga Class</option>
                            <option value="crayon">Crayon Class</option>

                        </select> <br>
                    </div>
                </div>
                <label>Jenis paket kursus</label>
                <select class="form-control" name="jenis_paket" id="jenis_paket">
                    <option value="">== pilih Paket kursus==</option>
                    <option value="12">3 bulan</option>
                    <option value="24">6 bulan</option>

                </select> <br>

                <label>Biaya registrasi</label>
                <select class="form-control" name="total" id="total">
                    <option value="">== pilih Paket kursus==</option>
                    <option value="2300000">Rp. 2.300.000</option>
                    <option value="4400000">Rp. 4.400.000</option>

                </select> <br>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Tambah Data</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>