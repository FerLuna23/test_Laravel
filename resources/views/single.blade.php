<?php 
date_default_timezone_set("America/Mexico_City");
setlocale(LC_TIME, 'es_MX.UTF-8','esp');
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <title>NEWSROOM - Free Bootstrap Magazine Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">   

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row align-items-center py-2 px-lg-5">
            <div class="col-lg-4">
                <a href="" class="navbar-brand d-none d-lg-block">
                    <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">Prueba</span>Laravel</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0 mb-3">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">Prueba</span>Laravel</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="{{ url('/create-entries') }}" class="nav-item nav-link active">Crear entrada</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="container">
            <nav class="breadcrumb bg-transparent m-0 p-0">
                <a class="breadcrumb-item" href="{{ url('/') }}">Regresar a Inicio</a>
            </nav>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- News With Sidebar Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- News Detail Start -->
                    <div class="position-relative mb-3">
                        <img class="img-fluid w-100" src="{{ asset('img/news-700x435-1.jpg') }}" style="object-fit: cover;">
                        <div class="overlay position-relative bg-light">
                            <div class="mb-3">
                                <span style="color: red;">{{ $entry[0]['autor'] }}</span>
                                <span class="px-1">/</span>
                                <span>
                                    <?php 
                                        $marca = strtotime($entry[0]['fecha_publicacion']);
                                        echo strftime('%e de %B de %Y', $marca);
                                    ?>
                                </span>
                            </div>
                            <div>
                                <h3 class="mb-3">{{ $entry[0]['titulo'] }}</h3>
                                <p>{{ $entry[0]['contenido'] }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- News Detail End -->

                </div>

                
            </div>
        </div>
    </div>
    </div>
    <!-- News With Sidebar End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-light pt-5 px-sm-3 px-md-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="index.html" class="navbar-brand">
                    <h1 class="mb-2 mt-n2 display-5 text-uppercase"><span class="text-primary">News</span>Room</h1>
                </a>
                <p>Volup amet magna clita tempor. Tempor sea eos vero ipsum. Lorem lorem sit sed elitr sed kasd et</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-bold mb-4">Categories</h4>
                <div class="d-flex flex-wrap m-n1">
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Politics</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Corporate</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Sports</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Health</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Education</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Science</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Technology</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Foods</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Entertainment</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Travel</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Lifestyle</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-bold mb-4">Tags</h4>
                <div class="d-flex flex-wrap m-n1">
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Politics</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Corporate</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Sports</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Health</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Education</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Science</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Technology</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Foods</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Entertainment</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Travel</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Lifestyle</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-bold mb-4">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>About</a>
                    <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>Advertise</a>
                    <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>Privacy & policy</a>
                    <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>Terms & conditions</a>
                    <a class="text-secondary" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>Contact</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4 px-sm-3 px-md-5">
        <p class="m-0 text-center">
            &copy; <a class="font-weight-bold" href="#">Your Site Name</a>. All Rights Reserved. 
			
			<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
			Designed by <a class="font-weight-bold" href="https://htmlcodex.com">HTML Codex</a>
        </p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-dark back-to-top"><i class="fa fa-angle-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>