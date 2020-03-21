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
            <div class="welcome-menu">
              <div class="logo">
                <img src="https://webstockreview.net/images/clipart-restaurant-restaurant-logo-5.png">
              </div>
              <div class="menu">
                <div class="menu-title">
                  Menu
                </div>
                <ul class="links">
                  <li>
                    <a href="#">Menu</a>
                  </li>
                  <li>
                    <a href="#">Waitlist</a>
                  </li>
                  <li>
                    <a href="#">Offers</a>
                  </li>
                  <li>
                    <a href="#">Giftcards</a>
                  </li>
                </ul>
              </div>
              <div class="social-icons">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
              </div>
              <div class="location">
                <div class="address">
                  234 Main st,<br>
                  New York, New York 11747
                </div>
                <div class="phone-number">
                  <a href="tel:7182198652">718-219-8652</a>
                </div>
              </div>
            </div>
            <div class="welcome-jumbo">
              <div class="status">NEW</div>
              <h1>Billy Burger</h1>
              <img src="img/hamburger-and-fries-hero.png" class="burger-fries">
            </div>
          </section>
          <section id="information">
            <div class="restaurant-image">
              <img src="img/top-down.jpg">
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
                  similique!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque aliquid dolore, error minus ad officia
                  fugit iusto repellat, explicabo reiciendis inventore mollitia non, libero perspiciatis dicta eius consequatur
                  et
                  similique!Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque aliquid dolore, error minus ad
                  officia
                  fugit iusto repellat, explicabo reiciendis inventore mollitia non, libero perspiciatis dicta eius consequatur
                  et
                  similique!</p>
              </div>
              <a href="#" class="about-link">
                <span>Learn more about restaurants</span>
                <div class="circle-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
              </a>
            </div>
          </section>
          <section id="food-preview">
            <h2>We have everything you need to kill your hunger</h2>
            <div class="button-rounded">View Our Menu</div>
            <div class="container">
              <div class="left-btn">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
              </div>
              <div class="right-btn">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
              </div>
              <div class="food-slider">
                <div class="sliding-system">
                  <div class="slide">
                    <div class="background"></div>
                    <div class="content">
                      <div class="food-title">
                        Starters
                      </div>
                      <p class="food-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate
                        architecto
                        officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas
                        repellendus natus nihil?
                      </p>
                      <div class="food-image">
                        <img src="img/chips.png">
                      </div>
                    </div>
        
                  </div>
                  <div class="slide">
                    <div class="background"></div>
                    <div class="content">
                      <div class="food-title">
                        Burgers
                      </div>
                      <p class="food-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate
                        architecto
                        officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas
                        repellendus natus nihil?
                      </p>
                      <div class="food-image">
                        <img src="img/hamburger-and-fries.png">
                      </div>
                    </div>
        
                  </div>
                  <div class="slide">
                    <div class="background"></div>
                    <div class="content">
                      <div class="food-title">
                        Entrees
                      </div>
                      <p class="food-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate
                        architecto
                        officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas
                        repellendus natus nihil?
                      </p>
                      <div class="food-image">
                        <img src="img/pork-entrees-steak-pork.png">
                      </div>
                    </div>
        
                  </div>
                  <div class="slide">
                    <div class="background"></div>
                    <div class="content">
                      <div class="food-title">
                        Sides
                      </div>
                      <p class="food-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate
                        architecto
                        officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas
                        repellendus natus nihil?
                      </p>
                      <div class="food-image">
                        <img src="img/salad.png">
                      </div>
                    </div>
        
                  </div>
                  <div class="slide">
                    <div class="background"></div>
                    <div class="content">
                      <div class="food-title">
                        Deserts
                      </div>
                      <p class="food-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate
                        architecto
                        officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas
                        repellendus natus nihil?
                      </p>
                      <div class="food-image">
                        <img
                          src="https://pngriver.com/wp-content/uploads/2018/04/Download-Cupcake-PNG-Transparent-Image-420x190.png">
                      </div>
                    </div>
                  </div>
                  <div class="slide">
                    <div class="background"></div>
                    <div class="content">
                      <div class="food-title">
                        Beers
                      </div>
                      <p class="food-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate
                        architecto
                        officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas
                        repellendus natus nihil?
                      </p>
                      <div class="food-image">
                        <img
                        src="img/cupcakes.png">
                      </div>
                    </div>
                  </div>
                  <div class="slide">
                    <div class="background"></div>
                    <div class="content">
                      <div class="food-title">
                        Drinks
                      </div>
                      <p class="food-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate
                        architecto
                        officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas
                        repellendus natus nihil?
                      </p>
                      <div class="food-image">
                        <img
                          src="img/cupcakes.png">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        
          </section>
    </body>
</html>
