<div id="main">
    <!-- Order section Start -->
    <div class="page-body">
        <!-- Table Start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">
                            <div class="title-header option-title">
                                <h5>Order List</h5>
                                <a href="#" class="btn btn-solid">Download all orders</a>
                            </div>
                            <div>
                                <div class="table-responsive">
                                    <table class="table all-package order-table theme-table" id="table_id">
                                        <thead>
                                            {{-- <tr>
                                                <th>Order Id</th>
                                                <th>Order Code</th>
                                                <th>Date</th>
                                                <th>Payment Method</th>
                                                <th>Delivery Status</th>
                                                <th>Amount</th>
                                                <th>Option</th>
                                            </tr> --}}
                                            <tr>
                                                <th>OrderId</th>
                                                <th>Subtotal</th>
                                                <th>Discount</th>
                                                <th>Tax</th>
                                                <th>Total</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Zipcode</th>
                                                <th>Status</th>
                                                <th>Order Date</th>                                    
                                                <th colspan="2" class="text-center">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                           {{-- @foreach ($orders as $item)
                                           <tr data-bs-toggle="offcanvas" href="#order-details">
                                            <td>
                                               {{ $item->id }}
                                            </td>

                                            <td> {{ $item->number }}</td>

                                            <td>Jul 20, 2022</td>

                                            <td>Paypal</td>

                                            <td class="order-success">
                                                <span>Success</span>
                                            </td>

                                            <td>$15</td>

                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="order-detail.html">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <i class="ri-pencil-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModalToggle">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="btn btn-sm btn-solid text-white"
                                                            href="order-tracking.html">
                                                            Tracking
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                           @endforeach --}}
                                           @foreach ($orders as $item)
                                           <tr>
                                               <td>{{$item->id}}</td>
                                               <td>${{$item->subtotal}}</td>
                                               <td>${{$item->discount}}</td>
                                               <td>${{$item->tax}}</td>
                                               <td>${{$item->total}}</td>
                                               <td>{{$item->firstname}}</td>
                                               <td>{{$item->lastname}}</td>
                                               <td>{{$item->mobile}}</td>
                                               <td>{{$item->email}}</td>
                                               <td>{{$item->zipcode}}</td>
                                               <td>{{$item->status}}</td>
                                               <td>{{$item->created_at}}</td>                                        
                                               <td><a href="{{route('admin.orderDetails',['order_id'=>$item->id])}}" class="btn btn-info btn-sm">Details</a></td>                                        
                                               <td></td>
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
        <!-- Table End -->

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
    <!-- Order section End -->
</div>
