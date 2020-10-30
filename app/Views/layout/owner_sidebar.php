<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin/admin_dashboard">
            <div class="sidebar-brand-icon">
                <img src="/assets/ohayo_item/Logo_Ohayo.png" width="80">
            </div>
            <div class="sidebar-brand-text mx-3">Owner</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="/owner/owner_dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <li class="nav-item">
            <a class="nav-link" href="/owner/transaksi">
                <i class="fas fa-cash-register"></i>
                <span>Data transaksi</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                <i class="fas fa-child"></i>
                <span>Kelola Peserta</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="/owner/data_peserta">Data peserta</a>
                    <a class="collapse-item" href="/owner/pendaftaran">Tambah Peserta</a>
                </div>
            </div>
        </li>


        <li class="nav-item">
            <a class="nav-link" href="/owner/kelola_user">
                <i class="fas fa-user"></i>
                <span>Kelola User</span></a>
        </li>



        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->