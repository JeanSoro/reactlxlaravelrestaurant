@extends('layouts.admin');

@section('content')

  <div class="container-fluid  dashboard-content">
      <!-- ============================================================== -->
      <!-- pageheader -->
      <!-- ============================================================== -->
      <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="page-header">
                  <h2 class="pageheader-title">All Members Offers </h2>
                  <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                  <div class="page-breadcrumb">
                      <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                              <li class="breadcrumb-item active" aria-current="page">All Members Offers</li>
                          </ol>
                      </nav>
                  </div>
              </div>
          </div>
      </div>
      <!-- ============================================================== -->
      <!-- end pageheader -->
      <!-- ============================================================== -->
    
          <div class="row">
              <!-- ============================================================== -->
              <!-- basic table -->
              <!-- ============================================================== -->
              <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                  <div class="card">
                      <h5 class="card-header">All Members</h5>
                      <div class="card-body">
                          <table class="table">
                              <thead>
                                  <tr>
                                      <th scope="col">id</th>
                                      <th scope="col">Full Name</th>
                                      <th scope="col">Email</th>
                                      <th scope="col">Phone Number</th>
                                      <th scope="col">Date Created</th>
                                      {{-- <th scope="col">Edit</th>
                                      <th scope="col">Delete</th> --}}
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <th scope="row">1</th>
                                      <td>John Doe</td>
                                      <td>john@street.com</td>
                                      <td>416-245-5675</td>
                                      <td>03/20/2020</td>

                                      {{-- <td>
                                        <a href="/admin/food-items/1/edit">
                                          <i class="fas fa-edit"></i>
                                        </a>
                                      </td>

                                      <td>
                                        <a href="/admin/food-items/1/delete"
                                          onclick="if (! confirm('Are You sure that you want to delete this category?')) {return false;}">
                                          <i class="far fa-trash-alt"></i>
                                        </a>
                                      </td> --}}
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
              <!-- ============================================================== -->
              <!-- end basic table -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
            
          </div>
@endsection
