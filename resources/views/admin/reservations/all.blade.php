@extends('layouts.admin');

@section('content')

  <div class="container-fluid dashboard-content">
      <!-- ============================================================== -->
      <!-- pageheader -->
      <!-- ============================================================== -->
      <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="page-header">
                  <h2 class="pageheader-title">All Reservations </h2>
                  <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                  <div class="page-breadcrumb">
                      <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                              <li class="breadcrumb-item active" aria-current="page">All Reservations</li>
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
              <div class="col-lg-12 col-md-8 col-sm-12 col-12">
                {{-- <div class="col-md-12 col-sm-12 col-12"> --}}
                  <div class="card">
                      <h5 class="card-header">Reservations</h5>
                      <div class="card-body p-0">
                          {{-- <div class="table-responsive"></div> --}}
                          <table class="table">
                              <thead>
                                  <tr>
                                      <th scope="col">id</th>
                                      <th scope="col">Full Name</th>
                                      <th scope="col">Email</th>
                                      <th scope="col">Contact</th>
                                      <th scope="col">Guests</th>
                                      <th scope="col">Time</th>
                                      <th scope="col">Created</th>
                                      {{-- <th scope="col">Edit</th> --}}
                                      <th scope="col">Delete</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($reservations as $reservation)
                                <tr>
                                    <th scope="row">{{$reservation->id}}</th>
                                    <td>{{$reservation->fname}} {{$reservation->lname}}</td>
                                    <td>{{$reservation->email}}</td>
                                    <td>{{$reservation->phone_number}}</td>
                                    <td>{{$reservation->guests_total}}</td>
                                    <td>{{$reservation->time}}</td>
                                    <td>{{date('m/d/Y', strtotime($reservation->updated_at))}}</td>
                                    {{-- <td>
                                        <a href="/admin/reservations/{{$reservation->id}}/edit">
                                        <i class="fas fa-edit"></i>
                                        </a>
                                    </td> --}}

                                    <td>
                                        <a href="/admin/reservations/{{$reservation->id}}/delete"
                                        onclick="if (! confirm('Are You sure that you want to delete this reservation?')) {return false;}">
                                        <i class="far fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                          </tbody>
                      </table>
                      {{ $reservations->links() }}
                      </div>
                  </div>
              </div>
              <!-- ============================================================== -->
              <!-- end basic table -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
            
          </div>
@endsection
