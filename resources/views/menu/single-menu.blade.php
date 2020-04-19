@extends('layouts.app')

@section('title')
Burgers | {{$settings["general_settings"]->site_title}} 
@endsection

@section('content')
  <div id="single_menu-page">
    <div class="row">
      <div class="col-sm-12 offset-md-1 col-md-10 offset-lg-2 col-lg-8">
          <div class="content-box">
              <div class="row">
                <div class="col-md-12">
                  <h1>Burgers</h1>
                </div>
                <div class="col-md-6">
                  <div class="item">
                      <div class="title">
                          <h4>Texas burgers</h4>
                          <span class="price">$10</span>
                      </div>
                      <div class="description">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
                      </div>
                    </div>
                  </div>
                <div class="col-md-6">
                  <div class="item">
                      <div class="title">
                          <h4>Texas burgers</h4>
                          <span class="price">$10</span>
                      </div>
                      <div class="description">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
                      </div>
                    </div>
                  </div>
                <div class="col-md-6">
                  <div class="item">
                      <div class="title">
                          <h4>Texas burgers</h4>
                          <span class="price">$10</span>
                      </div>
                      <div class="description">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
                      </div>
                    </div>
                  </div>
                <div class="col-md-6">
                  <div class="item">
                      <div class="title">
                          <h4>Texas burgers</h4>
                          <span class="price">$10</span>
                      </div>
                      <div class="description">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
                      </div>
                    </div>
                  </div>

              </div>
           </div> 
      </div>
    </div>
  </div>
  
@endsection