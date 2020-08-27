<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Data Murid Ohayo Drawing School</h1>
        </div>

        <table class="table table-hover table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>disini field tabel</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <tr>

                    <td><?php $no = 1;
                        echo $no++; ?></td>
                    <td>disini isi record table</td>
                    <td>
                        <a href="" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                        <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>

        <a href="#" class="btn btn-primary mb-3 mr-3">Tambah Data Murid</a>

    </div>
</div>

<?= $this->endSection(); ?>