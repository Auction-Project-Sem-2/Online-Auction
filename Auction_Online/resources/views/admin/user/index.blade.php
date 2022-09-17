@extends('admin.layout.master')

@section('title', 'User')

@section('body')
    <main id="main" class="main">
        <div style="justify-content: space-between; display: flex;">
            <div class="page-title-heading">
                <div class="pagetitle">
                    <h1>Users</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="./admin/home">Home</a>
                            </li>
                            <li class="breadcrumb-item active">User</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="page-title-actions">
                <a href="./admin/user/create" class="btn-blue btn-shadow btn-hover-shine mr-3 btn btn-primary">
                      <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="bi bi-plus"></i>
                      </span>
                    Create
                </a>
            </div>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                                <div class="row col-lg-4 col-md-4 mt-lg-3">
                                    <form action="">
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
                                            <th scope="col" data-sortable="" style="width: 5.62902%;text-align: center;">
                                                #
                                            </th>
                                            <th scope="col" data-sortable="" style="width: 36.0558%;">
                                                Name
                                            </th>
                                            <th scope="col" data-sortable="" style="width: 25.7949%;">
                                                Email
                                            </th>
                                            <th scope="col" data-sortable="" style="width: 11.203%;text-align: center;">
                                                Level
                                            </th>
                                            <th scope="col" data-sortable="" style="width: 21.2995%;text-align: center;">
                                                Action
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody style="align-items: center">
                                        <tr>
                                            <th scope="row"  class="text-center">1</th>
                                            <td style="display: flex;align-items: center;">
                                                <img src="./admin/assets/img/profile-img.jpg" width="40" alt="Profile" class="rounded-circle">
                                                <span style="padding-left: 10px">Brandon Jacob</span>
                                            </td>
                                            <td><span>Designer</span></td>
                                            <td  class="text-center">28</td>
                                            <td  class="text-center">
                                                <a href="./admin/user/id"
                                                   class="btn btn-hover-shine btn-outline-primary border-0 btn-sm">
                                                    Details
                                                </a>
                                                <a href="./admin/user/id/edit" data-toggle="tooltip" title="Edit"
                                                   data-placement="bottom"
                                                   class="btn btn-outline-warning border-0 btn-sm">
                                                                    <span class="btn-icon-wrapper opacity-8">
                                                                        <i class="bi bi-pencil-square"></i>
                                                                    </span>
                                                </a>
                                                <form class="d-inline" action="./admin/user/id" method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button class="btn btn-hover-shine btn-outline-danger border-0 btn-sm"
                                                            type="submit" data-toggle="tooltip" title="Delete"
                                                            data-placement="bottom"
                                                            onclick="return confirm('Do you really want to delete this item?')">
                                                                        <span class="btn-icon-wrapper opacity-8">
                                                                            <i class="bi bi-trash3"></i>
                                                                        </span>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"  class="text-center">2</th>
                                            <td>Bridie Kessler</td>
                                            <td>Developerrrrrrrrrr rrrrrrrrrrrrrrrr rrrrrrrrrrrrr</td>
                                            <td  class="text-center"><span>35</span></td>
                                            <td  class="text-center">
                                                <a href="./admin/user/id"
                                                   class="btn btn-hover-shine btn-outline-primary border-0 btn-sm">
                                                    Details
                                                </a>
                                                <a href="./admin/user/id/edit" data-toggle="tooltip" title="Edit"
                                                   data-placement="bottom"
                                                   class="btn btn-outline-warning border-0 btn-sm">
                                                                    <span class="btn-icon-wrapper opacity-8">
                                                                        <i class="bi bi-pencil-square"></i>
                                                                    </span>
                                                </a>
                                                <form class="d-inline" action="./admin/user/id" method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button class="btn btn-hover-shine btn-outline-danger border-0 btn-sm"
                                                            type="submit" data-toggle="tooltip" title="Delete"
                                                            data-placement="bottom"
                                                            onclick="return confirm('Do you really want to delete this item?')">
                                                                        <span class="btn-icon-wrapper opacity-8">
                                                                            <i class="bi bi-trash3"></i>
                                                                        </span>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"  class="text-center">3</th>
                                            <td>Ashleigh Langosh</td>
                                            <td>Finance</td>
                                            <td  class="text-center">45</td>
                                            <td  class="text-center">
                                                <a href="./admin/user/id"
                                                   class="btn btn-hover-shine btn-outline-primary border-0 btn-sm">
                                                    Details
                                                </a>
                                                <a href="./admin/user/id/edit" data-toggle="tooltip" title="Edit"
                                                   data-placement="bottom"
                                                   class="btn btn-outline-warning border-0 btn-sm">
                                                                    <span class="btn-icon-wrapper opacity-8">
                                                                        <i class="bi bi-pencil-square"></i>
                                                                    </span>
                                                </a>
                                                <form class="d-inline" action="./admin/user/id" method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button class="btn btn-hover-shine btn-outline-danger border-0 btn-sm"
                                                            type="submit" data-toggle="tooltip" title="Delete"
                                                            data-placement="bottom"
                                                            onclick="return confirm('Do you really want to delete this item?')">
                                                                        <span class="btn-icon-wrapper opacity-8">
                                                                            <i class="bi bi-trash3"></i>
                                                                        </span>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"  class="text-center">4</th>
                                            <td>Angus Grady</td>
                                            <td>HR</td>
                                            <td  class="text-center">34</td>
                                            <td  class="text-center">
                                                <a href="./admin/user/id"
                                                   class="btn btn-hover-shine btn-outline-primary border-0 btn-sm">
                                                    Details
                                                </a>
                                                <a href="./admin/user/id/edit" data-toggle="tooltip" title="Edit"
                                                   data-placement="bottom"
                                                   class="btn btn-outline-warning border-0 btn-sm">
                                                                    <span class="btn-icon-wrapper opacity-8">
                                                                        <i class="bi bi-pencil-square"></i>
                                                                    </span>
                                                </a>
                                                <form class="d-inline" action="./admin/user/id" method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button class="btn btn-hover-shine btn-outline-danger border-0 btn-sm"
                                                            type="submit" data-toggle="tooltip" title="Delete"
                                                            data-placement="bottom"
                                                            onclick="return confirm('Do you really want to delete this item?')">
                                                                        <span class="btn-icon-wrapper opacity-8">
                                                                            <i class="bi bi-trash3"></i>
                                                                        </span>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"  class="text-center">5</th>
                                            <td>Raheem Lehner</td>
                                            <td>Dynamic Division Officer</td>
                                            <td  class="text-center">47</td>
                                            <td  class="text-center">
                                                <a href="./admin/user/id"
                                                   class="btn btn-hover-shine btn-outline-primary border-0 btn-sm">
                                                    Details
                                                </a>
                                                <a href="./admin/user/id/edit" data-toggle="tooltip" title="Edit"
                                                   data-placement="bottom"
                                                   class="btn btn-outline-warning border-0 btn-sm">
                                                                    <span class="btn-icon-wrapper opacity-8">
                                                                        <i class="bi bi-pencil-square"></i>
                                                                    </span>
                                                </a>
                                                <form class="d-inline" action="./admin/user/id" method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button class="btn btn-hover-shine btn-outline-danger border-0 btn-sm"
                                                            type="submit" data-toggle="tooltip" title="Delete"
                                                            data-placement="bottom"
                                                            onclick="return confirm('Do you really want to delete this item?')">
                                                                        <span class="btn-icon-wrapper opacity-8">
                                                                            <i class="bi bi-trash3"></i>
                                                                        </span>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>


                                <div class="d-block card-footer">
                                    <nav role="navigation" aria-label="Pagination Navigation"
                                         class="flex items-center justify-between">
                                        <div class="flex justify-between flex-1 sm:hidden">
                                                    <span
                                                        class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                                                        « Previous
                                                    </span>

                                            <a href="#page=2"
                                               class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                                                Next »
                                            </a>
                                        </div>

                                        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                                            <div>
                                                <p class="text-sm text-gray-700 leading-5">
                                                    Showing
                                                    <span class="font-medium">1</span>
                                                    to
                                                    <span class="font-medium">5</span>
                                                    of
                                                    <span class="font-medium">9</span>
                                                    results
                                                </p>
                                            </div>

                                            <div>
                                                        <span class="relative z-0 inline-flex shadow-sm rounded-md">
                                                            <span aria-disabled="true"
                                                                  aria-label="&amp;laquo; Previous">
                                                                <span
                                                                    class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default rounded-l-md leading-5"
                                                                    aria-hidden="true">
                                                                    <svg class="w-5 h-5" fill="currentColor"
                                                                         viewBox="0 0 20 20">
                                                                        <path fill-rule="evenodd"
                                                                              d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                                                              clip-rule="evenodd"></path>
                                                                    </svg>
                                                                </span>
                                                            </span>

                                                            <span aria-current="page">
                                                                <span
                                                                    class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5">1</span>
                                                            </span>
                                                            <a href="#page=2"
                                                               class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"
                                                               aria-label="Go to page 2">
                                                                2
                                                            </a>

                                                            <a href="#page=2" rel="next"
                                                               class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-r-md leading-5 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150"
                                                               aria-label="Next &amp;raquo;">
                                                                <svg class="w-5 h-5" fill="currentColor"
                                                                     viewBox="0 0 20 20">
                                                                    <path fill-rule="evenodd"
                                                                          d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                                          clip-rule="evenodd"></path>
                                                                </svg>
                                                            </a>
                                                        </span>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection