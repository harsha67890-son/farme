<div class="page-wrapper compact-wrapper" id="pageWrapper">

    <div class="page-body-wrapper">
        <!-- Container-fluid starts-->
        <div class="page-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-table">
                            <div class="card-body">
                                <div class="title-header option-title d-sm-flex d-block">
                                    <h5>Products List</h5>
                                    <div class="right-options">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)">import</a>
                                            </li>
                                            <li>
                                                <button type="button" class="btn btn-solid" wire:click="export">Export
                                                    Data</button>
                                            </li>
                                            <li>
                                                <a class="btn btn-solid" href="{{ route('admin.product.add') }}">Add
                                                    Product</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row" style="box-shadow: rgba(0, 0, 0, 0.2) 0px 20px 30px;">
                                    <div class="col-md-6">
                                        <p class="h4">Import here to <span style="font-weight:bolder">Edit</span>
                                            Existing products</p>
                                        <form wire:submit.prevent="importUpdate" enctype="multipart/form-data">


                                            <div class="form-group">

                                                <label for="exampleInputName">File:</label>

                                                <input type="file" class="form-control" id="exampleInputName"
                                                    wire:model="file2">
                                                <small>Note<b class="text-danger">*</b> : File type has xml,
                                                    xlsX</small>


                                            </div>

                                            <button type="submit" class="btn btn-primary mt-2"> import to
                                                update</button>

                                        </form>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="h4">Import here to <span style="font-weight:bolder">Add</span> New
                                            Products</p>
                                        <form wire:submit.prevent="submit" enctype="multipart/form-data">

                                            <div>

                                                @if (session()->has('message'))
                                                    <div class="alert alert-success">

                                                        {{ session('message') }}

                                                    </div>
                                                @endif
                                                <div class="card-body">
                                                    @if ($errors->any())
                                                        <div class="alert alert-danger">
                                                            <ul>
                                                                @foreach ($errors->all() as $error)
                                                                    <li>{{ $error }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    @endif
                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label for="exampleInputName">File:</label>

                                                <input type="file"
                                                    class="form-control @error('file') is invalid @enderror"
                                                    id="exampleInputName" wire:model="file">
                                                <small>Note<b class="text-danger">*</b> : File type has xml,
                                                    xlsX</small>
                                                @error('file')
                                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                {{-- @error('name') <span class="text-danger">{{ $message }}</span> @enderror --}}

                                            </div>
                                            <button type="submit" class="btn btn-solid mt-2 mb-3">import to
                                                insert</button>

                                        </form>
                                    </div>
                                </div>

                                <div>
                                    <div class="table-responsive">
                                        <table class="table all-package theme-table table-product" id="table_id">
                                            <thead>
                                                <tr>
                                                    <th>Product Image</th>
                                                    <th>Product Name</th>
                                                    <th>Category</th>
                                                    <th>Current Qty</th>
                                                    <th>Pack Size</th>
                                                    <th>Price</th>
                                                    <th>Status</th>
                                                    <th>Option</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($products as $item)
                                                    <tr>
                                                        <td>
                                                            <div class="table-image">
                                                                <img src="{{ asset('/images/products') }}/{{ $item->image }}"
                                                                    class="img-fluid" alt="{{ $item->image }}">
                                                            </div>
                                                        </td>

                                                        <td>{{ $item->name }}</td>

                                                        {{-- <td>{{ $item->category->category_name }}</td> --}}

                                                        <td>{{ $item->stock }}</td>

                                                        <td class="td-price">{{ $item->price }}</td>
                                                        {{-- <td class="td-price">{{ $item->packsize->packsize }}</td> --}}

                                                        <td class="status-danger">
                                                            <span>Pending</span>
                                                        </td>

                                                        <td>
                                                            <ul>
                                                                {{-- <li>
                                                                  <a
                                                                        href="{{ route('admin.product.viewProduct', ['slug' => $item->slug]) }}">

                                                                        <i class="ri-eye-line"></i>
                                                                        </a>
                                                                </li> --}}

                                                                {{-- <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li> --}}
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
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
<!-- page-wrapper End-->

<!-- Modal Start -->
{{-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <h5 class="modal-title" id="staticBackdropLabel">Logging Out</h5>
                <p>Are you sure you want to log out?</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                <div class="button-box">
                    <button type="button" class="btn btn--no" data-bs-dismiss="modal">No</button>
                    <button type="button" class="btn  btn--yes btn-primary">Yes</button>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Modal End -->

<!-- Delete Modal Box Start -->
<div class="modal fade theme-modal remove-coupon" id="exampleModalToggle" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-block text-center">
                <h5 class="modal-title w-100" id="exampleModalLabel22">Are You Sure ?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="remove-box">
                    <p>The permission for the use/group, preview is inherited from the object, object will create a
                        new permission for this object</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal">No</button>
                <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-target="#exampleModalToggle2"
                    data-bs-toggle="modal" data-bs-dismiss="modal">Yes</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade theme-modal remove-coupon" id="exampleModalToggle2" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel12">Done!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="remove-box text-center">
                    <div class="wrapper">
                        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                            <circle class="checkmark__circle" cx="26" cy="26" r="25"
                                fill="none" />
                            <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                        </svg>
                    </div>
                    <h4 class="text-content">It's Removed.</h4>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
