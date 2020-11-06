<!--================Header Menu Area =================-->
<header class="header_area">
    <div class="top_menu row m0">
        <div class="container">
            <div class="float-left">
                <ul class="list header_social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fa fa-deviantart"></i></a></li>
                </ul>
            </div>
            <div class="float-right">
                <a class="dn_btn" href="tel:+4400123654896">+440 012 3654 896</a>
                <a class="dn_btn" href="mailto:support@colorlib.com">ohayobatam@eduart.co.id</a>
            </div>
        </div>
    </div>
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="/cost_landing/"><img src="/assets/ohayo_item/Logo_Ohayo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="/Peserta_dashboard">Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link" href="/Peserta_galeri">My Art</a></li>
                        <li class="nav-item"><a class="nav-link" href="/Peserta_dailyActivity">My Activity</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= session()->get('nama'); ?></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="#">Setting</a>
                                <li class="nav-item"><a class="nav-link" href="login/keluar">Logout</a>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================Header Menu Area =================-->