<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->

    <div class="row">
        <div class="col-md-12">

            <h1 class="display-4">Hi, <?= session()->get('nama'); ?></h1>
            <p class="lead">
                <?php date_default_timezone_set('Asia/Jakarta');
                echo "" . date('l, d-M-Y');
                ?></p>

        </div>



        <div class="col-xl-6 col-md-6 mb-6">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Peserta aktif</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_aktif; ?> orang</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-child fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-md-6 mb-6">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">total peserta cuti</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_cuti; ?> orang</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- form absensi -->
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-3">
                    <h1>Form Absensi Peserta</h1>
                    <hr>
                    <?= session()->get('pesan'); ?>
                    <form action="" method="POST" class="form-inline">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Ketik nama disini..." name="keyword">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit" name="submit">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                </div>

                <table class="table table-hover table-striped table-bordered mt-3">
                    <thead>
                        <tr>
                            <th>Nama Peserta</th>
                            <th>Kelas</th>
                            <th>Sisa kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <?php foreach ($peserta as $p) : ?>
                        <tbody>
                            <tr>
                                <td><?= $p['nama']; ?></td>
                                <td><?= $p['jenis_kursus']; ?></td>
                                <td><?= $p['total_kelas']; ?></td>
                                <td>
                                    <a href="/Admin_dashboard/absen/<?= $p['id_peserta']; ?>" class="btn btn-success btn-sm"><i class="fas fa-check-square"> Hadir </i></a>
                                </td>
                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                </table>
                <?= $pager->links('peserta', 'admin_pagination'); ?>

            </div>
        </div>
        <!-- end form absensi -->

    </div>


    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?= $this->endSection(); ?>