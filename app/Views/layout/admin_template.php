<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/assets/ohayo_item/Logo_Ohayo.png" type="image/png">

    <title><?= $tittle; ?></title>

    <!-- Custom fonts for this template-->
    <link href="/assets/admin_sb/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/assets/admin_sb/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <?= $this->include('layout/admin_sidebar'); ?>
    <?= $this->include('layout/admin_topbar'); ?>
    <?= $this->renderSection('content'); ?>

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Ohayo Drawing School Batam <script>
                        document.write(new Date().getFullYear());
                    </script>
            </div>
    </footer>
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Peringatan!</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Apakah anda ingin logout?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/login/keluar">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="/assets/admin_sb/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/admin_sb/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/assets/admin_sb/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/assets/admin_sb/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/assets/admin_sb/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/assets/admin_sb/js/demo/chart-area-demo.js"></script>
    <script src="/assets/admin_sb/js/demo/chart-pie-demo.js"></script>

    <script>
        function previewImg() {

            const banner = document.querySelector('#banner');
            const bannerLabel = document.querySelector('.custom-file-label');
            const imgPreview = document.querySelector('.img-preview');

            bannerLabel.textContent = banner.files[0].name;

            const filebanner = new FileReader();
            filebanner.readAsDataURL(banner.files[0]);

            filebanner.onload = function(e) {
                imgPreview.src = e.target.result;
            }

        }

        function previewImgfoto() {

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