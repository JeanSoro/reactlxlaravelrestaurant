<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CMS Laravel</title>
        <meta name="description"
        content="{{$settings['seo_settings']->description}}">
        <meta name="robots" content="follow,index,max-snippet:-1,max-video-preview:-1,max-image-preview:large">
        {{-- <link rel="canonical" href="https://codingphase.com/"> --}}
        <meta property="og:locale" content="en_CA">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{$settings['general_settings']->site_title}}">
        <meta property="og:description"
        content="{{$settings['seo_settings']->description}}">
        {{-- <meta property="og:url" content="https://codingphase.com/"> --}}
        <meta property="og:site_name" content="{{$settings['general_settings']->site_title}}">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{$settings['general_settings']->site_title}}">
        <meta name="twitter:description"
        content="{{$settings['seo_settings']->desctiption}}">
      
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">
        <script src="https://kit.fontawesome.com/9dac89efb2.js" crossorigin="anonymous"></script>

        
    </head>
    <body>
        <section id="welcome">
          @include('includes.sidemenu')
            <section id="content-section">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                @yield('content')
            </section>
          </section>
    </body>
</html>
