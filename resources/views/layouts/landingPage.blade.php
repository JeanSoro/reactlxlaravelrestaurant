<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.meta-tags')
    </head>
    <body>
        <section id="welcome">
            @include('includes.sidemenu')
            <div class="welcome-jumbo">
              <div class="status">NEW</div>
              <h1>SAINT Burger</h1>
              <img src="img/hamburger-and-fries-hero.png" class="burger-fries">
            </div>
          </section>
          @yield('content')

    </body>
</html>
