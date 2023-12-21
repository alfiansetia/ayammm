<div class="wrap">
    <div class="container">
        <div class="row">

            <div class="col-md-6 d-flex align-items-center">
                <p class="mb-0 phone pl-md-2">
                    @foreach($kontak as $item)
                    <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span>{{$item->no_telp}}</a>
                    <a href="#"><span class="fa fa-paper-plane mr-1"></span> {{$item->email}}</a>
                    @endforeach
                </p>
            </div>

            <div class="col-md-6 d-flex justify-content-md-end">
                <div class="social-media">
                    <p class="mb-0 d-flex">
                        <a href="{{$item->facebook}}" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">facebook</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="{{asset('frontend_template/ayammm/images/ayam_logo.png')}}" width="50px" alt="">Ayammmm</a></a>
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
                <li class="nav-item"><a href="{{url('/informasi')}}" class="nav-link">Infomasi</a></li>
                <li class="nav-item"><a href="{{ url ('/kontak')}}" class="nav-link">Kontak</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
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
<section class="ftco-section bg-light ftco-no-pt ftco-intro" id="page1">
    <div class="container">
        <div class="row">
            <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
                <div class="d-block services  text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <img src="{{asset ('frontend_template/ayammm/images/ayam_jantan_logo.png') }}" width="50px" alt="">
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Ayam Jantan</h3>
                        <p>About for ayam jantan, Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam ullam omnis quia asperiores nobis autem consectetur sed dolor, voluptatum quaerat obcaecati dignissimos nulla. Accusamus commodi, consequatur esse animi similique earum.</p>
                        <a href="#page2" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-down"></span><i class="sr-only">Read more</i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
                <div class="d-block services text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <img src="{{asset ('frontend_template/ayammm/images/ayam_betina_logo.png')}}" width="50px" alt="">
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Ayam Betina</h3>
                        <p>About for ayam betina, Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam ullam omnis quia asperiores nobis autem consectetur sed dolor, voluptatum quaerat obcaecati dignissimos nulla. Accusamus commodi, consequatur esse animi similique earum.</p>
                        <a href="#page3" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-down"></span><i class="sr-only">Read more</i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
                <div class="d-block services text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <img src="{{asset ('frontend_template/ayammm/images/anak_ayam_logo.png')}}" width="50px" alt="">
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Anakan</h3>
                        <p>About for anak ayam, Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam ullam omnis quia asperiores nobis autem consectetur sed dolor, voluptatum quaerat obcaecati dignissimos nulla. Accusamus commodi, consequatur esse animi similique earum.</p>
                        <a href="#page4" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-down "></span><i class="sr-only">Read more</i></a>
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
                <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url(frontend_template/ayammm/images/33.png);">
                </div>
            </div>
            <div class="col-md-7 pl-md-5 py-md-5">
                <div class="heading-section pt-md-5">
                    <h2 class="mb-4">Why Choose Us?</h2>
                </div>
                <div class="row">
                    <div class="col-md-6 services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-stethoscope"></span></div>
                        <div class="text pl-3">
                            <h4>Care Advices</h4>
                            <p>Far far away, behind the word mountains, far from the countries.</p>
                        </div>
                    </div>
                    <div class="col-md-6 services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-customer-service"></span></div>
                        <div class="text pl-3">
                            <h4>Customer Supports</h4>
                            <p>Far far away, behind the word mountains, far from the countries.</p>
                        </div>
                    </div>
                    <div class="col-md-6 services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-emergency-call"></span></div>
                        <div class="text pl-3">
                            <h4>Emergency Services</h4>
                            <p>Far far away, behind the word mountains, far from the countries.</p>
                        </div>
                    </div>
                    <div class="col-md-6 services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-veterinarian"></span></div>
                        <div class="text pl-3">
                            <h4>Veterinary Help</h4>
                            <p>Far far away, behind the word mountains, far from the countries.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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

<section class="ftco-section bg-light ftco-faqs">

</section>

<section class="ftco-section testimony-section" style="background-image: url('frontend_template/ayammm/images/ayam_betina.png');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2>Partner And Clients &amp; Feedbacks</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    @foreach($client as $item)
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                            <div class="text">
                                <p class="mb-4">{{ $item->komen }}</p>
                                <div class="d-flex align-items-center">
                                    @if ($item->foto)
                                    <div class="user-img">
                                        <img src="{{url ('foto').'/'.$item->foto}}" />
                                    </div>
                                    @endif

                                    <div class="pl-3">
                                        <p class="name">{{ $item->nama }}</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2>Koleksi Ayam</h2>
            </div>
        </div>
        <div class="row">
            @foreach($post as $item)
            <div class="col-md-3  ftco-animate">
                <div class="block-7">
                    <img src="cover/{{ $item->cover }}" class="img-responsive img" alt="" srcset=""></td>

                    <div class="text-center p-4">
                        <span class="excerpt d-block">{{ $item->jenis_ayam }}</span>
                        <span class="price"><sup></sup> <span class="number">{{ $item->kode_ayam }} </span> <sub>Kode</sub></span>

                        <ul class="pricing-text mb-5">
                            <li><span class="fa fa-check mr-2"></span>Berat : {{ $item->berat }}</li>
                            <li><span class="fa fa-check mr-2"></span>Status : {{ $item->status }}</li>
                            <li><span class="fa fa-check mr-2"></span>Usia : {{ $item->usia }}</li>
                            <li><span class="fa fa-check mr-2"></span>Kategori : {{ $item->jenis_ayam }}</li>
                        </ul>

                        <a href="{{ url ('/detail/' . $item->id.'/show')}}" class="btn btn-primary d-block px-2 py-3">Lihat Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center">
            {{ $post->links('vendor.pagination.pagination_view') }}
        </div>


    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2>Pets Gallery</h2>
            </div>
        </div>

        <div class="row">
            @foreach($postGaleri as $item)
            <div class="col-md-3  ftco-animate">
                <div class="block-7 ">
                    <div class="work mb-4 img d-flex align-items-end">

                        <img src="cover/{{ $item->cover }}" class=" justify-content-center align-items-center img" alt="" srcset=""></td>
                        <a href="cover/{{ $item->cover }}" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>

                        <div class="desc w-100 px-4">
                            <div class="text w-100 mb-3">
                                <span>Dog</span>
                                <h2><a href="work-single.html">Pomeranian</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <!-- <div class="col-md-4 ftco-animate">
                <div class="work mb-4 img d-flex align-items-end" style="background-image: url(frontend_template/ayammm/images/gallery-2.jpg);">
                    <a href="frontend_template/ayammm/images/gallery-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="fa fa-expand"></span>
                    </a>
                    <div class="desc w-100 px-4">
                        <div class="text w-100 mb-3">
                            <span>Dog</span>
                            <h2><a href="work-single.html">Pomeranian</a></h2>
                        </div>
                    </div>
                </div>
            </div> -->

        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2>Infomasi Dan Berita</h2>
            </div>
        </div>
        <div class="row d-flex">
            @foreach($berita as $item)
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <img style="width: 200px; height:200px " src="berita/{{ $item->foto }}" class="img-responsive img text-center" alt="" srcset=""></td>
                    </a>
                    <div class="text p-4">
                        <div class="meta mb-2">
                            <div><a href="#">{{ $item->tanggal }}</a></div>
                            <div><a href="#">{{ $item->user }}</a></div>
                            <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                        </div>
                        <h3 class="heading limited-text2"><a href="{{ url ('/showBerita/' . $item->id.'/showBerita')}}">{{ $item->isi }} baca selengkapnya</a></h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img" style="background-image: url(frontend_template/ayammm/images/ayam_wall.png);">
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