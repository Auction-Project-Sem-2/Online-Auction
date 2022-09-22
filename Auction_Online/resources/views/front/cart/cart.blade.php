@extends('front.layout.master')

@section('title','Cart')

@section('body')

  <!-- Breadcrumb-->
  <div class="bg-light py-2">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 bg-light">
          <li class="breadcrumb-item"><a class="reset-anchor" href="./">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Shopping cart</li>
        </ol>
      </nav>
    </div>
  </div>
  <section class="py-5">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <!-- Navigation-->
          <header class="text-center mb-5">
            <h2>Shopping cart</h2>
          </header>

          <!-- Shopping cart-->
          @if(count($carts) == 0)
              <div>
                <h3 class="text-center text-muted">You have not had any successful auction yet!</h3>
                  <div class="d-flex justify-content-center pt-4">
                      <a class="btn btn-primary" href="./shop">
                          <i class="fas fa-shopping-bag me-2"></i>
                          Continue auction
                      </a>
                  </div>
              </div>
          @else
                <ul class="nav nav-tabs nav-fill border-bottom mb-5 flex-column flex-md-row">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="">1. Shopping cart</a></li>
                    <li class="nav-item"><a class="nav-link disabled" href="">2. Billing Information</a></li>
                    <li class="nav-item"><a class="nav-link disabled" href="">3. Completed</a></li>
                </ul>
                <div class="table-responsive mb-4">
                    <table class="table">
                        <thead class="bg-light">
                        <tr>
                            <th class="p-3 border-0" scope="col"><strong class="text-uppercase">Product</strong></th>
                            <th class="p-3 border-0" scope="col"><strong class="text-uppercase">Price</strong></th>
                            <th class="p-3 border-0" scope="col"><strong class="text-uppercase">Quantity</strong></th>
                            <th class="p-3 border-0" scope="col"><strong class="text-uppercase">Total</strong></th>
                            <th class="p-3 border-0" scope="col"><strong class="text-uppercase"></strong></th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($carts as $cart)
                            <tr>
                                <th class="p-3 pl-0 border-0" scope="row">
                                    <div class="d-flex align-items-center"><a class="reset-anchor d-block animsition-link" href=""><img src="./front/img/products/{{$cart->options->images[0]->path}}" alt="..." width="70"></a>
                                        <div class="ms-3"><strong class="h6"><a class="reset-anchor animsition-link" href="">{{$cart->name}}</a></strong></div>
                                    </div>
                                </th>
                                <td class="p-3 align-middle border-0">
                                    <p class="mb-0 small">${{$cart->price}}</p>
                                </td>
                                <td class="p-3 align-middle border-0">
                                    <p class="mb-0 small">{{$cart->qty}}</p>
                                </td>
                                <td class="p-3 align-middle border-0">
                                    <p class="mb-0 small cart-total">${{$cart->price}}</p>
                                </td>
                                <td class="p-3 align-middle border-0"><a class="reset-anchor" href="./cart/delete/{{$cart->rowId}}"><i class="fas fa-trash-alt small text-muted"></i></a></td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    <!-- Cart footer-->
                    <div class="bg-light p-4">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item py-1"><a class="btn btn-outline-primary" href="./shop"> <i class="fas fa-shopping-bag me-2"></i>Continue auction</a></li>
                                    <li class="list-inline-item py-1"><a class="btn btn-primary" href=""> <i class="far fa-credit-card me-2"></i>Process checkout</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 text-start text-md-end">
                                <p class="text-muted mb-1">Cart total</p>
                                <h6 class="h4 mb-0" id="cartPrice"></h6>
                            </div>
                        </div>
                    </div>
                </div>
          @endif
        </div>
      </div>
    </div>
  </section>

@endsection
