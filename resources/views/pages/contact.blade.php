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
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2797.810999408982!2d-73.62636074850084!3d45.473611078998516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc9174d3de566cb%3A0xaefdc26e55200b37!2sTyphoon%20Lounge!5e0!3m2!1sen!2sca!4v1587745236384!5m2!1sen!2sca" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
      </div>
  </div>
  
@endsection