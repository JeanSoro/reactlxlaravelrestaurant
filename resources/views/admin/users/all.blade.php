@extends('layouts.admin');

@section('content')

  <div class="container-fluid  dashboard-content">
      <!-- ============================================================== -->
      <!-- pageheader -->
      <!-- ============================================================== -->
      <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="page-header">
                  <h2 class="pageheader-title">Users</h2>
                  <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                  <div class="page-breadcrumb">
                      <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Users</li>
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
                      <h5 class="card-header">All Users</h5>
                      <div class="card-body">
                          <table class="table">
                              <thead>
                                  <tr>
                                      <th scope="col">id</th>
                                      <th scope="col">Email</th>
                                      <th scope="col">Date Created</th>
                                      <th scope="col">Edit</th>
                                      <th scope="col">Delete</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <th scope="row">1</th>
                                      <td>Jen Doe</td>
                                      <td>3/2/2020</td>
                                      <td>
                                        <a href="/admin/users/1/edit">
                                          <i class="fas fa-edit"></i>
                                        </a>
                                      </td>

                                      <td>
                                        <a href="/admin/users/1/delete"
                                          onclick="if (! confirm('Are You sure that you want to delete this user?')) {return false;}">
                                          <i class="far fa-trash-alt"></i>
                                        </a>
                                      </td>
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
