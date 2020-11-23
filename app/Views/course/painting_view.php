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
            <img src="/assets/ohayo_item/painting-1.jpg" class="tales" alt="...">
            <div class="carousel-caption text-left">
                <div class="col">
                    <h1>Painting Class</h1>
                </div>

                <div class="col-md-6">
                    <p>Siapa yang tidak tahu dengan painting? painting adalah seni rupa murni yang paling tua. semua orang menyukai keindahan corak warna-warni dari painting. selain itu painting juga mampu memberikan ketenangan jiwa.</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/assets/ohayo_item/painting-2.jpg" class="tales" alt="...">
            <div class="carousel-caption text-left">
                <div class="col">
                    <h1>Awaken your artistic soul</h1>
                </div>

                <div class="col-md-6">
                    <p>Setiap individu memiliki gaya dan prespektif masing-masing. kadang kita tidak menyadari bahwa dirikita memiliki potensi seni yang perlu dikembangkan.</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/assets/ohayo_item/painting-3.jpg" class="tales" alt="...">
            <div class="carousel-caption text-left">
                <div class="col">
                    <h1>Color your day</h1>
                </div>

                <div class="col-md-6">
                    <p>Jadikan harimu lebih berwarna bersama kami. dengan coach yang sudah teruji dan berpengalaman di bidang seni lukis.</p>
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
                    <img class="img-fluid" src="/assets/ohayo_item/painting_kursus.jpg" alt="">
                </div>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="kelas-tab" data-toggle="tab" href="#kelas" role="tab" aria-controls="home" aria-selected="true">Kelas <?= $painting->nama_kelas; ?></a>
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
                            <p><?= $painting->tentang; ?></p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="equip" role="tabpanel" aria-labelledby="equip-tab">
                        <div class="objctive_text">
                            <ul class="list">
                                <?php foreach ($paintingg as $paint) : ?>
                                    <li><?= $paint->nama_barang; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="level" role="tabpanel" aria-labelledby="level-tab">
                        <div class="objctive_text">
                            <div class="row">
                                <div class="accordion" id="accordionExample">
                                    <!-- content level -->
                                    <?php foreach ($paintinggg as $paint) : ?>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link btn-block text-left collapsed text-success" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                        <?= $paint->nama_level; ?>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <?= $paint->ket; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
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
                        <li><a href="#">Coach’s Name <span>Syarifudin Awal, S.Sn.</span></a></li>
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