@extends('front.layout.master')
@section('title','Home')

@section('body')

    <!-- Hero slider-->
    <section>
      <div class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" id="hero-slider">
        <div class="swiper-wrapper" id="swiper-wrapper-6a5ead115d6151010b" aria-live="off" style="transition-duration: 0ms; ">
          <div class="swiper-slide hero bg-center bg-cover d-flex align-items-center swiper-slide-prev" style="background: url(front/img/index-slide-1.png);background-size: cover; width: 1476px;" role="group" aria-label="1 / 3">
            <div class="container">
              <div class="row text-lg-center">
                <div class="col-lg-8">
                  <p class="h6 text-uppercase text-muted mb-3">Welcome</p>
                  <h1 class="hero-heading line-height-sm mb-2 title" data-swiper-parallax="-200" style=" transition-duration: 0ms;">Welcome to Auction Online</h1>
                  <div class="row">
                    <div class="col-lg-5 mx-auto">
                      <p class="font-weight-light text-muted mb-4 mt-3 subtitle" data-swiper-parallax="-400" style=" transition-duration: 0ms;">Welcome to the world's leading technology auction floor.</p>
                    </div>
                  </div><a class="btn btn-primary text" href="" data-swiper-parallax="-600" style=" transition-duration: 0ms;"> <i class="fas fa-shopping-bag me-2"></i>Auction now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide hero bg-center bg-cover d-flex align-items-center swiper-slide-active" style="background: url(front/img/bg-art-slide-index.jpg);background-size: cover; width: 1476px;" role="group" aria-label="2 / 3">
            <div class="container">
              <div class="row text-lg-center" >
                <div class="col-lg-8">
                  <p class="h6 text-uppercase text-muted mb-3">Aesthetic art</p>
                  <h1 class="hero-heading line-height-sm mb-2 title" data-swiper-parallax="-200" style=" transition-duration: 0ms;">Art Property Auction</h1>
                  <div class="row">
                    <div class="col-lg-5 mx-auto">
                      <p class="font-weight-light text-muted mb-4 mt-3 subtitle" data-swiper-parallax="-400" style=" transition-duration: 0ms;">Being a pioneer in auctioning products of cultural and artistic value with clear transparency.</p>
                    </div>
                  </div><a class="btn btn-primary text" href="https://demo.bootstrapious.com/shopio/shop.html" data-swiper-parallax="-600" style=" transition-duration: 0ms;"> <i class="fas fa-shopping-bag me-2"></i>Auction now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide hero bg-center bg-cover d-flex align-items-center swiper-slide-next" style="background: url(front/img/index-slide-2.png);background-size: cover; width: 1476px;" role="group" aria-label="3 / 3">
            <div class="container">
              <div class="row text-lg-center">
                <div class="col-lg-8">
                  <p class="h6 text-uppercase text-muted mb-3">Liquidation</p>
                  <h1 class="hero-heading line-height-sm mb-2 title" data-swiper-parallax="-200" style=" transition-duration: 0ms;">Auction of liquidated property</h1>
                  <div class="row">
                    <div class="col-lg-5 mx-auto">
                      <p class="font-weight-light text-muted mb-4 mt-3 subtitle" data-swiper-parallax="-400" style=" transition-duration: 0ms;">With many years of experience in auctioning large and small-scale properties, prestige comes first.</p>
                    </div>
                  </div><a class="btn btn-primary text" href="https://demo.bootstrapious.com/shopio/shop.html" data-swiper-parallax="-600" style=" transition-duration: 0ms;"> <i class="fas fa-shopping-bag me-2"></i>Auction now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination px-4 py-2 text-end h5 font-weight-light swiper-pagination-custom"> <span class="h2">02</span>  <span class="swiper-divider">/</span>  <span class="text-muted">03</span></div>
      <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
    </section>
    <!--Category-->
    <section class="latest spad">
      <div class="container py-5 cateIndex">
        <header class="mb-3 text-center">
          <h2 class="mb-0">Category</h2>
          <p class="text-muted">Featured Category</p>
        </header>
        <div class="row">

          @foreach($categories as $category)
                <div class="col-lg-1 cateInde-item">
                    <a href="">
                        <img src="./front/img/{{$category->path}}" alt="cate" >
                        <span>{{$category->name}}</span>
                    </a>
                </div>
          @endforeach

        </div>
      </div>
    </section>
    <!-- Featured products-->
    <section class="py-5">
      <div class="container">
        <header class="mb-3 text-center">
          <h2 class="mb-0">Featured products</h2>
          <p class="text-muted">Browse the Newest Products</p>
        </header>
        <div class="swiper-container pt-5 swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" id="featuredProducts">
          <div class="swiper-wrapper" id="swiper-wrapper-6ae7d2b19321ec75" aria-live="polite" style=" transition-duration: 0ms;"><div class="swiper-slide pb-5 swiper-slide-duplicate" data-swiper-slide-index="4" style="width: 237.6px; margin-right: 25px;" role="group" aria-label="1 / 19">
            <div class="product mb-4"><span class="badge rounded-0 bg-"></span><a href=""><img class="img-fluid" src="./img/product-12.c4210d28.jpg" alt="Nike air max 95"></a>
              <div class="cta shadow d-inline-block"><a class="product-btn" href=""><i class="fas fa-heart"></i></a><a class="product-btn" href="productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a><a class="product-btn" href="https://demo.bootstrapious.com/shopio/cart.html"><i class="fas fa-dolly-flatbed"></i></a></div>
            </div>
            <h6 class="text-center"><a class="reset-anchor" href="">Nike air max 95</a></h6>
            <p class="text-center text-muted font-weight-bold">$22.00</p>
          </div><div class="swiper-slide pb-5 swiper-slide-duplicate" data-swiper-slide-index="5" style="width: 237.6px; margin-right: 25px;" role="group" aria-label="2 / 19">
            <div class="product mb-4"><span class="badge rounded-0 bg-danger">Soldout</span><a href=""><img class="img-fluid" src="./img/product-13.aff049a7.jpg" alt="Red digital smartwatch"></a>
              <div class="cta shadow d-inline-block"><a class="product-btn" href=""><i class="fas fa-heart"></i></a><a class="product-btn" href="productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a><a class="product-btn" href="https://demo.bootstrapious.com/shopio/cart.html"><i class="fas fa-dolly-flatbed"></i></a></div>
            </div>
            <h6 class="text-center"><a class="reset-anchor" href="">Red digital smartwatch</a></h6>
            <p class="text-center text-muted font-weight-bold">$22.00</p>
          </div><div class="swiper-slide pb-5 swiper-slide-duplicate" data-swiper-slide-index="6" style="width: 237.6px; margin-right: 25px;" role="group" aria-label="3 / 19">
            <div class="product mb-4"><span class="badge rounded-0 bg-"></span><a href=""><img class="img-fluid" src="./img/product-14.1adefbd6.jpg" alt="Air Jordan 12 gym red"></a>
              <div class="cta shadow d-inline-block"><a class="product-btn" href=""><i class="fas fa-heart"></i></a><a class="product-btn" href="productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a><a class="product-btn" href="https://demo.bootstrapious.com/shopio/cart.html"><i class="fas fa-dolly-flatbed"></i></a></div>
            </div>
            <h6 class="text-center"><a class="reset-anchor" href="">Air Jordan 12 gym red</a></h6>
            <p class="text-center text-muted font-weight-bold">$22.00</p>
          </div><div class="swiper-slide pb-5 swiper-slide-duplicate" data-swiper-slide-index="7" style="width: 237.6px; margin-right: 25px;" role="group" aria-label="4 / 19">
            <div class="product mb-4"><span class="badge rounded-0 bg-warning">Hot</span><a href=""><img class="img-fluid" src="./img/product-15.37a0a89c.jpg" alt="Kui Ye Chen’s AirPods"></a>
              <div class="cta shadow d-inline-block"><a class="product-btn" href=""><i class="fas fa-heart"></i></a><a class="product-btn" href="productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a><a class="product-btn" href="https://demo.bootstrapious.com/shopio/cart.html"><i class="fas fa-dolly-flatbed"></i></a></div>
            </div>
            <h6 class="text-center"><a class="reset-anchor" href="">Kui Ye Chen’s AirPods</a></h6>
            <p class="text-center text-muted font-weight-bold">$22.00</p>
          </div><div class="swiper-slide pb-5 swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="8" style="width: 237.6px; margin-right: 25px;" role="group" aria-label="5 / 19">
            <div class="product mb-4"><span class="badge rounded-0 bg-"></span><a href=""><img class="img-fluid" src="./img/product-10.d7432880.jpg" alt="Apple watch"></a>
              <div class="cta shadow d-inline-block"><a class="product-btn" href=""><i class="fas fa-heart"></i></a><a class="product-btn" href="productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a><a class="product-btn" href="https://demo.bootstrapious.com/shopio/cart.html"><i class="fas fa-dolly-flatbed"></i></a></div>
            </div>
            <h6 class="text-center"><a class="reset-anchor" href="">Apple watch</a></h6>
            <p class="text-center text-muted font-weight-bold">$22.00</p>
          </div>
            <!-- Product-->
            <div class="swiper-slide pb-5 swiper-slide-active" data-swiper-slide-index="0" style="width: 237.6px; margin-right: 25px;" role="group" aria-label="6 / 19">
                <div class="product mb-4"><a href=""><img class="img-fluid" src="./img/product-11.1f4b5e9b.jpg" alt="Joemalone Women prefume"></a>
                    <div class="cta shadow d-inline-block"><a class="product-btn" href=""><i class="fas fa-heart"></i></a><a class="product-btn" href=""><i class="fas fa-dolly-flatbed"></i></a></div>
                </div>
                <div class="pro-text">
                    <h6 class="pro-title"><a class="reset-anchor" href="">Joemalone Women prefume</a></h6>
                    <p class="pro-price">Highest price <span>$22.00</span></p>
                    <div>
                        <div class="CountDown-box">
                            <input class="timeData" type="hidden" value="2022-11-05 21:49:09">
                            <div class="CountDown"></div>
                            <span class="pro-user">53 <span><i class="fa-solid fa-user"></i></span></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product-->
            <div class="swiper-slide pb-5 swiper-slide-next" data-swiper-slide-index="1" style="width: 237.6px; margin-right: 25px;" role="group" aria-label="7 / 19">
              <div class="product mb-4"><span class="badge rounded-0 bg-primary">New Arrival</span><a href=""><img class="img-fluid" src="./img/product-9.7bc0d11d.jpg" alt="Silver round analog watch"></a>
                <div class="cta shadow d-inline-block"><a class="product-btn" href=""><i class="fas fa-heart"></i></a><a class="product-btn" href="productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a><a class="product-btn" href="https://demo.bootstrapious.com/shopio/cart.html"><i class="fas fa-dolly-flatbed"></i></a></div>
              </div>
              <h6 class="text-center"><a class="reset-anchor" href="">Silver round analog watch</a></h6>
              <p class="text-center text-muted font-weight-bold">$22.00</p>
            </div>
            <!-- Product-->
            <div class="swiper-slide pb-5" data-swiper-slide-index="2" style="width: 237.6px; margin-right: 25px;" role="group" aria-label="8 / 19">
              <div class="product mb-4"><span class="badge rounded-0 bg-"></span><a href=""><img class="img-fluid" src="./img/product-10.d7432880.jpg" alt="Apple Watch"></a>
                <div class="cta shadow d-inline-block"><a class="product-btn" href=""><i class="fas fa-heart"></i></a><a class="product-btn" href="productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a><a class="product-btn" href="https://demo.bootstrapious.com/shopio/cart.html"><i class="fas fa-dolly-flatbed"></i></a></div>
              </div>
              <h6 class="text-center"><a class="reset-anchor" href="">Apple Watch</a></h6>
              <p class="text-center text-muted font-weight-bold">$22.00</p>
            </div>
            <!-- Product-->
            <div class="swiper-slide pb-5" data-swiper-slide-index="3" style="width: 237.6px; margin-right: 25px;" role="group" aria-label="9 / 19">
              <div class="product mb-4"><span class="badge rounded-0 bg-info">Trending</span><a href=""><img class="img-fluid" src="./img/product-11.1f4b5e9b.jpg" alt="Joemalone Women prefume"></a>
                <div class="cta shadow d-inline-block"><a class="product-btn" href=""><i class="fas fa-heart"></i></a><a class="product-btn" href="productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a><a class="product-btn" href="https://demo.bootstrapious.com/shopio/cart.html"><i class="fas fa-dolly-flatbed"></i></a></div>
              </div>
              <h6 class="text-center"><a class="reset-anchor" href="">Joemalone Women prefume</a></h6>
              <p class="text-center text-muted font-weight-bold">$22.00</p>
            </div>
            <!-- Product-->
            <div class="swiper-slide pb-5" data-swiper-slide-index="4" style="width: 237.6px; margin-right: 25px;" role="group" aria-label="10 / 19">
              <div class="product mb-4"><span class="badge rounded-0 bg-"></span><a href=""><img class="img-fluid" src="./img/product-12.c4210d28.jpg" alt="Nike air max 95"></a>
                <div class="cta shadow d-inline-block"><a class="product-btn" href=""><i class="fas fa-heart"></i></a><a class="product-btn" href="productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a><a class="product-btn" href="https://demo.bootstrapious.com/shopio/cart.html"><i class="fas fa-dolly-flatbed"></i></a></div>
              </div>
              <h6 class="text-center"><a class="reset-anchor" href="">Nike air max 95</a></h6>
              <p class="text-center text-muted font-weight-bold">$22.00</p>
            </div>
            <!-- Product-->
            <div class="swiper-slide pb-5" data-swiper-slide-index="5" style="width: 237.6px; margin-right: 25px;" role="group" aria-label="11 / 19">
              <div class="product mb-4"><span class="badge rounded-0 bg-danger">Soldout</span><a href=""><img class="img-fluid" src="./img/product-13.aff049a7.jpg" alt="Red digital smartwatch"></a>
                <div class="cta shadow d-inline-block"><a class="product-btn" href=""><i class="fas fa-heart"></i></a><a class="product-btn" href="productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a><a class="product-btn" href="https://demo.bootstrapious.com/shopio/cart.html"><i class="fas fa-dolly-flatbed"></i></a></div>
              </div>
              <h6 class="text-center"><a class="reset-anchor" href="">Red digital smartwatch</a></h6>
              <p class="text-center text-muted font-weight-bold">$22.00</p>
            </div>
            <!-- Product-->
            <div class="swiper-slide pb-5" data-swiper-slide-index="6" style="width: 237.6px; margin-right: 25px;" role="group" aria-label="12 / 19">
              <div class="product mb-4"><span class="badge rounded-0 bg-"></span><a href=""><img class="img-fluid" src="./img/product-14.1adefbd6.jpg" alt="Air Jordan 12 gym red"></a>
                <div class="cta shadow d-inline-block"><a class="product-btn" href=""><i class="fas fa-heart"></i></a><a class="product-btn" href="productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a><a class="product-btn" href="https://demo.bootstrapious.com/shopio/cart.html"><i class="fas fa-dolly-flatbed"></i></a></div>
              </div>
              <h6 class="text-center"><a class="reset-anchor" href="">Air Jordan 12 gym red</a></h6>
              <p class="text-center text-muted font-weight-bold">$22.00</p>
            </div>
            <!-- Product-->
            <div class="swiper-slide pb-5" data-swiper-slide-index="7" style="width: 237.6px; margin-right: 25px;" role="group" aria-label="13 / 19">
              <div class="product mb-4"><span class="badge rounded-0 bg-warning">Hot</span><a href=""><img class="img-fluid" src="./img/product-15.37a0a89c.jpg" alt="Kui Ye Chen’s AirPods"></a>
                <div class="cta shadow d-inline-block"><a class="product-btn" href=""><i class="fas fa-heart"></i></a><a class="product-btn" href="productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a><a class="product-btn" href="https://demo.bootstrapious.com/shopio/cart.html"><i class="fas fa-dolly-flatbed"></i></a></div>
              </div>
              <h6 class="text-center"><a class="reset-anchor" href="">Kui Ye Chen’s AirPods</a></h6>
              <p class="text-center text-muted font-weight-bold">$22.00</p>
            </div>
            <!-- Product-->
            <div class="swiper-slide pb-5 swiper-slide-duplicate-prev" data-swiper-slide-index="8" style="width: 237.6px; margin-right: 25px;" role="group" aria-label="14 / 19">
              <div class="product mb-4"><span class="badge rounded-0 bg-"></span><a href=""><img class="img-fluid" src="./img/product-10.d7432880.jpg" alt="Apple watch"></a>
                <div class="cta shadow d-inline-block"><a class="product-btn" href=""><i class="fas fa-heart"></i></a><a class="product-btn" href="productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a><a class="product-btn" href="https://demo.bootstrapious.com/shopio/cart.html"><i class="fas fa-dolly-flatbed"></i></a></div>
              </div>
              <h6 class="text-center"><a class="reset-anchor" href="">Apple watch</a></h6>
              <p class="text-center text-muted font-weight-bold">$22.00</p>
            </div>
            <div class="swiper-slide pb-5 swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 237.6px; margin-right: 25px;" role="group" aria-label="15 / 19">
              <div class="product mb-4"><span class="badge rounded-0 bg-danger">Soldout</span><a href=""><img class="img-fluid" src="./img/product-8.88684cc3.jpg" alt="Black Canon EOS camera"></a>
                <div class="cta shadow d-inline-block"><a class="product-btn" href=""><i class="fas fa-heart"></i></a><a class="product-btn" href="productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a><a class="product-btn" href="https://demo.bootstrapious.com/shopio/cart.html"><i class="fas fa-dolly-flatbed"></i></a></div>
              </div>
              <h6 class="text-center"><a class="reset-anchor" href="">Black Canon EOS camera</a></h6>
              <p class="text-center text-muted font-weight-bold">$22.00</p>
            </div><div class="swiper-slide pb-5 swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 237.6px; margin-right: 25px;" role="group" aria-label="16 / 19">
              <div class="product mb-4"><span class="badge rounded-0 bg-primary">New Arrival</span><a href=""><img class="img-fluid" src="./img/product-9.7bc0d11d.jpg" alt="Silver round analog watch"></a>
                <div class="cta shadow d-inline-block"><a class="product-btn" href=""><i class="fas fa-heart"></i></a><a class="product-btn" href="productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a><a class="product-btn" href="https://demo.bootstrapious.com/shopio/cart.html"><i class="fas fa-dolly-flatbed"></i></a></div>
              </div>
              <h6 class="text-center"><a class="reset-anchor" href="">Silver round analog watch</a></h6>
              <p class="text-center text-muted font-weight-bold">$22.00</p>
            </div><div class="swiper-slide pb-5 swiper-slide-duplicate" data-swiper-slide-index="2" style="width: 237.6px; margin-right: 25px;" role="group" aria-label="17 / 19">
              <div class="product mb-4"><span class="badge rounded-0 bg-"></span><a href=""><img class="img-fluid" src="./img/product-10.d7432880.jpg" alt="Apple Watch"></a>
                <div class="cta shadow d-inline-block"><a class="product-btn" href=""><i class="fas fa-heart"></i></a><a class="product-btn" href="productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a><a class="product-btn" href="https://demo.bootstrapious.com/shopio/cart.html"><i class="fas fa-dolly-flatbed"></i></a></div>
              </div>
              <h6 class="text-center"><a class="reset-anchor" href="">Apple Watch</a></h6>
              <p class="text-center text-muted font-weight-bold">$22.00</p>
            </div><div class="swiper-slide pb-5 swiper-slide-duplicate" data-swiper-slide-index="3" style="width: 237.6px; margin-right: 25px;" role="group" aria-label="18 / 19">
              <div class="product mb-4"><span class="badge rounded-0 bg-info">Trending</span><a href=""><img class="img-fluid" src="./img/product-11.1f4b5e9b.jpg" alt="Joemalone Women prefume"></a>
                <div class="cta shadow d-inline-block"><a class="product-btn" href=""><i class="fas fa-heart"></i></a><a class="product-btn" href="productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a><a class="product-btn" href="https://demo.bootstrapious.com/shopio/cart.html"><i class="fas fa-dolly-flatbed"></i></a></div>
              </div>
              <h6 class="text-center"><a class="reset-anchor" href="">Joemalone Women prefume</a></h6>
              <p class="text-center text-muted font-weight-bold">$22.00</p>
            </div><div class="swiper-slide pb-5 swiper-slide-duplicate" data-swiper-slide-index="4" style="width: 237.6px; margin-right: 25px;" role="group" aria-label="19 / 19">
              <div class="product mb-4"><span class="badge rounded-0 bg-"></span><a href=""><img class="img-fluid" src="./img/product-12.c4210d28.jpg" alt="Nike air max 95"></a>
                <div class="cta shadow d-inline-block"><a class="product-btn" href=""><i class="fas fa-heart"></i></a><a class="product-btn" href="productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a><a class="product-btn" href="https://demo.bootstrapious.com/shopio/cart.html"><i class="fas fa-dolly-flatbed"></i></a></div>
              </div>
              <h6 class="text-center"><a class="reset-anchor" href="">Nike air max 95</a></h6>
              <p class="text-center text-muted font-weight-bold">$22.00</p>
            </div></div>
          <div class="swiper-button-prev px-3 py-2" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-6ae7d2b19321ec75">
            <svg class="svg-icon svg-icon-md">
              <use xlink:href="#arrow-left-1"> </use>
            </svg>Prev
          </div>
          <div class="swiper-button-next px-3 py-2" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-6ae7d2b19321ec75">
            Next
            <svg class="svg-icon svg-icon-md">
              <use xlink:href="#arrow-right-1"> </use>
            </svg>
          </div>
          <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
      </div>
    </section>
    <!-- Divider section-->
    <section class="py-5 bg-center bg-cover" style="background: url(front/img/bg-index-3.jpg)">
      <div class="container py-5">
        <div class="row">
          <div class="col-lg-6 ms-auto">
            <h2 class="hero-heading">Post your product for auction</h2>
            <p class="text-muted">Do you have real art products, rare collectibles or even old products for sale immediately.</p><a class="btn btn-primary" href="">Sell now</a>
          </div>
        </div>
      </div>
    </section>
    <!--Product featured-->
    <section class="py-5">
      <div class="container">
        <header class="mb-3 text-center">
          <h2 class="mb-0">Product</h2>
          <p class="text-muted">Recommended products for today</p>
        </header>
        <div class="row py-3">
          <div class="col-lg-2dot4">
            <div class="product mb-4"><a href=""><img class="img-fluid" src="./img/product-11.1f4b5e9b.jpg" alt="Joemalone Women prefume"></a>
              <div class="cta shadow d-inline-block"><a class="product-btn" href=""><i class="fas fa-heart"></i></a><a class="product-btn" href=""><i class="fas fa-dolly-flatbed"></i></a></div>
            </div>
            <div class="pro-text">
              <h6 class="pro-title"><a class="reset-anchor" href="">Joemalone Women prefume</a></h6>
              <p class="pro-price">Highest price <span>$22.00</span></p>
              <div>
                <div class="CountDown-box">
                  <input class="timeData" type="hidden" value="2022-11-05 21:49:09">
                  <div class="CountDown"></div>
                  <span class="pro-user">53 <span><i class="fa-solid fa-user"></i></span></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2dot4">
            <div class="product mb-4"><span class="badge rounded-0 bg-info">Trending</span><a href=""><img class="img-fluid" src="./img/product-11.1f4b5e9b.jpg" alt="Joemalone Women prefume"></a>
              <div class="cta shadow d-inline-block"><a class="product-btn" href=""><i class="fas fa-heart"></i></a><a class="product-btn" href="productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a><a class="product-btn" href="https://demo.bootstrapious.com/shopio/cart.html"><i class="fas fa-dolly-flatbed"></i></a></div>
            </div>
            <h6 class="text-center"><a class="reset-anchor" href="">Joemalone Women prefume</a></h6>
            <p class="text-center text-muted font-weight-bold">$22.00</p>
          </div>
          <div class="col-lg-2dot4">
            <div class="product mb-4"><span class="badge rounded-0 bg-info">Trending</span><a href=""><img class="img-fluid" src="./img/product-11.1f4b5e9b.jpg" alt="Joemalone Women prefume"></a>
              <div class="cta shadow d-inline-block"><a class="product-btn" href=""><i class="fas fa-heart"></i></a><a class="product-btn" href="productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a><a class="product-btn" href="https://demo.bootstrapious.com/shopio/cart.html"><i class="fas fa-dolly-flatbed"></i></a></div>
            </div>
            <h6 class="text-center"><a class="reset-anchor" href="">Joemalone Women prefume</a></h6>
            <p class="text-center text-muted font-weight-bold">$22.00</p>
          </div>
          <div class="col-lg-2dot4">
            <div class="product mb-4"><span class="badge rounded-0 bg-info">Trending</span><a href=""><img class="img-fluid" src="./img/product-11.1f4b5e9b.jpg" alt="Joemalone Women prefume"></a>
              <div class="cta shadow d-inline-block"><a class="product-btn" href=""><i class="fas fa-heart"></i></a><a class="product-btn" href="productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a><a class="product-btn" href="https://demo.bootstrapious.com/shopio/cart.html"><i class="fas fa-dolly-flatbed"></i></a></div>
            </div>
            <h6 class="text-center"><a class="reset-anchor" href="">Joemalone Women prefume</a></h6>
            <p class="text-center text-muted font-weight-bold">$22.00</p>
          </div>
          <div class="col-lg-2dot4">
            <div class="product mb-4"><span class="badge rounded-0 bg-info">Trending</span><a href=""><img class="img-fluid" src="./img/product-11.1f4b5e9b.jpg" alt="Joemalone Women prefume"></a>
              <div class="cta shadow d-inline-block"><a class="product-btn" href=""><i class="fas fa-heart"></i></a><a class="product-btn" href="productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a><a class="product-btn" href="https://demo.bootstrapious.com/shopio/cart.html"><i class="fas fa-dolly-flatbed"></i></a></div>
            </div>
            <h6 class="text-center"><a class="reset-anchor" href="">Joemalone Women prefume</a></h6>
            <p class="text-center text-muted font-weight-bold">$22.00</p>
          </div>
          <div class="col-lg-2dot4">
            <div class="product mb-4"><span class="badge rounded-0 bg-info">Trending</span><a href=""><img class="img-fluid" src="./img/product-11.1f4b5e9b.jpg" alt="Joemalone Women prefume"></a>
              <div class="cta shadow d-inline-block"><a class="product-btn" href=""><i class="fas fa-heart"></i></a><a class="product-btn" href="productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a><a class="product-btn" href="https://demo.bootstrapious.com/shopio/cart.html"><i class="fas fa-dolly-flatbed"></i></a></div>
            </div>
            <h6 class="text-center"><a class="reset-anchor" href="">Joemalone Women prefume</a></h6>
            <p class="text-center text-muted font-weight-bold">$22.00</p>
          </div>
          <div class="col-lg-2dot4">
            <div class="product mb-4"><span class="badge rounded-0 bg-info">Trending</span><a href=""><img class="img-fluid" src="./img/product-11.1f4b5e9b.jpg" alt="Joemalone Women prefume"></a>
              <div class="cta shadow d-inline-block"><a class="product-btn" href=""><i class="fas fa-heart"></i></a><a class="product-btn" href="productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a><a class="product-btn" href="https://demo.bootstrapious.com/shopio/cart.html"><i class="fas fa-dolly-flatbed"></i></a></div>
            </div>
            <h6 class="text-center"><a class="reset-anchor" href="">Joemalone Women prefume</a></h6>
            <p class="text-center text-muted font-weight-bold">$22.00</p>
          </div>
          <div class="col-lg-2dot4">
            <div class="product mb-4"><span class="badge rounded-0 bg-info">Trending</span><a href=""><img class="img-fluid" src="./img/product-11.1f4b5e9b.jpg" alt="Joemalone Women prefume"></a>
              <div class="cta shadow d-inline-block"><a class="product-btn" href=""><i class="fas fa-heart"></i></a><a class="product-btn" href="productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a><a class="product-btn" href="https://demo.bootstrapious.com/shopio/cart.html"><i class="fas fa-dolly-flatbed"></i></a></div>
            </div>
            <h6 class="text-center"><a class="reset-anchor" href="">Joemalone Women prefume</a></h6>
            <p class="text-center text-muted font-weight-bold">$22.00</p>
          </div>
          <div class="col-lg-2dot4">
            <div class="product mb-4"><span class="badge rounded-0 bg-info">Trending</span><a href=""><img class="img-fluid" src="./img/product-11.1f4b5e9b.jpg" alt="Joemalone Women prefume"></a>
              <div class="cta shadow d-inline-block"><a class="product-btn" href=""><i class="fas fa-heart"></i></a><a class="product-btn" href="productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a><a class="product-btn" href="https://demo.bootstrapious.com/shopio/cart.html"><i class="fas fa-dolly-flatbed"></i></a></div>
            </div>
            <h6 class="text-center"><a class="reset-anchor" href="">Joemalone Women prefume</a></h6>
            <p class="text-center text-muted font-weight-bold">$22.00</p>
          </div>
          <div class="col-lg-2dot4">
            <div class="product mb-4"><span class="badge rounded-0 bg-info">Trending</span><a href=""><img class="img-fluid" src="./img/product-11.1f4b5e9b.jpg" alt="Joemalone Women prefume"></a>
              <div class="cta shadow d-inline-block"><a class="product-btn" href=""><i class="fas fa-heart"></i></a><a class="product-btn" href="productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a><a class="product-btn" href="https://demo.bootstrapious.com/shopio/cart.html"><i class="fas fa-dolly-flatbed"></i></a></div>
            </div>
            <h6 class="text-center"><a class="reset-anchor" href="">Joemalone Women prefume</a></h6>
            <p class="text-center text-muted font-weight-bold">$22.00</p>
          </div>
          <div class="col-lg-2dot4">
            <div class="product mb-4"><span class="badge rounded-0 bg-info">Trending</span><a href=""><img class="img-fluid" src="./img/product-11.1f4b5e9b.jpg" alt="Joemalone Women prefume"></a>
              <div class="cta shadow d-inline-block"><a class="product-btn" href=""><i class="fas fa-heart"></i></a><a class="product-btn" href="productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a><a class="product-btn" href="https://demo.bootstrapious.com/shopio/cart.html"><i class="fas fa-dolly-flatbed"></i></a></div>
            </div>
            <h6 class="text-center"><a class="reset-anchor" href="">Joemalone Women prefume</a></h6>
            <p class="text-center text-muted font-weight-bold">$22.00</p>
          </div>
          <div class="col-lg-2dot4">
            <div class="product mb-4"><span class="badge rounded-0 bg-info">Trending</span><a href=""><img class="img-fluid" src="./img/product-11.1f4b5e9b.jpg" alt="Joemalone Women prefume"></a>
              <div class="cta shadow d-inline-block"><a class="product-btn" href=""><i class="fas fa-heart"></i></a><a class="product-btn" href="productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a><a class="product-btn" href="https://demo.bootstrapious.com/shopio/cart.html"><i class="fas fa-dolly-flatbed"></i></a></div>
            </div>
            <h6 class="text-center"><a class="reset-anchor" href="">Joemalone Women prefume</a></h6>
            <p class="text-center text-muted font-weight-bold">$22.00</p>
          </div>
          <div class="col-lg-2dot4">
            <div class="product mb-4"><span class="badge rounded-0 bg-info">Trending</span><a href=""><img class="img-fluid" src="./img/product-11.1f4b5e9b.jpg" alt="Joemalone Women prefume"></a>
              <div class="cta shadow d-inline-block"><a class="product-btn" href=""><i class="fas fa-heart"></i></a><a class="product-btn" href="productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a><a class="product-btn" href="https://demo.bootstrapious.com/shopio/cart.html"><i class="fas fa-dolly-flatbed"></i></a></div>
            </div>
            <h6 class="text-center"><a class="reset-anchor" href="">Joemalone Women prefume</a></h6>
            <p class="text-center text-muted font-weight-bold">$22.00</p>
          </div>
          <div class="col-lg-2dot4">
            <div class="product mb-4"><span class="badge rounded-0 bg-info">Trending</span><a href=""><img class="img-fluid" src="./img/product-11.1f4b5e9b.jpg" alt="Joemalone Women prefume"></a>
              <div class="cta shadow d-inline-block"><a class="product-btn" href=""><i class="fas fa-heart"></i></a><a class="product-btn" href="productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a><a class="product-btn" href="https://demo.bootstrapious.com/shopio/cart.html"><i class="fas fa-dolly-flatbed"></i></a></div>
            </div>
            <h6 class="text-center"><a class="reset-anchor" href="">Joemalone Women prefume</a></h6>
            <p class="text-center text-muted font-weight-bold">$22.00</p>
          </div>
          <div class="col-lg-2dot4">
            <div class="product mb-4"><span class="badge rounded-0 bg-info">Trending</span><a href=""><img class="img-fluid" src="./img/product-11.1f4b5e9b.jpg" alt="Joemalone Women prefume"></a>
              <div class="cta shadow d-inline-block"><a class="product-btn" href=""><i class="fas fa-heart"></i></a><a class="product-btn" href="productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a><a class="product-btn" href="https://demo.bootstrapious.com/shopio/cart.html"><i class="fas fa-dolly-flatbed"></i></a></div>
            </div>
            <h6 class="text-center"><a class="reset-anchor" href="">Joemalone Women prefume</a></h6>
            <p class="text-center text-muted font-weight-bold">$22.00</p>
          </div>
          <div class="col-lg-2dot4">
            <div class="product mb-4"><span class="badge rounded-0 bg-info">Trending</span><a href=""><img class="img-fluid" src="./img/product-11.1f4b5e9b.jpg" alt="Joemalone Women prefume"></a>
              <div class="cta shadow d-inline-block"><a class="product-btn" href=""><i class="fas fa-heart"></i></a><a class="product-btn" href="productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a><a class="product-btn" href="https://demo.bootstrapious.com/shopio/cart.html"><i class="fas fa-dolly-flatbed"></i></a></div>
            </div>
            <h6 class="text-center"><a class="reset-anchor" href="">Joemalone Women prefume</a></h6>
            <p class="text-center text-muted font-weight-bold">$22.00</p>
          </div>
          <div class="col-lg-2dot4">
            <div class="product mb-4"><span class="badge rounded-0 bg-info">Trending</span><a href=""><img class="img-fluid" src="./img/product-11.1f4b5e9b.jpg" alt="Joemalone Women prefume"></a>
              <div class="cta shadow d-inline-block"><a class="product-btn" href=""><i class="fas fa-heart"></i></a><a class="product-btn" href="productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a><a class="product-btn" href="https://demo.bootstrapious.com/shopio/cart.html"><i class="fas fa-dolly-flatbed"></i></a></div>
            </div>
            <h6 class="text-center"><a class="reset-anchor" href="">Joemalone Women prefume</a></h6>
            <p class="text-center text-muted font-weight-bold">$22.00</p>
          </div>
          <div class="col-lg-2dot4">
            <div class="product mb-4"><span class="badge rounded-0 bg-info">Trending</span><a href=""><img class="img-fluid" src="./img/product-11.1f4b5e9b.jpg" alt="Joemalone Women prefume"></a>
              <div class="cta shadow d-inline-block"><a class="product-btn" href=""><i class="fas fa-heart"></i></a><a class="product-btn" href="productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a><a class="product-btn" href="https://demo.bootstrapious.com/shopio/cart.html"><i class="fas fa-dolly-flatbed"></i></a></div>
            </div>
            <h6 class="text-center"><a class="reset-anchor" href="">Joemalone Women prefume</a></h6>
            <p class="text-center text-muted font-weight-bold">$22.00</p>
          </div>
          <div class="col-lg-2dot4">
            <div class="product mb-4"><span class="badge rounded-0 bg-info">Trending</span><a href=""><img class="img-fluid" src="./img/product-11.1f4b5e9b.jpg" alt="Joemalone Women prefume"></a>
              <div class="cta shadow d-inline-block"><a class="product-btn" href=""><i class="fas fa-heart"></i></a><a class="product-btn" href="productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a><a class="product-btn" href="https://demo.bootstrapious.com/shopio/cart.html"><i class="fas fa-dolly-flatbed"></i></a></div>
            </div>
            <h6 class="text-center"><a class="reset-anchor" href="">Joemalone Women prefume</a></h6>
            <p class="text-center text-muted font-weight-bold">$22.00</p>
          </div>
          <div class="col-lg-2dot4">
            <div class="product mb-4"><span class="badge rounded-0 bg-info">Trending</span><a href=""><img class="img-fluid" src="./img/product-11.1f4b5e9b.jpg" alt="Joemalone Women prefume"></a>
              <div class="cta shadow d-inline-block"><a class="product-btn" href=""><i class="fas fa-heart"></i></a><a class="product-btn" href="productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a><a class="product-btn" href="https://demo.bootstrapious.com/shopio/cart.html"><i class="fas fa-dolly-flatbed"></i></a></div>
            </div>
            <h6 class="text-center"><a class="reset-anchor" href="">Joemalone Women prefume</a></h6>
            <p class="text-center text-muted font-weight-bold">$22.00</p>
          </div>
        </div>
        <div class="btn-pr-index">
          <a href="" class="btn btn-primary">View more</a>
        </div>
      </div>
    </section>
    <!-- Blog-->
    <section class="latest spad py-5">
      <div class="container">
        <header class="mb-3 text-center">
          <h2 class="mb-0">From The Blog</h2>
          <p class="text-muted">Browse the Newest Blogs</p>
        </header>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="blog__item">
              <img src="./img/product-1.ea13b77a.jpg" alt="blog">
              <div class="blog__item__text">
                <span><i class="fa-regular fa-calendar"></i> 16 February 2020</span>
                <h5>What Curling Irons Are The Best Ones</h5>
                <a href=""><span></span>Read More</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="blog__item">
              <img src="./img/product-2.207aaf3b.jpg" alt="blog">
              <div class="blog__item__text">
                <span><i class="fa-regular fa-calendar"></i> 21 February 2020</span>
                <h5>Eternity Bands Do Last Forever</h5>
                <a href=""><span></span>Read More</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="blog__item">
              <img src="./img/product-3.fc009d76.jpg" alt="blog">
              <div class="blog__item__text">
                <span><i class="fa-regular fa-calendar"></i> 28 February 2020</span>
                <h5>The Health Benefits Of Sunglasses</h5>
                <a href="https://preview.colorlib.com/theme/malefashion/#"><span></span>Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Newsletter section-->
    <section class="pb-5">
      <div class="container p-5 bg-light">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <h3>Get the latest news</h3>
            <p class="text-small text-muted mb-0">Announcements about auction products or events</p>
          </div>
          <div class="col-lg-6">
            <form action="">
              <div class="input-group">
                <input class="form-control rounded-0" type="text" placeholder="Enter your email address" aria-label="Enter your email address" aria-describedby="button-addon2">
                <button class="btn btn-primary" id="button-addon2" type="button">Subscribe</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Features-->
    <section>
      <div class="container pb-5">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="d-flex align-items-center p-4 w-100">
              <span style="font-size: 30px"><i class="fa-light fa-truck-clock"></i></span>
              <div class="ms-3">
                <h6 class="mb-1 text-uppercase">Free shipping </h6>
                <p class="small text-muted mb-0">For the first 3 orders</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="d-flex align-items-center p-4 w-100">
              <span style="font-size: 30px"><i class="fa-regular fa-shield-check"></i></span>
              <div class="ms-3">
                <h6 class="mb-1 text-uppercase">30 days return </h6>
                <p class="small text-muted mb-0">If goods have problems</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="d-flex align-items-center p-4 w-100">
              <span style="font-size: 30px"><i class="fa-regular fa-credit-card"></i></span>
              <div class="ms-3">
                <h6 class="mb-1 text-uppercase">Secure payment </h6>
                <p class="small text-muted mb-0">100% secure payment</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="d-flex align-items-center p-4 w-100">
              <span style="font-size: 30px"><i class="fa-regular fa-phone"></i></span>
              <div class="ms-3">
                <h6 class="mb-1 text-uppercase">24/7 support </h6>
                <p class="small text-muted mb-0">Dedicated support</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection