@extends('layouts.app')

@section('title')
About | {{$settings["general_settings"]->site_title}} 
@endsection

{{-- @section('description')
Mdrn Bites was established in 2019 and is the hot new spot for all crowds, young and hip or mature, you are guaranteed to be in for a treat with our resident djs from around the country spinning top tracks all day and all nights. Sit back and enjoy this experience!
@endsection --}}

@section('content')
  <div id="about-page">
      <div class="content-box">
          <div class="row">
              <div class="col-md-6">
                <h1>About Page</h1>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit molestias quasi, accusantium amet nihil minus mollitia totam nesciunt delectus quia quaerat enim, ea ipsam laboriosam, voluptatibus quisquam ratione. Dolorem nesciunt quam veritatis, quas quo magnam. Sunt consequatur in quam, doloribus quo delectus sapiente amet vero ad totam maiores laborum nesciunt temporibus id nemo ratione, quia eaque quidem nihil placeat repudiandae minus animi esse? Impedit, quo nobis. Consequuntur, placeat nostrum commodi assumenda pariatur aspernatur.
                </p>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit molestias quasi, accusantium amet nihil minus mollitia totam nesciunt delectus quia quaerat enim, ea ipsam laboriosam, voluptatibus quisquam ratione. Dolorem nesciunt quam veritatis, quas quo magnam. Sunt consequatur in quam, doloribus quo delectus sapiente amet vero ad totam maiores laborum nesciunt temporibus id nemo ratione, quia eaque quidem nihil placeat repudiandae minus animi esse? Impedit, quo nobis. Consequuntur!
                </p>
            </div>
            <div class="col-md-6">
                <img src="img/people-drinking-liquor.jpg" class="img-fluid" alt="">
            </div>
        </div>
      </div>
  </div>
  
@endsection