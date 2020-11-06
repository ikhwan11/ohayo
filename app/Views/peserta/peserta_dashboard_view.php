<?= $this->extend('layout/murid_template'); ?>

<?= $this->section('content'); ?>
<!--================Home Banner Area =================-->
<section class="home_banner_area">
    <div class="banner_inner d-flex align-items-center jumbotron jumbotron-murid">
        <div class="container">
            <div class="banner_content text-left">
                <h3 style="color: #EF3660 ;">hi, <?= session()->get('nama'); ?> !</h3>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6" style="color: #EF3660 ;">
                            <?php date_default_timezone_set('Asia/Jakarta');
                            echo "" . date('l, d-M-Y');
                            ?></div>
                        <div class="col-md-6"></div>
                    </div>
                </div>
                <a class="main_btn" href="#">Apa yang baru ?</a>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Blog Categorie Area =================-->
<section class="blog_categorie_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="categories_post">
                    <img src="/assets/ohayo_item/daily_art.jpg" alt="post">
                    <div class="categories_details">
                        <div class="categories_text">
                            <a href="/Peserta_galeri">
                                <h5>Art Gallery</h5>
                            </a>
                            <div class="border_line"></div>
                            <p>Karya yoshiko Hari ini</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="categories_post">
                    <img src="/assets/ohayo_item/tps_trik.jpg" alt="post">
                    <div class="categories_details">
                        <div class="categories_text">
                            <a href="/Peserta_dailyActivity">
                                <h5>Daily Activity</h5>
                            </a>
                            <div class="border_line"></div>
                            <p>Ayo intip altivitas yoshiko hari ini</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="categories_post">
                    <img src="/assets/ohayo_item/tps_trik.jpg" alt="post">
                    <div class="categories_details">
                        <div class="categories_text">
                            <a href="#">
                                <h5>Feedback</h5>
                            </a>
                            <div class="border_line"></div>
                            <p>beritahu keluhan anda kepada kami. kami siap membantu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Categorie Area =================-->


<!--================Impress Area =================-->
<section class="impress_area p_120">
    <div class="container">
        <div class="impress_inner text-center">
            <img src="/assets/ohayo_item/Logo_Ohayo.png" alt="Logo Ohayo" style="width: 300px;">
            <h2>Ohayo Drawing School Batam</h2>
        </div>
    </div>
</section>
<!--================End Impress Area =================-->
<?= $this->endSection(); ?>