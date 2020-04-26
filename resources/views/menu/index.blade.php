@extends('layouts.app')

@section('title')
Menu | {{$settings["general_settings"]->site_title}} 
@endsection

@section('content')
  <div id="menu-page">
     @include('includes.food-categories-slider')
  </div>
  
@endsection