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
                    <h1 class="mb-0 bread">Detail ayam </h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section" id="page3">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2>Detail Ayam</h2>
                </div>
            </div>
            <div class="container">

                <div class="row border mb-3">
                    <div class="col-md-8">
                        <img src="/cover/{{ $posts->cover }}" class="card-img-top img-responsive" alt="...">
                    </div>
                </div>

            </div>
            <div class="container">

                <div class="row border mb-3">
                    <div class="col-md-4">

                        <img src="{{url ('cover').'/'.$item->cover}}" class="img-responsive img" alt="" srcset=""></td>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Jenis Ayam</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" disabled placeholder="{{$posts->jenis_ayam}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Kode Ayam</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" disabled placeholder="{{$posts->kode_ayam}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Berat Ayam</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" disabled placeholder="{{$posts->berat}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Usia Ayam</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" disabled placeholder="{{$posts->usia}}">
                        </div>
                    </div>
                    <br><br>
                    <div class="col-md-7 mb-3">
                        <br>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Status Ayam</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" disabled placeholder="{{$posts->status}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" disabled rows="3">{{$posts->deskripsi}}</textarea>
                        </div>
                        <div class="mb-3">
                            @foreach ($kontak as $item)
                            <a href="https://wa.me/{{($item->no_telp)}}" class="btn btn-primary">Pesan</a>
                            @endforeach
                            <a href="{{('/')}}" class="btn btn-warning">Kembali</a>
                        </div>
                        <div class="mb-3">

                        </div>
                    </div>
                </div>

            </div>

            <div class="row border mb-3">
                <h1>Detail Gambar Ayam</h1>
                @if (count($posts->images)>0)
                @foreach ($posts->images as $img)

                <div class="col-md-6 col-lg-3 col-sm-12 ftco-animate ">
                    <div class="staff">
                        <div class=" d-flex align-items-stretch">
                            <a style="width: 200px;height:200px;" href="/images/{{ $img->image }}" class="img-responsive img">
                                <img style="width: 200px;height:200px;" src="/images/{{ $img->image }}" alt="{{ $posts->title }}">
                            </a>
                        </div>
                        <!-- isi -->
                    </div>
                </div>

                @endforeach
                @endif

            </div>


        </div>
    </section>


    @endforeach