<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1><?= $users['nama']; ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="/img/user_foto/<?= $users['foto']; ?>" class="card-img" style="padding:10px;" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">

                        <p class="card-text"><b>Nama :</b> <?= $users['nama']; ?></p>
                        <p class="card-text"><b>Username :</b> <?= $users['username']; ?> </p>
                        <p class="card-text"><b>Level User:</b> <?= $users['level']; ?> </p>
                        <p class="card-text"><b>Dibuat pada :</b> <?= $users['created_at']; ?> </p>

                        <br><br>

                        <a href="/Admin_kelolaUser/edit/<?= $users['id']; ?>" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>


                        <a class="btn btn-danger mt-2" href="#" data-toggle="modal" data-target="#hapusModal">
                            <i class="fas fa-trash"></i>
                            Hapus
                        </a>
                    </div>
                    <a href="/Admin_kelolaUser/" class="btn btn-primary btn-sm mb-3">Kembali ke data user</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- hapus modal-->
<div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin menghapus user <?= $users['nama']; ?>?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">User yang dihapus tidak bisa lagi mengakses sitem </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <form action="/Admin_kelolaUser/<?= $users['id']; ?>" method="POST" class="d-inline">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger"> Hapus </i></button>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>