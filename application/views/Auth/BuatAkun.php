<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=$title?></title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('asset/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('asset/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="icon" href="<?php echo base_url('asset/img/logodefault.png'); ?>" type="image/x-icon">
    <style>
        .label {
            display: inline-block;
            width: 150px; 
            font-weight: bold;
        }
        .bg-gradient-green-sea {
        background: #034419;
    
        }   
        .btn-success {
            background-color: #005700; 
            border-color: #005700; 
        }
        .btn-danger {
            background-color: #7F0000; 
            border-color: #7F0000; 
        }
    </style>
</head>

<body class="bg-gradient-green-sea">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block "><img src="<?=base_url('asset/img/logodefault.png')?>" class="img-fluid" style="width: 100%;"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <br>
                                        <br>
                                        <br>
                                        
                                        <h1 class="h4 text-gray-900 mb-4">Menu Register</h1>
                                        <?php echo $this->session->userdata("success"); ?>
                                    </div>
                                    <form class="user" method="post" action="<?=site_url('Auth/prosesLogin')?>" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="email" name="nama_pelanggan" aria-describedby="emailHelp"
                                                placeholder="Masukan Nama Lengkap" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="email" name="email" aria-describedby="emailHelp"
                                                placeholder="Masukan Email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword"  name="password" placeholder="Password" required>
                                        </div>
                                                <?php echo $this->session->userdata("error"); ?>
                                        <button type="submit" class="form-group btn btn-success btn-user btn-block">
                                            Register
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <i class="small">Sudah Punya Akun ?</i>
                                        <a class="small" href="<?=site_url('Auth/Login')?>">Login</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('asset/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('asset/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('asset/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
