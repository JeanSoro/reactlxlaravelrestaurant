<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        

        <!-- Styles -->
        
        <link rel="stylesheet" href="/css/app.css">
        <script src="https://kit.fontawesome.com/9dac89efb2.js" crossorigin="anonymous"></script>

        
    </head>
    <body>
        <section id="welcome">
          @include('includes.sidemenu')

            @yield('content')
          </section>
    </body>
</html>
