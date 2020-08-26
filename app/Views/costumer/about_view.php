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
             <img src="/assets/ohayo_item/daily_art.jpg" class="tales" alt="...">
         </div>
         <div class="carousel-item">
             <img src="/assets/ohayo_item/daily_art.jpg" class="tales" alt="...">
         </div>
         <div class="carousel-item">
             <img src="/assets/ohayo_item/daily_art.jpg" class="tales" alt="...">
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

 <!--================About Area =================-->
 <section class="about_area p_120">
     <div class="container">
         <div class="main_title">
             <h2>Ohayo Drawing School Batam</h2>
             <p>Terima kasih telah berkunjung ke website kami. sebelum itu marilah kita mengenal ohayo lebih dalam.</p>
         </div>
         <div class="row about_inner">
             <div class="col-lg-6">
                 <div class="accordion" id="accordionExample">
                     <div class="card">
                         <div class="card-header" id="headingOne">
                             <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 Info
                                 <i class="lnr lnr-chevron-down"></i>
                                 <i class="lnr lnr-chevron-up"></i>
                             </button>
                         </div>

                         <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                             <div class="card-body">
                                 <p>Alamat : Komp Pertokoan Grand Niaga Mas Blok A No. 52, Batam Centre</p>

                                 <p>Email : Ohayobatam@gmail.com</p>

                                 <p>Telpon : 989864676544</p>

                                 <p>Wa : 76874667567467</p>
                             </div>
                         </div>
                     </div>

                     <div class="card">
                         <div class="card-header" id="headingThree">
                             <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                 Visi
                                 <i class="lnr lnr-chevron-down"></i>
                                 <i class="lnr lnr-chevron-up"></i>
                             </button>
                         </div>
                         <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                             <div class="card-body">
                                 Terwujudnya lembaga kursus melukis dengan murid yang kreatif serta berjiwa seni.
                             </div>
                         </div>
                     </div>
                     <div class="card">
                         <div class="card-header" id="headingfour">
                             <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                 Misi
                                 <i class="lnr lnr-chevron-down"></i>
                                 <i class="lnr lnr-chevron-up"></i>
                             </button>
                         </div>
                         <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                             <div class="card-body">
                                 <ol type="a">
                                     <li>Menanamkan jiwa kreatifitas yang tinggi serta meningkatkan pengetahuan tentang seni lukis.</li>
                                     <li>Meningkatkan kemampuan serta berwawasan luas.</li>
                                 </ol>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-6">
                 <div class="video_area" id="video">
                     <img class="img-fluid" src="/assets/learnit_templates/img/video-1.jpg" alt="">
                     <a class="popup-youtube" href="https://www.youtube.com/watch?v=VufDd-QL1c0">
                         <img src="img/icon/video-icon-1.png" alt="">
                     </a>
                 </div>
             </div>
         </div>
         <div class="about_details">
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
         </div>
     </div>
 </section>
 <!--================End About Area =================-->

 <?= $this->endSection(); ?>