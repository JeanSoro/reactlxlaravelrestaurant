<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://kit.fontawesome.com/9dac89efb2.js" crossorigin="anonymous"></script>

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">
        
    </head>
    <body>
        <section id="welcome">
            @include('includes.sidemenu')
            <div class="welcome-jumbo">
              <div class="status">NEW</div>
              <h1>Billy Burger</h1>
              <img src="img/hamburger-and-fries-hero.png" class="burger-fries">
            </div>
          </section>
          @yield('content')

    </body>
</html>
