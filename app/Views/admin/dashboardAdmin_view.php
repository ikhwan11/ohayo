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
            <div class="jumbotron">
                <h1 class="display-4">Hello, <?= session()->get('nama'); ?></h1>
                <p class="lead">
                    <?php date_default_timezone_set('Asia/Jakarta');
                    echo "" . date('l, d-M-Y');
                    ?></p>
            </div>
        </div>


        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pendapatan bulan ini</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp.600.000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-wallet fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Peserta aktif</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">65 orang</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-child fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">total peserta cuti</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">5 orang</div>

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
                <div class="col-md-6">
                    <h1>Form Absensi Murid</h1>
                    <hr>
                    <form action="">
                        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Ketik nama disini..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Nama Murid</h6>
                        </div>
                        <div class="card-body">
                            <form action="">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="">Jenis Kelas</label>
                                        <input type="text" disabled value="" class="form-control form-control-user" id="" placeholder="">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="">Sisa Kelas</label>
                                        <input type="text" disabled value="" class="form-control form-control-user" id="" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="switch-wrap d-flex justify-content-between">
                                        <div class="primary-radio">

                                            <input type="checkbox" id="default-radio">
                                            <label for="default-radio">Check kehadiran</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <a type="submit" class="btn btn-primary" href="#">Submit</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end form absensi -->

    </div>


    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?= $this->endSection(); ?>