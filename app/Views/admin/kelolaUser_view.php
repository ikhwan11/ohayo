<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Data User</h1>
            <?= session()->get('pesan'); ?>
        </div>

        <table class="table table-hover table-striped table-bordered table-responsive">
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
                <?php $no = 1;
                foreach ($users as $u) : ?>
                    <tr>
                        <td><?php
                            echo $no++; ?></td>
                        <td><?= $u['nama']; ?></td>
                        <td><?= $u['level']; ?></td>
                        <td><?= $u['created_at']; ?></td>
                        <td><?= $u['updated_at']; ?></td>
                        <td>
                            <a href="/Admin_kelolaUser/edit/<?= $u['id']; ?>" class="btn btn-warning"><i class="fas fa-edit"> Edit</i></a>

                            <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#hapusModal">
                                <i class="fas fa-trash"></i>
                                Hapus
                            </a>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="/Admin_tambahUser" class="btn btn-primary mb-3 mr-3">Tambah user</a>

    </div>
</div>

<!-- hapus modal-->
<div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin menghapus user?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">User yang dihapus tidak bisa lagi mengakses sitem </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <form action="/Admin_kelolaUser/<?= $u['id']; ?>" method="POST" class="d-inline">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger"> Hapus </i></button>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>