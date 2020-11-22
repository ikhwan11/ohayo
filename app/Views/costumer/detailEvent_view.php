<?= $this->extend('layout/main_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 style="color: #4dbf1c;" class="text-center mt-3"><?= $event['judul_event']; ?></h1>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="jumbotron jumbotron-fluid" style="background-image: url(/img/banner_event/<?= $event['banner']; ?>); height : 200px;">
                <div class="container">
                    <p class="kata"><?= $event['ket']; ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col detail">
            <p>Detail Acara : <br><?= $event['detail_acara']; ?></p>
            <br>
            <div class="col-md-6">
                <ul class="list-group list-group-flush ket">
                    <li class="list-group-item">Tempat : <?= $event['tempat_acara']; ?></li>
                    <li class="list-group-item">Tanggal : <?= $event['tanggal_acara']; ?></li>
                    <li class="list-group-item">Biaya pendaftaran : Rp. <?= $event['biaya']; ?></li>
                    <li class="list-group-item">Limit Peserta : <?= $event['limit_peserta']; ?></li>
                    <li class="list-group-item">Status Event : <?php if ($event['status'] == 'aktif') {
                                                                ?>
                            <span class="badge badge-success"><?= $event['status']; ?></span>
                        <?php } else { ?>
                            <span class="badge badge-danger"><?= $event['status']; ?></span>
                        <?php } ?></li>
                </ul>
                <?php if ($event['status'] == 'aktif') { ?>
                    <a href="/Web_event/daftar_event" class="btn btn-warning btn-lg">Daftar Event</a>
                <?php } else { ?>
                    <a href="#" class="btn btn-secondary btn-lg">Event selesai</a>
                <?php } ?>
                <br>
                <a href="/Web_event/" class="btn btn-primary mt-3">Kembali</a>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>