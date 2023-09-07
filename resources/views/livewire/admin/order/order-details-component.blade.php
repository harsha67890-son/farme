<div id="main">
    <!-- tracking section start -->
    <div class="page-body">
        <!-- tracking table start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="title-header title-header-block package-card">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>Order #{{ $order->id }}</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{ route('admin.order') }}" class="btn btn-primary pull-right">All Order</a>
                                    </div>
                                </div>
                                <div class="card-order-section">
                                    <ul>
                                        <li>{{ \Carbon\Carbon::parse($order->updated_at)->format('d-m-Y / h:i a') }}
                                        </li>
                                        <li>{{ $counter }} items</li>
                                        <li>Total ₹ {{ $order->total }}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bg-inner cart-section order-details-table">
                                <div class="row g-4">
                                    <div class="col-xl-8">
                                        <div class="table-responsive table-details">
                                            <table class="table cart-table table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th colspan="2">Items</th>
                                                        <th class="text-end" colspan="2">
                                                            <a href="javascript:void(0)" class="theme-color">Edit
                                                                Items</a>
                                                        </th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    @foreach ($order->orderItems as $item)
                                                        <tr class="table-order">
                                                            <td>
                                                                <a href="javascript:void(0)">
                                                                    <img src="{{ asset('/images/products') }}/{{ $item->product->image }}"
                                                                        class="img-fluid" alt="{{ $item->image }}">
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <p>Product Name</p>
                                                                <h5>{{ $item->product->name }}</h5>
                                                            </td>
                                                            <td>
                                                                <p>Quantity</p>
                                                                <h5>{{ $item->quantity }}</h5>
                                                            </td>
                                                            <td>
                                                                <p>Price</p>
                                                                <h5>₹ {{ $item->price * $item->quantity }}</h5>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>

                                                <tfoot>
                                                    <tr class="table-order">
                                                        <td colspan="3">
                                                            <h5>Subtotal :</h5>
                                                        </td>
                                                        <td>
                                                            <h4>₹ {{ $item->price * $item->quantity }}</h4>
                                                        </td>
                                                    </tr>

                                                    <tr class="table-order">
                                                        <td colspan="3">
                                                            <h5>Shipping :</h5>
                                                        </td>
                                                        <td>
                                                            <h4>$0000</h4>
                                                        </td>
                                                    </tr>

                                                    {{-- <tr class="table-order">
                                                        <td colspan="3">
                                                            <h5>Tax(GST) :</h5>
                                                        </td>
                                                        <td>
                                                            <h4>$10.00</h4>
                                                        </td>
                                                    </tr> --}}

                                                    <tr class="table-order">
                                                        <td colspan="3">
                                                            <h4 class="theme-color fw-bold">Total Price :</h4>
                                                        </td>
                                                        <td>
                                                            <h4 class="theme-color fw-bold">₹ {{ $order->total }}</h4>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="order-success">
                                            <div class="row g-4">
                                                <h4>summery</h4>
                                                <ul class="order-details">
                                                    <li>Order ID: {{ $order->id }}</li>
                                                    <li>Order Date: {{ \Carbon\Carbon::parse($order->updated_at)->format('d-m-Y / h:i a') }}</li>
                                                    <li>Order Total: ₹ {{ $order->total }}</li>
                                                </ul>

                                                <h4>shipping address</h4>
                                                <ul class="order-details">
                                                    <li>Gerg Harvell</li>
                                                    <li>568, Suite Ave.</li>
                                                    <li>Austrlia, 235153 Contact No. 48465465465</li>
                                                </ul>

                                                <div class="payment-mode">
                                                    <h4>payment method</h4>
                                                    <p>Pay on Delivery (Cash/Card). Cash on delivery (COD)
                                                        available. Card/Net banking acceptance subject to device
                                                        availability.</p>
                                                </div>

                                                <div class="delivery-sec">
                                                    <h3>expected date of delivery: <span>october 22, 2018</span>
                                                    </h3>
                                                    <a href="order-tracking.html">track order</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- section end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tracking table end -->

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
    <!-- tracking section End -->
</div>
