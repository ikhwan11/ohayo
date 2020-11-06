<?= $this->extend('layout/main_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col tittle">
            <h1 class="mb-30 title_color judul">Form Pendaftaran</h1>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col formulir">
            <form action="" method="POST">
                <div class="form-group row">
                    <div class="col-md-6 mt-5">
                        <label for="nama" style="color: black;">Nama</label>
                        <input type="text" name="" placeholder="text here.." required class="single-input"> <br>

                        <label for="nama" style="color: black;">jenis kelamin</label>
                        <div class="input-group">
                            <div class="form-select" id="">
                                <select>
                                    <option value="disable">== Pilih Jenis kelamin ==</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div><br>
                        <label for="nama" style="color: black;">Tanggal Lahir</label>
                        <input type="Date" name="" required class="single-input"> <br>

                        <label for="nama" style="color: black;">Alamat</label>
                        <input type="text" name="" placeholder="text here.." required class="single-input"> <br>
                        <label for="nama" style="color: black;">No whatsapp</label>
                        <input type="text" name="" placeholder="text here.." required class="single-input"> <br>
                    </div>

                    <div class="col-md-6 mt-5">
                        <label for="nama" style="color: black;">Usia</label>
                        <input type="text" name="" disabled value="" required class="single-input"> <br>
                        <label for="nama" style="color: black;">Nama Ayah</label>
                        <input type="text" name="" placeholder="text here.." required class="single-input"> <br>
                        <label for="nama" style="color: black;">Nama Ibu</label>
                        <input type="text" name="" placeholder="text here.." required class="single-input"> <br>

                        <label for="nama" style="color: black;">jenis Kursus</label>
                        <div class="input-group">
                            <div class="form-select" id="">
                                <select>
                                    <option value="disable">== Pilih Jenis kursus ==</option>
                                    <option value="painting">Painting</option>
                                    <option value="manga">Manga</option>
                                    <option value="manga digital">Manga Digital</option>
                                    <option value="crayon">Crayon</option>
                                </select>
                            </div>
                        </div><br>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="genric-btn success radius btn-lg">Daftar Kursus</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>