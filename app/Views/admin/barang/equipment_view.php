<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <?= session()->get('pesan'); ?>
    <div class="row">
        <div class="col">
            <h1>Data Barang</h1>
        </div>

    </div>

    <div class="row">
        <form action="" method="POST" class="form-inline">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari barang.." name="keyword">
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
                    <th>Nama Barang</th>
                    <th>Jenis Barang</th>
                    <th>Tanggal Masuk</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php $no = 1 + (5 * ($currentPage - 1));
            foreach ($barang as $b) : ?>
                <tbody>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $b['nama_barang']; ?></td>
                        <td><?= $b['jenis_barang']; ?></td>
                        <td><?= $b['created_at']; ?></td>
                        <td><?= $b['jumlah_barang']; ?></td>
                        <td>

                            <a class="btn btn-success" href="/Admin_equipment/tambah_stok_form/<?= $b['id_barang']; ?>">
                                Tambah Stok
                            </a>

                        </td>
                    </tr>
                </tbody>
            <?php endforeach; ?>
        </table>
        <?= $pager->links('barang', 'admin_pagination'); ?>

    </div>

    <a href="/Admin_equipment/tambah_stok" class="btn btn-primary mb-3 mr-3 btn-lg">Tambah Barang</a>
</div>


<?= $this->endSection(); ?>