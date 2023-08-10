  <!-- Container-fluid starts-->
  <div class="page-body">
    <!-- All User Table Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="title-header option-title">
                            <h5>All Category</h5>
                            <form class="d-inline-flex">
                                <a href="{{ route('admin.category.add') }}"
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
                                       @foreach ($category as $item)
                                       <tr>
                                        <td>{{ $item->category_name }}</td>

                                        <td>{{ $item->created_at }}</td>

                                        <td>
                                            <div class="table-image">
                                                <img src="{{ asset('/images/category') }}/{{ $item->image }}" class="img-fluid"
                                                    alt="">
                                            </div>
                                        </td>
                                        <td>{{ $item->slug }}</td>

                                        <td>
                                            <ul>
                                                <li>
                                                    <a href="{{ route('admin.category.edit',['category_slug'=>$item->slug]) }}">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)" wire:click.prevent="deleteCategory({{ $item->id }})" data-toggle="tooltip" class="btn btn-xs btn-danger btn-flat show_confirm"
                                                        >
                                                        <i class="ri-delete-bin-line show_confirm" data-toggle="tooltip"></i>
                                                        {{-- <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>Delete</button> --}}

                                                    </a>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
 
    $('.show_confirm').click(function(event) {
         var form =  $(this).closest("form");
         var name = $(this).data("name");
         event.preventDefault();
         swal({
             title: `Are you sure you want to delete this record?`,
             text: "If you delete this, it will be gone forever.",
             icon: "warning",
             buttons: true,
             dangerMode: true,
         })
         .then((willDelete) => {
           if (willDelete) {
             form.submit();
           }
         });
     });
 
</script>