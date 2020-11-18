<?= $this->extend('layout/main_template'); ?>

<?= $this->section('content'); ?>
<!--================Home Banner Area =================-->
<section class="home_banner_area">
    <div class="banner_inner d-flex align-items-center jumbotron jumbotron-landing">
        <div class="container">
            <div class="banner_content text-right">
                <h3 style="color: #EF3660 ;">Let's Join With us</h3>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6" style="color: #EF3660 ;">Ohayo drawing school adalah kelas kursus gambar pilihan terbaik dan sangat populer dikalangan remaja terutama dengan kelas manga, karena kelas manga memiliki modul dan materi yang ter-update. </div>
                    </div>
                </div>
                <a class="main_btn" href="#">Daftar Sekarang >></a>
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
                            <a href="/Web_weeklyArt/">
                                <h5>Weekly Art</h5>
                            </a>
                            <div class="border_line"></div>
                            <p>Karya terbaik minggu ini</p>
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
                                <h5>Tips & Trik Menggambar</h5>
                            </a>
                            <div class="border_line"></div>
                            <p>sekilas trik dan teknik menggambar</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="categories_post">
                    <img src="/assets/ohayo_item/event.jpg" alt="post">
                    <div class="categories_details">
                        <div class="categories_text">
                            <a href="#">
                                <h5>Event Ohayo</h5>
                            </a>
                            <div class="border_line"></div>
                            <p>Berita event dan acara ohayo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Categorie Area =================-->

<!--================Blog Area =================-->

<section class="blog_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog_left_sidebar">
                    <?php foreach ($artikel as $a) : ?>
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <p><?= $a['kategori']; ?></p>
                                    </div>
                                    <div class="post_tag">
                                        <p><?= $a['nama_admin']; ?></p>
                                    </div>
                                    <div class="post_tag">
                                        <p><?= $a['created_at']; ?></p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="/img/banner_artikel/<?= $a['gambar']; ?>" alt="">
                                    <div class="blog_details">
                                        <a href="single-blog.html">
                                            <h2><?= $a['judul']; ?></h2>
                                        </a>
                                        <p><?= $a['keterangan']; ?></p>
                                        <a href="" class="white_bg_btn">View More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    <?php endforeach; ?>
                    <?= $pager->links('artikel', 'web_pagination'); ?>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">

                    <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Post Catgories</h4>
                        <ul class="list cat-list">
                            <li>
                                <?php foreach ($artikel as $a) : ?>
                                    <a href="#"><?= $a['kategori']; ?></a>
                                <?php endforeach ?>
                            </li>

                        </ul>
                        <div class="br"></div>
                    </aside>

                </div>
            </div>
        </div>
    </div>
</section>

<!--================Blog Area =================-->

<!--================Courses Area =================-->
<section class="courses_area p_120">
    <div class="container">
        <div class="main_title">
            <h2>Kelas Kursus kami</h2>
            <p>Ini adalah kelas kursus di ohayo drawing school batam</p>
        </div>
        <div class="row courses_inner">
            <div class="col">
                <div class="grid_inner">
                    <div class="grid_item wd55">
                        <div class="courses_item">
                            <img src="/assets/ohayo_item/manga_class.jpg" alt="">
                            <div class="hover_text">
                                <a class="cat" href="/Web_courseManga">Detail</a>
                                <a href="#">
                                    <h4>Manga Class</h4>
                                </a>
                                <ul class="list">
                                    <li><a href="#"><i class="lnr lnr-user"></i> coach name</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="grid_item wd44">
                        <div class="courses_item">
                            <img src="/assets/ohayo_item/painting_class.jpg" alt="">
                            <div class="hover_text">
                                <a class="cat" href="/Web_coursePainting">Detail</a>
                                <a href="#">
                                    <h4>Painting Class</h4>
                                </a>
                                <ul class="list">
                                    <li><a href="#"><i class="lnr lnr-user"></i> coach name</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="grid_item wd55">
                        <div class="courses_item">
                            <img src="/assets/ohayo_item/crayon.jpg" alt="">
                            <div class="hover_text">
                                <a class="cat" href="/Web_courseCrayon">Detail</a>
                                <a href="#">
                                    <h4>Crayon Class</h4>
                                </a>
                                <ul class="list">
                                    <li><a href="#"><i class="lnr lnr-user"></i> coach name</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="grid_item wd44">
                        <div class="courses_item">
                            <img src="/assets/ohayo_item/digitalart_class.jpg" alt="">
                            <div class="hover_text">
                                <a class="cat" href="/Web_courseDigital">Detail</a>
                                <a href="#">
                                    <h4>Digital Art Class</h4>
                                </a>
                                <ul class="list">
                                    <li><a href="#"><i class="lnr lnr-user"></i> coach name</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Courses Area =================-->

<!--================Impress Area =================-->
<section class="impress_area p_120">
    <div class="container">
        <div class="impress_inner text-center">
            <h2>Ohayo Drawing School Batam</h2>
        </div>
    </div>
</section>
<!--================End Impress Area =================-->
<?= $this->endSection(); ?>