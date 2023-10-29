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
                    <a href="{{ url('/') }}" class="nav-item nav-link active">Regresar</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <div class="container-fluid py-3">
        <div class="container">
            <div class="bg-light py-2 px-4 mb-3">
                <h3 class="m-0">Registrar nueva entrada</h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-form bg-light mb-3" style="padding: 30px;">
                        <div id="success"></div>
                        <form action="{{ route('register') }}" name="" id="" novalidate="novalidate" method="post">
                            {{ csrf_field() }}
                            <div class="form-row">
                                <?php $datos = session('datos'); ?>
                                @if( isset($datos) )
                                    @if( $datos->estatus != 0 )
                                        <div class="col-md-12">
                                            <div class="alert alert-success">
                                                <ul>
                                                    <li>{{ $datos->mensaje }}</li>
                                                </ul>
                                            </div>
                                        </div> 
                                    @else
                                        <div class="col-md-12">
                                            <div class="alert alert-danger">
                                            <ul>
                                                    @if( is_object($datos->mensaje) )
                                                        @foreach ($datos->mensaje as $campo => $mensajes)
                                                            @foreach ($mensajes as $mensaje)
                                                                <li>{{ $mensaje }}</li>
                                                            @endforeach
                                                        @endforeach
                                                    @else
                                                        <li>{{ $datos->mensaje }}</li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div> 
                                    @endif
                                @endif
                                <div class="col-md-12">
                                    <label for="title"><strong>Titulo</strong><b style="color: red;">*</b></label>
                                    <input type="text" class="form-control p-4" id="title" name="title" required="required"/>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-md-6">
                                    <label for="author"><strong>Autor</strong><b style="color: red;">*</b></label>
                                    <input type="text" class="form-control p-4" id="author" name="author" required="required"/>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-md-6">
                                    <label for="publication_date"><strong>Fecha de publicacion</strong><b style="color: red;">*</b></label>
                                    <input type="date" class="form-control p-4" id="publication_date" name="publication_date" required="required"/>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-md-12">
                                    <label for="content"><strong>Contenido</strong><b style="color: red;">*</b></label>
                                    <textarea class="form-control" rows="8" id="content" name="content" required="required"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-primary font-weight-semi-bold px-4" style="height: 50px;" type="submit" id="btn_guardar">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

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