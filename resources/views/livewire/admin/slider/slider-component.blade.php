  <!-- Container-fluid starts-->
  <div class="page-body">
    <!-- All User Table Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="title-header option-title">
                            <h5>All Slides</h5>
                            <form class="d-inline-flex">
                                <a href="{{ route('admin.slider.add') }}"
                                    class="align-items-center btn btn-theme d-flex">
                                    <i data-feather="plus-square"></i>Add New
                                </a>
                            </form>
                        </div>

                        <div class="table-responsive category-table">
                            <div>
                                <table class="table all-package theme-table" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>Slider Name</th>
                                            <th>Slider link</th>
                                            <th>Product Image</th>
                                            <th>Slider link 2</th>
                                            <th>Product Image 2</th>
                                            <th>Slider link 3</th>
                                            <th>Product Image 3</th>
                                            <th>Slider link 4</th>
                                            <th>Product Image 4</th>
                                            {{-- <th>Slug</th> --}}
                                            <th>Option</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($slider as $item)
                                            <tr>
                                                <td>{{ $item->slider_name }}</td>

                                                <td>{{ $item->slider_link }}</td>

                                                <td>
                                                    <div class="table-image">
                                                        <img src="{{ asset('/images/slider') }}/{{ $item->image }}"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                </td>

                                                {{-- <td>{{ $item->slug }}</td> --}}

                                                <td>{{ $item->slider_link2 }}</td>

                                                <td>
                                                    <div class="table-image">
                                                        <img src="{{ asset('/images/slider/a') }}/{{ $item->image2 }}"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                </td>
                                                <td>{{ $item->slider_link3 }}</td>

                                                <td>
                                                    <div class="table-image">
                                                        <img src="{{ asset('/images/slider/b') }}/{{ $item->image3 }}"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                </td>
                                                <td>{{ $item->slider_link4 }}</td>

                                                <td>
                                                    <div class="table-image">
                                                        <img src="{{ asset('/images/slider/c') }}/{{ $item->image4 }}"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a
                                                                href="{{ route('admin.slider.edit', ['slider_slug' => $item->id]) }}">
                                                                <i class="ri-pencil-line"></i>
                                                            </a>
                                                        </li>


                                                        <li>

                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                
                                                                data-bs-target="#exampleModalToggle">
                                                                <i class="ri-delete-bin-line"></i>


                                                            </a>

                                                          {{-- Delete Conform modal --}}
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
                                                                              data-bs-toggle="modal" data-bs-dismiss="modal" wire:click.prevent="deleteSlider({{ $item->id }})">Yes</button>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                        
                                                        </li>
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
    <!-- All User Table Ends-->

    {{-- <div class="container-fluid">
      <!-- footer start-->
      <footer class="footer">
          <div class="row">
              <div class="col-md-12 footer-copyright text-center">
                  <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
              </div>
          </div>
      </footer>
      <!-- footer end-->
  </div> --}}
</div>
<!-- Container-fluid end -->

