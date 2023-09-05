<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Body start -->
    <div class="page-body-wrapper">
        <div class="page-body">

            <!-- New Product Add Start -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-sm-8 m-auto">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="title-header option-title">
                                            <h5>Products Information</h5>
                                            <form class="d-inline-flex">
                                                <a href="{{ route('admin.product.index') }}"
                                                    class="align-items-center btn btn-theme d-flex">
                                                    <i data-feather="plus-square"></i>List Products
                                                </a>
                                            </form>
                                        </div>
                                        <div class="panel-body">
                                            @if (Session::has('message'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ Session::get('message') }}</div>
                                            @endif

                                            <form class="theme-form theme-form-2 mega-form"
                                                wire:submit.prevent='addProduct'>
                                                <div class="mb-4 row align-items-center">
                                                    <label class="form-label-title col-sm-3 mb-0">Product
                                                        Name</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" type="text"
                                                            placeholder="Product Name" wire:model='name'
                                                            wire:keyup='generateSlug'>
                                                    </div>
                                                </div>

                                                <div class="mb-4 row align-items-center">
                                                    <label class="form-label-title col-sm-3 mb-0">Product
                                                        Slug</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" type="text"
                                                            placeholder="Product Slug" wire:model='slug'>
                                                    </div>
                                                </div>
                                                <div class="mb-4 row align-items-center">
                                                    <label
                                                        class="col-sm-3 col-form-label form-label-title">Category</label>
                                                    <div class="col-sm-9">
                                                        <select class="js-example-basic-single w-100" name="state"
                                                            wire:model='category_id'>
                                                            <option>Category Menu</option>
                                                            @foreach ($categorys as $item)
                                                                <option value="{{ $item->id }}">
                                                                    {{ $item->category_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="mb-4 row align-items-center">
                                                    <label class="col-sm-3 col-form-label form-label-title">Pack
                                                        Size</label>
                                                    <div class="col-sm-9">
                                                        <select class="js-example-basic-single w-100" name="state"
                                                            wire:model='packsize_id'>
                                                            <option >Pack SIze</option>
                                                            @foreach ($packsize as $item)
                                                                <option value="{{ $item->id }}">
                                                                    {{ $item->packsize }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="mb-4 row align-items-center">
                                                    <label
                                                        class="col-sm-3 col-form-label form-label-title">Brand</label>
                                                    <div class="col-sm-9">
                                                        <select class="js-example-basic-single w-100"
                                                            wire:model='brand_id'>
                                                            <option >Brand Menu</option>
                                                            @foreach ($brands as $item)
                                                                <option value="{{ $item->id }}">
                                                                    {{ $item->brand_name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-4 row align-items-center">
                                                    <label class="col-sm-3 form-label-title">MRP</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" type="number" placeholder="0"
                                                            wire:model='mrp'>
                                                    </div>
                                                </div>

                                                <div class="mb-4 row align-items-center">
                                                    <label class="col-sm-3 form-label-title">Price</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" type="number" placeholder="0"
                                                            wire:model='price'>
                                                    </div>
                                                </div>

                                                <div class="mb-4 row align-items-center">
                                                    <label class="col-sm-3 form-label-title">Stock</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" type="number" placeholder="0"
                                                            wire:model='stock'>
                                                    </div>
                                                </div>
                                                <div class="mb-4 row align-items-center">
                                                    <label class="col-sm-3 col-form-label form-label-title">Stock
                                                        Status</label>
                                                    <div class="col-sm-9">
                                                        <select class="js-example-basic-single w-100" name="state"
                                                            wire:model='stock_status'>
                                                            <option value="instock"> In Stock</option>
                                                            <option value="outofstock">Out Of Stock</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-4 row align-items-center">
                                                    <label class="form-label-title col-sm-3 mb-0">Ingredients</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" type="text"
                                                            placeholder="Ingredients" wire:model='ingredients'>
                                                    </div>
                                                </div>
                                                <div class="mb-4 row align-items-center">
                                                    <label class="form-label-title col-sm-3 mb-0">SKU</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" type="text" placeholder="SKU"
                                                            wire:model='sku'>
                                                    </div>
                                                </div>

                                                <div class="mb-4 row align-items-center">
                                                    <label class="form-label-title col-sm-3 mb-0">Short
                                                        Description</label>
                                                    <div class="col-sm-9">
                                                        <textarea name="" id="" cols="78" rows="10" wire:model='short_description'></textarea>
                                                    </div>
                                                </div>

                                                <div class="mb-4 row align-items-center">
                                                    <label class="form-label-title col-sm-3 mb-0">Description</label>
                                                    <div class="col-sm-9">
                                                        <textarea name="" id="" cols="78" rows="10" wire:model='description'></textarea>
                                                    </div>
                                                </div>

                                                <div class="mb-4 row align-items-center">
                                                    <label
                                                        class="col-sm-3 col-form-label form-label-title">Images</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control form-choose" type="file"
                                                            id="formFile" wire:model='image'>
                                                        @if ($image)
                                                            <img src="{{ $image->temporaryUrl() }}" width="120" />
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="mb-4 row align-items-center">
                                                    <label class="col-sm-3 col-form-label form-label-title">Submit
                                                        Button</label>
                                                    <div class="col-sm-9">
                                                        <button type="submit" class="btn btn-primary">Save</button>
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
            <!-- Container-fluid End -->
        </div>
        <!-- Page Body End -->
    </div>
