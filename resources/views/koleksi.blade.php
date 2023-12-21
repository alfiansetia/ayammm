@include('layouts_frontend/header')
<!-- header end -->

<!-- breadcrumb start -->
<div class="breadcrumb">
    <div class="container">
        <ul class="list-unstyled d-flex align-items-center m-0">
            <li><a href="/">Home</a></li>
            <li>
                <svg class="icon icon-breadcrumb" width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.4">
                        <path d="M25.9375 8.5625L23.0625 11.4375L43.625 32L23.0625 52.5625L25.9375 55.4375L47.9375 33.4375L49.3125 32L47.9375 30.5625L25.9375 8.5625Z" fill="#000" />
                    </g>
                </svg>
            </li>
            <li>Ayam </li>
        </ul>
    </div>
</div>
<!-- breadcrumb end -->

<main id="MainContent" class="content-for-layout">
    <div class="collection mt-100">
        <div class="container">
            <div class="row flex-row-reverse">
                <!-- product area start -->
                <div class="col-lg-9 col-md-12 col-12">
                    <div class="filter-sort-wrapper d-flex justify-content-between flex-wrap">
                        <div class="collection-title-wrap d-flex align-items-end">
                            <h2 class="collection-title heading_24 mb-0">Semua Ayam</h2>
                            <p class="collection-counter text_16 mb-0 ms-2">({{ $jumlah }} Ayam Tersedia)</p>
                        </div>

                    </div>
                    <div class="collection-product-container">
                        <div class="row">

                            @foreach($post as $item)

                            <div class="col-lg-4 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                <div class="product-card">
                                    <div class="product-card-img">
                                        <a class="hover-switch" href="{{ url ('/detail/' . $item->id.'/show')}}">
                                            <img style="width:255px ;height:255px; border: 2px solid red;" class="secondary-img" src="cover/{{ $item->cover }}" alt="product-img">
                                            <img style="width:250px ;height:250px; border: 2px solid red; padding: 10px; border-radius: 25px;" class="primary-img" src="cover/{{ $item->cover }}" alt="product-img">
                                        </a>

                                        <div class="product-badge">
                                            <span class="badge-label badge-percentage rounded">{{$item->status}}</span>
                                        </div>

                                        <div class="product-card-action product-card-action-2 justify-content-center">
                                            <a href="{{ url ('/detail/' . $item->id.'/show')}}" class="action-card action-quickview">
                                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10 0C15.5117 0 20 4.48828 20 10C20 12.3945 19.1602 14.5898 17.75 16.3125L25.7188 24.2812L24.2812 25.7188L16.3125 17.75C14.5898 19.1602 12.3945 20 10 20C4.48828 20 0 15.5117 0 10C0 4.48828 4.48828 0 10 0ZM10 2C5.57031 2 2 5.57031 2 10C2 14.4297 5.57031 18 10 18C14.4297 18 18 14.4297 18 10C18 5.57031 14.4297 2 10 2ZM11 6V9H14V11H11V14H9V11H6V9H9V6H11Z" fill="#00234D" />
                                                </svg>
                                            </a>
                                            @foreach($kontak as $k)
                                            <a href="{{ url('add_to_cart', $item->id) }}" class="action-card action-addtocart">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                    <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                                                </svg>
                                            </a>
                                            @endforeach

                                            <!-- @foreach($kontak as $k)
                                            <a href="https://wa.me/{{$k->no_telp}}" class="action-card action-addtocart">
                                                @endforeach

                                                <svg class="icon icon-phone" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="whatsapp">
                                                    <g data-name="wa whatsapp message communication chat">
                                                        <path d="M16 3A13 13 0 0 0 4.53 22.13L3 27.74a1 1 0 0 0 .27 1A1 1 0 0 0 4 29a.84.84 0 0 0 .27 0l5.91-1.65a1 1 0 0 0-.53-1.93l-4.23 1.14 1.15-4.3a1 1 0 0 0-.1-.76A11 11 0 1 1 16 27a11.23 11.23 0 0 1-1.84-.15 1 1 0 0 0-1.15.82 1 1 0 0 0 .82 1.15A13 13 0 1 0 16 3Z"></path>
                                                        <path d="m15 11.21-1.16-1.6a2.06 2.06 0 0 0-1.5-.84 2.08 2.08 0 0 0-1.62.6l-1.2 1.2a2.81 2.81 0 0 0-.8 2.08c0 1.77 1.36 4 4 6.6 3.09 3 5.23 4 6.69 4a2.7 2.7 0 0 0 2-.81l1.2-1.2a2 2 0 0 0-.24-3.11L20.8 17a2.09 2.09 0 0 0-1.83-.3l-1.49.47a.53.53 0 0 1-.26-.09 11.42 11.42 0 0 1-2.35-2.26.31.31 0 0 1 0-.11c.13-.44.35-1.15.5-1.64a2 2 0 0 0-.37-1.86Zm1.29 7.63a2.33 2.33 0 0 0 1.75.2l1.54-.46 1.61 1.25L20 21c-.48.47-2.25.33-5.86-3.21-3-2.91-3.41-4.5-3.41-5.18A.89.89 0 0 1 11 12l1.28-1.19 1.18 1.65c-.16.49-.39 1.22-.51 1.65a2.12 2.12 0 0 0 .05 1.4 11.24 11.24 0 0 0 3.33 3.33Z"></path>
                                                    </g>
                                                </svg>
                                            </a> -->
                                        </div>
                                    </div>
                                    <div class="product-card-details">

                                        <h3 class="product-card-title">
                                            <a href="{{ url ('/detail/' . $item->id.'/show')}}">{{$item->jenis_ayam_id}}</a>
                                        </h3>
                                        <div class="product-card-price">
                                            <span class="card-price-regular">{{$item->jenis_ayam}}</span>
                                            <span class="card-price-regular">Kode : {{$item->kode_ayam}}</span><br>
                                            <span class="card-price-compare text-decoration">{{$item->deskripsi}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                        </div>
                    </div>

                    <!-- PAGINATION -->
                    {{ $post->links('vendor.pagination.pagination_view') }}
                    <!-- END PAGINATION -->

                </div>
                <!-- product area end -->

                <!-- sidebar start -->
                <div class="col-lg-3 col-md-12 col-12">
                    <div class="collection-filter filter-drawer">
                        <div class="filter-widget d-lg-none d-flex align-items-center justify-content-between">
                            <h5 class="heading_24">Filter By</h4>
                                <button type="button" class="btn-close text-reset filter-drawer-trigger d-lg-none"></button>
                        </div>

                        <div class="filter-widget d-lg-none">
                            <div class="filter-header faq-heading heading_18 d-flex align-items-center justify-content-between border-bottom" data-bs-toggle="collapse" data-bs-target="#filter-mobile-sort">
                                <span>
                                    <span class="sorting-title me-2">Sort by:</span>
                                    <span class="active-sorting">Featured</span>
                                </span>
                                <span class="faq-heading-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-down">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </span>
                            </div>

                        </div>
                        <div class="filter-widget">
                            <div class="filter-header faq-heading heading_18 d-flex align-items-center justify-content-between border-bottom" data-bs-toggle="collapse" data-bs-target="#filter-collection">
                                Kategori
                                <span class="faq-heading-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-down">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </span>
                            </div>
                            @foreach ($kategori as $item)

                            <div id="filter-collection" class="accordion-collapse collapse show">
                                <ul class="filter-lists list-unstyled mb-0">
                                    <li class="filter-item">
                                        <label class="filter-label">
                                            <input type="checkbox" />
                                            <span class="filter-checkbox rounded me-2"></span>
                                            <span class="filter-text"> <a style="color:#000" href="{{ url ("tampil/$item->id") }}">{{$item->jenis_ayam }}</a></span>
                                        </label>
                                    </li>

                                </ul>
                            </div>
                            @endforeach
                        </div>



                    </div>
                </div>
                <!-- sidebar end -->
            </div>
        </div>
    </div>
</main>
@include('layouts_frontend/footer')