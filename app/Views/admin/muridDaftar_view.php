<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Murid Daftar Baru</h1>
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

        <a href="/admin/admin_dashboard" class="btn btn-primary mb-3 mr-3">Kembali Ke Dashboard</a>

    </div>
</div>

<?= $this->endSection(); ?>