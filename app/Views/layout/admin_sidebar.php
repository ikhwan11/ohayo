<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin/admin_dashboard">
            <div class="sidebar-brand-icon">
                <img src="/assets/ohayo_item/Logo_Ohayo.png" width="80">
            </div>
            <?php if (session()->get('level') == 'owner') { ?>
                <div class="sidebar-brand-text mx-3">Owner</div>
            <?php } else { ?>
                <div class="sidebar-brand-text mx-3">Admin</div>
            <?php } ?>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="/Admin_dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <i class="fas fa-cash-register"></i>
                <span>Transaksi</span>
            </a>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="/Admin_kelolaTransaksi">Data transaksi</a>
                    <a class="collapse-item" href="/Admin_kelolaTransaksi/tambah_kelas">Tambah kelas</a>
                    <a class="collapse-item" href="/Admin_kelolaTransaksi/transaksi_lain">Transaksi lain</a>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                <i class="fas fa-child"></i>
                <span>Kelola Peserta</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="/Admin_kelolaPeserta">Data peserta</a>
                    <a class="collapse-item" href="/Admin_kelolaPeserta/pendaftaran">Pendaftaran terbaru</a>
                    <a class="collapse-item" href="/Admin_kelolaPeserta/tambah_peserta">Tambah Peserta</a>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
                <i class="fas fa-globe-asia"></i>
                <span>Kelola website</span>
            </a>
            <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="/Admin_kelolaWebsite/manajemen_artikel">Artikel</a>
                    <a class="collapse-item" href="/Admin_kelolaWebsite/event">Event</a>
                    <a class="collapse-item" href="/Admin_kelolaWebsite/weekly_data">Weekly Art</a>

                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="/Admin_acara/">
                <i class="fas fa-star"></i>
                <span>Acara</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/Admin_kelolaUser/">
                <i class="fas fa-user"></i>
                <span>Kelola User</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="/Admin_feedback/">
                <i class="fas fa-comment-alt"></i>
                <span>Feedback</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/Admin_equipment/">
                <i class="fas fa-school"></i>
                <span>Equipment</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/Admin_laporan/">
                <i class="fas fa-file-alt"></i>
                <span>Laporan Bulanan</span></a>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->