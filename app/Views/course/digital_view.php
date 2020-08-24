<?= $this->extend('layout/main_template'); ?>

<?= $this->section('content'); ?>
<!--================Home Banner Area =================-->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/assets/learnit_templates/img/ohayo_item/daily_art.jpg" class="tales" alt="...">
            <div class="carousel-caption">
                <h1 style="color: #EF3660 ;">Manga Digital Art Class</h1>
                <p style="color: #EF3660 ;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam alias provident repellat animi vitae eveniet vel quos dolorum! Aliquid quae qui molestias deserunt rerum praesentium quod expedita illo quam corrupti!</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/assets/learnit_templates/img/ohayo_item/daily_art.jpg" class="tales" alt="...">
            <div class="carousel-caption">
                <h1 style="color: #EF3660 ;">Digitize your character</h1>
                <p style="color: #EF3660 ;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt consectetur debitis autem sunt unde quam excepturi quaerat distinctio, id vel sit repellendus, ipsum accusantium iusto maxime eaque quisquam impedit assumenda?</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/assets/learnit_templates/img/ohayo_item/daily_art.jpg" class="tales" alt="...">
            <div class="carousel-caption">
                <h1 style="color: #EF3660 ;">Create in new ways</h1>
                <p style="color: #EF3660 ;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo eos distinctio est nesciunt! Ipsa doloremque modi dolorum a minima et impedit dicta quibusdam officia, minus doloribus quaerat ullam, ad debitis.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!--================End Home Banner Area =================-->
<!--================Course Details Area =================-->
<section class="course_details_area p_120">
    <div class="container">
        <div class="row course_details_inner">
            <div class="col-lg-8">
                <div class="c_details_img">
                    <img class="img-fluid" src="/assets/learnit_templates/img/courses/course-details.jpg" alt="">
                </div>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="kelas-tab" data-toggle="tab" href="#kelas" role="tab" aria-controls="home" aria-selected="true">Kelas Manga</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tentang-tab" data-toggle="tab" href="#tentang" role="tab" aria-controls="profile" aria-selected="false">Tentang Kursus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="equip-tab" data-toggle="tab" href="#equip" role="tab" aria-controls="contact" aria-selected="false">Drawing Equipment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="level-tab" data-toggle="tab" href="#level" role="tab" aria-controls="contact" aria-selected="false">Level</a>
                    </li>

                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade" id="kelas" role="tabpanel" aria-labelledby="kelas-tab">
                        <div class="objctive_text">
                            <p>di dalam berupa foto dan keterangan singkat</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tentang" role="tabpanel" aria-labelledby="tentang-tab">
                        <div class="objctive_text">
                            <p>tentang jenis kelas</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="equip" role="tabpanel" aria-labelledby="equip-tab">
                        <div class="objctive_text">
                            <ul class="list">
                                <li>List Alat</li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="level" role="tabpanel" aria-labelledby="level-tab">
                        <div class="objctive_text">
                            <div class="row">
                                <div class="accordion" id="accordionExample">
                                    <!-- content level -->
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left collapsed text-success" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                    Nama Level
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card-body">
                                                Perlu tabel
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="c_details_list">
                    <ul class="list">
                        <li><a href="#">Coach’s Name <span>Nama coach</span></a></li>
                        <li><a href="#">Course Fee <span>Rp 2000.000/bln</span></a></li>
                    </ul>
                    <a class="main_btn" href="#">Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Course Details Area =================-->

<?= $this->endSection(); ?>