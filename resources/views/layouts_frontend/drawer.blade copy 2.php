<div class="offcanvas offcanvas-end" tabindex="-1" id="drawer-cart">
    <div class="offcanvas-header border-btm-black">
        <h5 class="cart-drawer-heading text_16">Your Cart (1104)</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body p-0">
        <div class="cart-content-area d-flex justify-content-between flex-column">
            <div class="minicart-loop custom-scrollbar">
                <!-- minicart item -->
                @foreach($data as $data)
                @if($data->ayam)
                <div class="minicart-item d-flex">
                    <div class="mini-img-wrapper">
                        <img class="mini-img" src="cover/{{ $data->ayam->cover }}" alt="img">
                    </div>
                    <div class="product-info">
                        <h2 class="product-title"><a href="#">{{ $data->ayam->jenis_ayam_id }}</a></h2>
                        <p class="product-vendor">{{ $data->user->implode('name') }}</p>
                        <div class="misc d-flex align-items-end justify-content-between">
                            <div class="quantity d-flex align-items-center justify-content-between">
                                <button class="qty-btn dec-qty"><img src="{{asset('frontend_template/landingPage')}}/assets/img/icon/minus.svg" alt="minus"></button>
                                <input class="qty-input" type="number" name="qty" value="1" min="0">
                                <button class="qty-btn inc-qty"><img src="{{asset('frontend_template/landingPage')}}/assets/img/icon/plus.svg" alt="plus"></button>
                            </div>
                            <div class="product-remove-area d-flex flex-column align-items-end">

                                <button class="btn btn-danger btn-sm cart_remove"><i class="fa fa-trash-o"></i> Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- minicart item -->
                @endif
                @endforeach
            </div>
            <div class="minicart-footer">
                <div class="minicart-calc-area">
                    <div class="minicart-calc d-flex align-items-center justify-content-between">
                        <span class="cart-subtotal mb-0">Subtotal</span>
                        <span class="cart-subprice">$1548.00</span>
                    </div>
                    <p class="cart-taxes text-center my-4">Taxes and shipping will be calculated at checkout.
                    </p>
                </div>
                <div class="minicart-btn-area d-flex align-items-center justify-content-between">
                    <a href="cart.html" class="minicart-btn btn-secondary">View Cart</a>
                    <a href="checkout.html" class="minicart-btn btn-primary">Checkout</a>
                </div>
            </div>
        </div>
        <div class="cart-empty-area text-center py-5 d-none">
            <div class="cart-empty-icon pb-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"></circle>
                    <path d="M16 16s-1.5-2-4-2-4 2-4 2"></path>
                    <line x1="9" y1="9" x2="9.01" y2="9"></line>
                    <line x1="15" y1="9" x2="15.01" y2="9"></line>
                </svg>
            </div>
            <p class="cart-empty">You have no items in your cart</p>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(".cart_update").change(function(e) {
        e.preventDefault();

        var ele = $(this);

        $.ajax({
            url: "{{ route('update_cart') }}",
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
                url: "{{ route('remove_from_cart') }}",
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