<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/assets/ohayo_item/Logo_Ohayo.png" type="image/png">
    <title><?= $tittle; ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/learnit_templates/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/learnit_templates/vendors/linericon/style.css">
    <link rel="stylesheet" href="/assets/learnit_templates/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/learnit_templates/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/learnit_templates/vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="/assets/learnit_templates/vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="/assets/learnit_templates/vendors/animate-css/animate.css">
    <link rel="stylesheet" href="/assets/learnit_templates/vendors/popup/magnific-popup.css">
    <!-- main css -->
    <link rel="stylesheet" href="/assets/learnit_templates/css/style.css">
    <link rel="stylesheet" href="/assets/learnit_templates/css/responsive.css">
    <link rel="stylesheet" href="/assets/my_css/styles.css">


</head>

<body>

    <?= $this->include('layout/navbar'); ?>
    <?= $this->renderSection('content'); ?>


    <!-- Logout modal-->
    <div class="modal fade" id="LogoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-success" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="/Login/keluar">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!--================ start footer Area  =================-->
    <footer class="footer-area p_120">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-3 ">
                    <div class="single-footer-widget tp_widgets">
                        <h6 class="footer_title">Quick Links</h6>
                        <ul class="list">

                            <li><a href="/Web_about">About us</a></li>
                            <li><a href="/Web_pendaftaran/">Mendaftar Kursus</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="single-footer-widget tp_widgets">
                        <h6 class="footer_title">Alamat Kami</h6>
                        <ul class="list">
                            <li>Komp. Pertokoan Grand Niaga Mas Blok A no 52</li>
                            <li>batam Centre</li>
                            <li>Telp</li>
                            <li>Whatsapp</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3"></div>

            </div>
            <div class="row footer-bottom d-flex justify-content-between align-items-center">
                <p class="col-lg-8 col-md-8 footer-text m-0">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy; Ohayo drawing school batam <script>
                        document.write(new Date().getFullYear());
                    </script>
                </p>
                <div class="col-lg-4 col-md-4 footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-deviantart"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!--================ End footer Area  =================-->






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/assets/learnit_templates/js/jquery-3.3.1.min.js"></script>
    <script src="/assets/learnit_templates/js/popper.js"></script>
    <script src="/assets/learnit_templates/js/bootstrap.min.js"></script>
    <script src="/assets/learnit_templates/js/stellar.js"></script>
    <script src="/assets/learnit_templates/vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="/assets/learnit_templates/vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="/assets/learnit_templates/vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/learnit_templates/vendors/isotope/isotope.pkgd.min.js"></script>
    <script src="/assets/learnit_templates/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="/assets/learnit_templates/vendors/popup/jquery.magnific-popup.min.js"></script>
    <script src="/assets/learnit_templates/js/jquery.ajaxchimp.min.js"></script>
    <script src="/assets/learnit_templates/vendors/counter-up/jquery.waypoints.min.js"></script>
    <script src="/assets/learnit_templates/vendors/counter-up/jquery.counterup.js"></script>
    <script src="/assets/learnit_templates/js/mail-script.js"></script>
    <script src="/assets/learnit_templates/js/theme.js"></script>
    <script>
        function previewImg() {

            const foto = document.querySelector('#foto');
            const fotoLabel = document.querySelector('.custom-file-label');
            const imgPreview = document.querySelector('.img-preview');

            fotoLabel.textContent = foto.files[0].name;

            const filefoto = new FileReader();
            filefoto.readAsDataURL(foto.files[0]);

            filefoto.onload = function(e) {
                imgPreview.src = e.target.result;
            }

        }
    </script>
</body>

</html>