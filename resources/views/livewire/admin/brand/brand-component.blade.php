  <!-- Container-fluid starts-->
  <div class="page-body">
    <!-- All User Table Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="title-header option-title">
                            <h5>All Brand</h5>
                            <form class="d-inline-flex">
                                <a href="{{ route('admin.brand.add') }}"
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
                                            <th>Product Name</th>
                                            <th>Date</th>
                                            <th>Product Image</th>
                                            <th>Slug</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($brands as $item)
                                            <tr>
                                                <td>{{ $item->brand_name }}</td>

                                                <td>{{ $item->created_at }}</td>

                                                <td>
                                                    <div class="table-image">
                                                        <img src="{{ asset('/images/brand') }}/{{ $item->image }}"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                </td>
                                                <td>{{ $item->slug }}</td>

                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a
                                                                href="{{ route('admin.brand.edit', ['brand_slug' => $item->slug]) }}">
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
                                                                              data-bs-toggle="modal" data-bs-dismiss="modal" wire:click.prevent="deleteBrand({{ $item->id }})">Yes</button>
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

