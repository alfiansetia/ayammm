<!doctype html>
<html lang="en" class="no-js">

<head>
    <title>Apps Ayam </title>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="meta description">
    <link rel="shortcut icon" href="{{ asset('frontend_template/landingPage') }}/assets/img/ayam_logo.png"
        type="image/x-icon">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- all css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <style>
        :root {
            --primary-color: #e7a007;
            --secondary-color: #e7a007;

            --btn-primary-border-radius: 0.25rem;
            --btn-primary-color: #fff;
            --btn-primary-background-color: #e7a007;
            --btn-primary-border-color: #e7a007;
            --btn-primary-hover-color: #fff;
            --btn-primary-background-hover-color: #e7a007;
            --btn-primary-border-hover-color: #e7a007;
            --btn-primary-font-weight: 500;

            --btn-secondary-border-radius: 0.25rem;
            --btn-secondary-color: #00234D;
            --btn-secondary-background-color: transparent;
            --btn-secondary-border-color: #00234D;
            --btn-secondary-hover-color: #fff;
            --btn-secondary-background-hover-color: #e7a007;
            --btn-secondary-border-hover-color: #e7a007;
            --btn-secondary-font-weight: 500;

            --heading-color: #000;
            --heading-font-family: 'Poppins', sans-serif;
            --heading-font-weight: 700;

            --title-color: #000;
            --title-font-family: 'Poppins', sans-serif;
            --title-font-weight: 400;

            --body-color: #000;
            --body-background-color: #fff;
            --body-font-family: 'Poppins', sans-serif;
            --body-font-size: 14px;
            --body-font-weight: 400;

            --section-heading-color: #000;
            --section-heading-font-family: 'Poppins', sans-serif;
            --section-heading-font-size: 48px;
            --section-heading-font-weight: 600;

            --section-subheading-color: #000;
            --section-subheading-font-family: 'Poppins', sans-serif;
            --section-subheading-font-size: 16px;
            --section-subheading-font-weight: 400;
        }

        .limited-text {
            white-space: nowrap;
            width: 250px;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        a .limited-text {
            color: #e7a007;
        }

        .limited-text2 {
            white-space: nowrap;
            width: 50px;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>

    <link rel="stylesheet" href="{{ asset('frontend_template/landingPage') }}/assets/css/vendor.css">
    <link rel="stylesheet" href="{{ asset('frontend_template/landingPage') }}/assets/css/style.css">
</head>

<body>
    <div class="body-wrapper">
        <!-- announcement bar start -->
        <div class="announcement-bar bg-4 py-1 py-lg-2">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-3 d-lg-block d-none">
                        <div class="announcement-call-wrapper">
                            <div class="announcement-call">
                                <a class="announcement-text text-white"
                                    href="https://wa.me/{{ $kontak->no_telp }}">Kontak: {{ $kontak->no_telp }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="announcement-text-wrapper d-flex align-items-center justify-content-center">

                        </div>
                    </div>
                    <div class="col-lg-3 d-lg-block d-none">
                        <div class="announcement-meta-wrapper d-flex align-items-center justify-content-end">
                            @auth
                                <div class="announcement-meta d-flex align-items-center">

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    <a class="announcement-login announcement-text text-white "
                                        onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();"
                                        href="{{ route('logout') }}">
                                        <svg class="icon icon-user" width="10" height="11" viewBox="0 0 10 11"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5 0C3.07227 0 1.5 1.57227 1.5 3.5C1.5 4.70508 2.11523 5.77539 3.04688 6.40625C1.26367 7.17188 0 8.94141 0 11H1C1 8.78516 2.78516 7 5 7C7.21484 7 9 8.78516 9 11H10C10 8.94141 8.73633 7.17188 6.95312 6.40625C7.88477 5.77539 8.5 4.70508 8.5 3.5C8.5 1.57227 6.92773 0 5 0ZM5 1C6.38672 1 7.5 2.11328 7.5 3.5C7.5 4.88672 6.38672 6 5 6C3.61328 6 2.5 4.88672 2.5 3.5C2.5 2.11328 3.61328 1 5 1Z"
                                                fill="#fff" />
                                        </svg>
                                        <span>logout</span>
                                    </a>

                                    <span class="separator-login d-flex px-3">
                                        <svg width="2" height="9" viewBox="0 0 2 9" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.4" d="M1 0.5V8.5" stroke="#FEFEFE" stroke-linecap="round" />
                                        </svg>
                                    </span>
                                    <div class="currency-wrapper">
                                        <button type="button" class="currency-btn btn-reset text-white"
                                            data-bs-toggle="dropdown" aria-expanded="false">


                                        </button>

                                    </div>
                                </div>
                            @else
                                <div class="announcement-meta d-flex align-items-center">
                                    <a class="announcement-login announcement-text text-white" href="{{ '/login' }}">
                                        <svg class="icon icon-user" width="10" height="11" viewBox="0 0 10 11"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5 0C3.07227 0 1.5 1.57227 1.5 3.5C1.5 4.70508 2.11523 5.77539 3.04688 6.40625C1.26367 7.17188 0 8.94141 0 11H1C1 8.78516 2.78516 7 5 7C7.21484 7 9 8.78516 9 11H10C10 8.94141 8.73633 7.17188 6.95312 6.40625C7.88477 5.77539 8.5 4.70508 8.5 3.5C8.5 1.57227 6.92773 0 5 0ZM5 1C6.38672 1 7.5 2.11328 7.5 3.5C7.5 4.88672 6.38672 6 5 6C3.61328 6 2.5 4.88672 2.5 3.5C2.5 2.11328 3.61328 1 5 1Z"
                                                fill="#fff" />
                                        </svg>
                                        <span>Login</span>
                                    </a>

                                    <span class="separator-login d-flex px-3">
                                        <svg width="2" height="9" viewBox="0 0 2 9" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.4" d="M1 0.5V8.5" stroke="#FEFEFE" stroke-linecap="round" />
                                        </svg>
                                    </span>
                                    <div class="currency-wrapper">
                                        <button type="button" class="currency-btn btn-reset text-white"
                                            data-bs-toggle="dropdown" aria-expanded="false">


                                        </button>

                                    </div>
                                </div>
                            @endauth
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- announcement bar end -->

        <!-- header start -->
        <header class="sticky-header border-btm-black header-1">
            <div class="header-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-4 col-4">
                            <div class="header-logo">
                                <a href="" class="logo-main">
                                    <img style="height: 60%;width:40%"
                                        src="{{ asset('frontend_template/landingPage') }}/assets/img/ayam_logo.png"
                                        loading="lazy" alt="bisum">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 d-lg-block d-none">
                            <nav class="site-navigation">
                                <ul class="main-menu list-unstyled justify-content-center">
                                    <li class="menu-list-item nav-item  active">
                                        <div class="mega-menu-header">
                                            <a class="nav-link" href="{{ url('/') }}">
                                                Beranda
                                            </a>

                                        </div>

                                    </li>
                                    <li class="menu-list-item nav-item has-megamenu">
                                        <div class="mega-menu-header">
                                            <a class="nav-link" href="{{ url('/koleksi') }}">
                                                Katalog Ayam
                                            </a>

                                        </div>

                                    </li>
                                    <li class="menu-list-item nav-item has-dropdown">
                                        <div class="mega-menu-header">
                                            <a class="nav-link" href="{{ route('index.berita') }}">Berita & Acara</a>

                                        </div>

                                    </li>

                                    <li class="menu-list-item nav-item">
                                        <a class="nav-link" href="{{ route('index.kontak') }}">Kontak</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-lg-3 col-md-8 col-8">
                            <div class="header-action d-flex align-items-center justify-content-end">
                                <a class="header-action-item header-search" href="javascript:void(0)">
                                    <svg class="icon icon-search" width="20" height="20" viewBox="0 0 20 20"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.75 0.250183C11.8838 0.250183 15.25 3.61639 15.25 7.75018C15.25 9.54608 14.6201 11.1926 13.5625 12.4846L19.5391 18.4611L18.4609 19.5392L12.4844 13.5627C11.1924 14.6203 9.5459 15.2502 7.75 15.2502C3.61621 15.2502 0.25 11.884 0.25 7.75018C0.25 3.61639 3.61621 0.250183 7.75 0.250183ZM7.75 1.75018C4.42773 1.75018 1.75 4.42792 1.75 7.75018C1.75 11.0724 4.42773 13.7502 7.75 13.7502C11.0723 13.7502 13.75 11.0724 13.75 7.75018C13.75 4.42792 11.0723 1.75018 7.75 1.75018Z"
                                            fill="black" />
                                    </svg>
                                </a>


                                <a class="header-action-item header-hamburger ms-4 d-lg-none" href="#drawer-menu"
                                    data-bs-toggle="offcanvas">
                                    <svg class="icon icon-hamburger" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="#000" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <line x1="3" y1="12" x2="21" y2="12"></line>
                                        <line x1="3" y1="6" x2="21" y2="6"></line>
                                        <line x1="3" y1="18" x2="21" y2="18"></line>
                                    </svg>
                                </a>
                                <a class="header-action-item header-cart ms-4"
                                    href="{{ url(' $cart->id.#drawer-cart') }}" data-bs-toggle="offcanvas">
                                    <svg class="icon icon-cart" width="24" height="26" viewBox="0 0 24 26"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0.000183105C9.25391 0.000183105 7 2.25409 7 5.00018V6.00018H2.0625L2 6.93768L1 24.9377L0.9375 26.0002H23.0625L23 24.9377L22 6.93768L21.9375 6.00018H17V5.00018C17 2.25409 14.7461 0.000183105 12 0.000183105ZM12 2.00018C13.6562 2.00018 15 3.34393 15 5.00018V6.00018H9V5.00018C9 3.34393 10.3438 2.00018 12 2.00018ZM3.9375 8.00018H7V11.0002H9V8.00018H15V11.0002H17V8.00018H20.0625L20.9375 24.0002H3.0625L3.9375 8.00018Z"
                                            fill="black"></path>
                                    </svg>
                                    @if ($user->keranjang_count ?? 0 > 0)
                                        <span class="badge badge-danger"
                                            style="z-index: index 1; border-radius: 50%; background-color:red; color:#fff ; margin-left: 10 px;">{{ $user->keranjang_count }}</span>
                                    @endif
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="search-wrapper">
                    <div class="container">
                        <form action="#" class="search-form d-flex align-items-center">
                            <button type="submit" class="search-submit bg-transparent pl-0 text-start">
                                <svg class="icon icon-search" width="20" height="20" viewBox="0 0 20 20"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.75 0.250183C11.8838 0.250183 15.25 3.61639 15.25 7.75018C15.25 9.54608 14.6201 11.1926 13.5625 12.4846L19.5391 18.4611L18.4609 19.5392L12.4844 13.5627C11.1924 14.6203 9.5459 15.2502 7.75 15.2502C3.61621 15.2502 0.25 11.884 0.25 7.75018C0.25 3.61639 3.61621 0.250183 7.75 0.250183ZM7.75 1.75018C4.42773 1.75018 1.75 4.42792 1.75 7.75018C1.75 11.0724 4.42773 13.7502 7.75 13.7502C11.0723 13.7502 13.75 11.0724 13.75 7.75018C13.75 4.42792 11.0723 1.75018 7.75 1.75018Z"
                                        fill="black" />
                                </svg>
                            </button>
                            <div class="search-input mr-4">
                                <input type="text" placeholder="Search your products..." autocomplete="off">
                            </div>
                            <div class="search-close">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="icon icon-close">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </header>
        <!-- header end -->

        @yield('content')


        <!-- footer start -->
        <footer class="mt-100 overflow-hidden">
            <div class="footer-top bg-4">
                <div class="container">
                    <div class="footer-widget-wrapper">
                        <div class="row justify-content-between">
                            <div class="col-xl-2 col-lg-2 col-md-6 col-12 footer-widget">
                                <div class="footer-widget-inner">
                                    <h4 class="footer-heading d-flex align-items-center justify-content-between">
                                        <span>About</span>
                                        <span class="d-md-none">
                                            <svg class="icon icon-dropdown" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="#fff" stroke-width="1" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <polyline points="6 9 12 15 18 9"></polyline>
                                            </svg>
                                        </span>
                                    </h4>
                                    <ul class="footer-menu list-unstyled mb-0 d-md-block">
                                        <li class="footer-menu-item"><a href="{{ url('/') }}">About us</a></li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-6 col-12 footer-widget">
                                <div class="footer-widget-inner">
                                    <h4 class="footer-heading d-flex align-items-center justify-content-between">
                                        <span>Shopping</span>
                                        <span class="d-md-none">
                                            <svg class="icon icon-dropdown" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="#fff" stroke-width="1" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <polyline points="6 9 12 15 18 9"></polyline>
                                            </svg>
                                        </span>
                                    </h4>
                                    <ul class="footer-menu list-unstyled mb-0 d-md-block">
                                        <li class="footer-menu-item"><a href="{{ url('/koleksi') }}">Koleksi
                                                Ayam</a></li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-6 col-12 footer-widget">
                                <div class="footer-widget-inner">
                                    <h4 class="footer-heading d-flex align-items-center justify-content-between">
                                        <span>Help</span>
                                        <span class="d-md-none">
                                            <svg class="icon icon-dropdown" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="#fff" stroke-width="1" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <polyline points="6 9 12 15 18 9"></polyline>
                                            </svg>
                                        </span>
                                    </h4>
                                    <ul class="footer-menu list-unstyled mb-0 d-md-block">

                                        <li class="footer-menu-item"><a href="{{ route('index.kontak') }}">Kontak</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-5 col-md-6 col-12 footer-widget">
                                <div class="footer-widget-inner">
                                    <h4 class="footer-logo">
                                        <!-- <h1 href="/"><img style="height:70px ;width:70px" src="{{ asset('frontend_template/landingPage') }}/assets/img/ayam_logo.png" alt="bisum"></h1> -->

                                    </h4>
                                    <div class="footer-newsletter">
                                        <p class="footer-text mb-3">Stay up to date with all the news.</p>
                                        <div class="newsletter-wrapper">
                                            <form action="#"
                                                class="footer-newsletter-form d-flex align-items-center">
                                                <input class="footer-newsletter-input bg-transparent" type="email"
                                                    placeholder="Your e-mail" autocomplete="off">
                                                <button class="footer-newsletter-btn newsletter-btn-white"
                                                    type="submit">SIGN
                                                    UP</button>
                                            </form>
                                        </div>
                                        <div class="footer-social-wrapper">
                                            <ul
                                                class="footer-social list-unstyled d-flex align-items-center flex-wrap mb-0">
                                                <li class="footer-social-item">
                                                    <a href="#">
                                                        <svg class="icon icon-twitter" width="20" height="20"
                                                            viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M17.1452 6.62529C17.1452 6.79391 17.1452 6.94848 17.1452 7.08899C17.1452 8.35363 16.9063 9.60422 16.4286 10.8407C15.9789 12.0492 15.3185 13.1593 14.4473 14.171C13.6042 15.1827 12.4941 16.0117 11.1171 16.6581C9.76815 17.2763 8.27869 17.5855 6.64871 17.5855C4.59719 17.5855 2.71429 17.0375 1 15.9415C1.28103 15.9696 1.57611 15.9836 1.88525 15.9836C3.59953 15.9836 5.13115 15.4637 6.48009 14.4239C5.66511 14.3958 4.93443 14.1429 4.28806 13.6651C3.66979 13.1874 3.24824 12.5831 3.02342 11.8525C3.24824 11.9087 3.47307 11.9368 3.69789 11.9368C4.03513 11.9368 4.35831 11.8806 4.66745 11.7681C3.82436 11.5995 3.12178 11.178 2.55972 10.5035C1.99766 9.82904 1.71663 9.05621 1.71663 8.18501C1.71663 8.15691 1.71663 8.14286 1.71663 8.14286C2.25059 8.42389 2.81265 8.57845 3.40281 8.60656C2.30679 7.84777 1.75878 6.82201 1.75878 5.52927C1.75878 4.8548 1.9274 4.23653 2.26464 3.67447C3.19204 4.79859 4.30211 5.69789 5.59485 6.37237C6.91569 7.04684 8.33489 7.42623 9.85246 7.51054C9.79625 7.22951 9.76815 6.94848 9.76815 6.66745C9.76815 5.65574 10.1194 4.79859 10.822 4.09602C11.5527 3.36534 12.4239 3 13.4356 3C14.5035 3 15.4028 3.37939 16.1335 4.13817C16.9766 3.96956 17.7635 3.67447 18.4941 3.25293C18.2131 4.12412 17.6651 4.79859 16.8501 5.27635C17.6089 5.19204 18.3255 5.00937 19 4.72834C18.4941 5.45902 17.8759 6.09133 17.1452 6.62529Z"
                                                                fill="#FEFEFE" />
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li class="footer-social-item">
                                                    <a href="#">
                                                        <svg class="icon icon-facebook" width="20" height="20"
                                                            viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M16.3021 4.58314H14.0258C13.1546 4.58314 12.4098 4.89227 11.7916 5.51054C11.2014 6.12881 10.9063 6.87354 10.9063 7.74473V9.97892H9.09368V12.6768H10.9063V18.9578H13.6042V12.6768H16.3021V9.97892H13.6042V8.16628C13.6042 7.94145 13.6885 7.74473 13.8571 7.57611C14.0258 7.37939 14.2365 7.28103 14.4895 7.28103H16.3021V4.58314ZM1 2C1 1.44772 1.44772 1 2 1H18C18.5523 1 19 1.44772 19 2V17.9578C19 18.5101 18.5523 18.9578 18 18.9578H2C1.44772 18.9578 1 18.5101 1 17.9578V2Z"
                                                                fill="#FEFEFE" />
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li class="footer-social-item">
                                                    <a href="#">
                                                        <svg class="icon icon-instagram" width="20"
                                                            height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.99998 2.62165C12.4031 2.62165 12.6877 2.6308 13.6367 2.6741C14.5142 2.71415 14.9908 2.86077 15.3079 2.98398C15.728 3.14725 16.0278 3.34231 16.3428 3.65723C16.6577 3.97215 16.8528 4.272 17.016 4.69206C17.1392 5.00923 17.2859 5.48577 17.3259 6.36323C17.3692 7.31228 17.3783 7.5969 17.3783 10C17.3783 12.4031 17.3692 12.6878 17.3259 13.6368C17.2859 14.5143 17.1392 14.9908 17.016 15.308C16.8528 15.728 16.6577 16.0279 16.3428 16.3428C16.0278 16.6577 15.728 16.8528 15.3079 17.016C14.9908 17.1393 14.5142 17.2859 13.6367 17.3259C12.6879 17.3692 12.4032 17.3784 9.99998 17.3784C7.59672 17.3784 7.3121 17.3692 6.36323 17.3259C5.48574 17.2859 5.00919 17.1393 4.69206 17.016C4.27196 16.8528 3.97212 16.6577 3.6572 16.3428C3.34227 16.0279 3.14721 15.728 2.98398 15.308C2.86073 14.9908 2.71411 14.5143 2.67406 13.6368C2.63076 12.6878 2.62162 12.4031 2.62162 10C2.62162 7.5969 2.63076 7.31228 2.67406 6.36326C2.71411 5.48577 2.86073 5.00923 2.98398 4.69206C3.14721 4.272 3.34227 3.97215 3.6572 3.65723C3.97212 3.34231 4.27196 3.14725 4.69206 2.98398C5.00919 2.86077 5.48574 2.71415 6.36319 2.6741C7.31224 2.6308 7.59687 2.62165 9.99998 2.62165ZM9.99998 1C7.55571 1 7.24926 1.01036 6.28931 1.05416C5.33133 1.09789 4.67712 1.25001 4.10462 1.47251C3.51279 1.70251 3.01088 2.01025 2.51055 2.51058C2.01021 3.01092 1.70247 3.51283 1.47247 4.10466C1.24997 4.67716 1.09785 5.33137 1.05412 6.28935C1.01032 7.24926 1 7.55575 1 10C1 12.4443 1.01032 12.7508 1.05412 13.7107C1.09785 14.6687 1.24997 15.3229 1.47247 15.8954C1.70247 16.4872 2.01021 16.9891 2.51055 17.4895C3.01088 17.9898 3.51279 18.2975 4.10462 18.5275C4.67712 18.75 5.33133 18.9021 6.28931 18.9459C7.24926 18.9897 7.55571 19 9.99998 19C12.4443 19 12.7507 18.9897 13.7107 18.9459C14.6686 18.9021 15.3228 18.75 15.8953 18.5275C16.4872 18.2975 16.9891 17.9898 17.4894 17.4895C17.9898 16.9891 18.2975 16.4872 18.5275 15.8954C18.75 15.3229 18.9021 14.6687 18.9458 13.7107C18.9896 12.7508 19 12.4443 19 10C19 7.55575 18.9896 7.24926 18.9458 6.28935C18.9021 5.33137 18.75 4.67716 18.5275 4.10466C18.2975 3.51283 17.9898 3.01092 17.4894 2.51058C16.9891 2.01025 16.4872 1.70251 15.8953 1.47251C15.3228 1.25001 14.6686 1.09789 13.7107 1.05416C12.7507 1.01036 12.4443 1 9.99998 1ZM9.99998 5.37838C7.44753 5.37838 5.37835 7.44757 5.37835 10C5.37835 12.5525 7.44753 14.6217 9.99998 14.6217C12.5524 14.6217 14.6216 12.5525 14.6216 10C14.6216 7.44757 12.5524 5.37838 9.99998 5.37838ZM9.99998 13C8.34314 13 6.99996 11.6569 6.99996 10C6.99996 8.34317 8.34314 7 9.99998 7C11.6568 7 13 8.34317 13 10C13 11.6569 11.6568 13 9.99998 13ZM15.8842 5.19579C15.8842 5.79226 15.4007 6.27581 14.8042 6.27581C14.2077 6.27581 13.7242 5.79226 13.7242 5.19579C13.7242 4.59931 14.2077 4.1158 14.8042 4.1158C15.4007 4.1158 15.8842 4.59931 15.8842 5.19579Z"
                                                                fill="#FEFEFE" />
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li class="footer-social-item">
                                                    <a href="#">
                                                        <svg class="icon icon-tiktok" width="20" height="20"
                                                            viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M13.2367 1C13.5336 3.55445 14.9591 5.0774 17.4375 5.23942V8.11251C16.0012 8.25292 14.7431 7.78307 13.2799 6.89739V12.2709C13.2799 19.0972 5.8393 21.2304 2.84795 16.3375C0.925716 13.189 2.10282 7.66426 8.26909 7.44284V10.4725C7.79933 10.5481 7.29717 10.667 6.83821 10.8236C5.46673 11.288 4.68919 12.1575 4.90518 13.6913C5.32094 16.6292 10.7097 17.4986 10.2615 11.7579V1.0054H13.2367V1Z"
                                                                fill="#FEFEFE" />
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li class="footer-social-item">
                                                    <a href="#">
                                                        <svg class="icon icon-youtube" width="20" height="20"
                                                            viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M18.7892 6.69789C18.9297 7.6815 19 8.65105 19 9.60656V10.9555L18.7892 13.8642C18.6768 14.6792 18.4379 15.2693 18.0726 15.6347C17.6792 16.0281 17.089 16.281 16.3021 16.3934C15.5433 16.4496 14.63 16.4918 13.5621 16.5199C12.5222 16.548 11.6651 16.5621 10.9906 16.5621H9.97892C6.85948 16.534 4.82201 16.4778 3.86651 16.3934C3.86651 16.3934 3.7541 16.3794 3.52927 16.3513C3.30445 16.3232 3.12178 16.2951 2.98126 16.267C2.84075 16.2389 2.65808 16.1686 2.43326 16.0562C2.23653 15.9438 2.05386 15.8033 1.88525 15.6347C1.74473 15.466 1.60422 15.2412 1.4637 14.9602C1.35129 14.6511 1.28103 14.3841 1.25293 14.1593L1.16862 13.8642C1.05621 12.8806 1 11.911 1 10.9555V9.60656L1.16862 6.69789C1.28103 5.8829 1.51991 5.29274 1.88525 4.9274C2.27869 4.50585 2.8829 4.25293 3.69789 4.16862C4.45667 4.11241 5.35597 4.07026 6.39578 4.04215C7.4356 4.01405 8.29274 4 8.96721 4H9.97892C12.5082 4 14.6159 4.05621 16.3021 4.16862C17.089 4.25293 17.6792 4.50585 18.0726 4.9274C18.185 5.03981 18.2834 5.18033 18.3677 5.34895C18.452 5.48946 18.5222 5.64403 18.5785 5.81265C18.6347 5.95316 18.6768 6.09368 18.7049 6.23419C18.733 6.37471 18.7611 6.48712 18.7892 6.57143V6.69789ZM12.4239 10.4075L13.0141 10.1124L8.16628 7.58314V12.6417L12.4239 10.4075Z"
                                                                fill="#FEFEFE" />
                                                        </svg>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom bg-4">
                <div class="container">
                    <div
                        class="footer-bottom-inner d-flex flex-wrap justify-content-md-between justify-content-center align-items-center">
                        <ul class="footer-bottom-menu list-unstyled d-flex flex-wrap align-items-center mb-0">
                            <li class="footer-menu-item"><a href="about-us.html">Privacy policy</a></li>
                            <li class="footer-menu-item"><a href="about-us.html">Terms & Conditions</a></li>
                        </ul>
                        <p class="copyright footer-text">©<span class="current-year"></span> Spree Themes.</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end -->


        <!-- scrollup start -->
        <button id="scrollup">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="18 15 12 9 6 15"></polyline>
            </svg>
        </button>
        <!-- scrollup end -->


        <!-- drawer menu start -->
        <div class="offcanvas offcanvas-start d-flex d-lg-none" tabindex="-1" id="drawer-menu">
            <div class="offcanvas-wrapper">
                <div class="offcanvas-header border-btm-black">
                    <h5 class="drawer-heading">Menu</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body p-0 d-flex flex-column justify-content-between">
                    <nav class="site-navigation">
                        <ul class="main-menu list-unstyled">
                            <li class="menu-list-item nav-item has-dropdown active">
                                <div class="mega-menu-header">
                                    <a class="nav-link active" href="{{ url('/') }}">
                                        Beranda
                                    </a>

                                </div>

                            </li>
                            <li class="menu-list-item nav-item has-megamenu">
                                <div class="mega-menu-header">
                                    <a class="nav-link" href="{{ url('/koleksi') }}">
                                        Katalok Ayam
                                    </a>

                                </div>

                            </li>
                            <li class="menu-list-item nav-item">
                                <a class="nav-link" href="{{ route('index.berita') }}">Informasi & Berita</a>
                            </li>

                            <li class="menu-list-item nav-item">
                                <a class="nav-link" href="{{ route('index.kontak') }}">Kontak</a>
                            </li>
                        </ul>
                    </nav>
                    <ul class="utility-menu list-unstyled">
                        <li class="utilty-menu-item">
                            <a class="announcement-text" href="tel:+1-078-2376">
                                <span class="utilty-icon-wrapper">
                                    <svg class="icon icon-phone" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="#000"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                        </path>
                                    </svg>
                                </span>
                                {{ $kontak->no_telp }}
                            </a>
                        </li>
                        <li class="utilty-menu-item">
                            <a class="announcement-login announcement-text" href="{{ url('/login') }}">
                                <span class="utilty-icon-wrapper">
                                    <svg class="icon icon-user" width="24" height="24" viewBox="0 0 10 11"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5 0C3.07227 0 1.5 1.57227 1.5 3.5C1.5 4.70508 2.11523 5.77539 3.04688 6.40625C1.26367 7.17188 0 8.94141 0 11H1C1 8.78516 2.78516 7 5 7C7.21484 7 9 8.78516 9 11H10C10 8.94141 8.73633 7.17188 6.95312 6.40625C7.88477 5.77539 8.5 4.70508 8.5 3.5C8.5 1.57227 6.92773 0 5 0ZM5 1C6.38672 1 7.5 2.11328 7.5 3.5C7.5 4.88672 6.38672 6 5 6C3.61328 6 2.5 4.88672 2.5 3.5C2.5 2.11328 3.61328 1 5 1Z"
                                            fill="#000" />
                                    </svg>
                                </span>
                                <span>Login</span>
                            </a>
                        </li>
                        <li class="utilty-menu-item">
                            <a class="announcement-login announcement-text" href="{{ url('/login') }}">
                                <span class="utilty-icon-wrapper">
                                    <svg class="icon icon-user" width="24" height="24" viewBox="0 0 10 11"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5 0C3.07227 0 1.5 1.57227 1.5 3.5C1.5 4.70508 2.11523 5.77539 3.04688 6.40625C1.26367 7.17188 0 8.94141 0 11H1C1 8.78516 2.78516 7 5 7C7.21484 7 9 8.78516 9 11H10C10 8.94141 8.73633 7.17188 6.95312 6.40625C7.88477 5.77539 8.5 4.70508 8.5 3.5C8.5 1.57227 6.92773 0 5 0ZM5 1C6.38672 1 7.5 2.11328 7.5 3.5C7.5 4.88672 6.38672 6 5 6C3.61328 6 2.5 4.88672 2.5 3.5C2.5 2.11328 3.61328 1 5 1Z"
                                            fill="#000" />
                                    </svg>
                                </span>
                                <span>Logout</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <!-- drawer menu end -->

        <!-- drawer cart start -->
        @include('layouts_frontend.drawer')
        <!-- drawer cart end -->

        <!-- product quickview start -->
        <div class="modal fade" tabindex="-1" id="quickview-modal">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-12">
                                <div class="product-gallery product-gallery-vertical d-flex">
                                    <div class="product-img-large">
                                        <div class="qv-large-slider img-large-slider common-slider"
                                            data-slick='{
                                            "slidesToShow": 1, 
                                            "slidesToScroll": 1,
                                            "dots": false,
                                            "arrows": false,
                                            "asNavFor": ".qv-thumb-slider"
                                        }'>
                                            <div class="img-large-wrapper">
                                                <img src="{{ asset('frontend_template/landingPage') }}/assets/img/products/bags/39.jpg"
                                                    alt="img">
                                            </div>
                                            <div class="img-large-wrapper">
                                                <img src="{{ asset('frontend_template/landingPage') }}/assets/img/products/bags/38.jpg"
                                                    alt="img">
                                            </div>
                                            <div class="img-large-wrapper">
                                                <img src="{{ asset('frontend_template/landingPage') }}/assets/img/products/bags/37.jpg"
                                                    alt="img">
                                            </div>
                                            <div class="img-large-wrapper">
                                                <img src="{{ asset('frontend_template/landingPage') }}/assets/img/products/bags/36.jpg"
                                                    alt="img">
                                            </div>
                                            <div class="img-large-wrapper">
                                                <img src="{{ asset('frontend_template/landingPage') }}/assets/img/products/bags/34.jpg"
                                                    alt="img">
                                            </div>
                                            <div class="img-large-wrapper">
                                                <img src="{{ asset('frontend_template/landingPage') }}/assets/img/products/bags/30.jpg"
                                                    alt="img">
                                            </div>
                                            <div class="img-large-wrapper">
                                                <img src="{{ asset('frontend_template/landingPage') }}/assets/img/products/bags/32.jpg"
                                                    alt="img">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-img-thumb">
                                        <div class="qv-thumb-slider img-thumb-slider common-slider"
                                            data-vertical-slider="true"
                                            data-slick='{
                                            "slidesToShow": 5, 
                                            "slidesToScroll": 1,
                                            "dots": false,
                                            "arrows": true,
                                            "infinite": false,
                                            "speed": 300,
                                            "cssEase": "ease",
                                            "focusOnSelect": true,
                                            "swipeToSlide": true,
                                            "asNavFor": ".qv-large-slider"
                                        }'>
                                            <div>
                                                <div class="img-thumb-wrapper">
                                                    <img src="{{ asset('frontend_template/landingPage') }}/assets/img/products/bags/39.jpg"
                                                        alt="img">
                                                </div>
                                            </div>
                                            <div>
                                                <div class="img-thumb-wrapper">
                                                    <img src="{{ asset('frontend_template/landingPage') }}/assets/img/products/bags/38.jpg"
                                                        alt="img">
                                                </div>
                                            </div>
                                            <div>
                                                <div class="img-thumb-wrapper">
                                                    <img src="{{ asset('frontend_template/landingPage') }}/assets/img/products/bags/37.jpg"
                                                        alt="img">
                                                </div>
                                            </div>
                                            <div>
                                                <div class="img-thumb-wrapper">
                                                    <img src="{{ asset('frontend_template/landingPage') }}/assets/img/products/bags/36.jpg"
                                                        alt="img">
                                                </div>
                                            </div>
                                            <div>
                                                <div class="img-thumb-wrapper">
                                                    <img src="{{ asset('frontend_template/landingPage') }}/assets/img/products/bags/34.jpg"
                                                        alt="img">
                                                </div>
                                            </div>
                                            <div>
                                                <div class="img-thumb-wrapper">
                                                    <img src="{{ asset('frontend_template/landingPage') }}/assets/img/products/bags/30.jpg"
                                                        alt="img">
                                                </div>
                                            </div>
                                            <div>
                                                <div class="img-thumb-wrapper">
                                                    <img src="{{ asset('frontend_template/landingPage') }}/assets/img/products/bags/32.jpg"
                                                        alt="img">
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="activate-arrows show-arrows-always arrows-white d-none d-lg-flex justify-content-between mt-3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-12">
                                <div class="product-details ps-lg-4">
                                    <div class="mb-3"><span class="product-availability">In Stock</span></div>
                                    <h2 class="product-title mb-3">Accesories Lather bag</h2>

                                    <div class="product-price-wrapper mb-4">
                                        <span class="product-price regular-price">$24.00</span>
                                        <del class="product-price compare-price ms-2">$32.00</del>
                                    </div>
                                    <div class="product-sku product-meta mb-1">
                                        <strong class="label">SKU:</strong> 401
                                    </div>
                                    <div class="product-vendor product-meta mb-3">
                                        <strong class="label">Vendor:</strong> leather
                                    </div>



                                    <form class="product-form" action="#">

                                </div>
                                <div class="buy-it-now-btn mt-2">
                                    <button type="submit" class="position-relative btn-atc btn-buyit-now">BUY IT
                                        NOW</button>
                                </div>
                                </form>



                                <div class="share-area mt-4 d-flex align-items-center">
                                    <strong class="label mb-1 d-block">Share:</strong>
                                    <ul class="list-unstyled share-list d-flex align-items-center mb-1 flex-wrap">
                                        <li class="share-item">
                                            <svg width="9" height="16" viewBox="0 0 9 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.17383 9.3125L8.58398 6.61719H5.97656V4.85938C5.97656 4.09766 6.32812 3.39453 7.5 3.39453H8.70117V1.08008C8.70117 1.08008 7.61719 0.875 6.5918 0.875C4.45312 0.875 3.04688 2.19336 3.04688 4.53711V6.61719H0.644531V9.3125H3.04688V15.875H5.97656V9.3125H8.17383Z"
                                                    fill="black" />
                                            </svg>
                                        </li>
                                        <li class="share-item">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.1452 6.62529C17.1452 6.79391 17.1452 6.94848 17.1452 7.08899C17.1452 8.35363 16.9063 9.60422 16.4286 10.8407C15.9789 12.0492 15.3185 13.1593 14.4473 14.171C13.6042 15.1827 12.4941 16.0117 11.1171 16.6581C9.76815 17.2763 8.27869 17.5855 6.64871 17.5855C4.59719 17.5855 2.71429 17.0375 1 15.9415C1.28103 15.9696 1.57611 15.9836 1.88525 15.9836C3.59953 15.9836 5.13115 15.4637 6.48009 14.4239C5.66511 14.3958 4.93443 14.1429 4.28806 13.6651C3.66979 13.1874 3.24824 12.5831 3.02342 11.8525C3.24824 11.9087 3.47307 11.9368 3.69789 11.9368C4.03513 11.9368 4.35831 11.8806 4.66745 11.7681C3.82436 11.5995 3.12178 11.178 2.55972 10.5035C1.99766 9.82904 1.71663 9.05621 1.71663 8.18501C1.71663 8.15691 1.71663 8.14286 1.71663 8.14286C2.25059 8.42389 2.81265 8.57845 3.40281 8.60656C2.30679 7.84777 1.75878 6.82201 1.75878 5.52927C1.75878 4.8548 1.9274 4.23653 2.26464 3.67447C3.19204 4.79859 4.30211 5.69789 5.59485 6.37237C6.91569 7.04684 8.33489 7.42623 9.85246 7.51054C9.79625 7.22951 9.76815 6.94848 9.76815 6.66745C9.76815 5.65574 10.1194 4.79859 10.822 4.09602C11.5527 3.36534 12.4239 3 13.4356 3C14.5035 3 15.4028 3.37939 16.1335 4.13817C16.9766 3.96956 17.7635 3.67447 18.4941 3.25293C18.2131 4.12412 17.6651 4.79859 16.8501 5.27635C17.6089 5.19204 18.3255 5.00937 19 4.72834C18.4941 5.45902 17.8759 6.09133 17.1452 6.62529Z"
                                                    fill="black" />
                                            </svg>
                                        </li>
                                        <li class="share-item">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.99998 2.62165C12.4031 2.62165 12.6877 2.6308 13.6367 2.6741C14.5142 2.71415 14.9908 2.86077 15.3079 2.98398C15.728 3.14725 16.0278 3.34231 16.3428 3.65723C16.6577 3.97215 16.8528 4.272 17.016 4.69206C17.1392 5.00923 17.2859 5.48577 17.3259 6.36323C17.3692 7.31228 17.3783 7.5969 17.3783 10C17.3783 12.4031 17.3692 12.6878 17.3259 13.6368C17.2859 14.5143 17.1392 14.9908 17.016 15.308C16.8528 15.728 16.6577 16.0279 16.3428 16.3428C16.0278 16.6577 15.728 16.8528 15.3079 17.016C14.9908 17.1393 14.5142 17.2859 13.6367 17.3259C12.6879 17.3692 12.4032 17.3784 9.99998 17.3784C7.59672 17.3784 7.3121 17.3692 6.36323 17.3259C5.48574 17.2859 5.00919 17.1393 4.69206 17.016C4.27196 16.8528 3.97212 16.6577 3.6572 16.3428C3.34227 16.0279 3.14721 15.728 2.98398 15.308C2.86073 14.9908 2.71411 14.5143 2.67406 13.6368C2.63076 12.6878 2.62162 12.4031 2.62162 10C2.62162 7.5969 2.63076 7.31228 2.67406 6.36326C2.71411 5.48577 2.86073 5.00923 2.98398 4.69206C3.14721 4.272 3.34227 3.97215 3.6572 3.65723C3.97212 3.34231 4.27196 3.14725 4.69206 2.98398C5.00919 2.86077 5.48574 2.71415 6.36319 2.6741C7.31224 2.6308 7.59687 2.62165 9.99998 2.62165ZM9.99998 1C7.55571 1 7.24926 1.01036 6.28931 1.05416C5.33133 1.09789 4.67712 1.25001 4.10462 1.47251C3.51279 1.70251 3.01088 2.01025 2.51055 2.51058C2.01021 3.01092 1.70247 3.51283 1.47247 4.10466C1.24997 4.67716 1.09785 5.33137 1.05412 6.28935C1.01032 7.24926 1 7.55575 1 10C1 12.4443 1.01032 12.7508 1.05412 13.7107C1.09785 14.6687 1.24997 15.3229 1.47247 15.8954C1.70247 16.4872 2.01021 16.9891 2.51055 17.4895C3.01088 17.9898 3.51279 18.2975 4.10462 18.5275C4.67712 18.75 5.33133 18.9021 6.28931 18.9459C7.24926 18.9897 7.55571 19 9.99998 19C12.4443 19 12.7507 18.9897 13.7107 18.9459C14.6686 18.9021 15.3228 18.75 15.8953 18.5275C16.4872 18.2975 16.9891 17.9898 17.4894 17.4895C17.9898 16.9891 18.2975 16.4872 18.5275 15.8954C18.75 15.3229 18.9021 14.6687 18.9458 13.7107C18.9896 12.7508 19 12.4443 19 10C19 7.55575 18.9896 7.24926 18.9458 6.28935C18.9021 5.33137 18.75 4.67716 18.5275 4.10466C18.2975 3.51283 17.9898 3.01092 17.4894 2.51058C16.9891 2.01025 16.4872 1.70251 15.8953 1.47251C15.3228 1.25001 14.6686 1.09789 13.7107 1.05416C12.7507 1.01036 12.4443 1 9.99998 1ZM9.99998 5.37838C7.44753 5.37838 5.37835 7.44757 5.37835 10C5.37835 12.5525 7.44753 14.6217 9.99998 14.6217C12.5524 14.6217 14.6216 12.5525 14.6216 10C14.6216 7.44757 12.5524 5.37838 9.99998 5.37838ZM9.99998 13C8.34314 13 6.99996 11.6569 6.99996 10C6.99996 8.34317 8.34314 7 9.99998 7C11.6568 7 13 8.34317 13 10C13 11.6569 11.6568 13 9.99998 13ZM15.8842 5.19579C15.8842 5.79226 15.4007 6.27581 14.8042 6.27581C14.2077 6.27581 13.7242 5.79226 13.7242 5.19579C13.7242 4.59931 14.2077 4.1158 14.8042 4.1158C15.4007 4.1158 15.8842 4.59931 15.8842 5.19579Z"
                                                    fill="black" />
                                            </svg>
                                        </li>
                                        <li class="share-item">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M18.7892 6.69789C18.9297 7.6815 19 8.65105 19 9.60656V10.9555L18.7892 13.8642C18.6768 14.6792 18.4379 15.2693 18.0726 15.6347C17.6792 16.0281 17.089 16.281 16.3021 16.3934C15.5433 16.4496 14.63 16.4918 13.5621 16.5199C12.5222 16.548 11.6651 16.5621 10.9906 16.5621H9.97892C6.85948 16.534 4.82201 16.4778 3.86651 16.3934C3.86651 16.3934 3.7541 16.3794 3.52927 16.3513C3.30445 16.3232 3.12178 16.2951 2.98126 16.267C2.84075 16.2389 2.65808 16.1686 2.43326 16.0562C2.23653 15.9438 2.05386 15.8033 1.88525 15.6347C1.74473 15.466 1.60422 15.2412 1.4637 14.9602C1.35129 14.6511 1.28103 14.3841 1.25293 14.1593L1.16862 13.8642C1.05621 12.8806 1 11.911 1 10.9555V9.60656L1.16862 6.69789C1.28103 5.8829 1.51991 5.29274 1.88525 4.9274C2.27869 4.50585 2.8829 4.25293 3.69789 4.16862C4.45667 4.11241 5.35597 4.07026 6.39578 4.04215C7.4356 4.01405 8.29274 4 8.96721 4H9.97892C12.5082 4 14.6159 4.05621 16.3021 4.16862C17.089 4.25293 17.6792 4.50585 18.0726 4.9274C18.185 5.03981 18.2834 5.18033 18.3677 5.34895C18.452 5.48946 18.5222 5.64403 18.5785 5.81265C18.6347 5.95316 18.6768 6.09368 18.7049 6.23419C18.733 6.37471 18.7611 6.48712 18.7892 6.57143V6.69789ZM12.4239 10.4075L13.0141 10.1124L8.16628 7.58314V12.6417L12.4239 10.4075Z"
                                                    fill="black" />
                                            </svg>
                                        </li>
                                        <li class="share-item">
                                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M14.5312 7.375C14.5312 3.36133 11.2793 0.109375 7.26562 0.109375C3.25195 0.109375 0 3.36133 0 7.375C0 10.4805 1.9043 13.0879 4.59961 14.1426C4.54102 13.5859 4.48242 12.707 4.62891 12.0625C4.77539 11.5059 5.47852 8.45898 5.47852 8.45898C5.47852 8.45898 5.27344 8.01953 5.27344 7.375C5.27344 6.37891 5.85938 5.61719 6.5918 5.61719C7.20703 5.61719 7.5 6.08594 7.5 6.64258C7.5 7.25781 7.08984 8.19531 6.88477 9.07422C6.73828 9.77734 7.26562 10.3633 7.96875 10.3633C9.25781 10.3633 10.2539 9.01562 10.2539 7.05273C10.2539 5.29492 8.99414 4.09375 7.23633 4.09375C5.15625 4.09375 3.95508 5.64648 3.95508 7.22852C3.95508 7.87305 4.18945 8.54688 4.48242 8.89844C4.54102 8.95703 4.54102 9.04492 4.54102 9.10352C4.48242 9.33789 4.33594 9.83594 4.33594 9.92383C4.30664 10.0703 4.21875 10.0996 4.07227 10.041C3.16406 9.60156 2.60742 8.2832 2.60742 7.19922C2.60742 4.91406 4.27734 2.80469 7.41211 2.80469C9.93164 2.80469 11.8945 4.62109 11.8945 7.02344C11.8945 9.51367 10.3125 11.5352 8.11523 11.5352C7.38281 11.5352 6.67969 11.1543 6.44531 10.6855C6.44531 10.6855 6.09375 12.0918 6.00586 12.4141C5.83008 13.0586 5.39062 13.8496 5.09766 14.3184C5.77148 14.5527 6.50391 14.6406 7.26562 14.6406C11.2793 14.6406 14.5312 11.3887 14.5312 7.375Z"
                                                    fill="black" />
                                            </svg>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product quickview end -->


    @stack('js')
    <!-- all js -->
    <script src="{{ asset('frontend_template/landingPage') }}/assets/js/vendor.js"></script>
    <script src="{{ asset('frontend_template/landingPage') }}/assets/js/main.js"></script>
    <script type="text/javascript">
        $(".cart_update").change(function(e) {
            e.preventDefault();

            var ele = $(this);

            $.ajax({
                url: '{{ route('update_cart') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id"),
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        });

        $(".cart_remove").click(function(e) {
            e.preventDefault();

            var ele = $(this);

            if (confirm("Do you really want to remove?")) {
                $.ajax({
                    url: '{{ route('remove_from_cart') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.parents("tr").attr("data-id")
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            }
        });
    </script>

</body>

</html>
