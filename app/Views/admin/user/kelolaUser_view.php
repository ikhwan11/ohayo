<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Data User</h1>
            <a href="/Admin_kelolaUser/tambah_user_view" class="btn btn-primary mb-3 mr-3">Tambah user</a>
            <?= session()->get('pesan'); ?>
        </div>

        <table class="table table-hover table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama User</th>
                    <th>Level User</th>
                    <th>Dibuat pada</th>
                    <th>Diubah pada</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php $no = 1 + (6 * ($currentPage - 1));;
                foreach ($users as $u) : ?>
                    <tr>
                        <td><?php
                            echo $no++; ?></td>
                        <td><?= $u['nama']; ?></td>
                        <td><?= $u['level']; ?></td>
                        <td><?= $u['created_at']; ?></td>
                        <td><?= $u['updated_at']; ?></td>
                        <td>
                            <a href="/Admin_kelolaUser/detail/<?= $u['id']; ?>" class="btn btn-success"><i class="fas fa-edit"></i> Detail User</a>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?= $pager->links('users', 'admin_pagination'); ?>

    </div>
</div>



<?= $this->endSection(); ?>