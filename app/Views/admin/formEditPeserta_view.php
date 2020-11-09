<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Form Tambah Data Peserta</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="/Admin_dataPeserta/update/<?= $peserta['id_peserta']; ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="">Nama</label>
                        <input type="text" class="form-control form-control-user" id="nama" name="nama" value="<?= $peserta['nama']; ?>"><br>
                        <label for="">Alamat</label>
                        <input type="text" class="form-control form-control-user" id="alamat" name="alamat" value="<?= $peserta['alamat']; ?>"><br>
                        <label for="">Tanggal lahir</label>
                        <input type="date" class="form-control form-control-user" id="tanggal_lahir" name="tanggal_lahir" value="<?= $peserta['tanggal_lahir']; ?>"><br>

                        <label for="">Nama ibu</label>
                        <input type="text" class="form-control form-control-user" id="nama_ibu" name="nama_ibu" value="<?= $peserta['nama_ibu']; ?>"><br>
                        <label for="">Nama Ayah</label>
                        <input type="text" class="form-control form-control-user" id="nama_ayah" name="nama_ayah" value="<?= $peserta['nama_ayah']; ?>"><br>



                    </div>
                    <div class="col-md-6">
                        <label for="">Asal sekolah</label>
                        <input type="text" class="form-control form-control-user" id="asal_sekolah" name="asal_sekolah" value="<?= $peserta['asal_sekolah']; ?>"><br>

                        <label for="">Umur</label>
                        <input type="text" class="form-control form-control-user" id="usia" name="usia" value="<?= $peserta['usia']; ?>"><br>

                        <label>Jenis kelamin</label>

                        <select class="form-control" name="gender" id="gender">
                            <option value="<?= $peserta['gender']; ?>"> <?= $peserta['gender']; ?></option>
                            <option value="disable">== pilih gender==</option>
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>

                        </select> <br>

                        <label for="">No hp</label>
                        <input type="text" class="form-control form-control-user" id="no_wa" name="no_wa" value="<?= $peserta['no_wa']; ?>"><br>


                        <label>Jenis kursus</label>
                        <select class="form-control" name="jenis_kursus" id="jenis_kursus">
                            <option value="<?= $peserta['jenis_kursus']; ?>"><?= $peserta['jenis_kursus']; ?></option>
                            <option value="">== pilih kursus==</option>
                            <option value="painting">Painting Class</option>
                            <option value="manga">Manga Class</option>
                            <option value="digital art">Digital Manga Class</option>
                            <option value="crayon">Crayon Class</option>

                        </select> <br>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary btn-lg btn-block">Ubah Data</button>
            </form>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>