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
                                    <h5> Best Selling Products</h5>
                                    {{-- <div class="selected-options">
                                        <ul>
                                            <li>selected(0)</li>
                                            <li><a href="#"><i class="ri-download-2-line"></i></a></li>
                                            <li><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                        </ul>
                                    </div> --}}
                                    <div class="right-options ms-auto">
                                        <ul>
                                            <li>
                                                {{-- @if ($topProduct) --}}
                                                {{-- <a class="btn btn-solid"  wire:model='addTopProduct()'
                                                >Add
                                                Top Products ({{ count($topProduct) }})</a> --}}
                                                <button wire:click='addbestProduct' class="btn btn-solid">Add
                                                    Best Selling Products </button>
                                                {{-- @endif --}}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                @if (Session::has('message'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('message') }}</div>
                                @endif

                                <style>
                                    .best_product{ 
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
                                    .best_product1{
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
                                    @foreach ($best_products as $item)
                                        <div>
                                            <div>
                                                @if ($item->best_product < 1)
                                                    <input type="checkbox" id="" value="{{ $item->slug }}"
                                                        wire:model='bestProduct' /> <span class="best_product">Best Selling Product</span>
                                               @else
                                                    <input type="checkbox" id="" value="{{ $item->slug }}"
                                                        wire:model='bestProduct1' /> <span class="best_product1"> Remove Best Selling Product</span>
                                                @endif


                                                {{-- {{ $item->best_product }} --}}
                                                <label for="{{ $item->best_product }}">
                                                    <div>
                                                        <img src="{{ asset('images/products/') }}/{{ $item->image }}"
                                                            class="img-fluid " alt="">
                                                    </div>
                                                    <div>
                                                        <span>{{ $item->name }}</span>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
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
