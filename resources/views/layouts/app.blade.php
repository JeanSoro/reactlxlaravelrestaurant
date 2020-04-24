<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       @include('includes.meta-tags')
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
