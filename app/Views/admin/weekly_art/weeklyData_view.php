<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Daftar weekly post</h1>
        </div>
    </div>
    <a href="/Admin_kelolaWebsite/weeklyArt" class="btn btn-primary">Buat post</a>
    <?= session()->get('pesan'); ?>
    <div class="row">
        <div class="col">
            <table class="table table-hover table-striped table-bordered mt-3">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Artist</th>
                        <th>judul</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <?php $no = 1;
                foreach (array_reverse($art) as $a) : ?>
                    <tbody>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $a['nama_peserta']; ?></td>
                            <td><?= $a['judul_karya']; ?></td>
                            <td>
                                <a href="/Admin_kelolaWebsite/weekly_detail/<?= $a['id_art']; ?>" class="btn btn-warning">Detail</a>
                            </td>
                        </tr>
                    </tbody>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>