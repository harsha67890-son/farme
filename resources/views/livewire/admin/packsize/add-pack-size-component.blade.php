<div class="page-body">

    <!-- New Product Add Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-8 m-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    {{-- <h5>Category Information</h5> --}}
                                    <div class="title-header option-title">
                                        <h5>Pack Size Information</h5>
                                        <form class="d-inline-flex">
                                            <a href="{{ route('admin.packsize') }}"
                                                class="align-items-center btn btn-theme d-flex">
                                                <i data-feather="plus-square"></i>List Pack Size
                                            </a>
                                        </form>
                                    </div>
                                </div>

                                <div class="panel-body">
                                    @if(Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                @endif

                                <form class="theme-form theme-form-2 mega-form" wire:submit.prevent="storePacksize">
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Pack Size</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" placeholder="Pack Size" wire:model ="packsize">
                                        </div>
                                    </div>
                                    <div class="mb-4 row align-items-center">
                                        <div class="col-sm-3 form-label-title">Submit Button</div>
                                        <div class="col-sm-9">
                                            <button class="btn btn-primary" type="submit">
                                                Save
                                            </button>
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
    <!-- New Product Add End -->

    <!-- footer Start -->
    {{-- <div class="container-fluid">
        <footer class="footer">
            <div class="row">
                <div class="col-md-12 footer-copyright text-center">
                    <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
                </div>
            </div>
        </footer>
    </div> --}}
    <!-- footer En -->
</div>
