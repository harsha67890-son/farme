<div id="main">
    <li class="onhover-dropdown">
        <a href="{{ route('wishlist') }}"  class="header-icon swap-icon">
            @if (Cart::instance('wishlist')->count() > 0)
                <small
                    class="badge-number">{{ Cart::instance('wishlist')->count() }}</small>
            @endif
            <i class="iconly-Heart icli"></i>
        </a>
    </li>
</div>
