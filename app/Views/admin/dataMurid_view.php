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
                </tr>
            </thead>

            <tbody>
                <tr>

                    <td><?php $no = 1;
                        echo $no++; ?></td>
                    <td>disini isi record table</td>
                </tr>
            </tbody>
        </table>

        <a href="#" class="btn btn-primary mb-3 mr-3">Tambah Data Murid</a>
        <a href="#" class="btn btn-warning mb-3 mr-3">Edit Data Murid</a>
        <a href="#" class="btn btn-danger mb-3">Hapus Data Murid</a>
    </div>
</div>

<?= $this->endSection(); ?>