@foreach ($data as $data)
    @if ($data->ayam)
        <div class="minicart-item d-flex">
            <div class="mini-img-wrapper">
                <img class="mini-img" src="{{ $ayam->cover }}" alt="img">
            </div>
            <div class="product-info">
                <h2 class="product-title"><a href="#">{{ $data->user->implode('email') }}</a></h2>
                <p class="product-vendor">{{ $data->user->implode('name') }}</p>
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
                        <div class="product-price">$580.00</div>

                        <a href="#" class="product-remove cart_remove">Remove</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- minicart item -->
    @endif
@endforeach
