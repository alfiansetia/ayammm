<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apps | Ayam</title>

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="http://localhost:8000/frontend_template/shop/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="http://localhost:8000/frontend_template/shop/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="http://localhost:8000/frontend_template/shop/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="http://localhost:8000/frontend_template/shop/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="http://localhost:8000/frontend_template/shop/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="http://localhost:8000/frontend_template/shop/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="http://localhost:8000/frontend_template/shop/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="http://localhost:8000/frontend_template/shop/css/style.css" type="text/css">
    <script nonce="646886de-d0ca-4381-ba23-22bcaeca07c5">
        (function(w, d) {
            ! function(f, g, h, i) {
                f[h] = f[h] || {};
                f[h].executed = [];
                f.zaraz = {
                    deferred: [],
                    listeners: []
                };
                f.zaraz.q = [];
                f.zaraz._f = function(j) {
                    return function() {
                        var k = Array.prototype.slice.call(arguments);
                        f.zaraz.q.push({
                            m: j,
                            a: k
                        })
                    }
                };
                for (const l of ["track", "set", "debug"]) f.zaraz[l] = f.zaraz._f(l);
                f.zaraz.init = () => {
                    var m = g.getElementsByTagName(i)[0],
                        n = g.createElement(i),
                        o = g.getElementsByTagName("title")[0];
                    o && (f[h].t = g.getElementsByTagName("title")[0].text);
                    f[h].x = Math.random();
                    f[h].w = f.screen.width;
                    f[h].h = f.screen.height;
                    f[h].j = f.innerHeight;
                    f[h].e = f.innerWidth;
                    f[h].l = f.location.href;
                    f[h].r = g.referrer;
                    f[h].k = f.screen.colorDepth;
                    f[h].n = g.characterSet;
                    f[h].o = (new Date).getTimezoneOffset();
                    if (f.dataLayer)
                        for (const s of Object.entries(Object.entries(dataLayer).reduce(((t, u) => ({
                                ...t[1],
                                ...u[1]
                            })), {}))) zaraz.set(s[0], s[1], {
                            scope: "page"
                        });
                    f[h].q = [];
                    for (; f.zaraz.q.length;) {
                        const v = f.zaraz.q.shift();
                        f[h].q.push(v)
                    }
                    n.defer = !0;
                    for (const w of [localStorage, sessionStorage]) Object.keys(w || {}).filter((y => y.startsWith("_zaraz_"))).forEach((x => {
                        try {
                            f[h]["z_" + x.slice(7)] = JSON.parse(w.getItem(x))
                        } catch {
                            f[h]["z_" + x.slice(7)] = w.getItem(x)
                        }
                    }));
                    n.referrerPolicy = "origin";
                    n.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(f[h])));
                    m.parentNode.insertBefore(n, m)
                };
                ["complete", "interactive"].includes(g.readyState) ? zaraz.init() : f.addEventListener("DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);
    </script>
</head>

<body>

    <div id="preloder">
        <div class="loader"></div>
    </div>

    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img style="height: 50px;width:50px" src="http://localhost:8000/frontend_template/ayammm/images/ayam_logo.png" alt="">Ayam Apps</a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">

            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="{{ url ('/')}}">Home</a></li>
                <li><a href="http://localhost:8000/frontend_template/shop/shop-grid.html">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="http://localhost:8000/frontend_template/shop/shop-details.html">Shop Details</a></li>
                        <li><a href="http://localhost:8000/frontend_template/shop/shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="http://localhost:8000/frontend_template/shop/checkout.html">Check Out</a></li>
                        <li><a href="http://localhost:8000/frontend_template/shop/blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="http://localhost:8000/frontend_template/shop/blog.html">Blog</a></li>
                <li><a href="http://localhost:8000/frontend_template/shop/contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> >Email@gmail.com</li>
            </ul>
        </div>
    </div>


    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>

                                <li><i class="fa fa-envelope"></i> Email@gmail.com</li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>

                            <div class="header__top__right__auth">
                                <a href="#"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="http://localhost:8000"><img style="height: 50px;width:50px" src="http://localhost:8000/frontend_template/ayammm/images/ayam_logo.png" alt="">Ayam Apps</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="http://localhost:8000">Home</a></li>
                            <li><a href="http://localhost:8000/frontend_template/shop/shop-grid.html">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="http://localhost:8000/frontend_template/shop/shop-details.html">Shop Details</a></li>
                                    <li><a href="http://localhost:8000/frontend_template/shop/shoping-cart.html">Shoping Cart</a></li>
                                    <li><a href="http://localhost:8000/frontend_template/shop/checkout.html">Check Out</a></li>
                                    <li><a href="http://localhost:8000/frontend_template/shop/blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="http://localhost:8000/frontend_template/shop/blog.html">Blog</a></li>
                            <li><a href="http://localhost:8000/frontend_template/shop/contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>


    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Kategori </span>
                        </div>
                        <ul>
                            <li><a href="http://localhost:8000/tampil/1">Jantan </a></li>
                            <li><a href="http://localhost:8000/tampil/2">Betina </a></li>
                            <li><a href="http://localhost:8000/tampil/3">Anakan </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>08128095212</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg " data-setbg="http://localhost:8000/frontend_template/shop/img/hero/ayam_wall.png">
                        <div class="hero__text">
                            <span>Jual Beli </span>
                            <h2 style="color:white">Ayam Import <br />100% Trust</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <a href="#" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="categories">
        <div class="container">
            <div class="row">
                @foreach ($Post as $item)
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges http://localhost:8000/tampil/2">
                    <div class="featured__item">

                        <div class="featured__item__pic set-bg" data-setbg="cover/1688438931_ayam pelung.jpg">
                            <img style="height: 200px;width: 200px;" src="{{url ('cover').'/'.$item->cover}}" class="img-responsive img" alt="" srcset="">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="{{ url ('/detail/' . $item->id.'/show')}}"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                            <div class="featured__item__text">
                                <h6><a href="{{ url ('/detail/' . $item->id.'/show')}}">Jenis Ayam : {{ $item->jenis_ayam }}</a></h6>
                                <h5><span>Ready Stok</span></h5>
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>


    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>From The Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img style="width:150px; height:150px" src="http://localhost:8000/berita/230704032435.jpg" />

                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> 2023-07-04</li>

                            </ul>
                            <h5><a href="#">Festival Ayam</a></h5>
                            <p>Diam dolor diam ipsum tempor sit. Clita erat ipsum et lorem stet no labore lorem sit clita duo justo magna dolore</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img style="width:150px; height:150px" src="http://localhost:8000/berita/230619063936.jpg" />

                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> 2023-06-19</li>

                            </ul>
                            <h5><a href="#"></a></h5>
                            <p>Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et eos sadipscing labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor consetetur takimata eirmod, dolores takimata consetetur invidunt magna dolores aliquyam dolores dolore. Amet erat amet et magna</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="http://localhost:8000/frontend_template/shop/index.html"><img style="height: 50px;width:50px" src="http://localhost:8000/frontend_template/ayammm/images/ayam_logo.png" alt="">Apps Ayam</a>
                        </div>
                        <ul>
                            <li>Address: Jl Surabaya</li>
                            <li>Phone: 08128095212</li>
                            <li>Email: <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7018151c1c1f30131f1c1f021c19125e131f1d">Email@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                            <p>
                                Copyright &copy;<script data-cfasync="false" src="cdn/email-decode.min.js"></script>
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            </p>
                        </div>
                        <div class="footer__copyright__payment"><img src="http://localhost:8000/frontend_template/shop/img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="http://localhost:8000/frontend_template/shop/js/jquery-3.3.1.min.js"></script>
    <script src="http://localhost:8000/frontend_template/shop/js/bootstrap.min.js"></script>
    <script src="http://localhost:8000/frontend_template/shop/js/jquery.nice-select.min.js"></script>
    <script src="http://localhost:8000/frontend_template/shop/js/jquery-ui.min.js"></script>
    <script src="http://localhost:8000/frontend_template/shop/js/jquery.slicknav.js"></script>
    <script src="http://localhost:8000/frontend_template/shop/js/mixitup.min.js"></script>
    <script src="http://localhost:8000/frontend_template/shop/js/owl.carousel.min.js"></script>
    <script src="http://localhost:8000/frontend_template/shop/js/main.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7e048eb40c293fc9","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.4.0","si":100}' crossorigin="anonymous"></script>
</body>

</html>