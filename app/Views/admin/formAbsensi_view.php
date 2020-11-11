<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Form Absensi Peserta Kursus</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="/Admin_dashboard/absen_update/<?= $peserta['id_peserta']; ?>" method="POST">
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="">Nama</label>
                        <input type="text" class="form-control form-control-user" id="nama" name="nama" readonly value="<?= $peserta['nama']; ?>"><br>

                        <label for="">Kursus</label>
                        <input type="text" class="form-control form-control-user" id="jenis_kursus" name="jenis_kursus" readonly value="<?= $peserta['jenis_kursus']; ?>"><br>

                        <label for="">Sisa Kelas</label>
                        <input type="text" class="form-control form-control-user" id="total_kelas" name="total_kelas" readonly value="<?= $peserta['total_kelas']; ?>"><br>
                    </div>
                </div>
                <button type="submit" class="btn btn-success btn-lg">Check Kehadiran</button>

            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>