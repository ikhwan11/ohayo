<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Data Barang (Equipment)</h1>
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
                        <a href="" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>

        <a href="/admin/tambah_stok" class="btn btn-primary mb-3 mr-3 btn-lg">Tambah stok barang</a>

    </div>
</div>

<?= $this->endSection(); ?>