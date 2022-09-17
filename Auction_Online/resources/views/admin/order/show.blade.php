@extends('admin.layout.master')

@section('title', 'Order')

@section('body')
    <main id="main" class="main">
        <div style="justify-content: space-between; display: flex;">
            <div class="page-title-heading">
                <div class="pagetitle">
                    <h1>Orders</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="./admin/home">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Order</li>
                            <li class="breadcrumb-item active">Detail</li>
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
                                <div class="order-title">
                                    <h2>Products List</h2>
                                </div>
                                <div class="dataTable-container">
                                    <table class="table datatable dataTable-table table-striped" >
                                        <thead>
                                        <tr>

                                            <th scope="col" data-sortable="" style="width: 45%;">Product</th>
                                            <th scope="col" data-sortable="" style="width: 15%;text-align: center;">Qty</th>
                                            <th scope="col" data-sortable="" style="width: 20%;text-align: center;">Starting Price</th>
                                            <th scope="col" data-sortable="" style="width: 20%;text-align: center;">Last Price</th>
                                        </tr>
                                        </thead>
                                        <tbody style="align-items: center">
                                        <tr>
                                            <td  style="display: flex">
                                                <img style="height: 60px;" data-toggle="tooltip" title="" data-placement="bottom" src="./admin/assets/img/product-5.jpg" alt="" data-original-title="Image">
                                                <div class="widget-content-left order-name-product">Sit unde debitis delectus repellendus</div>
                                            </td>
                                            <td style="text-align: center">2</td>
                                            <td style="text-align: center">$10.66</td>
                                            <td style="text-align: center">$100.22</td>
                                        </tr>
                                        <tr>
                                            <td  style="display: flex">
                                                <img style="height: 60px;" data-toggle="tooltip" title="" data-placement="bottom" src="./admin/assets/img/product-5.jpg" alt="" data-original-title="Image">
                                                <div class="widget-content-left order-name-product">Sit unde debitis delectus repellendus</div>
                                            </td>
                                            <td style="text-align: center">2</td>
                                            <td style="text-align: center">$10.66</td>
                                            <td style="text-align: center">$100.22</td>
                                        </tr>
                                        <tr>
                                            <td  style="display: flex">
                                                <img style="height: 60px;" data-toggle="tooltip" title="" data-placement="bottom" src="./admin/assets/img/product-5.jpg" alt="" data-original-title="Image">
                                                <div class="widget-content-left order-name-product">Sit unde debitis delectus repellendus</div>
                                            </td>
                                            <td style="text-align: center">2</td>
                                            <td style="text-align: center">$10.66</td>
                                            <td style="text-align: center">$100.22</td>
                                        </tr>
                                        <tr>
                                            <td  style="display: flex">
                                                <img style="height: 60px;" data-toggle="tooltip" title="" data-placement="bottom" src="./admin/assets/img/product-5.jpg" alt="" data-original-title="Image">
                                                <div class="widget-content-left order-name-product">Sit unde debitis delectus repellendus</div>
                                            </td>
                                            <td style="text-align: center">2</td>
                                            <td style="text-align: center">$10.66</td>
                                            <td style="text-align: center">$100.22</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

{{-- //  --}}

                                <div class="order-title">
                                    <h2>Order Info</h2>
                                </div>

                                <section class="profile">
                                    <div class=" tab-pane fade show active profile-overview" id="profile-overview">

                                        <h5 class="card-title">Details</h5>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                            <div class="col-lg-9 col-md-8">Kevin Anderson</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Company</div>
                                            <div class="col-lg-9 col-md-8">Lueilwitz, Wisoky and Leuschke</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Country</div>
                                            <div class="col-lg-9 col-md-8">USA</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Address</div>
                                            <div class="col-lg-9 col-md-8">A108 Adam Street, New York, NY 535022</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Postcode Zip</div>
                                            <div class="col-lg-9 col-md-8">10000</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Town City</div>
                                            <div class="col-lg-9 col-md-8">New York</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Phone</div>
                                            <div class="col-lg-9 col-md-8">(436) 486-3538 x29071</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Email</div>
                                            <div class="col-lg-9 col-md-8">k.anderson@example.com</div>
                                        </div>

                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection