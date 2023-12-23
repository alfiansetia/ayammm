@extends('layouts_frontend.template')

@section('content')
    <main id="MainContent" class="content-for-layout">
        <!-- slideshow start -->
        <div class="slideshow-section position-relative">
            <div class="slideshow-active activate-slider"
                data-slick='{
                    "slidesToShow": 1, 
                    "slidesToScroll": 1, 
                    "dots": true,
                    "arrows": true,
                    "responsive": [
                        {
                        "breakpoint": 768,
                        "settings": {
                            "arrows": false
                        }
                        }
                    ]
                }'>
                <div class="slide-item slide-item-bag position-relative">
                    <img style="width: 1600px;" class="slide-img d-none d-md-block"
                        src="{{ asset('frontend_template/landingPage') }}/assets/img/banner/4.jpg" alt="slide-1">
                    <img style="width: 1600px;" class="slide-img d-md-none"
                        src="{{ asset('frontend_template/landingPage') }}/assets/img/banner/4.jpg" alt="slide-1">
                    <div class="content-absolute content-slide">
                        <div class="container height-inherit d-flex align-items-center">
                            <div class="content-box slide-content py-4">
                                <h2 class="slide-heading heading_72 animate__animated animate__fadeInUp"
                                    data-animation="animate__animated animate__fadeInUp">
                                    AYAM PENJANTAN
                                </h2>
                                <p class="slide-subheading heading_18 animate__animated animate__fadeInUp"
                                    data-animation="animate__animated animate__fadeInUp">
                                    Look for your inspiration here
                                </p>
                                <a class="btn-primary slide-btn animate__animated animate__fadeInUp"
                                    href="{{ url('/koleksi') }}   "
                                    data-animation="animate__animated animate__fadeInUp">SHOP
                                    NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-item slide-item-bag position-relative">
                    <img style="width: 1600px;" class="slide-img d-none d-md-block"
                        src="{{ asset('frontend_template/landingPage') }}/assets/img/slideshow/ayam_betina.png"
                        alt="slide-2">
                    <img style="width: 1600px;" class="slide-img d-md-none"
                        src="{{ asset('frontend_template/landingPage') }}/assets/img/slideshow/ayam_betina.png"
                        alt="slide-2">
                    <div class="content-absolute content-slide">
                        <div class="container height-inherit d-flex align-items-center">
                            <div class="content-box slide-content py-4">
                                <h2 class="slide-heading heading_72 animate__animated animate__fadeInUp"
                                    data-animation="animate__animated animate__fadeInUp">
                                    AYAM BETINA
                                </h2>
                                <p class="slide-subheading heading_18 animate__animated animate__fadeInUp"
                                    data-animation="animate__animated animate__fadeInUp">
                                    Look for your inspiration here
                                </p>
                                <a class="btn-primary slide-btn animate__animated animate__fadeInUp"
                                    href="{{ url('/koleksi') }} " data-animation="animate__animated animate__fadeInUp">SHOP
                                    NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-item slide-item-bag position-relative">
                    <img style="width: 1600px;" class="slide-img d-none d-md-block"
                        src="{{ asset('frontend_template/landingPage') }}/assets/img/banner/2.jpeg" alt="slide-3">
                    <img style="width: 1600px;" class="slide-img d-md-none"
                        src="{{ asset('frontend_template/landingPage') }}/assets/img/banner/2.jpeg" alt="slide-3">
                    <div class="content-absolute content-slide">
                        <div class="container height-inherit d-flex align-items-center">
                            <div class="content-box slide-content py-4">
                                <h2 class="slide-heading heading_72 animate__animated animate__fadeInUp"
                                    data-animation="animate__animated animate__fadeInUp">
                                    ANAK AYAM
                                </h2>
                                <p class="slide-subheading heading_18 animate__animated animate__fadeInUp"
                                    data-animation="animate__animated animate__fadeInUp">
                                    Look for your inspiration here
                                </p>
                                <a class="btn-primary slide-btn animate__animated animate__fadeInUp"
                                    href="{{ url('/koleksi') }} " data-animation="animate__animated animate__fadeInUp">SHOP
                                    NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="activate-arrows"></div>
            <div class="activate-dots dot-tools"></div>
        </div>
        <!-- slideshow end -->

        <!-- trusted badge start -->
        <div class="trusted-section mt-100 overflow-hidden">
            <div class="trusted-section-inner">
                <div class="container">
                    <div class="row justify-content-center trusted-row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="trusted-badge bg-trust-1 rounded">
                                <div class="trusted-icon">
                                    <img class="icon-trusted"
                                        src="{{ asset('frontend_template/landingPage') }}/assets/img/trusted/1.png"
                                        alt="icon-1">
                                </div>
                                <div class="trusted-content">
                                    <h2 class="heading_18 trusted-heading">Free Shipping & Return</h2>
                                    <p class="text_16 trusted-subheading trusted-subheading-2">On all order over
                                        $99.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="trusted-badge bg-trust-2 rounded">
                                <div class="trusted-icon">
                                    <img class="icon-trusted"
                                        src="{{ asset('frontend_template/landingPage') }}/assets/img/trusted/2.png"
                                        alt="icon-2">
                                </div>
                                <div class="trusted-content">
                                    <h2 class="heading_18 trusted-heading">Customer Support 24/7</h2>
                                    <p class="text_16 trusted-subheading trusted-subheading-2">Instant access to
                                        support</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="trusted-badge bg-trust-3 rounded">
                                <div class="trusted-icon">
                                    <img class="icon-trusted"
                                        src="{{ asset('frontend_template/landingPage') }}/assets/img/trusted/3.png"
                                        alt="icon-3">
                                </div>
                                <div class="trusted-content">
                                    <h2 class="heading_18 trusted-heading">100% Secure Payment</h2>
                                    <p class="text_16 trusted-subheading trusted-subheading-2">We ensure secure
                                        payment!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- trusted badge end -->

        @include('frontend.partial.ayam_populer')

        <!-- single banner start -->
        <div class="single-banner-section mt-100 overflow-hidden">
            <div class="position-relative overlay">
                <img style="height:800px ;" class="single-banner-img"
                    src="{{ asset('frontend_template/landingPage') }}/assets/img/banner/12.jpg" alt="slide-1">

                <div class="content-absolute content-slide">
                    <div class="container height-inherit d-flex align-items-center">
                        <div class="content-box single-banner-content py-4">
                            <h2 class="single-banner-heading heading_42 text-white animate__animated animate__fadeInUp"
                                data-animation="animate__animated animate__fadeInUp">
                                Cari Ayam Favoritmu di Apps Ini
                            </h2>
                            <p class="single-banner-text text_16 text-white animate__animated animate__fadeInUp"
                                data-animation="animate__animated animate__fadeInUp">
                                Keamanan pembayaran terpsercaya, aman dan terjamin kualitas
                            </p>
                            <a class="btn-primary single-banner-btn animate__animated animate__fadeInUp"
                                href="{{ url('/koleksi') }}" data-animation="animate__animated animate__fadeInUp">
                                SHOP NOW
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- single banner end -->

        @include('frontend.partial.berita')

        <!-- newsletter start -->
        <div class="newsletter-section mt-100 overflow-hidden">
            <div class="newsletter-inner">
                <div class="position-relative">
                    <img class="single-banner-img"
                        src="{{ asset('frontend_template/landingPage') }}/assets/img/newsletter/2.jpg" alt="slide-1">

                    <div class="content-absolute">
                        <div class="container height-inherit d-flex align-items-center justify-content-center">
                            <div class="content-box py-4">
                                <div class="newsletter-content newsletter-content-2 text-center">
                                    <div class="newsletter-header">
                                        <p class="newsletter-subheading heading_24">News Letter</p>
                                        <h2 class="newsletter-heading heading_42">Subscribe to our newsletter</h2>
                                    </div>
                                    <div class="newsletter-form-wrapper">
                                        <form action="#" class="newsletter-form d-flex align-items-center rounded">
                                            <input class="newsletter-input bg-transparent border-0" type="email"
                                                placeholder="Enter your e-mail" autocomplete="off">
                                            <button class="newsletter-btn rounded" type="submit">
                                                <svg width="17" height="14" viewBox="0 0 17 14" fill="#fff"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.11539 -0.000488604L7.50417 1.99951L11.5769 5.59951L0.500001 5.59951L0.500001 8.19951L11.7049 8.19951L7.50417 11.4995L8.70513 13.9995L16.5 7.19951L9.11539 -0.000488604Z"
                                                        fill="#FEFEFE" />
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- newsletter end -->

        <!-- brand logo start -->
        <div class="brand-logo-section mt-100">
            <div class="brand-logo-inner">
                <div class="container">
                    <div class="brand-logo-container overflow-hidden">
                        <div class="scroll-horizontal row align-items-center flex-nowrap">
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up"
                                data-aos-duration="700">
                                <a href="index-shoe.html"
                                    class="brand-logo d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('frontend_template/landingPage') }}/assets/img/brand/1.png"
                                        alt="img">
                                </a>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up"
                                data-aos-duration="700">
                                <a href="index-shoe.html"
                                    class="brand-logo d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('frontend_template/landingPage') }}/assets/img/brand/2.png"
                                        alt="img">
                                </a>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up"
                                data-aos-duration="700">
                                <a href="index-shoe.html"
                                    class="brand-logo d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('frontend_template/landingPage') }}/assets/img/brand/3.png"
                                        alt="img">
                                </a>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up"
                                data-aos-duration="700">
                                <a href="index-shoe.html"
                                    class="brand-logo d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('frontend_template/landingPage') }}/assets/img/brand/4.png"
                                        alt="img">
                                </a>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up"
                                data-aos-duration="700">
                                <a href="index-shoe.html"
                                    class="brand-logo d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('frontend_template/landingPage') }}/assets/img/brand/5.png"
                                        alt="img">
                                </a>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up"
                                data-aos-duration="700">
                                <a href="index-shoe.html"
                                    class="brand-logo d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('frontend_template/landingPage') }}/assets/img/brand/6.png"
                                        alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand logo end -->
    </main>
@endsection

@push('js')
    <!-- all js -->
    <script src="{{ asset('frontend_template/landingPage') }}/assets/js/vendor.js"></script>
    <script src="{{ asset('frontend_template/landingPage') }}/assets/js/main.js"></script>
@endpush
