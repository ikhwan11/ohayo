<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Data Peserta Event Masuk</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-hover table-striped table-bordered mt-3">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Peserta</th>
                        <th>Nama Event</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <?php $no = 1 + (5 * ($currentPage - 1));
                foreach ($peserta as $p) : ?>
                    <tbody>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $p['nama_peserta']; ?></td>
                            <td><?= $p['judul_event']; ?></td>
                            <td>
                                <a href="/Admin_acara/detail/<?= $p['id_pes']; ?>" class="btn btn-success">detail</a>
                            </td>
                        </tr>
                    </tbody>
                <?php endforeach; ?>
            </table>
            <?= $pager->links('event_peserta', 'admin_pagination'); ?>
        </div>
    </div>
    <a href="/Admin_acara/" class="btn btn-primary">Kembali data peserta</a>
</div>

<?= $this->endSection(); ?>