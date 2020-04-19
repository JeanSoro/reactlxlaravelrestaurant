@extends('layouts.app')

@section('title')
Thank You | {{$settings["general_settings"]->site_title}} 
@endsection

@section('content')
  <div id="offers-page">
      <div class="content-box">
          <div class="row">
              <div class="col-md-8 offset-md-2 thank-you">
                <h1 class="text-center">Thank You</h1>
                <p>You will be notified shortly through email</p>
                
            </div>
        </div>
      </div>
  </div>
  
@endsection