<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Detail karya <?= $art['nama_peserta']; ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="/img/weekly_art/<?= $art['gambar']; ?>" class="card-img" style="padding:10px;" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">

                        <p class="card-text"><b>Nama :</b> <?= $art['nama_peserta']; ?></p>
                        <p class="card-text"><b>Kelas :</b> <?= $art['kelas']; ?> </p>
                        <p class="card-text"><b>Keterangan:</b> <?= $art['keterangan']; ?> </p>

                        <br><br>


                        <a class="btn btn-danger mt-2" href="#" data-toggle="modal" data-target="#hapuspost">
                            <i class="fas fa-trash"></i>
                            Hapus
                        </a>
                        <a href="/Admin_kelolaWebsite/weekly_data" class="btn btn-primary mt-2">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- hapus modal-->
<div class="modal fade" id="hapuspost" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin menghapus post?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Post dihapus tidak akan ditampilkan lagi di website </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <form action="/Admin_kelolaWebsite/delete_weekly/<?= $art['id_art']; ?>" method="POST" class="d-inline">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger"> Hapus </i></button>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>