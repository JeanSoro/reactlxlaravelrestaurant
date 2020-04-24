@extends('layouts.app')

@section('title')
Contact | {{$settings["general_settings"]->site_title}} 
@endsection

{{-- @section('description')
Mdrn Bites was established in 2019 and is the hot new spot for all crowds, young and hip or mature, you are guaranteed to be in for a treat with our resident djs from around the country spinning top tracks all day and all nights. Sit back and enjoy this experience!
@endsection --}}

@section('content')
  <div id="contact-page">
      <div class="content-box">
          <div class="row">
              <div class="col-md-6">
                <h1>Contact Us</h1>
                <h3>Address</h3>
                <p>
                  {{$settings["general_settings"]->address_1}}<br>
                  {{$settings["general_settings"]->city}}, {{$settings["general_settings"]->province}} <br>
                  {{$settings["general_settings"]->postal_code}}
                </p>
                <h3>Phone Number</h3>
                <p>
                  <a href="tel:{{$settings["general_settings"]->phone_number}}">{{$settings["general_settings"]->phone_number}}</a>
                </p>
            </div>
            <div class="col-md-6">
                <img src="img/people-drinking-liquor.jpg" class="img-fluid" alt="">
            </div>
        </div>
      </div>
  </div>
  
@endsection