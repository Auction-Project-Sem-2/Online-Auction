@extends('admin.layout.master')

@section('title', 'User')

@section('body')
    <main id="main" class="main">

        <div style="justify-content: space-between; display: flex;">
            <div class="page-title-heading">
                <div class="pagetitle">
                    <h1>User</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./admin/home">Home</a></li>
                            <li class="breadcrumb-item">User</li>
                            <li class="breadcrumb-item active">Create</li>
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
                                        Create User
                                    </button>
                                </li>

                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-edit" id="profile-edit">

                                    <!-- Profile Edit Form -->
                                    <form>

                                        <div class="row mb-3">
                                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile
                                                Image</label>
                                            <div class="col-md-8 col-lg-9">
                                                <img style="cursor: pointer;" class="thumbnail rounded-circle" data-toggle="tooltip" title="" data-placement="bottom" src="./admin/assets/img/add-image-icon.jpg" alt="Avatar" data-original-title="Click to change the image">
                                                <input name="image" type="file" onchange="changeImg(this)" class="image form-control-file" style="display: none;" value="">
                                                <input type="hidden" name="image_old" value="">
                                                <small class="form-text text-muted">
                                                    Click on the image to change (required)
                                                </small>
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full
                                                Name</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="fullName" type="text" class="form-control" id="fullName"
                                                       value="Kevin Anderson">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="email" class="form-control" id="email"
                                                       value="Email@gmail.com">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="password" class="col-md-4 col-lg-3 col-form-label">Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="password" type="text" class="form-control" id="password"
                                                       value="Password">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="password_confirmation" class="col-md-4 col-lg-3 col-form-label">Confirm Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="password_confirmation" type="text" class="form-control" id="password_confirmation"
                                                       value="Confirm Password">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="company"
                                                   class="col-md-4 col-lg-3 col-form-label">Company</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="company" type="text" class="form-control" id="company"
                                                       value="Company">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="level" class="col-md-4 col-lg-3 col-form-label">Level</label>
                                            <div class="col-md-8 col-lg-9">
{{--                                                <input name="job" type="text" class="form-control" id="Job"--}}
{{--                                                       value="Web Designer">--}}
                                                <select required name="level" id="level" class="form-control">
                                                    <option value="">-- Level --</option>

                                                    <option value=''>Host</option>
                                                    <option value=''>Admin</option>
                                                    <option value=''>Client</option>

{{--                                                    @foreach(\App\Utillities\Constant::$user_level as $key => $value)--}}
{{--                                                        <option value= {{ $key }} {{ $user->level == $key ? 'selected' : '' }}>--}}
{{--                                                            {{ $value }}--}}
{{--                                                        </option>--}}
{{--                                                    @endforeach--}}

                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Country"
                                                   class="col-md-4 col-lg-3 col-form-label">Country</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="country" type="text" class="form-control" id="Country"
                                                       value="Country">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Address"
                                                   class="col-md-4 col-lg-3 col-form-label">Address</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="address" type="text" class="form-control" id="Address"
                                                       value="Address">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Address"
                                                   class="col-md-4 col-lg-3 col-form-label">Postcode Zip</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="address" type="text" class="form-control" id="Address"
                                                       value="Postcode Zip">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Address"
                                                   class="col-md-4 col-lg-3 col-form-label">Town City</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="address" type="text" class="form-control" id="Address"
                                                       value="Town City">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="phone" type="text" class="form-control" id="Phone"
                                                       value="Phone">
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <label for="description" class="col-md-4 col-lg-3 col-form-label">Description</label>
                                            <div class="col-md-8 col-lg-9">
                                                <textarea name="description" class="form-control" id="description"
                                                          style="height: 100px">Description</textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-4 col-lg-3 text-center">

                                            </div>

                                            <div class="col-md-8 col-lg-9 text-center">
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
@endsection
