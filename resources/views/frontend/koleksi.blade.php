@extends('layouts_frontend.template')
@section('content')
    @include('layouts_frontend.breadcumb')

    <main id="MainContent" class="content-for-layout">
        <div class="collection mt-100">
            <div class="container">
                <div class="row flex-row-reverse">
                    <!-- product area start -->
                    <div class="col-lg-9 col-md-12 col-12">
                        <div class="filter-sort-wrapper d-flex justify-content-between flex-wrap">
                            <div class="collection-title-wrap d-flex align-items-end">
                                <h2 class="collection-title heading_24 mb-0">Semua Ayam</h2>
                                <p class="collection-counter text_16 mb-0 ms-2">({{ $ayam->total() }} Ayam
                                    Tersedia)</p>
                            </div>
                        </div>
                        <div class="collection-product-container">
                            <div class="row">
                                @foreach ($ayam as $item)
                                    <div class="col-lg-4 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                        <div class="product-card">
                                            <div class="product-card-img">
                                                <a class="hover-switch" href="{{ url('/detail/' . $item->id . '/show') }}">
                                                    <img style="width:255px ;height:255px; border: 2px solid red;"
                                                        class="secondary-img" src="{{ $item->cover }}" alt="product-img">
                                                    <img style="width:250px ;height:250px; border: 2px solid red; padding: 10px; border-radius: 25px;"
                                                        class="primary-img" src="{{ $item->cover }}" alt="product-img">
                                                </a>

                                                <div class="product-badge">
                                                    <span
                                                        class="badge-label badge-percentage rounded">{{ $item->status }}</span>
                                                </div>

                                                <div
                                                    class="product-card-action product-card-action-2 justify-content-center">
                                                    <a href="{{ url('/detail/' . $item->id . '/show') }}"
                                                        class="action-card action-quickview">
                                                        <svg width="26" height="26" viewBox="0 0 26 26"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10 0C15.5117 0 20 4.48828 20 10C20 12.3945 19.1602 14.5898 17.75 16.3125L25.7188 24.2812L24.2812 25.7188L16.3125 17.75C14.5898 19.1602 12.3945 20 10 20C4.48828 20 0 15.5117 0 10C0 4.48828 4.48828 0 10 0ZM10 2C5.57031 2 2 5.57031 2 10C2 14.4297 5.57031 18 10 18C14.4297 18 18 14.4297 18 10C18 5.57031 14.4297 2 10 2ZM11 6V9H14V11H11V14H9V11H6V9H9V6H11Z"
                                                                fill="#00234D" />
                                                        </svg>
                                                    </a>
                                                    <a href="{{ url('add_to_cart', $item->id) }}"
                                                        class="action-card action-addtocart">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                                            viewBox="0 0 576 512">
                                                            <path
                                                                d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-card-details">

                                                <h3 class="product-card-title">
                                                    <a
                                                        href="{{ route('index.koleksi.show', $item->id) }}">{{ $item->jenis->nama }}</a>
                                                </h3>
                                                <div class="product-card-price">
                                                    <span class="card-price-regular">{{ $item->kategori->nama }}</span>
                                                    <span class="card-price-regular">Kode :
                                                        {{ $item->kode }}</span><br>
                                                    <span
                                                        class="card-price-compare text-decoration">{{ $item->deskripsi }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- PAGINATION -->
                        {{ $ayam->links('vendor.pagination.pagination_view') }}
                        <!-- END PAGINATION -->

                    </div>
                    <!-- product area end -->

                    <!-- sidebar start -->
                    <div class="col-lg-3 col-md-12 col-12">
                        <div class="collection-filter filter-drawer">
                            <div class="filter-widget d-lg-none d-flex align-items-center justify-content-between">
                                <h5 class="heading_24">Filter By</h4>
                                    <button type="button"
                                        class="btn-close text-reset filter-drawer-trigger d-lg-none"></button>
                            </div>

                            <div class="filter-widget d-lg-none">
                                <div class="filter-header faq-heading heading_18 d-flex align-items-center justify-content-between border-bottom"
                                    data-bs-toggle="collapse" data-bs-target="#filter-mobile-sort">
                                    <span>
                                        <span class="sorting-title me-2">Sort by:</span>
                                        <span class="active-sorting">Featured</span>
                                    </span>
                                    <span class="faq-heading-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="icon icon-down">
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </span>
                                </div>

                            </div>
                            <div class="filter-widget">
                                <div class="filter-header faq-heading heading_18 d-flex align-items-center justify-content-between border-bottom"
                                    data-bs-toggle="collapse" data-bs-target="#filter-collection">
                                    Kategori
                                    <span class="faq-heading-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="icon icon-down">
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
                                                    <span class="filter-text">
                                                        <a style="color:#000"
                                                            href="{{ url("tampil/$item->id") }}">{{ $item->nama }}</a></span>
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
@endsection
