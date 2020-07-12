@extends('layouts.landingPage')

@section('title')
{{$settings["general_settings"]->site_title}} 
@endsection

@section('content')
<section id="information">
    <div class="restaurant-image">
      <img src="img/top-down-2.jpg">
    </div>
    <div class="info">
      <h2>We Started From The Bottom In 1987</h2>
      <div class="paragraphs">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque aliquid dolore, error minus ad officia
          fugit iusto repellat, explicabo reiciendis inventore mollitia non, libero perspiciatis dicta eius consequatur
          et
          similique!Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque aliquid dolore, error minus ad
          officia
          fugit iusto repellat, explicabo reiciendis inventore mollitia non, libero perspiciatis dicta eius consequatur
          et
          similique! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt dolorum placeat porro eligendi ratione magni nisi quae tempora, harum architecto.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque aliquid dolore, error minus ad officia
          fugit iusto repellat, explicabo reiciendis inventore mollitia non, libero perspiciatis dicta eius consequatur
          et
          similique!Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque aliquid dolore, error minus ad
          officia
          fugit iusto repellat, explicabo reiciendis inventore mollitia non, libero perspiciatis dicta eius consequatur
          et
          similique! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus dicta ducimus iste officia facilis eveniet. Illum, eveniet! Cumque, iusto est.</p>
      </div>
      <a href="/about" class="about-link">
        <span>Learn more about us!</span>
        <div class="circle-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
      </a>
    </div>
  </section>
  @include('includes.food-categories-slider')
@endsection
