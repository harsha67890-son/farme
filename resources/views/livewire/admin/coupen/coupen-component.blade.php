<div class="page-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="type-header option-type">
                            <h5>Coupon List</h5>
                            <div class="right-options">
                                <ul>
                                    <li>
                                        <a class="btn btn-solid" href="{{ route('admin.coupen.add') }}">Add Coupon</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="table-responsive">
                                @if (Session::has('message'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('message') }}</div>
                                @endif

                                <table class="table all-package coupon-list-table table-hover theme-table"
                                    id="table_id">
                                    <thead>
                                        <tr>
                                            <th>
                                                <span class="form-check user-checkbox m-0 p-0">
                                                    <input class="checkbox_animated checkall" type="checkbox"
                                                        value="">
                                                </span>
                                            </th>
                                            <th>Coupon Type</th>
                                            <th> Coupon Code</th>
                                            <th>Coupon Value</th>
                                            <th>Cart Value</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        {{-- {{dd($coupens)}} --}}
                                        @foreach ($coupens as $coupen)
                                            <tr>
                                                <td>
                                                    <span class="form-check user-checkbox m-0 p-0">
                                                        <input class="checkbox_animated check-it" type="checkbox"
                                                            value="">
                                                    </span>
                                                </td>
                                                <td>{{ $coupen->type }}</td>
                                                <td>{{ $coupen->code }}</td>
                                                @if ($coupen->type == 'fixed')
                                                    <td>₹ {{ $coupen->value }}</td>
                                                @else
                                                    <td>{{ $coupen->value }} %</td>
                                                @endif
                                                <td>{{ $coupen->cart_value }}</td>
                                                {{-- <td><button type="button" class="btn btn-success"  wire:click="edit({{ $coupen->code }})">Edit</button> --}}


                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a
                                                                href="{{ route('admin.coupen.edit', ['coupen_slug' => $coupen->id]) }}">
                                                                <i class="ri-pencil-line"></i>
                                                            </a>

                                                        </li>
                                                        {{-- <li>
                                                            <a href=""
                                                                wire:click.prevent="deleteCoupen({{ $coupen->id }})">
                                                                <i class="ri-pencil-line"></i>
                                                            </a>

                                                        </li> --}}
                                                        <li>
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModalToggle">
                                                                <i class="ri-delete-bin-line"></i>


                                                            </a>
                                                            {{-- Delete Conform modal --}}
                                                            <div class="modal fade theme-modal remove-coupon"
                                                                id="exampleModalToggle" aria-hidden="true"
                                                                tabindex="-1">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header d-block text-center">
                                                                            <h5 class="modal-type w-100"
                                                                                id="exampleModalLabel22">Are You Sure ?
                                                                            </h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close">
                                                                                <i class="fas fa-times"></i>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="remove-box">
                                                                                {{-- <h5> {{$coupen->id}}</h5> --}}
                                                                                <p>The permission for the use/group,
                                                                                    preview is inherited from the
                                                                                    object, object will create a
                                                                                    new permission for this object</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-animation btn-md fw-bold"
                                                                                data-bs-dismiss="modal">No</button>
                                                                            <button type="button"
                                                                                class="btn btn-animation btn-md fw-bold"
                                                                                data-bs-target="#exampleModalToggle2"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-dismiss="modal"
                                                                                wire:click.prevent="deleteCoupen({{ $coupen->id }})">Yes</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>

                                                        {{-- <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModalToggle" wire:click.prevent="deleteCoupen({{$coupen->id}})">
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
                    <!-- Pagination End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- footer start-->
    <div class="container-fluid">
        <footer class="footer">
            <div class="row">
                <div class="col-md-12 footer-copyright text-center">
                    <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
                </div>
            </div>
        </footer>
    </div>
</div>
