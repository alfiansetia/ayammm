<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                <h2 class="footer-heading">Petsitting</h2>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <ul class="ftco-footer-social p-0">
                    <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>
                </ul>
            </div>
            <style>
                .limited-text {
                    white-space: nowrap;
                    width: 150px;
                    overflow: hidden;
                    text-overflow: ellipsis;
                }

                .limited-text2 {
                    white-space: nowrap;
                    width: 250px;
                    overflow: hidden;
                    text-overflow: ellipsis;
                }
            </style>
            <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                <h2 class="footer-heading">Latest News</h2>
                @foreach($berita as $item)
                <div class="block-21 mb-4 d-flex">
                    <a class="img mr-4 rounded" style="background-image: url(frontend_template/ayammm/images/image_1.jpg);"></a>
                    <div class="text">
                        <h3 class="heading limited-text"><a href="#">{{ $item->isi }}</a></h3>
                        <div class="meta">
                            <div><a href="#"><span class="icon-calendar"></span> {{ $item->tanggal }}</a></div>
                            <div><a href="#"><span class="icon-person"></span> {{ $item->user }}</a></div>
                            <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-md-6 col-lg-3 pl-lg-5 mb-4 mb-md-0">
                <h2 class="footer-heading">Quick Links</h2>
                <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">Home</a></li>
                    <li><a href="#" class="py-2 d-block">About</a></li>
                    <li><a href="#" class="py-2 d-block">Services</a></li>
                    <li><a href="#" class="py-2 d-block">Works</a></li>
                    <li><a href="#" class="py-2 d-block">Blog</a></li>
                    <li><a href="#" class="py-2 d-block">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                <h2 class="footer-heading">Have a Questions?</h2>
                <div class="block-23 mb-3">
                    @foreach($kontak as $item)
                    <ul>
                        <li><span class="icon fa fa-map"></span><span class="text">{{$item->alamat}}</span></li>
                        <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">{{$item->no_telp}}</span></a></li>
                        <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">{{$item->email}}</span></a></li>
                        <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">{{$item->alamat}}</span></a></li>
                        <li><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.902765941829!2d106.82503327428147!3d-6.143761360225258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5faf1d463c5%3A0xf88d17795c8b69ba!2sPT.%20Nextindo%20Global%20Solusi!5e0!3m2!1sid!2sid!4v1687166906820!5m2!1sid!2sid" width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0"></iframe></li>
                    </ul>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12 text-center">

                <p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="" target=""></a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer>




<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg></div>


<script src="{{asset('frontend_template/ayammm')}}/js/jquery.min.js"></script>
<script src="{{asset('frontend_template/ayammm')}}/js/jquery-migrate-3.0.1.min.js"></script>
<script src="{{asset('frontend_template/ayammm')}}/js/popper.min.js"></script>
<script src="{{asset('frontend_template/ayammm')}}/js/bootstrap.min.js"></script>
<script src="{{asset('frontend_template/ayammm')}}/js/jquery.easing.1.3.js"></script>
<script src="{{asset('frontend_template/ayammm')}}/js/jquery.waypoints.min.js"></script>
<script src="{{asset('frontend_template/ayammm')}}/js/jquery.stellar.min.js"></script>
<script src="{{asset('frontend_template/ayammm')}}/js/jquery.animateNumber.min.js"></script>
<script src="{{asset('frontend_template/ayammm')}}/js/bootstrap-datepicker.js"></script>
<script src="{{asset('frontend_template/ayammm')}}/js/jquery.timepicker.min.js"></script>
<script src="{{asset('frontend_template/ayammm')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('frontend_template/ayammm')}}/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('frontend_template/ayammm')}}/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{asset('frontend_template/ayammm')}}/js/google-map.js"></script>
<script src="{{asset('frontend_template/ayammm')}}/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script src="{{asset('frontend_template/ayammm')}}/js/lightbox-plus-jquery.min.js"></script>
<script>
    var myCarousel = document.querySelector('#myCarousel')
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 2000,
        wrap: false
    })
</script>

<script>
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true
    })
</script>

</body>

</html>