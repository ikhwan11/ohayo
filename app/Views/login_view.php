<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="/assets/admin_sb/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="icon" href="/assets/ohayo_item/Logo_Ohayo.png" type="image/png">
    <!-- Custom styles for this template-->
    <link href="/assets/admin_sb/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="/assets/admin_sb/css/styles.css" rel="stylesheet">

</head>

<body class="bg-color">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9 mt-5">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-img"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <img src="/assets/ohayo_item/Logo_Ohayo.png" alt="">
                                    </div>
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 my-4">Form Login</h1>
                                    </div>
                                    <?= session()->get('pesan'); ?>
                                    <form action="/login/masuk" method="POST" class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="username" aria-describedby="" placeholder="Masukkan username...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password" placeholder="masukkan Password...">
                                        </div>

                                        <button type="submit" class="btn btn-login btn-user btn-block">Login</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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

</body>

</html>