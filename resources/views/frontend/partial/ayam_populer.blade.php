<!-- collection start -->
<div class="featured-collection mt-100 overflow-hidden">
    <div class="collection-tab-inner">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-heading">Ayam Populer</h2>
            </div>
            <div class="row">
                @foreach ($ayam_populer as $item)
                    <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                        <div class="product-card">
                            <div class="product-card-img">
                                <a class="hover-switch" href="{{ route('index.koleksi.show', $item->id) }}">
                                    <img style="width:255px ;height:255px; border: 2px solid red;" class="secondary-img"
                                        src="{{ $item->cover }}" alt="product-img">
                                    <img style="width:250px ;height:250px; border: 2px solid red; padding: 10px; border-radius: 25px;"
                                        class="primary-img" src="{{ $item->cover }}" alt="product-img">
                                </a>

                                <div class="product-card-action product-card-action-2 justify-content-center">
                                    <a href="{{ route('index.koleksi.show', $item->id) }}"
                                        class="action-card action-quickview">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                            <path
                                                d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                                        </svg>
                                    </a>
                                    <form action="{{ route('index.keranjang.store') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="ayam" value="{{ $item->id }}">
                                        <button type="submit" class="action-card action-addtocart">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                                viewBox="0 0 576 512">
                                                <path
                                                    d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                                            </svg>
                                        </button>
                                    </form>

                                </div>
                            </div>
                            <div class="product-card-details">

                                <h3 class="product-card-title">
                                    <a href="{{ route('index.koleksi.show', $item->id) }}">{{ $item->jenis->nama }}</a>
                                </h3>
                                <div class="product-card-price">
                                    <span class="card-price-regular">Kode : {{ $item->kode }}</span> <br>
                                    <span class="card-price-compare ">{{ $item->status }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- PAGINATION -->
                {{ $ayam_populer->links('vendor.pagination.pagination_view') }}
                <!-- END PAGINATION -->
            </div>
            <!-- banner start -->
            <div class="banner-section mt-100 overflow-hidden">
                <div class="banner-section-inner">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 col-md-6 col-12" data-aos="fade-right" data-aos-duration="1200">
                                <a class="banner-item position-relative rounded" href="{{ url('/koleksi') }}">
                                    <img style="height: 300px; width:500px" class="banner-img"
                                        src="{{ asset('frontend_template/landingPage') }}/assets/img/banner/2.jpg"
                                        alt="banner-1">
                                    <div class="content-absolute content-slide">
                                        <div class="container height-inherit d-flex align-items-center">
                                            <div class="content-box banner-content p-4">
                                                <p class="heading_18 mb-3 text-white">AYAM IMPORT</p>
                                                <h2 class="heading_34 text-white"> <br>Berbagai Negara</h2>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12" data-aos="fade-left" data-aos-duration="1200">
                                <a class="banner-item position-relative rounded" href="{{ url('/koleksi') }}">
                                    <img style="height: 300px; width:500px" class="banner-img"
                                        src="{{ asset('frontend_template/landingPage') }}/assets/img/banner/1.jpg"
                                        alt="banner-2">
                                    <div class="content-absolute content-slide">
                                        <div class="container height-inherit d-flex align-items-center">
                                            <div class="content-box banner-content p-4">
                                                <p class="heading_18 mb-3 text-white">Ayam Lokal</p>
                                                <h2 class="heading_34 text-white"> <br>Berasal dari peternakan
                                                    lokal terbaik</h2>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- banner end -->

            <div class="view-all text-center" data-aos="fade-up" data-aos-duration="700">
                <a class="btn-primary" href="{{ url('/koleksi') }}">VIEW ALL</a>
            </div>
        </div>
    </div>
</div>
<!-- collection end -->
