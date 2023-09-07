

<div class="page-body">
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="title-header option-title">
                                    <h5>Edit Coupon</h5>
                                </div>
                                @if(session()->has('message'))
                                <div class="alert alert-info" style="margin-top:30px;">
                                {{ session('message')}}
                                </div>
                                @endif
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-home-tab"
                                            data-bs-toggle="pill" data-bs-target="#pills-home"
                                            type="button">General</button>
                                    </li>
                                   
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-profile-tab"
                                            data-bs-toggle="pill" data-bs-target="#pills-profile"
                                            type="button">Restriction</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-usage-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-usage" type="button">Usage</button>
                                    </li>
                                </ul>

                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel">
                                        <form class="theme-form theme-form-2 mega-form">
                                            <div class="card-header-1">
                                                <h5>General</h5>
                                            </div>
                                            {{-- <div>
                                                <input type="hidden" wire:modal="code">
                                            </div> --}}
                                            <div class="row">
                                                <div class="mb-4 row align-items-center">
                                                    <label
                                                        class="form-label-title col-lg-2 col-md-3 mb-0">Coupon
                                                        type</label>
                                                    <div class="col-md-9 col-lg-10">
                                                        <input class="form-control" type="text" wire:model="type">
                                                    </div>
                                                </div>

                                                <div class="mb-4 row align-items-center">
                                                    <label
                                                        class="col-lg-2 col-md-3 col-form-label form-label-title">Coupon
                                                        Code</label>
                                                    <div class="col-md-9 col-lg-10">
                                                        <input class="form-control" type="text" wire:model="code">
                                                    </div>
                                                </div>

                                                {{-- <div class="mb-4 row align-items-center">
                                                    <label
                                                        class="col-lg-2 col-md-3 col-form-label form-label-title">Start
                                                        Date</label>
                                                    <div class="col-md-9 col-lg-10">
                                                        <input class="form-control" type="date">
                                                    </div>
                                                </div>

                                                <div class="mb-4 row align-items-center">
                                                    <label
                                                        class="col-lg-2 col-md-3 col-form-label form-label-title">End
                                                        Date</label>
                                                    <div class="col-md-9 col-lg-10">
                                                        <input class="form-control" type="date">
                                                    </div>
                                                </div>

                                                <div class="mb-4 row align-items-center">
                                                    <label
                                                        class="form-label-title col-lg-2 col-md-3 mb-0">Free
                                                        Shipping</label>
                                                    <div class="col-md-9">
                                                        <div class="form-check user-checkbox ps-0">
                                                            <input class="checkbox_animated check-it"
                                                                type="checkbox" value=""
                                                                id="flexCheckDefault">
                                                            <label
                                                                class="form-label-title col-md-2 mb-0">Allow
                                                                Free Shipping</label>
                                                        </div>
                                                    </div>
                                                </div> --}}

                                                <div class="mb-4 row align-items-center">
                                                    <label
                                                        class="col-lg-2 col-md-3 col-form-label form-label-title">Quantity</label>
                                                    <div class="col-md-9 col-lg-10">
                                                        <input class="form-control" type="number" wire:model="value">
                                                    </div>
                                                </div>

                                                <div class="mb-4 row align-items-center">
                                                    <label
                                                        class="col-lg-2 col-md-3 col-form-label form-label-title">cart value</label>
                                                    <div class="col-md-9 col-lg-10">
                                                        <input class="form-control" type="number" wire:model="cart_value">
                                                    </div>
                                                </div>
                                               
                                                <div class="mb-4 row align-items-center">
                                                    <label
                                                        class="col-lg-2 col-md-3 col-form-label form-label-title">Expiry Date</label>
                                                    <div class="col-md-9 col-lg-10">
                                                        <input class="form-control" type="date" wire:model="expiry_date">
                                                    </div>
                                                </div>
                                               

                                                <div class="mb-12 row align-items-center">
                                                    <label
                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">Update</label>
                                                <div class="col-md-9 col-lg-10">
                                                   <button type="button" class="btn btn-primary
                                                   " wire:click.prevent="updateCoupen()">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel">
                                        <form class="theme-form theme-form-2 mega-form">
                                            <div class="card-header-1">
                                                <h5>Restriction</h5>
                                            </div>

                                            <div class="row">
                                                <div class="mb-4 row align-items-center">
                                                    <label
                                                        class="form-label-title col-lg-2 col-md-3 mb-0">Products</label>
                                                    <div class="col-md-9 col-lg-10">
                                                        <input class="form-control" type="text">
                                                    </div>
                                                </div>

                                                <div class="mb-4 row align-items-center">
                                                    <label
                                                        class="col-sm-2 col-form-label form-label-title">Category</label>
                                                    <div class="col-sm-10">
                                                        <select class="js-example-basic-single"
                                                            name="state">
                                                            <option disabled>--Select--</option>
                                                            <option>Electronics</option>
                                                            <option>Clothes</option>
                                                            <option>Shoes</option>
                                                            <option>Digital</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="mb-4 row align-items-center">
                                                    <label
                                                        class="col-lg-2 col-md-3 col-form-label form-label-title">Minimum
                                                        Spend</label>
                                                    <div class="col-md-9 col-lg-10">
                                                        <input class="form-control" type="number">
                                                    </div>
                                                </div>

                                                <div class="row align-items-center">
                                                    <label
                                                        class="col-lg-2 col-md-3 col-form-label form-label-title">Maximum
                                                        Spend</label>
                                                    <div class="col-md-9 col-lg-10">
                                                        <input class="form-control" type="number">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="tab-pane fade" id="pills-usage" role="tabpanel">
                                        <form class="theme-form theme-form-2 mega-form">
                                            <div class="card-header-1">
                                                <h5>Usage Limits</h5>
                                            </div>

                                            <div class="row">
                                                <div class="mb-4 row align-items-center">
                                                    <label
                                                        class="form-label-title col-lg-2 col-md-3 mb-0">Per
                                                        Limited</label>
                                                    <div class="col-md-9 col-lg-10">
                                                        <input class="form-control" type="number">
                                                    </div>
                                                </div>

                                                <div class="row align-items-center">
                                                    <label
                                                        class="form-label-title col-lg-2 col-md-3 mb-0">Per
                                                        Customer</label>
                                                    <div class="col-md-9 col-lg-10">
                                                        <input class="form-control" type="number">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
