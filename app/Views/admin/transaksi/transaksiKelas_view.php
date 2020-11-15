<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Tambah Kelas</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">

            <form action="" method="POST" class="form-inline">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Ketik nama disini..." name="keyword">
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
                        <th>Nama</th>
                        <th>Status</th>
                        <th>Sisa kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <?php foreach ($peserta as $p) : ?>
                    <tbody>
                        <tr>
                            <td><?= $p['nama']; ?></td>
                            <td><?= $p['status']; ?></td>
                            <td><?= $p['total_kelas']; ?></td>
                            <td>
                                <a href="/Admin_kelolaTransaksi/peserta_pilih/<?= $p['id_peserta']; ?>" class="btn btn-success"><i class="fas fa-check-square"> Pilih </i></a>
                            </td>
                        </tr>
                    </tbody>
                <?php endforeach; ?>
            </table>
            <?= $pager->links('peserta', 'admin_pagination'); ?>


        </div>
    </div>
</div>

<?= $this->endSection(); ?>