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
            <img src="/assets/ohayo_item/manga-1-min.jpg" class="tales" alt="...">
            <div class="carousel-caption text-left">
                <div class="col">
                    <h1>Manga Class</h1>
                </div>

                <div class="col-md-6">
                    <p>Kelas manga sangat populer dikalangan remaja, memiliki modul yang terupdate dan menarik. kreasikan imajinasimu bersama kmi dengan coach-coach yang handal dan terlatih.</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/assets/ohayo_item/manga-2-min.jpg" class="tales" alt="...">
            <div class="carousel-caption text-left">
                <div class="col">
                    <h1>Develop your imagination</h1>
                </div>

                <div class="col-md-6">
                    <p>Kembangkan imajinasimu bersama kami menjadi hal yang produktif. buat komik manga mu sendiri dimulai dari sekarang.</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/assets/ohayo_item/manga-3-min.jpg" class="tales" alt="...">
            <div class="carousel-caption text-left">
                <div class="col">
                    <h1>Let's make your own character</h1>
                </div>

                <div class="col-md-6">
                    <p>Ayo buat karakter manga mu sendiri. harumkan nama indonesia dengan membuat karakter manga mu sendiri. tunggu apalagi!</p>
                </div>
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
                    <img class="img-fluid" src="/assets/ohayo_item/manga_kursus.jpg" alt="">
                </div>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="kelas-tab" data-toggle="tab" href="#kelas" role="tab" aria-controls="home" aria-selected="true">Kelas Manga</a>
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
                            <p><?= $manga->tentang; ?></p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="equip" role="tabpanel" aria-labelledby="equip-tab">
                        <div class="objctive_text">
                            <?php foreach ($mangaa as $manga) : ?>
                                <p><?= $manga->nama_barang; ?></p>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="level" role="tabpanel" aria-labelledby="level-tab">
                        <div class="objctive_text">
                            <div class="row">
                                <div class="accordion" id="accordionExample">
                                    <!-- content level -->
                                    <div class="card">
                                        <?php foreach ($mangaaa as $manga) : ?>
                                            <div class="card-header" id="">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link btn-block text-left collapsed text-success" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                        <?= $manga->nama_level; ?>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <?= $manga->ket; ?>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
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
                        <li><a href="#">Coach’s Name <span>Ardian Putra</span></a></li>
                        <li><a href="#">Course Fee <span>Rp 2000.000/12x pert</span></a></li>
                    </ul>
                    <a class="main_btn" href="/Web_pendaftaran/">Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Course Details Area =================-->

<?= $this->endSection(); ?>