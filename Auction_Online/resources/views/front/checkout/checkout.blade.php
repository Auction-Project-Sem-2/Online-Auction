@extends('front.layout.master')

@section('title','Checkout')

@section('body')

    <!-- Breadcrumb-->
    <div class="bg-light py-2">
      <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 bg-light">
            <li class="breadcrumb-item"><a class="reset-anchor" href="https://demo.bootstrapious.com/shopio/index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Billing information</li>
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
              <h2>Billing information</h2>
            </header>
            <ul class="nav nav-tabs nav-fill border-bottom mb-5 flex-column flex-md-row">
              <li class="nav-item"><a class="nav-link disabled" href="">1. Shopping cart</a></li>
              <li class="nav-item"><a class="nav-link active" aria-current="page" href="">2. Billing Information</a></li>
              <li class="nav-item"><a class="nav-link disabled" href="">3. Completed</a></li>
            </ul>
            <div class="row">
              <div class="col-lg-6">
                <div class="bg-light d-flex align-items-center justify-content-center justify-content-md-between px-3 py-2 mb-3">
                  <h6 class="mb-0 py-1">Buyer info</h6>
                  <p class="text-muted small mb-0 py-1">Returning user? <a class="reset-anchor" href="https://demo.bootstrapious.com/shopio/login.html">
                      <u>login here</u></a></p>
                </div>
                <form action="">
                  <div class="row">
                    <div class="form-group col-12 mb-3">
                      <label class="form-label small text-uppercase">Full name</label>
                      <input class="form-control" type="text" name="name" placeholder="Enter your full name">
                    </div>
                    <div class="form-group col-12 mb-3">
                      <label class="form-label small text-uppercase">Email address</label>
                      <input class="form-control" type="email" name="email" placeholder="Enter your email address">
                    </div>
                    <div class="form-group col-12 mb-3">
                      <label class="form-label small text-uppercase">Adress 1</label>
                      <input class="form-control" type="text" name="address1" placeholder="Enter your main address">
                    </div>
                    <div class="form-group col-12 mb-3">
                      <label class="form-label small text-uppercase">Address 2</label>
                      <input class="form-control" type="text" name="address2" placeholder="Enter your alternative address">
                    </div>
                    <div class="form-group col-12 mb-3">
                      <label class="form-label small text-uppercase">City</label>
                      <input class="form-control" type="text" name="city" placeholder="Enter your city">
                    </div>
                    <div class="form-group col-lg-6 mb-3">
                      <label class="form-label small text-uppercase">State</label>
                      <div class="choices" data-type="select-one" tabindex="0" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false"><div class="choices__inner"><select class="form-control js-choice choices__input" name="state" hidden="" tabindex="-1" data-choice="active"><option value="">Choose your state</option></select><div class="choices__list choices__list--single"><div class="choices__item choices__placeholder choices__item--selectable" data-item="" data-id="1" data-value="" data-custom-properties="null" aria-selected="true">Choose your state</div></div></div><div class="choices__list choices__list--dropdown" aria-expanded="false"><input type="text" class="choices__input choices__input--cloned" autocomplete="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" aria-label="Choose your state" placeholder="Search"><div class="choices__list" role="listbox"><div id="choices--state-fv-item-choice-1" class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted" role="option" data-choice="" data-id="1" data-value="" data-select-text="Select" data-choice-selectable="" aria-selected="true">Choose your state</div><div id="choices--state-fv-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="Option 1" data-select-text="Select" data-choice-selectable="">Demo state</div><div id="choices--state-fv-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="Option 1" data-select-text="Select" data-choice-selectable="">Demo state</div><div id="choices--state-fv-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4" data-value="Option 1" data-select-text="Select" data-choice-selectable="">Demo state</div><div id="choices--state-fv-item-choice-5" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="5" data-value="Option 1" data-select-text="Select" data-choice-selectable="">Demo state</div><div id="choices--state-fv-item-choice-6" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="6" data-value="Option 1" data-select-text="Select" data-choice-selectable="">Demo state</div></div></div></div>
                    </div>
                    <div class="form-group col-lg-6 mb-3">
                      <label class="form-label small text-uppercase">Full name</label>
                      <input class="form-control" type="text" name="zipcode" placeholder="Enter city postal colde">
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-lg-6">
                <div class="bg-light px-3 py-2 mb-3">
                  <h6 class="mb-0 py-1">Payment method</h6>
                </div>
                <ul class="nav nav-pills flex-column flex-sm-row mb-4 text-center bg-light" id="pills-tab" role="tablist">
                  <li class="nav-item flex-fill" role="presentation"><a class="nav-link p-2 rounded-0 active" id="pills-creditCard-tab" data-bs-toggle="pill" href="https://demo.bootstrapious.com/shopio/checkout.html#pills-creditCard" role="tab" aria-controls="pills-creditCard" aria-selected="true"><i class="fab fa-cc-visa me-2"></i><span class="small text-uppercase">Credit card</span></a></li>
                  <li class="nav-item flex-fill" role="presentation"><a class="nav-link p-2 rounded-0" id="pills-bankTransfer-tab" data-bs-toggle="pill" href="https://demo.bootstrapious.com/shopio/checkout.html#pills-bankTransfer" role="tab" aria-controls="pills-bankTransfer" aria-selected="false"><i class="fas fa-university me-2"></i><span class="small text-uppercase">Bank transfer</span></a></li>
                  <li class="nav-item flex-fill" role="presentation"><a class="nav-link p-2 rounded-0" id="pills-paypal-tab" data-bs-toggle="pill" href="https://demo.bootstrapious.com/shopio/checkout.html#pills-paypal" role="tab" aria-controls="pills-paypal" aria-selected="false"><i class="fab fa-cc-paypal me-2"></i><span class="small text-uppercase">Paypal</span></a></li>
                </ul>
                <div class="tab-content mb-5" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-creditCard" role="tabpanel" aria-labelledby="pills-creditCard-tab">
                    <form action="https://demo.bootstrapious.com/shopio/checkout.html#">
                      <div class="row">
                        <div class="form-group col-12 mb-3">
                          <label class="form-label small text-uppercase">Name on card</label>
                          <input class="form-control" type="text" placeholder="e.g. Jason Doe">
                        </div>
                        <div class="form-group col-lg-8 mb-3">
                          <label class="form-label small text-uppercase">Card number</label>
                          <input class="form-control" type="text" placeholder="0000-0000-0000-0000">
                        </div>
                        <div class="form-group col-lg-4 mb-3">
                          <label class="form-label small text-uppercase">CVV</label>
                          <input class="form-control" type="text">
                        </div>
                        <div class="form-group col-lg-6 mb-3">
                          <label class="form-label small text-uppercase">Month</label>
                          <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false"><div class="choices__inner"><select class="form-control js-month choices__input" name="month" data-trigger="" hidden="" tabindex="-1" data-choice="active"><option value="">select Month</option></select><div class="choices__list choices__list--single"><div class="choices__item choices__placeholder choices__item--selectable" data-item="" data-id="1" data-value="" data-custom-properties="null" aria-selected="true">select Month</div></div></div><div class="choices__list choices__list--dropdown" aria-expanded="false"><div class="choices__list" role="listbox"><div id="choices--month-to-item-choice-13" class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted" role="option" data-choice="" data-id="13" data-value="" data-select-text="Select" data-choice-selectable="" aria-selected="true">select Month</div><div id="choices--month-to-item-choice-1" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="1" data-value="Option 1" data-select-text="Select" data-choice-selectable="">01</div><div id="choices--month-to-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="Option 1" data-select-text="Select" data-choice-selectable="">02</div><div id="choices--month-to-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="Option 1" data-select-text="Select" data-choice-selectable="">03</div><div id="choices--month-to-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4" data-value="Option 1" data-select-text="Select" data-choice-selectable="">04</div><div id="choices--month-to-item-choice-5" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="5" data-value="Option 1" data-select-text="Select" data-choice-selectable="">05</div><div id="choices--month-to-item-choice-6" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="6" data-value="Option 1" data-select-text="Select" data-choice-selectable="">06</div><div id="choices--month-to-item-choice-7" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="7" data-value="Option 1" data-select-text="Select" data-choice-selectable="">07</div><div id="choices--month-to-item-choice-8" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="8" data-value="Option 1" data-select-text="Select" data-choice-selectable="">08</div><div id="choices--month-to-item-choice-9" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="9" data-value="Option 1" data-select-text="Select" data-choice-selectable="">09</div><div id="choices--month-to-item-choice-10" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="10" data-value="Option 1" data-select-text="Select" data-choice-selectable="">10</div><div id="choices--month-to-item-choice-11" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="11" data-value="Option 1" data-select-text="Select" data-choice-selectable="">11</div><div id="choices--month-to-item-choice-12" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="12" data-value="Option 1" data-select-text="Select" data-choice-selectable="">12</div></div></div></div>
                        </div>
                        <div class="form-group col-lg-6">
                          <label class="form-label small text-uppercase">Year</label>
                          <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false"><div class="choices__inner"><select class="form-control js-year choices__input" name="year" data-trigger="" hidden="" tabindex="-1" data-choice="active"><option value="">select Year</option></select><div class="choices__list choices__list--single"><div class="choices__item choices__placeholder choices__item--selectable" data-item="" data-id="1" data-value="" data-custom-properties="null" aria-selected="true">select Year</div></div></div><div class="choices__list choices__list--dropdown" aria-expanded="false"><div class="choices__list" role="listbox"><div id="choices--year-xl-item-choice-12" class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted" role="option" data-choice="" data-id="12" data-value="" data-select-text="Select" data-choice-selectable="" aria-selected="true">select Year</div><div id="choices--year-xl-item-choice-1" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="1" data-value="Option 1" data-select-text="Select" data-choice-selectable="">2020</div><div id="choices--year-xl-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="Option 1" data-select-text="Select" data-choice-selectable="">2021</div><div id="choices--year-xl-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="Option 1" data-select-text="Select" data-choice-selectable="">2022</div><div id="choices--year-xl-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4" data-value="Option 1" data-select-text="Select" data-choice-selectable="">2023</div><div id="choices--year-xl-item-choice-5" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="5" data-value="Option 1" data-select-text="Select" data-choice-selectable="">2024</div><div id="choices--year-xl-item-choice-6" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="6" data-value="Option 1" data-select-text="Select" data-choice-selectable="">2025</div><div id="choices--year-xl-item-choice-7" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="7" data-value="Option 1" data-select-text="Select" data-choice-selectable="">2026</div><div id="choices--year-xl-item-choice-8" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="8" data-value="Option 1" data-select-text="Select" data-choice-selectable="">2027</div><div id="choices--year-xl-item-choice-9" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="9" data-value="Option 1" data-select-text="Select" data-choice-selectable="">2028</div><div id="choices--year-xl-item-choice-10" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="10" data-value="Option 1" data-select-text="Select" data-choice-selectable="">2029</div><div id="choices--year-xl-item-choice-11" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="11" data-value="Option 1" data-select-text="Select" data-choice-selectable="">2030</div></div></div></div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="tab-pane fade" id="pills-bankTransfer" role="tabpanel" aria-labelledby="pills-bankTransfer-tab">
                    <form action="https://demo.bootstrapious.com/shopio/checkout.html#">
                      <div class="row">
                        <div class="form-group col-lg-6 mb-3">
                          <label class="form-label small text-uppercase">Routing Number</label>
                          <input class="form-control" type="text" placeholder="e.g. Jason Doe">
                        </div>
                        <div class="form-group col-lg-6 mb-3">
                          <label class="form-label small text-uppercase">Account number</label>
                          <input class="form-control" type="text" placeholder="0000-0000-0000-0000">
                        </div>
                        <div class="form-group col-12 mb-3">
                          <label class="form-label small text-uppercase">Name on bank account</label>
                          <input class="form-control" type="text">
                        </div>
                        <div class="form-group col-lg-6">
                          <label class="form-label small text-uppercase">Bank name</label>
                          <input class="form-control" type="text">
                        </div>
                        <div class="form-group col-lg-6">
                          <label class="form-label small text-uppercase">Account type</label>
                          <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false"><div class="choices__inner"><select class="form-control js-accountType choices__input" name="accountType" hidden="" tabindex="-1" data-choice="active"><option value="">Account type</option></select><div class="choices__list choices__list--single"><div class="choices__item choices__placeholder choices__item--selectable" data-item="" data-id="1" data-value="" data-custom-properties="null" aria-selected="true">Account type</div></div></div><div class="choices__list choices__list--dropdown" aria-expanded="false"><div class="choices__list" role="listbox"><div id="choices--accountType-mv-item-choice-1" class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted" role="option" data-choice="" data-id="1" data-value="" data-select-text="Select" data-choice-selectable="" aria-selected="true">Account type</div><div id="choices--accountType-mv-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="ARC" data-select-text="Select" data-choice-selectable="">ARC </div><div id="choices--accountType-mv-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="BOC" data-select-text="Select" data-choice-selectable="">BOC </div><div id="choices--accountType-mv-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4" data-value="CCD" data-select-text="Select" data-choice-selectable="">CCD </div><div id="choices--accountType-mv-item-choice-5" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="5" data-value="PPD" data-select-text="Select" data-choice-selectable="">PPD </div><div id="choices--accountType-mv-item-choice-6" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="6" data-value="TEL" data-select-text="Select" data-choice-selectable="">TEL </div><div id="choices--accountType-mv-item-choice-7" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="7" data-value="WEB" data-select-text="Select" data-choice-selectable="">WEB</div></div></div></div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="tab-pane fade" id="pills-paypal" role="tabpanel" aria-labelledby="pills-paypal-tab">
                    <form action="https://demo.bootstrapious.com/shopio/checkout.html#">
                      <div class="row">
                        <div class="form-group col-12 mb-3">
                          <label class="form-label small text-uppercase">Email address</label>
                          <input class="form-control" type="text" placeholder="Email address">
                        </div>
                        <div class="form-group col-12 mb-3">
                          <label class="form-label small text-uppercase">Password</label>
                          <input class="form-control" type="password" placeholder="Password">
                        </div>
                        <div class="form-group col-12 mb-3">
                          <div class="form-check">
                            <input class="form-check-input" id="flexCheckDefault" type="checkbox">
                            <label class="form-check-label" for="flexCheckDefault">Stay logged in for faster checkout</label>
                          </div>
                        </div>
                        <div class="form-group col-12">
                          <button class="btn btn-primary btn-block" type="submit">Login to Paypal</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- Footer-->
                <div class="bg-light p-4">
                  <div class="row align-items-center">
                    <div class="col-md-9">
                      <ul class="list-inline mb-0">
                        <li class="list-inline-item py-1"><a class="btn btn-outline-primary" href="https://demo.bootstrapious.com/shopio/cart.html"> <i class="fas fa-shopping-cart me-2"></i>Back to cart</a></li>
                        <li class="list-inline-item py-1"><a class="btn btn-primary" href="https://demo.bootstrapious.com/shopio/completed.html"> <i class="far fa-credit-card me-2"></i>Place order</a></li>
                      </ul>
                    </div>
                    <div class="col-md-3 text-start text-md-end">
                      <p class="text-muted mb-1">Cart total</p>
                      <h6 class="h4 mb-0">$75.00</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
