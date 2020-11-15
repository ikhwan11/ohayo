<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Preview artikel</h1>
            <hr>
            <a href="/Admin_kelolaWebsite/manajemen_artikel" class="btn btn-primary btn-sm">
                << Kembali</a> </div> </div> <div class="row">
                    <div class="col">
                        <h2 style="text-align: center;"><?= $artikel['judul']; ?></h2 style="text-align: center;">
                        <img src="/img/banner_artikel/<?= $artikel['gambar']; ?>" class="img-fluid" alt="Responsive image">
                    </div>

        </div>
        <div class="row">
            <div class="col-sm-4">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        Penulis : <?= $artikel['nama_admin']; ?>
                    </li>
                    <li class="list-group-item">
                        Kategori : <?= $artikel['kategori']; ?>
                    </li>
                    <li class="list-group-item">
                        Tanggal publish : <?= $artikel['created_at']; ?>
                    </li>
                </ul>
            </div>
            <div class="col-sm-8">
                <label class="mt-3">Keterangan singkat :</label>
                <textarea class="form-control mt-2" id="exampleFormControlTextarea1" rows="5" readonly><?= $artikel['keterangan']; ?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <textarea class="form-control my-5" id="exampleFormControlTextarea1" rows="30" readonly><?= $artikel['isi']; ?></textarea>
            </div>
        </div>
        <a href="/Admin_kelolaWebsite/edit/<?= $artikel['id_artikel']; ?>" class="btn btn-warning btn-lg btn-block">Edit</a>
        <a href="" class="btn btn-danger btn-lg btn-block" data-toggle="modal" data-target="#hapusArtikelModal">Hapus</a>
    </div>

    <!-- hapus modal-->
    <div class="modal fade" id="hapusArtikelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin menghapus artikel tentang "<?= $artikel['judul']; ?>"?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">artikel tidak dapat ditampilkan lagi di website </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <form action="/Admin_kelolaWebsite/<?= $artikel['id_artikel']; ?>" method="POST" class="d-inline">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger"> Hapus </i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?= $this->endSection(); ?>