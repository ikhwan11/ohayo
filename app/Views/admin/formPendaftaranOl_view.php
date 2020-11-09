<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <H1>Form Tambah Data Peserta</H1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="/Admin_tambahPeserta/simpan" method="POST">
                <div class="form-group row">
                    <div class="col-md-6">

                        <label for="">Nama</label>
                        <input type="text" class="form-control form-control-user" id="nama" name="nama" value="<?= $pendaftaran['nama']; ?>"><br>
                        <label for="">Alamat</label>
                        <input type="text" class="form-control form-control-user" id="alamat" name="alamat" value="<?= $pendaftaran['alamat']; ?>"><br>
                        <label for="">Tanggal lahir</label>
                        <input type="date" class="form-control form-control-user" id="tanggal_lahir" name="tanggal_lahir" value="<?= $pendaftaran['tanggal_lahir']; ?>"><br>

                        <label for="">Nama ibu</label>
                        <input type="text" class="form-control form-control-user" id="nama_ibu" name="nama_ibu" value="<?= $pendaftaran['nama_ibu']; ?>"><br>
                        <label for="">Nama Ayah</label>
                        <input type="text" class="form-control form-control-user" id="nama_ayah" name="nama_ayah" value="<?= $pendaftaran['nama_ayah']; ?>"><br>



                    </div>
                    <div class="col-md-6">
                        <label for="">Asal sekolah</label>
                        <input type="text" class="form-control form-control-user" id="asal_sekolah" name="asal_sekolah" value="<?= $pendaftaran['asal_sekolah']; ?>"><br>

                        <label for="">Umur</label>
                        <input type="text" class="form-control form-control-user" id="usia" name="usia" value="<?= $pendaftaran['usia']; ?>"><br>

                        <label>Jenis kelamin</label>
                        <select class="form-control" name="gender" id="gender">
                            <option value="<?= $pendaftaran['gender']; ?>"><?= $pendaftaran['gender']; ?></option>
                            <option value="">== pilih gender==</option>
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>

                        </select> <br>

                        <label for="">No hp</label>
                        <input type="text" class="form-control form-control-user" id="no_wa" name="no_wa" value="<?= $pendaftaran['no_wa']; ?>"><br>


                        <label>Jenis kursus</label>
                        <select class="form-control" name="jenis_kursus" id="jenis_kursus">
                            <option value="<?= $pendaftaran['jenis_kursus']; ?>"><?= $pendaftaran['jenis_kursus']; ?></option>
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

                <button type="submit" class="btn btn-primary btn-lg btn-block">Tambah Data</button>

            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>