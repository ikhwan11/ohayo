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
                            <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#hapusBarangModal">
                                Hapus
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

<!-- hapus modal-->
<div class="modal fade" id="hapusBarangModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin menghapus barang ini?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">akan menghapus semua data barang atas nama <?= $b['nama_barang']; ?> </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <form action="/Admin_equipment/<?= $b['id_barang']; ?>" method="POST" class="d-inline">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger"> Hapus </i></button>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>