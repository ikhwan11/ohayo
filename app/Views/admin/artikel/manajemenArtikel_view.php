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
                        <?php foreach ($kategori as $kat) : ?>
                            <option value="<?= $kat['nama_kategori']; ?>"><?= $kat['nama_kategori']; ?></option>
                        <?php endforeach; ?>
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
                                <a href="/Admin_kelolaWebsite/detail/<?= $a['id_artikel']; ?>" class="btn btn-success mt-3">Preview</a>
                            </td>
                        </tr>
                    </tbody>
                <?php endforeach; ?>
            </table>
            <?= $pager->links('artikel', 'admin_pagination'); ?>

        </div>
    </div>
    <a href="/Admin_kelolaWebsite" class="btn btn-primary mb-3 mr-3">Tambah Artikel Baru</a>
    <a href="/Admin_kelolaWebsite/tambah_kategori" class="btn btn-success mb-3 mr-3">Tambah kategori post</a>
</div>


<?= $this->endSection(); ?>