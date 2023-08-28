<div class="header-nav-left" style="margin-bottom: 15px">
    <button class="dropdown-category dropdown-category-2">
        <i class="iconly-Category icli"></i>
        <span>All Categories</span>
    </button>

    <div class="category-dropdown">
        <div class="category-title">
            <h5>Categories</h5>
            <button type="button" class="btn p-0 close-button text-content">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>

        @foreach ($category as $item)
            <ul class="category-list">
                <li class="onhover-category-list">
                    <a href="{{ route('user.category', ['category_slug' => $item->slug]) }}" class="category-name">
                        <img src="../assets/svg/1/vegetable.svg" alt="">
                        <h6>{{ $item->category_name }}</h6>
                        {{-- <i class="fa-solid fa-angle-right"></i> --}}
                    </a>
                </li>
            </ul>
        @endforeach
    </div>
</div>
