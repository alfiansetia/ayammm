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
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">{{$item->facebook}}</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">{{ $item->twiter }}</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">{{$item->instagram}}</i></span></a>

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
                <li class="nav-item"><a href="{{ url ('/informasi')}}" class="nav-link">Informasi</a></li>
                <li class="nav-item"><a href="{{ url ('/kontak')}}" class="nav-link">Kontak</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{url ('carolsel1').'/'.$item->carolsel1}}" class="d-block w-100" alt="{{url ('carolsel1').'/'.$item->carolsel1}}">
        </div>
        <div class="carousel-item">
            <img src="{{url ('carolsel2').'/'.$item->carolsel2}}" class="d-block w-100" alt="{{url ('carolsel2').'/'.$item->carolsel2}}">
        </div>
        <div class="carousel-item">
            <img src="{{url ('carolsel3').'/'.$item->carolsel3}}" class="d-block w-100" alt="{{url ('carolsel3').'/'.$item->carolsel3}}">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div> -->



</div>
<div class="hero-wrap js-fullheight" style="background-image: url('frontend_template/ayammm/images/ayam_wall.png');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-11 ftco-animate text-center">
                <h1 class="mb-4">Highest Quality Care For Pets You'll Love </h1>
                <p><a href="#" class="btn btn-primary mr-md-4 py-3 px-4">Learn more <span class="ion-ios-arrow-forward"></span></a></p>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section bg-light ftco-no-pt ftco-intro">
    <div class="container">
        <div class="row">
            <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
                <div class="d-block services active text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <img src="{{asset('frontend_template/ayammm')}}/images/ayam_jantan_logo.png" width="50px" alt="">
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Dog Walking</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right.</p>
                        <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
                <div class="d-block services text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <img src="{{asset('frontend_template/ayammm')}}/images/ayam_betina_logo.png" width="50px" alt="">
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Pet Daycare</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right.</p>
                        <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
                <div class="d-block services text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <img src="{{asset('frontend_template/ayammm')}}/images/anak_ayam_logo.png" width="50px" alt="">
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Pet Grooming</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right.</p>
                        <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row d-flex no-gutters">
            <div class="col-md-5 d-flex">
                <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url(frontend_template/ayammm/images/bg2.jpg);">
                </div>
            </div>

        </div>
    </div>
</section>


<section class="ftco-section" id="page3">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2>Kategori Ayam</h2>
            </div>
        </div>


        <div class="row">

            @foreach ($Post as $item)
            <div class="col-md-6 col-lg-3 col-sm-12 ftco-animate ">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <img src="{{url ('cover').'/'.$item->cover}}" class="img-responsive img" alt="" srcset=""></td>
                    </div>
                    <div class="text pt-3 px-3 pb-4 text-center">
                        <h3> Kode : {{$item->kode_ayam}}</h3>
                        <span class="position mb-2">Jenis Ayam : {{$item->jenis_ayam}}</span>
                        <div class="faded">
                            <p>Jenis Ayam : {{ $item->jenis_ayam }}</p>
                            <p>Kode Ayam : {{ $item->kode_ayam }}</p>
                            <p>Berat : {{ $item->berat }}</p>
                            <p>Status : {{ $item->status }}</p>

                            <p><a href="{{ url ('/detail/' . $item->id.'/show')}}" class="btn btn-success">Lihat Selengkapnya</a></p>
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>


<!-- end best deal -->

<section class="ftco-counter" id="section-counter">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                    <div class="text">
                        <strong class="number" data-number="50">0</strong>
                    </div>
                    <div class="text">
                        <span>Customer</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                    <div class="text">
                        <strong class="number" data-number="8500">0</strong>
                    </div>
                    <div class="text">
                        <span>Professionals</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                    <div class="text">
                        <strong class="number" data-number="20">0</strong>
                    </div>
                    <div class="text">
                        <span>Products</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                    <div class="text">
                        <strong class="number" data-number="50">0</strong>
                    </div>
                    <div class="text">
                        <span>Pets Hosted</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img" style="background-image: url('frontend_template/ayammm/images/bg2.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row d-md-flex justify-content-end">
            <div class="col-md-12 col-lg-6 half p-3 py-5 pl-lg-5 ftco-animate">
                <h2 class="mb-4">Free Consultation</h2>
                <form action="#" class="appointment">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                        <select name="" id="" class="form-control">
                                            <option value="">Select services</option>
                                            <option value="">Cat Sitting</option>
                                            <option value="">Dog Walk</option>
                                            <option value="">Pet Spa</option>
                                            <option value="">Pet Grooming</option>
                                            <option value="">Pet Daycare</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Vehicle number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="input-wrap">
                                    <div class="icon"><span class="fa fa-calendar"></span></div>
                                    <input type="text" class="form-control appointment_date" placeholder="Date">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="input-wrap">
                                    <div class="icon"><span class="fa fa-clock-o"></span></div>
                                    <input type="text" class="form-control appointment_time" placeholder="Time">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" value="Send message" class="btn btn-primary py-3 px-4">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endforeach
<script>
    var myCarousel = document.querySelector('#myCarousel')
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 100,
        wrap: false
    })
</script>