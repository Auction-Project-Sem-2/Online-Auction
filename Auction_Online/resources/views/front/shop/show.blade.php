
@extends('front.layout.master')

@section('title','Product Detail')

@section('body')

        <!-- Breadcrumb-->
        <div class="bg-light py-2">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 bg-light">
                        <li class="breadcrumb-item"><a class="reset-anchor" href="https://demo.bootstrapious.com/shopio/index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Product Detail</li>
                    </ol>
                </nav>
            </div>
        </div>
        <section class="py-5">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="row">
                            <div class="col-md-2 order-2 order-md-1">
                                <!-- Slider thumbnails-->
                                <div class="swiper-container swiper-thumbnails swiper-container-initialized swiper-container-vertical swiper-container-pointer-events swiper-container-thumbs" id="detailSliderThumb">
                                    <div class="swiper-wrapper" id="swiper-wrapper-10772dc37263e05c1" aria-live="polite">

                                        @foreach($product->productImages as $image)
                                            <div class="swiper-slide swiper-slide-visible swiper-slide-active swiper-slide-thumb-active" style="height: 85.75px; margin-bottom: 10px;" role="group" aria-label="1 / 4">
                                                <img class="img-fluid" src="./front/img/products/{{$image->path}}" alt="..">
                                            </div>
                                        @endforeach

                                    </div>
                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                            </div>
                            <div class="col-md-10 order-1 order-md-2 mb-4 mb-lg-0">
                                <!-- Item slider-->
                                <div class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" id="detailSlider">
                                    <div class="swiper-wrapper" id="swiper-wrapper-d9ce181c9756cbbc" aria-live="polite" >

                                        @foreach($product->productImages as $image)
                                            <div class="swiper-slide swiper-slide-active" style="width: 523px; margin-right: 10px;" role="group" aria-label="1 / 4">
                                                <a class="glightbox" href="./front/img/products/{{$image->path}}">
                                                    <img class="img-fluid" src="./front/img/products/{{$image->path}}" alt="..">
                                                </a>
                                            </div>
                                        @endforeach

                                    </div>
                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                            </div>
                        </div>
                    </div>
                    <!-- Item info-->
                    <div class="col-lg-6 detail-item">
                        <h1 title="{{$product->name}}">{{$product->name}}</h1>
                        <p class="h4">${{number_format($product->price,2)}}</p>
                        <p class="text-small mb-4">{{$product->description}}</p>
                        <div class="d-flex align-items-center mb-4 detail-price-time">
                            <form action="">
                                <div class="py-3 price-detail-box">
                                    <label for="price-detail">$</label>
                                    <input class="form-control" id="price-detail" type="text" placeholder="Price">
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm py-2 border-bottom-0 px-5 me-3" href="">
                                    <i class="fa-solid fa-gavel"></i>Auction
                                </button>
                                <a class="p-0 reset-anchor d-inline-block mx-2" href=""><i class="fas fa-heart"></i></a>
                                <a class="p-0 reset-anchor d-inline-block mx-2" href=""><i class="fas fa-share-alt"></i></a>
                            </form>
                            <div>
                                <input class="timeData" type="hidden" value="{{$product->end_time}}">
                                <p style="padding-left: 20px;color:#575757;font-weight: bold">End later:</p>
                                <div class="CountDown CountDown-detail"></div>
                            </div>
                        </div>
                        <br>
                        <div class="d-flex flex-wrap align-items-center mb-4">
                            <p class="mb-0 me-3">Select color:</p>
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <input class="btn-check" id="color1" type="radio" name="colorVariants" checked="">
                                    <label class="btn p-0 m-0" for="color1"><i class="fas fa-circle text-warning"></i></label>
                                </li>
                                <li class="list-inline-item">
                                    <input class="btn-check" id="color2" type="radio" name="colorVariants">
                                    <label class="btn p-0 m-0" for="color2"><i class="fas fa-circle text-danger"></i></label>
                                </li>
                                <li class="list-inline-item">
                                    <input class="btn-check" id="color3" type="radio" name="colorVariants">
                                    <label class="btn p-0 m-0" for="color3"><i class="fas fa-circle text-info"></i></label>
                                </li>
                                <li class="list-inline-item">
                                    <input class="btn-check" id="color4" type="radio" name="colorVariants">
                                    <label class="btn p-0 m-0" for="color4"><i class="fas fa-circle text-success"></i></label>
                                </li>
                            </ul>
                        </div>
                        <ul class="list-unstyled small d-inline-block">
                            <li class="px-3 py-2 mb-1 bg-light"><strong class="text-uppercase">SKU:</strong><span class="ms-2 text-muted">{{$product->sku}}</span></li>
                            <li class="px-3 py-2 mb-1 bg-light text-muted"><strong class="text-uppercase text-dark">Category:</strong><a class="reset-anchor ms-2" href="">{{$product->productCategory->name}}</a></li>
                            <li class="px-3 py-2 mb-1 bg-light text-muted"><strong class="text-uppercase text-dark">Qty:</strong><a class="reset-anchor ms-2" href="">{{$product->qty}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-5">
            <div class="container">
                <div class="row">
                    <!-- Item information-->
                    <div class="col-xl-10 mx-auto">
                        <ul class="nav nav-tabs tabs-fill justify-content-center border-0 flex-column flex-md-row" id="myTab" role="tablist">
                            <li class="nav-item flex-fill text-center bg-light mx-2" role="presentation"><a class="nav-link text-small fw-bold py-3 border-0 active" id="info-tab" data-bs-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="true">History Auction</a></li>
                            <li class="nav-item flex-fill text-center bg-light mx-2" role="presentation"><a class="nav-link text-small fw-bold py-3 border-0 " id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="false">Description</a></li>
                            <li class="nav-item flex-fill text-center bg-light mx-2" role="presentation"><a class="nav-link text-small fw-bold py-3 border-0" id="shipping-tab" data-bs-toggle="tab" href="#shipping" role="tab" aria-controls="shipping" aria-selected="false">Shipping &amp; Returns</a></li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
                                <div class="py-3">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <table class="table table-bordered" >
                                                <thead>
                                                    <th>User</th>
                                                    <th>Price</th>
                                                    <th>Time</th>
                                                </thead>
                                                <tbody>
                                                    <td>Admin</td>
                                                    <td>$35.00</td>
                                                    <td>2022-09-09 23:13:47</td>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="description" role="tabpanel" aria-labelledby="description-tab">
                                <div class="p-3 p-md-5">
                                    {{$product->description}}
                                </div>
                            </div>
                            <div class="tab-pane fade" id="shipping" role="tabpanel" aria-labelledby="shipping-tab">
                                <div class="p-3 p-md-5">
                                    <h6>Returns Policy</h6>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eros justo, accumsan non dui sit amet. Phasellus semper volutpat mi sed imperdiet. Ut odio lectus, vulputate non ex non, mattis sollicitudin purus. Mauris consequat justo a enim interdum, in consequat dolor accumsan. Nulla iaculis diam purus, ut vehicula leo efficitur at.</p>
                                    <p class="text-muted mb-5">Interdum et malesuada fames ac ante ipsum primis in faucibus. In blandit nunc enim, sit amet pharetra erat aliquet ac.</p>
                                    <h6>Shipping</h6>
                                    <p class="text-muted">Pellentesque ultrices ut sem sit amet lacinia. Sed nisi dui, ultrices ut turpis pulvinar. Sed fringilla ex eget lorem consectetur, consectetur blandit lacus varius. Duis vel scelerisque elit, et vestibulum metus. Integer sit amet tincidunt tortor. Ut lacinia ullamcorper massa, a fermentum arcu vehicula ut. Ut efficitur faucibus dui Nullam tristique dolor eget turpis consequat varius. Quisque a interdum augue. Nam ut nibh mauris.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Product featured-->
        <section class="py-5">
            <div class="container">
                <header class="mb-3 text-center">
                    <h2 class="mb-0">Related Product</h2>
                    <p class="text-muted">Recommended products for today</p>
                </header>
                <div class="row py-3">

                    @foreach($relatedProducts as $product)
                        <div class="col-lg-2dot4">
                            <div class="product mb-4">
                                <a href="./shop/product/{{$product->id}}">
                                    <img class="img-fluid" src="./front/img/products/{{$product->productImages[0]->path}}" alt="product">
                                </a>
                                <div class="cta shadow d-inline-block"><a class="product-btn" href=""><i class="fas fa-heart"></i></a><a class="product-btn" href=""><i class="fas fa-dolly-flatbed"></i></a></div>
                            </div>
                            <div class="pro-text">
                                <h6 class="pro-title"><a class="reset-anchor" href="./shop/product/{{$product->id}}">{{$product->name}}</a></h6>
                                <p class="pro-price">Highest price <span>${{$product->price}}</span></p>
                                <div>
                                    <div class="CountDown-box">
                                        <input class="timeData" type="hidden" value="{{$product->end_time}}">
                                        <div class="CountDown"></div>
                                        <span class="pro-user">53 <span><i class="fa-solid fa-user"></i></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach



                </div>
                <div class="btn-pr-index">
                    <a href="" class="btn btn-primary">View more</a>
                </div>
            </div>
        </section>

@endsection
