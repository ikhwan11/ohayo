<?= $this->extend('layout/main_template'); ?>

<?= $this->section('content'); ?>
<!--================Home Banner Area =================-->
<section class="home_banner_area">
    <div class="banner_inner d-flex align-items-center jumbotron">
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
                            <a href="#">
                                <h5>Daily Art</h5>
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
                    <article class="row blog_item">
                        <div class="col-md-3">
                            <div class="blog_info text-right">
                                <div class="post_tag">
                                    <a href="#">Painting</a>

                                </div>
                                <ul class="blog_meta list">
                                    <li><a href="#">nama admin<i class="lnr lnr-user"></i></a></li>
                                    <li><a href="#">tanggal<i class="lnr lnr-calendar-full"></i></a></li>
                                    <li><a href="#">Views<i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#">Comments<i class="lnr lnr-bubble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="blog_post">
                                <img src="/assets/learnit_templates/img/blog/main-blog/m-blog-1.jpg" alt="">
                                <div class="blog_details">
                                    <a href="single-blog.html">
                                        <h2>Judul arikel</h2>
                                    </a>
                                    <p>keterangan singkat artikel</p>
                                    <a href="single-blog.html" class="white_bg_btn">View More</a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Previous">
                                    <span aria-hidden="true">
                                        <span class="lnr lnr-chevron-left"></span>
                                    </span>
                                </a>
                            </li>
                            <li class="page-item active"><a href="#" class="page-link">01</a></li>
                            <li class="page-item"><a href="#" class="page-link">02</a></li>
                            <li class="page-item"><a href="#" class="page-link">03</a></li>
                            <li class="page-item"><a href="#" class="page-link">04</a></li>
                            <li class="page-item"><a href="#" class="page-link">09</a></li>
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Next">
                                    <span aria-hidden="true">
                                        <span class="lnr lnr-chevron-right"></span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search Posts">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
                            </span>
                        </div><!-- /input-group -->
                        <div class="br"></div>
                    </aside>

                    <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Post Catgories</h4>
                        <ul class="list cat-list">
                            <li>
                                <a href="#" class="d-flex justify-content-between">
                                    <p>Painting</p>
                                    <p>37</p>
                                </a>
                            </li>

                        </ul>
                        <div class="br"></div>
                    </aside>

                    <aside class="single-sidebar-widget tag_cloud_widget">
                        <h4 class="widget_title">Tag Clouds</h4>
                        <ul class="list">
                            <li><a href="#">Painting</a></li>
                        </ul>
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
            <div class="col-lg-9">
                <div class="grid_inner">
                    <div class="grid_item wd55">
                        <div class="courses_item">
                            <img src="/assets/ohayo_item/manga_class.jpg" alt="">
                            <div class="hover_text">
                                <a class="cat" href="#">Detail</a>
                                <a href="#">
                                    <h4>Manga Class</h4>
                                </a>
                                <ul class="list">
                                    <li><a href="/course_manga"><i class="lnr lnr-user"></i> coach name</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="grid_item wd44">
                        <div class="courses_item">
                            <img src="/assets/ohayo_item/painting_class.jpg" alt="">
                            <div class="hover_text">
                                <a class="cat" href="/course_painting">Detail</a>
                                <a href="#">
                                    <h4>Painting Class</h4>
                                </a>
                                <ul class="list">
                                    <li><a href="#"><i class="lnr lnr-user"></i> coach name</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="grid_item wd44">
                        <div class="courses_item">
                            <img src="/assets/ohayo_item/crayon_class.jpg" alt="">
                            <div class="hover_text">
                                <a class="cat" href="/course_crayon">Detail</a>
                                <a href="#">
                                    <h4>Crayon Class</h4>
                                </a>
                                <ul class="list">
                                    <li><a href="#"><i class="lnr lnr-user"></i> coach name</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="grid_item wd55">
                        <div class="courses_item">
                            <img src="/assets/ohayo_item/digitalart_class.jpg" alt="">
                            <div class="hover_text">
                                <a class="cat" href="/course_digital">Detail</a>
                                <a href="#">
                                    <h4>Manga Digital Art Class</h4>
                                </a>
                                <ul class="list">
                                    <li><a href="#"><i class="lnr lnr-user"></i> coach name</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="course_item">
                    <img src="/assets/learnit_templates/img/courses/course-3.jpg" alt="">
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
            <img src="/assets/ohayo_item/Logo_Ohayo.png" alt="Logo Ohayo" style="width: 300px;">
            <h2>Ohayo Drawing School Batam</h2>
        </div>
    </div>
</section>
<!--================End Impress Area =================-->
<?= $this->endSection(); ?>