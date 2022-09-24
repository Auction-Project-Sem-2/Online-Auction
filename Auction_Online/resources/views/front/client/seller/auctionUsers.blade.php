@extends('front.client.layout.master')

@section('title', 'Sell Products')

@section('body')
    <main id="main" class="main">
        <div style="justify-content: space-between; display: flex;">
            <div class="page-title-heading">
                <div class="pagetitle">
                    <h1>Products</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">Below are the products that you have auctioned</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                                <div class="row col-lg-4 col-md-4 mt-lg-3 mt-md-3">
                                    <form  action="./client/seller/product/{{ $product->id }}/auction">

                                        <div class="input-group">
                                            <input type="search" name="search" id="search" placeholder="Search everything" class="form-control">
                                            <span class="input-group-append ">
                                            <button type="submit" class="btn btn-primary b-btn">
                                                <i class="bi bi-search"></i>&nbsp;
                                                Search
                                            </button>
                                        </span>
                                        </div>
                                    </form>
                                </div>
                                <div class="dataTable-container">
                                    <table class="table datatable dataTable-table table-striped" >
                                        <thead>
                                        <tr>
                                            <th scope="col" data-sortable="" style="width: 13%;text-align: center;">
                                                #
                                            </th>
                                            <th scope="col" data-sortable="" style="width: 51%;">
                                                Name
                                            </th>
                                            <th scope="col" data-sortable="" style="width: 36%;text-align: center;">Price</th>
                                        </tr>
                                        </thead>
                                        <tbody style="align-items: center">

                                                @foreach($productAuctions as $productAuction)
                                                    <tr>
                                                        <th scope="row" style="text-align: center">{{  $productAuction->id }}</th>
                                                        <td>
                                                            <div class="widget-heading">{{ $productAuction->name }}</div>
                                                        </td>
                                                        <td style="text-align: center">${{number_format($productAuction->price,2)}}</td>
                                                    </tr>
                                                @endforeach


                                        </tbody>
                                    </table>
                                </div>


                                <div class="d-block card-footer">
                                    <div class="row col-lg-12 col-md-12">
{{--                                        {{$products->links()}}--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
