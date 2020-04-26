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
          <script src="/assets/vendor/jquery/jquery-3.3.1.min.js"></script>

  <script>
    let slides = $('.sliding-system a.slide').length;
    let maxSlides;
    let moveTotal;
    let currentSlide = 0;

    $(window).resize(function(){
      currentSlide = 0;
      $('.sliding-system').css('transform', 'translate3d(-0%,0,0)');
    })

    function desktopSlider(a){
      if(a.matches){
        maxSlides = Math.ceil((slides * 20) / 100);
        moveTotal = 100;

        $('.right-btn').on('click', () => {
          if(currentSlide < maxSlides){
            currentSlide += 100;
            $('.sliding-system').css('transform', `translate3d(-${currentSlide}%,0,0)`);
          }
        });

        $('.left-btn').on('click', () => {
          if(currentSlide != 0){
            currentSlide -= 100;
            $('.sliding-system').css('transform', `translate3d(-${currentSlide}%,0,0)`);
          }
        });
      }
    }

    let a = window.matchMedia("(min-width:998px)");
    desktopSlider(a);
    a.addListener(desktopSlider);


    function tabletSlider(b){
      if(b.matches){
        maxSlides = Math.ceil((slides * 50) / 100);
        moveTotal = 100;

        $('.right-btn').on('click', () => {
          if(currentSlide < ((maxSlides * 100) - 100)){
            currentSlide += 50;
            $('.sliding-system').css('transform', `translate3d(-${currentSlide}%,0,0)`);
          }
        });


        $('.left-btn').on('click', () => {
          if(currentSlide != 0){
            currentSlide -= 50;
            $('.sliding-system').css('transform', `translate3d(-${currentSlide}%,0,0)`);
          }
        });
      }
    }

     let b = window.matchMedia("(min-width:768px) and (max-width: 997px)");
    tabletSlider(b);
    b.addListener(tabletSlider);

  </script>
    </body>
</html>
