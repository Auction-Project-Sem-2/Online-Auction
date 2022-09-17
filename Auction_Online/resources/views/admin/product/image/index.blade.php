@extends('admin.layout.master')

@section('title', 'Product')

@section('body')
    <main id="main" class="main">

        <div style="justify-content: space-between; display: flex;">
            <div class="page-title-heading">
                <div class="pagetitle">
                    <h1>Product Image</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./admin/home">Home</a></li>
                            <li class="breadcrumb-item">Product</li>
                            <li class="breadcrumb-item">Product Image</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>

        <!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <div class="col-xl-12">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">


                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit">
                                        Product Images
                                    </button>
                                </li>


                            </ul>
                            <div class="tab-content pt-2">


                                <div class="tab-pane fade show active profile-edit" id="profile-edit">

                                    <!-- Profile Edit Form -->
                                    <form>
                                        <div class="row mb-3">
                                            <div class="col-lg-3 col-md-4 label">Name Product</div>
                                            <div class="col-md-8 col-lg-9" >Sit unde debitis delectus repellendus</div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-lg-3 col-md-4 label ">Images</div>
                                            <div class="col-lg-9 col-md-8">
                                                <ul style="padding-left: 0" class="text-nowrap overflow-auto" id="images">
                                                    <li class="d-inline-block mr-1" style="position: relative;">
                                                        <form action="./admin/product/10/image/16" method="post">
                                                            <input type="hidden" name="_token" value="0M1sY667Tpe748LqpEeXkNr9hbi3Vpy7kuu0gvqD">
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <button type="submit" onclick="return confirm('Do you really want to delete this item?')" class="btn btn-sm btn-outline-danger border-0 position-absolute">
                                                                <i class="bi bi-scissors"></i>
                                                            </button>
                                                            <img style="width: 100%;" src="./admin/assets/img/product-2.jpg"
                                                                 alt="Image">
                                                        </form>

                                                    </li>

                                                    <li class="d-inline-block mr-1" style="position: relative;">
                                                        <form method="post" action="admin/product/10/image" enctype="multipart/form-data">
                                                            <input type="hidden" name="_token" value="0M1sY667Tpe748LqpEeXkNr9hbi3Vpy7kuu0gvqD">
                                                            <div style="width: 100%; max-height: 220px; overflow: hidden;">
                                                                <img style="width: 100%; cursor: pointer;" class="thumbnail" data-toggle="tooltip" title="" data-placement="bottom" src="./admin/assets/img/add-image-icon.jpg" alt="Add Image" data-original-title="Click to add image">

                                                                <input name="image" type="file" onchange="changeImg(this); this.form.submit()" accept="image/x-png,image/gif,image/jpeg" class="image form-control-file" style="display: none;">

                                                                <input type="hidden" name="product_id" value="">
                                                            </div>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <div class="col-md-4 col-lg-3 text-center"></div>

                                            <div class="col-md-8 col-lg-9">
                                                <button type="submit" class="btn btn-red btn-primary">Cancel</button>
                                                <button type="submit" class="btn btn-blue btn-primary">Save</button>
                                            </div>
                                        </div>


                                    </form><!-- End Profile Edit Form -->

                                </div>


                            </div><!-- End Bordered Tabs -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
    <!-- End #main -->

    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('description');
    </script>

@endsection
