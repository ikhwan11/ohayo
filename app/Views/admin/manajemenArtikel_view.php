<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <?= session()->get('pesan'); ?>
    <div class="row">
        <div class="col">
            <h1>Daftar artikel</h1>
        </div>

    </div>
    <div class="row">
        <div class="col">
            <form action="" method="POST" class="form-inline">
                <div class="input-group">
                    <select class="form-control" name="keyword" id="keyword">
                        <option value="disable">Cari kategori artikel..</option>
                        <option value="Art">Art</option>
                        <option value="Painting">Painting</option>
                        <option value="Manga">Manga</option>
                        <option value="Anime">Anime</option>
                        <option value="Event">Event</option>
                        <option value="News">News</option>
                    </select> <br>
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" name="submit">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>

            <table class="table table-hover table-striped table-bordered mt-3">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Penulis</th>
                        <th>Judul Artikel</th>
                        <th>Kategori</th>
                        <th>Dibuat Pada</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <?php $no = 1 + (6 * ($currentPage - 1));
                foreach ($artikel as $a) : ?>
                    <tbody>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $a['nama_admin']; ?></td>
                            <td><?= $a['judul']; ?></td>
                            <td><?= $a['kategori']; ?></td>
                            <td><?= $a['created_at']; ?></td>
                            <td>
                                <a href="/Admin_artikel/edit/<?= $a['id_artikel']; ?>" class="btn btn-warning">Edit</a>
                                <a href="" class="btn btn-danger" data-toggle="modal" data-target="#hapusArtikelModal">Hapus</a>
                                <a href="/Admin_artikel/detail/<?= $a['id_artikel']; ?>" class="btn btn-success mt-3">Preview</a>
                            </td>
                        </tr>
                    </tbody>
                <?php endforeach; ?>
            </table>
            <?= $pager->links('artikel', 'admin_pagination'); ?>

        </div>
    </div>
    <a href="/Admin_artikel" class="btn btn-primary mb-3 mr-3">Tambah Artikel Baru</a>
</div>

<!-- hapus modal-->
<div class="modal fade" id="hapusArtikelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin menghapus artikel ini?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">artikel tidak dapat ditampilkan lagi di website </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <form action="/Admin_artikel/<?= $a['id_artikel']; ?>" method="POST" class="d-inline">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger"> Hapus </i></button>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>