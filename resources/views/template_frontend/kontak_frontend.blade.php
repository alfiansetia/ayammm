<!DOCTYPE html>
<html lang="en">

<head>
    <title>Animal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('frontend_template/ayammm')}}/css/animate.css">

    <link rel="stylesheet" href="{{asset('frontend_template/ayammm')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('frontend_template/ayammm')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('frontend_template/ayammm')}}/css/magnific-popup.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('frontend_template/ayammm')}}/css/bootstrap-datepicker.css">
    <!-- <link rel="stylesheet" href="{{asset('frontend_template/ayammm')}}/css/lightbox.css">
    <link rel="stylesheet" href="{{asset('frontend_template/ayammm')}}/js/lightbox.js"> -->
    <link rel="stylesheet" href="{{asset('frontend_template/ayammm')}}/css/jquery.timepicker.css">
    <script type="text/javascript" src="{{asset('frontend_template/ayammm')}}/js/lightbox-plus-jquery.min.js"></script>
    <!-- lighbox2 -->
    <link href="{{asset('frontend_template/ayammm')}}/css/lightbox.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('frontend_template/ayammm')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{asset('frontend_template/ayammm')}}/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>

    @section('tittle')
    Animal
    @endsection

    @foreach ($kontak as $item)
    <div class="wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center">
                    <p class="mb-0 phone pl-md-2">
                        <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span>{{$item->no_telp}}</a>
                        <a href="#"><span class="fa fa-paper-plane mr-1"></span> {{$item->email}}</a>
                    </p>
                </div>
                <div class="col-md-6 d-flex justify-content-md-end">
                    <div class="social-media">
                        <p class="mb-0 d-flex">
                            <a href="{{$item->facebook}}" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">{{$item->facebook}}</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">{{$item->tiwter}}</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">{{$item->instagran}}</i></span></a>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="{{asset('frontend_template/ayammm')}}/images/ayam_logo.png" width="50px" alt="">&nbsp; Ayammmm</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="/" class="nav-link">Beranda</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Koleksi Ayam
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach ($kategori as $item)
                            <a class="dropdown-item" href="{{ url ("tampil/$item->id") }}">{{$item->jenis_ayam }} </a>
                            @endforeach
                            <!-- <div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Menu 3</a> -->
                        </div>
                    </li>

                    <li class="nav-item active"><a href="{{ url ('/informasi')}}" class="nav-link">Informasi</a></li>
                    <li class="nav-item"><a href="{{ url ('/kontak')}}" class="nav-link">Kontak</a></li>
                </ul>
            </div>







        </div>
    </nav> <!-- END nav -->


    <section class="hero-wrap hero-wrap-2" style="background: url('http://127.0.0.1:8000/frontend_template//ayammm/images/ayam_wall.png') ;" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-0 bread">Kontak </h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section" id="page3">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2>Kontak</h2>
                </div>
            </div>
            <section class="ftco-section bg-light">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6 text-center mb-5">
                            <h2 class="heading-section">Contact Form #03</h2>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="wrapper">
                                @foreach($kontak as $item)
                                <div class="row mb-5">
                                    <div class="col-md-3">
                                        <div class="dbox w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center">
                                                <span class="fa fa-map-marker"></span>
                                            </div>
                                            <div class="text">
                                                <p><span>Alamat:</span> {{ $item->alamat }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="dbox w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center">
                                                <span class="fa fa-phone"></span>
                                            </div>
                                            <div class="text">
                                                <p><span>Telepon:</span> <a href="tel://1234567920">{{ $item->no_telp }}</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="dbox w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center">
                                                <span class="fa fa-paper-plane"></span>
                                            </div>
                                            <div class="text">
                                                <p><span>Email:</span> <a href={{ $item->email }}">{{ $item->email }}</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="dbox w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center">
                                                <span class="fa fa-globe"></span>
                                            </div>
                                            <div class="text">
                                                <p><span>Website</span> <a href="#">yoursite.com</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <div class="row no-gutters">
                                    <div class="col-md-7">
                                        <div class="contact-wrap w-100 p-md-5 p-4">
                                            <h3 class="mb-4">Contact Us</h3>
                                            <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="label" for="name">Full Name</label>
                                                            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="label" for="email">Email Address</label>
                                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="label" for="subject">Subject</label>
                                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="label" for="#">Message</label>
                                                            <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="submit" value="Send Message" class="btn btn-primary">
                                                            <div class="submitting"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-5 d-flex align-items-stretch">
                                        <div class="info-wrap w-100 p-5 img" style="background-image: url(images/img.jpg);">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.902765941829!2d106.82503327428147!3d-6.143761360225258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5faf1d463c5%3A0xf88d17795c8b69ba!2sPT.%20Nextindo%20Global%20Solusi!5e0!3m2!1sid!2sid!4v1687166906820!5m2!1sid!2sid" width="800" height="800" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0"></iframe>


        </div>
    </section>


    @endforeach