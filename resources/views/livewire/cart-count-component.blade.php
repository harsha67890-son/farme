<div id="main">
    <li class="onhover-dropdown">
        @if (Cart::instance('cart')->count() > 0)
            <a href="{{ route('cart') }}" class="header-icon bag-icon">
                <small class="badge-number">{{ Cart::instance('cart')->count() }}</small>
                <i class="iconly-Bag-2 icli"></i>
            </a>
        @endif
        <div class="onhover-div">
            <ul class="cart-list">
                @foreach (Cart::content() as $item)
                    <li>
                        <div class="drop-cart">
                            <a href="product-left-thumbnail.html" class="drop-image">
                                <img src="{{ asset('/images/products') }}/{{ $item->model->image }}"
                                    class="blur-up lazyload" alt="">
                            </a>

                            <div class="drop-contain">
                                <a href="product-left-thumbnail.html">
                                    <h5>{{ $item->model->name }}</h5>
                                </a>
                                <h6><span>{{ $item->qty }} x</span>
                                    {{ $item->model->price }}</h6>
                                <button class="close-button"
                                    wire:click.prevent="destroy('{{ $item->rowId }}')">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>
                        </div>
                    </li>
                @endforeach

            </ul>


            <div class="price-box">
                <h5>Price :</h5>
                <h4 class="theme-color fw-bold">${{ Cart::subtotal() }}</h4>
            </div>

            <div class="button-group">
                <a href="cart.html" class="btn btn-sm cart-button">View Cart</a>
                <a href="checkout.html"
                    class="btn btn-sm cart-button theme-bg-color
                    text-white">Checkout</a>
            </div>
        </div>
    </li>
</div>
