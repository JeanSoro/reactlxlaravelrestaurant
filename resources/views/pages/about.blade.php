@extends('layouts.app')

@section('title')
About | {{$settings["general_settings"]->site_title}} 
@endsection

@section('content')
  <div id="about-page">
      <div class="content-box">
          <div class="row">
              <div class="col-md-6">
                <h1>About Page</h1>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit molestias quasi, accusantium amet nihil minus mollitia totam nesciunt delectus quia quaerat enim, ea ipsam laboriosam, voluptatibus quisquam ratione. Dolorem nesciunt quam veritatis, quas quo magnam. Sunt consequatur in quam, doloribus quo delectus sapiente amet vero ad totam maiores laborum nesciunt temporibus id nemo ratione, quia eaque quidem nihil placeat repudiandae minus animi esse? Impedit, quo nobis. Consequuntur, placeat nostrum commodi assumenda pariatur aspernatur expedita, ea nobis quisquam odio odit asperiores quae vel officia perspiciatis autem consectetur neque accusamus delectus architecto, itaque fugiat similique hic! Laboriosam aspernatur non fuga dolores quos!
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