<div class="page-wrapper compact-wrapper" id="pageWrapper">


    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Container-fluid starts-->
        <div class="page-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="title-header option-title justify-content-start">
                                    <h5>Top Products</h5>
                                    {{-- <div class="selected-options">
                                        <ul>
                                            <li>selected(0)</li>
                                            <li><a href="#"><i class="ri-download-2-line"></i></a></li>
                                            <li><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                        </ul>
                                    </div> --}}

                                    <div class="right-options ms-auto">
                                        <ul>

                                            {{-- @if ($topProduct) --}}
                                            {{-- <a class="btn btn-solid"  wire:model='addTopProduct()'
                                                >Add
                                                Top Products ({{ count($topProduct) }})</a> --}}
                                            <button wire:click='addSelectProduct' class="btn btn-solid">Add
                                                Select Products </button>
                                            <button wire:click='addTopProduct' class="btn btn-solid">Add
                                                Top Products </button>
                                            {{-- @endif --}}

                                        </ul>
                                    </div>
                                </div>
                                @if (Session::has('message'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('message') }}</div>
                                @endif

                                <style>
                                    .top_product {
                                        background-color: rgba(82, 168, 70, 0.781);
                                        color: #ffffff;
                                        font-weight: 300;
                                        font-size: .8rem;
                                        padding: .2rem .5rem;
                                        margin-right: .5rem;
                                        margin-left: .5rem;
                                        margin-bottom: .5rem;
                                        border-radius: .3rem;
                                        margin-top: 12px;
                                        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
                                    }

                                    .top_product1 {
                                        background-color: rgba(255, 40, 40, 0.757);
                                        color: #ffffff;
                                        font-weight: 300;
                                        font-size: .8rem;
                                        padding: .2rem .5rem;
                                        margin-right: .5rem;
                                        margin-left: .5rem;
                                        margin-bottom: .5rem;
                                        border-radius: .3rem;
                                        margin-top: 12px;
                                        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
                                    }
                                </style>
                                <div
                                    class="row row-cols-xl-6 row-cols-md-5 row-cols-sm-3 row-cols-2 g-sm-3 g-2 media-library-sec ratio_square">
                                    @foreach ($products as $item)
                                        <div>
                                            <div>
                                                @if ($item->top_product < 1)
                                                    <input type="checkbox" id="" value="{{ $item->slug }}"
                                                        wire:model='topProduct' /> <span class="top_product">Top
                                                        Product</span>
                                                @else
                                                    <input type="checkbox" id="" value="{{ $item->slug }}"
                                                        wire:model='topProduct1' /> <span class="top_product1"> Remove
                                                        Top Product</span>
                                                @endif


                                                {{-- {{ $item->top_product }} --}}
                                                <label for="{{ $item->top_product }}">
                                                    <div>
                                                        @if ($item->select_product < 1)
                                                            <input type="checkbox" id="" 
                                                                value="{{ $item->slug }}"
                                                                wire:model='selectProduct' /> <span class="select_product"><strong style="color: black">select</strong></span>
                                                            <img src="{{ asset('images/products/') }}/{{ $item->image }}"
                                                                class="img-fluid " alt="">
                                                        @else
                                                            <input type="checkbox" id=""
                                                                value="{{ $item->slug }}"
                                                                wire:model='selectProduct1' /> <span class="select_product1"><strong style="color: red">not selected</strong></span>
                                                            <img src="{{ asset('images/products/') }}/{{ $item->image }}"
                                                                class="img-fluid " alt="">
                                                        @endif
                                                    </div>
                                                    
                                                    <div>
                                                        <span>{{ $item->name }}</span>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach

                                    {{-- <div>
                                        <div class="library-box">
                                            <input type="checkbox" id="myCheckbox2" />
                                            <label for="myCheckbox2">
                                                <div>
                                                    <img src="assets/images/product/2.png"
                                                        class="img-fluid bg-img bg_size_content" alt="">
                                                </div>
                                                <div class="dropdown">
                                                    <a class="" href="#" role="button"
                                                        id="dropdownMenuLink" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </a>

                                                    <ul class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="dropdownMenuLink">
                                                        <li><a class="dropdown-item d-flex align-items-center"
                                                                href="#"><i
                                                                    class="ri-download-2-line me-2"></i>Download</a>
                                                        </li>
                                                        <li><a class="dropdown-item d-flex align-items-center"
                                                                href="#"><i
                                                                    class="ri-delete-bin-line me-2"></i>Delete</a>
                                                        </li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="library-box">
                                            <input type="checkbox" id="myCheckbox3" />
                                            <label for="myCheckbox3">
                                                <div>
                                                    <img src="assets/images/product/3.png"
                                                        class="img-fluid bg-img bg_size_content" alt="">
                                                </div>
                                                <div class="dropdown">
                                                    <a class="" href="#" role="button"
                                                        id="dropdownMenuLink" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </a>

                                                    <ul class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="dropdownMenuLink">
                                                        <li><a class="dropdown-item d-flex align-items-center"
                                                                href="#"><i
                                                                    class="ri-download-2-line me-2"></i>Download</a>
                                                        </li>
                                                        <li><a class="dropdown-item d-flex align-items-center"
                                                                href="#"><i
                                                                    class="ri-delete-bin-line me-2"></i>Delete</a>
                                                        </li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="library-box">
                                            <input type="checkbox" id="myCheckbox4" />
                                            <label for="myCheckbox4">
                                                <div>
                                                    <img src="assets/images/product/4.png"
                                                        class="img-fluid bg-img bg_size_content" alt="">
                                                </div>
                                                <div class="dropdown">
                                                    <a class="" href="#" role="button"
                                                        id="dropdownMenuLink" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </a>

                                                    <ul class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="dropdownMenuLink">
                                                        <li><a class="dropdown-item d-flex align-items-center"
                                                                href="#"><i
                                                                    class="ri-download-2-line me-2"></i>Download</a>
                                                        </li>
                                                        <li><a class="dropdown-item d-flex align-items-center"
                                                                href="#"><i
                                                                    class="ri-delete-bin-line me-2"></i>Delete</a>
                                                        </li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="library-box">
                                            <input type="checkbox" id="myCheckbox5" />
                                            <label for="myCheckbox5">
                                                <div>
                                                    <img src="assets/images/product/5.png"
                                                        class="img-fluid bg-img bg_size_content" alt="">
                                                </div>
                                                <div class="dropdown">
                                                    <a class="" href="#" role="button"
                                                        id="dropdownMenuLink" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </a>

                                                    <ul class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="dropdownMenuLink">
                                                        <li><a class="dropdown-item d-flex align-items-center"
                                                                href="#"><i
                                                                    class="ri-download-2-line me-2"></i>Download</a>
                                                        </li>
                                                        <li><a class="dropdown-item d-flex align-items-center"
                                                                href="#"><i
                                                                    class="ri-delete-bin-line me-2"></i>Delete</a>
                                                        </li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="library-box">
                                            <input type="checkbox" id="myCheckbox6" />
                                            <label for="myCheckbox6">
                                                <div>
                                                    <img src="assets/images/product/6.png"
                                                        class="img-fluid bg-img bg_size_content" alt="">
                                                </div>
                                                <div class="dropdown">
                                                    <a class="" href="#" role="button"
                                                        id="dropdownMenuLink" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </a>

                                                    <ul class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="dropdownMenuLink">
                                                        <li><a class="dropdown-item d-flex align-items-center"
                                                                href="#"><i
                                                                    class="ri-download-2-line me-2"></i>Download</a>
                                                        </li>
                                                        <li><a class="dropdown-item d-flex align-items-center"
                                                                href="#"><i
                                                                    class="ri-delete-bin-line me-2"></i>Delete</a>
                                                        </li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="library-box">
                                            <input type="checkbox" id="myCheckbox7" />
                                            <label for="myCheckbox7">
                                                <div>
                                                    <img src="assets/images/product/7.png"
                                                        class="img-fluid bg-img bg_size_content" alt="">
                                                </div>
                                                <div class="dropdown">
                                                    <a class="" href="#" role="button"
                                                        id="dropdownMenuLink" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </a>

                                                    <ul class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="dropdownMenuLink">
                                                        <li><a class="dropdown-item d-flex align-items-center"
                                                                href="#"><i
                                                                    class="ri-download-2-line me-2"></i>Download</a>
                                                        </li>
                                                        <li><a class="dropdown-item d-flex align-items-center"
                                                                href="#"><i
                                                                    class="ri-delete-bin-line me-2"></i>Delete</a>
                                                        </li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="library-box">
                                            <input type="checkbox" id="myCheckbox8" />
                                            <label for="myCheckbox8">
                                                <div>
                                                    <img src="assets/images/product/8.png"
                                                        class="img-fluid bg-img bg_size_content" alt="">
                                                </div>
                                                <div class="dropdown">
                                                    <a class="" href="#" role="button"
                                                        id="dropdownMenuLink" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </a>

                                                    <ul class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="dropdownMenuLink">
                                                        <li><a class="dropdown-item d-flex align-items-center"
                                                                href="#"><i
                                                                    class="ri-download-2-line me-2"></i>Download</a>
                                                        </li>
                                                        <li><a class="dropdown-item d-flex align-items-center"
                                                                href="#"><i
                                                                    class="ri-delete-bin-line me-2"></i>Delete</a>
                                                        </li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="library-box">
                                            <input type="checkbox" id="myCheckbox9" />
                                            <label for="myCheckbox9">
                                                <div>
                                                    <img src="assets/images/product/9.png"
                                                        class="img-fluid bg-img bg_size_content" alt="">
                                                </div>
                                                <div class="dropdown">
                                                    <a class="" href="#" role="button"
                                                        id="dropdownMenuLink" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </a>

                                                    <ul class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="dropdownMenuLink">
                                                        <li><a class="dropdown-item d-flex align-items-center"
                                                                href="#"><i
                                                                    class="ri-download-2-line me-2"></i>Download</a>
                                                        </li>
                                                        <li><a class="dropdown-item d-flex align-items-center"
                                                                href="#"><i
                                                                    class="ri-delete-bin-line me-2"></i>Delete</a>
                                                        </li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="library-box">
                                            <input type="checkbox" id="myCheckbox10" />
                                            <label for="myCheckbox10">
                                                <div>
                                                    <img src="assets/images/product/10.png"
                                                        class="img-fluid bg-img bg_size_content" alt="">
                                                </div>
                                                <div class="dropdown">
                                                    <a class="" href="#" role="button"
                                                        id="dropdownMenuLink" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </a>

                                                    <ul class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="dropdownMenuLink">
                                                        <li><a class="dropdown-item d-flex align-items-center"
                                                                href="#"><i
                                                                    class="ri-download-2-line me-2"></i>Download</a>
                                                        </li>
                                                        <li><a class="dropdown-item d-flex align-items-center"
                                                                href="#"><i
                                                                    class="ri-delete-bin-line me-2"></i>Delete</a>
                                                        </li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="library-box">
                                            <input type="checkbox" id="myCheckbox11" />
                                            <label for="myCheckbox11">
                                                <div>
                                                    <img src="assets/images/product/14.png"
                                                        class="img-fluid bg-img bg_size_content" alt="">
                                                </div>
                                                <div class="dropdown">
                                                    <a class="" href="#" role="button"
                                                        id="dropdownMenuLink" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </a>

                                                    <ul class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="dropdownMenuLink">
                                                        <li><a class="dropdown-item d-flex align-items-center"
                                                                href="#"><i
                                                                    class="ri-download-2-line me-2"></i>Download</a>
                                                        </li>
                                                        <li><a class="dropdown-item d-flex align-items-center"
                                                                href="#"><i
                                                                    class="ri-delete-bin-line me-2"></i>Delete</a>
                                                        </li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="library-box">
                                            <input type="checkbox" id="myCheckbox12" />
                                            <label for="myCheckbox12">
                                                <div>
                                                    <img src="assets/images/product/13.png"
                                                        class="img-fluid bg-img bg_size_content" alt="">
                                                </div>
                                                <div class="dropdown">
                                                    <a class="" href="#" role="button"
                                                        id="dropdownMenuLink" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </a>

                                                    <ul class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="dropdownMenuLink">
                                                        <li><a class="dropdown-item d-flex align-items-center"
                                                                href="#"><i
                                                                    class="ri-download-2-line me-2"></i>Download</a>
                                                        </li>
                                                        <li><a class="dropdown-item d-flex align-items-center"
                                                                href="#"><i
                                                                    class="ri-delete-bin-line me-2"></i>Delete</a>
                                                        </li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="library-box">
                                            <input type="checkbox" id="myCheckbox13" />
                                            <label for="myCheckbox13">
                                                <div>
                                                    <img src="assets/images/product/16.png"
                                                        class="img-fluid bg-img bg_size_content" alt="">
                                                </div>
                                                <div class="dropdown">
                                                    <a class="" href="#" role="button"
                                                        id="dropdownMenuLink" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </a>

                                                    <ul class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="dropdownMenuLink">
                                                        <li><a class="dropdown-item d-flex align-items-center"
                                                                href="#"><i
                                                                    class="ri-download-2-line me-2"></i>Download</a>
                                                        </li>
                                                        <li><a class="dropdown-item d-flex align-items-center"
                                                                href="#"><i
                                                                    class="ri-delete-bin-line me-2"></i>Delete</a>
                                                        </li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="library-box">
                                            <input type="checkbox" id="myCheckbox14" />
                                            <label for="myCheckbox14">
                                                <div>
                                                    <img src="assets/images/product/20.png"
                                                        class="img-fluid bg-img bg_size_content" alt="">
                                                </div>
                                                <div class="dropdown">
                                                    <a class="" href="#" role="button"
                                                        id="dropdownMenuLink" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </a>

                                                    <ul class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="dropdownMenuLink">
                                                        <li><a class="dropdown-item d-flex align-items-center"
                                                                href="#"><i
                                                                    class="ri-download-2-line me-2"></i>Download</a>
                                                        </li>
                                                        <li><a class="dropdown-item d-flex align-items-center"
                                                                href="#"><i
                                                                    class="ri-delete-bin-line me-2"></i>Delete</a>
                                                        </li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </label>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <div class="container-fluid">
                <!-- footer start-->
                <footer class="footer">
                    <div class="row">
                        <div class="col-md-12 footer-copyright text-center">
                            <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</div>
