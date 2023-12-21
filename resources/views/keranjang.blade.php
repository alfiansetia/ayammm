@include('layouts_frontend/header')
<!-- breadcrumb start -->
<div class="container">
    <div class="breadcrumb">

        <div class="container">
            <ul class="list-unstyled d-flex align-items-center m-0">
                <li><a href="/">Home</a></li>
                <li>
                    <svg class="icon icon-breadcrumb" width="64" height="64" viewBox="0 0 64 64" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.4">
                            <path
                                d="M25.9375 8.5625L23.0625 11.4375L43.625 32L23.0625 52.5625L25.9375 55.4375L47.9375 33.4375L49.3125 32L47.9375 30.5625L25.9375 8.5625Z"
                                fill="#000" />
                        </g>
                    </svg>
                </li>
                <li>Pesanan Anda</li>


            </ul>
            @auth
                <h5 class="cart-drawer-heading text-align-center"> {{ Auth::user()->name }}</h5>
            @endauth
            @auth
                @foreach ($query as $data)
                    <div class="minicart-item d-flex">
                        <div class="mini-img-wrapper">
                            <img class="mini-img" src="cover/{{ $data->ayam->cover }}" alt="img">
                        </div>
                        <div class="product-info">
                            <h2 class="product-title"><a href="">{{ $data->ayam->jenis_ayam_id }}</a></h2>
                            <p class="product-vendor">{{ $data->ayam->kode_ayam }}</p>
                            <div class="misc d-flex align-items-end justify-content-between">
                                <div class="quantity d-flex align-items-center justify-content-between">
                                    <button class="qty-btn dec-qty"><img
                                            src="{{ asset('frontend_template/landingPage') }}/assets/img/icon/minus.svg"
                                            alt="minus"></button>
                                    <input class="qty-input" type="number" name="qty" value="1" min="0">
                                    <button class="qty-btn inc-qty"><img
                                            src="{{ asset('frontend_template/landingPage') }}/assets/img/icon/plus.svg"
                                            alt="plus"></button>
                                </div>
                                <div class="product-remove-area d-flex flex-column align-items-end">

                                    <button class="btn btn-danger btn-sm cart_remove"><i class="fa fa-trash-o"></i>
                                        Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- minicart item -->
                @endforeach
            @endauth
        </div>
    </div>
    <div class="minicart-footer">
        <div class="minicart-calc-area">
            <div class="minicart-calc d-flex align-items-center justify-content-between">
                <!-- <span class="cart-subtotal mb-0">Subtotal</span>
                        <span class="cart-subprice">$1548.00</span> -->
            </div>
            <p class="cart-taxes text-center my-4">Pesan dan Lihat Keranjang pemesananmu.
            </p>
        </div>
        <div class="minicart-btn-area d-flex align-items-center justify-content-between">
            <h3 class="product-card-title">

            </h3>
            <a href="{{ url('/exportlaporan/') }}" class="minicart-btn btn-secondary">Cetak Pesanan</a>
            @foreach ($kontak as $item)
                <a href="https://wa.me/{{ $item->no_telp }}" class="minicart-btn btn-primary">Pesan</a>
            @endforeach
        </div>
    </div>
</div>
<!-- breadcrumb end -->
