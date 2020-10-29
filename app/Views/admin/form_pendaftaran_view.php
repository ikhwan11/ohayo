<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Form tambah peserta</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="">
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="">Nama</label>
                        <input type="text" class="form-control form-control-user" id="" placeholder="Text here..."><br>
                        <label for="">Alamat</label>
                        <input type="text" class="form-control form-control-user" id="" placeholder="Text here..."><br>
                        <label for="">Tanggal lahir</label>
                        <input type="date" class="form-control form-control-user" id="" placeholder="Text here..."><br>

                        <label for="">Nama ibu</label>
                        <input type="text" class="form-control form-control-user" id="" placeholder="Text here..."><br>
                        <label for="">Nama Ayah</label>
                        <input type="text" class="form-control form-control-user" id="" placeholder="Text here..."><br>
                        <label for="">Asal sekolah</label>
                        <input type="text" class="form-control form-control-user" id="" placeholder="Text here..."><br>

                        <label for="">Umur</label>
                        <input type="text" class="form-control form-control-user" id="" disabled value=""><br>


                    </div>
                    <div class="col-md-6">
                        <label>Jenis kelamin</label>
                        <select class="form-control" name="">
                            <option value="disable">== pilih gender==</option>
                            <option value="">Laki-Laki</option>
                            <option value="">Perempuan</option>

                        </select> <br>

                        <label for="">No hp</label>
                        <input type="text" class="form-control form-control-user" id="" placeholder="Text here..."><br>
                        <label for="">No whatsapp</label>
                        <input type="text" class="form-control form-control-user" id="" placeholder="Text here..."><br>

                        <label>Jenis kursus</label>
                        <select class="form-control" name="">
                            <option value="disable">== pilih kursus==</option>
                            <option value="">Painting Class</option>
                            <option value="">Manga Class</option>
                            <option value="">Digital Manga Class</option>
                            <option value="">Crayon Class</option>

                        </select> <br>

                        <a href="" class="btn btn-primary btn-lg">Simpan</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>