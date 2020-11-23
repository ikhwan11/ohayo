<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Data Peserta Event</h1>
        </div>
    </div>
    <?= session()->get('pesan'); ?>
    <div class="row">
        <div class="col">
            <form action="" method="POST" class="form-inline">
                <div class="input-group">
                    <select class="form-control" name="keyword" id="keyword">
                        <option value="disable">Sorting peserta..</option>
                        <?php foreach ($judul as $p) : ?>
                            <option value="<?= $p['judul_event']; ?>"><?= $p['judul_event']; ?></option>
                        <?php endforeach; ?>
                    </select> <br>
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" name="submit">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
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
                        <th>usia</th>
                    </tr>
                </thead>
                <?php $no = 1 + (5 * ($currentPage - 1));
                foreach (Array_reverse($peserta) as $p) : ?>
                    <tbody>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $p['nama_peserta']; ?></td>
                            <td><?= $p['judul_event']; ?></td>
                            <td><?= $p['usia']; ?></td>
                        </tr>
                    </tbody>
                <?php endforeach; ?>
            </table>
            <?= $pager->links('event_pesertakonfirm', 'admin_pagination'); ?>
        </div>
    </div>
    <a href="/Admin_dashboard/" class="btn btn-primary">Kembali ke dashboard</a>
    <a href="/Admin_acara/peserta_masuk" class="btn btn-success">Peserta Event masuk</a>
    <a href="#" class="btn btn-warning">Print data peserta</a>
</div>

<?= $this->endSection(); ?>