
            <!DOCTYPE html>
            <html lang="en">
            <head>
            <meta charset="utf-8">
                <meta content="width=device-width, initial-scale=1.0" name="viewport">
                <meta content="Free HTML Templates" name="keywords">
                <meta content="Free HTML Templates" name="description">
                <title><?=$title?></title>
                <!-- Favicon -->
                <link href="<?php echo base_url('asset/assets_user/img/favicon.ico'); ?>" rel="icon">

                <!-- Google Web Fonts -->
                <link rel="preconnect" href="https://fonts.gstatic.com">
                <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

                <!-- Icon Font Stylesheet -->
                <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

                <!-- Libraries Stylesheet -->
                <link href = "<?php echo base_url(); ?>asset/assets_user/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
                <link href = "<?php echo base_url(); ?>asset/assets_user/lib/animate/animate.min.css" rel="stylesheet">
                <link href = "<?php echo base_url(); ?>asset/assets_user/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
                <link href = "<?php echo base_url(); ?>asset/assets_user/lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

                <!-- Customized Bootstrap Stylesheet -->
                <link href = "<?php echo base_url(); ?>asset/assets_user/css/bootstrap.min.css" rel="stylesheet"> 

                <!-- Template Stylesheet -->
                <link href = "<?php echo base_url(); ?>asset/assets_user/css/style.css" rel="stylesheet"> 
                <link rel="icon" href="<?php echo base_url('asset/img/logodefault.png'); ?>" type="image/x-icon">
                <meta name="description" content="asd">

                <style>
                    .map-responsive {
                        overflow: hidden;
                        padding-bottom: 56.25%;
                        position: relative;
                        height: 0;
                    }
                
                    .map-responsive iframe {
                        left: 0;
                        top: 0;
                        height: 100%;
                        width: 100%;
                        position: absolute;
                    }
                    #carouselExampleIndicators {
                        max-width: 1600px; /* Adjust the max-width as needed */
                        margin: 0 auto; /* Center the carousel */
                    }
                    
                    .carousel-inner {
                        max-height: 500px; /* Adjust the max-height as needed */
                    }
                    
                    .carousel-inner img {
                        max-height: 100%; /* Make the images fill the carousel height */
                        object-fit: cover; /* Maintain aspect ratio and cover the carousel */
                    }
                </style>
            </head>
            <body>
                <!-- Navbar Start -->
                <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
                <a href="<?= site_url('Delivery/Delivery')?>" class="navbar-brand p-0">
                <img src="" alt="" width="30" height="40" class="d-inline-block align-text-mid">
                    DELIVERY
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="<?= site_url('Delivery/Delivery')?>" class="nav-item nav-link">Beranda</a>
                        <a href="<?=site_url('Delivery/Delivery/Tracking')?>" class="nav-item nav-link">Tracking Lokasi</a>
                        <a href="<?=site_url('Delivery/Delivery/Pendaftaran')?>" class="nav-item nav-link">Pengiriman</a>
                        <a href="<?=site_url('Delivery/Delivery/Footer')?>" class="nav-item nav-link">Kontak</a>
                        
                        
                    </div>
                    <a href="<?=site_url('Auth')?>" class="btn btn-primary py-2 px-4 ms-3">Login</a>
                </div>
                </nav>
                <!-- Navbar End -->


            