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
                                        <h5>Slider Information</h5>
                                        <form class="d-inline-flex">
                                            <a href="{{ route('admin.slider') }}"
                                                class="align-items-center btn btn-theme d-flex">
                                                <i data-feather="plus-square"></i>List Slider
                                            </a>
                                        </form>
                                    </div>
                                </div>

                                <div class="panel-body">
                                    @if(Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                @endif

                                <form class="theme-form theme-form-2 mega-form" wire:submit.prevent="updateSlider">
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Slider Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" placeholder="Slider Name" wire:model ="slider_name">
                                        </div>
                                    </div>
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Slider Link</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" placeholder="Link" wire:model ="slider_link">
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Image</label>
                                        <div class="col-sm-9">
                                            <input class="form-control form-choose" type="file" id="formFile" wire:model="newimage"
                                               >
                                               @if ($newimage)
                                               <img src="{{ $newimage->temporaryUrl() }}" width="120" />
                                           @else
                                               <img src="{{ asset('/images/slider') }}/{{ $image }}" width="120"
                                                   alt="">
                                           @endif
                                        </div>
                                    </div>
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Slider Link 2</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" placeholder="Link" wire:model ="slider_link2">
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Image 2</label>
                                        <div class="col-sm-9">
                                            <input class="form-control form-choose" type="file" id="formFile" wire:model="newimage2"
                                               >
                                               @if ($newimage2)
                                               <img src="{{ $newimage2->temporaryUrl() }}" width="120" />
                                           @else
                                               <img src="{{ asset('/images/slider/a') }}/{{ $image2 }}" width="120"
                                                   alt="">
                                           @endif
                                        </div>
                                    </div>
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Slider Link 3</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" placeholder="Link" wire:model ="slider_link3">
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Image 3</label>
                                        <div class="col-sm-9">
                                            <input class="form-control form-choose" type="file" id="formFile" wire:model="newimage3"
                                               >
                                               @if ($newimage3)
                                               <img src="{{ $newimage3->temporaryUrl() }}" width="120" />
                                           @else
                                               <img src="{{ asset('/images/slider/b') }}/{{ $image3 }}" width="120"
                                                   alt="">
                                           @endif
                                        </div>
                                    </div>
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Slider Link 4</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" placeholder="Link" wire:model ="slider_link4">
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Image 4</label>
                                        <div class="col-sm-9">
                                            <input class="form-control form-choose" type="file" id="formFile" wire:model="newimage4"
                                               >
                                               @if ($newimage4)
                                               <img src="{{ $newimage4->temporaryUrl() }}" width="120" />
                                           @else
                                               <img src="{{ asset('/images/slider/c') }}/{{ $image4 }}" width="120"
                                                   alt="">
                                           @endif
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <div class="col-sm-3 form-label-title">Submit Button</div>
                                        <div class="col-sm-9">
                                            <button class="btn btn-primary" type="submit">
                                                update
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
