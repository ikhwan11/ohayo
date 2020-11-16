<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Detail event <?= $event['judul_event']; ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <img src="/img/banner_event/<?= $event['banner']; ?>" class="img-fluid mb-3" alt="Responsive image">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active">
                    Tempat : <?= $event['tempat_acara']; ?>
                </a>
                <a href="#" class="list-group-item list-group-item-action">Tanggal : <?= $event['tanggal_acara']; ?></a>
                <a href="#" class="list-group-item list-group-item-action">Kategori event : <?= $event['kategori_acara']; ?></a>
                <a href="#" class="list-group-item list-group-item-action">Biaya : Rp.<?= $event['biaya']; ?></a>
                <a href="#" class="list-group-item list-group-item-action disabled">Limit peserta : <?= $event['limit_peserta']; ?></a>
            </div>
        </div>
        <div class="col-md-6">
            <label for="">Keterangan Singkat : </label>
            <textarea class="form-control" id="" rows="8" readonly> <?= $event['ket']; ?></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mt-3">
            <label for="">Detail acara : </label>
            <textarea class="form-control" id="" rows="10" readonly> <?= $event['detail_acara']; ?></textarea>
        </div>
    </div>

    <a href="/Admin_kelolaWebsite/edit_event/<?= $event['id_event']; ?>" class="btn btn-warning btn-lg mt-2"> Edit</a>

    <a class="btn btn-danger btn-lg mt-2" href="#" data-toggle="modal" data-target="#hapusEventModal">Hapus </a>

    <a href="/Admin_kelolaWebsite/event" class="btn btn-primary btn-lg mt-2"> Kembali ke daftar event</a>

</div>

<!-- hapus modal-->
<div class="modal fade" id="hapusEventModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin menghapus Event ini?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Event yang dihapus sudah kadaluarsa atau sudah selesai </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <form action="/Admin_kelolaWebsite/delete_event/<?= $event['id_event']; ?>" method="POST" class="d-inline">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger"> Hapus </i></button>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>