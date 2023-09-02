  <div id="main">
      <section class="breadscrumb-section pt-0">
          <div class="container-fluid-lg">
              <div class="row">
                  <div class="col-12">
                      <div class="breadscrumb-contain">
                          <h2>Cart</h2>
                          <nav>
                              <ol class="breadcrumb mb-0">
                                  <li class="breadcrumb-item">
                                      <a href="index.html">
                                          <i class="fa-solid fa-house"></i>
                                      </a>
                                  </li>
                                  <li class="breadcrumb-item active" aria-current="page">Cart</li>
                              </ol>
                          </nav>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- Breadcrumb Section End -->

      <!-- Cart Section Start -->
      <section class="cart-section section-b-space">
          <div class="container-fluid-lg">
              <div class="row g-sm-5 g-3">
                  <div class="col-xxl-9">
                      <div class="cart-table">
                          <div class="table-responsive-xl">
                              <table class="table">
                                  <tbody>
                                      @if (Cart::count() > 0)
                                          @foreach (Cart::content() as $item)
                                              {{-- {{ dd($item) }} --}}
                                              <tr class="product-box-contain">
                                                  <td class="product-detail">
                                                      <div class="product border-0">
                                                          <a href="#" class="product-image">
                                                              <img src="{{ asset('/images/products') }}/{{ $item->model->image }}"
                                                                  class="img-fluid blur-up lazyload"
                                                                  alt="{{ asset('/images/products') }}/{{ $item->name }}">
                                                          </a>
                                                          <div class="product-detail">
                                                              <ul>
                                                                  <li class="name">
                                                                      <a
                                                                          href="{{ route('product_view', ['slug' => $item->model->slug]) }}">{{ $item->name }}</a>
                                                                  </li>
                                                                  {{-- 
                                                           <li class="text-content"><span class="text-title">Sold
                                                                   By:</span> Fresho</li> --}}

                                                                  <li class="text-content"><span
                                                                          class="text-title">Quantity</span>
                                                                      {{ $item->model->packsize->packsize }}</li>

                                                                  <li>
                                                                      <h5 class="text-content d-inline-block">Price :
                                                                      </h5>
                                                                      <span>₹ {{ $item->price }}</span>
                                                                      {{-- <span class="text-content">₹ {{ $item->mrp }}</span> --}}
                                                                  </li>

                                                                  <li>
                                                                      <h5 class="saving theme-color">Saving : $20.68
                                                                      </h5>
                                                                  </li>

                                                                  <li class="quantity-price-box">
                                                                      <div class="cart_qty">
                                                                          <div class="input-group">
                                                                              <button class="btn qty-left-minus"
                                                                                  wire:click.prevent="increaseQuantity({{ $item->rowId }})">
                                                                                  <i class="fa fa-minus ms-0"
                                                                                      aria-hidden="true"></i>
                                                                              </button>
                                                                              <input
                                                                                  class="form-control input-number qty-input"
                                                                                  type="text" name="quantity"
                                                                                  value="{{ $item->qty }}">
                                                                              <button class="btn qty-right-plus"
                                                                                  wire:click.prevent="decreaseQuentity('{{ $item->rowId }}')">
                                                                                  <i class="fa fa-plus ms-0"
                                                                                      aria-hidden="true"></i>
                                                                              </button>
                                                                          </div>
                                                                      </div>
                                                                  </li>

                                                                  <li>
                                                                      <h5>Total: {{ $item->subtotal }}</h5>
                                                                  </li>
                                                              </ul>
                                                          </div>
                                                      </div>
                                                  </td>

                                                  <td class="price">
                                                      <h4 class="table-title text-content">Price</h4>
                                                      <h5>₹{{ $item->model->price }} <del
                                                              class="text-content">₹{{ $item->model->mrp }}</del></h5>
                                                      <h6 class="theme-color">You Save : ₹20.68</h6>
                                                  </td>
                                                  {{-- bbbb:{{ $price }} --}}

                                                  {{-- <button wire:click='getPrice'>Add</button> --}}

                                                  <td class="quantity">
                                                      <h4 class="table-title text-content">Qty</h4>
                                                      <div class="quantity-price">
                                                          <div class="cart_qty">
                                                              <div class="input-group">
                                                                  <button class="btn qty-left-minus"
                                                                  wire:click.prevent="decreaseQuentity('{{ $item->rowId }}')">
                                                                      <i class="fa fa-minus ms-0"
                                                                          aria-hidden="true"></i>
                                                                  </button>
                                                                  {{-- {{ $price }} --}}
                                                                  <input class="form-control input-number qty-input"
                                                                      type="text" value="{{ $item->qty }}">
                                                                  <button class="btn qty-right-plus"
                                                                      wire:click.prevent="increaseQuantity('{{ $item->rowId }}')">
                                                                      <i class="fa fa-plus ms-0" aria-hidden="true"></i>
                                                                  </button>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </td>

                                                  <td class="subtotal">
                                                      <h4 class="table-title text-content">Total</h4>
                                                      <h5>₹ {{ $item->subtotal }}</h5>
                                                  </td>

                                                  <td class="save-remove">
                                                      <h4 class="table-title text-content">Action</h4>
                                                      <a class="save notifi-wishlist" href="javascript:void(0)">Save for
                                                          later</a>
                                                      <a class="remove close_button"
                                                          href="javascript:void(0)" wire:click.prevent="destroy('{{ $item->rowId }}')">Remove</a>
                                                  </td>
                                              </tr>
                                          @endforeach
                                      @else
                                          <h3>No Item In Cart</h3>
                                      @endif
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>

                  <div class="col-xxl-3">
                      <div class="summery-box p-sticky">
                          <div class="summery-header">
                              <h3>Cart Total</h3>
                          </div>

                          <div class="summery-contain">
                              <div class="coupon-cart">
                                  <h6 class="text-content mb-2">Coupon Apply</h6>
                                  <div class="mb-3 coupon-box input-group">
                                      <input type="email" class="form-control" id="exampleFormControlInput1"
                                          placeholder="Enter Coupon Code Here...">
                                      <button class="btn-apply">Apply</button>
                                  </div>
                              </div>
                              <ul>
                                  <li>
                                      <h4>Subtotal</h4>
                                      <h4 class="price">₹{{ Cart::subtotal() }}</h4>
                                  </li>

                                  <li>
                                      <h4>Tax</h4>
                                      <h4 class="price">₹{{ Cart::tax() }}</h4>
                                  </li>

                                  <li>
                                      <h4>Coupon Discount</h4>
                                      <h4 class="price">(-) 0.00</h4>
                                  </li>

                                  <li class="align-items-start">
                                      <h4>Shipping</h4>
                                      <h4 class="price text-end">₹6.90</h4>
                                  </li>
                              </ul>
                          </div>

                          <ul class="summery-total">
                              <li class="list-total border-top-0">
                                  <h4>Total (RS)</h4>
                                  <h4 class="price theme-color">₹{{ Cart::total() }}</h4>
                              </li>
                          </ul>

                          <div class="button-group cart-button">
                              <ul>
                                  <li>
                                      <button onclick="location.href = 'checkout.html';"
                                          class="btn btn-animation proceed-btn fw-bold">Process To Checkout</button>
                                  </li>

                                  <li>
                                      <button onclick="location.href = 'index.html';"
                                          class="btn btn-light shopping-button text-dark">
                                          <i class="fa-solid fa-arrow-left-long"></i>Return To Shopping</button>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  </div>
