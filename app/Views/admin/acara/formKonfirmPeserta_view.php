<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Konfirmasi Peserta Event</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <form action="/Admin_acara/konfirm_submit/<?= $peserta['id_pes']; ?>">
                <label for="">Nama Peserta</label>
                <input type="text" class="form-control form-control-user" id="nama_peserta" name="nama_peserta" value="<?= $peserta['nama_peserta']; ?>"><br>
                <label for="">Usia</label>
                <input type="text" class="form-control form-control-user" id="usia" name="usia" value="<?= $peserta['usia']; ?>"><br>
                <label for="">Event</label>
                <input type="text" class="form-control form-control-user" id="judul_event" name="judul_event" value="<?= $peserta['judul_event']; ?>"><br>
                <label for="">Nomor whatsapp</label>
                <input type="text" class="form-control form-control-user" id="no_wa" name="no_wa" value="<?= $peserta['no_wa']; ?>"><br>

                <button type="submit" class="btn btn-success">Konfirmasi peserta</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>