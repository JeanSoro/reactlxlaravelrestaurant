<div class="welcome-menu">
    <a href="/" class="logo">
      <img src="{{$settings["general_settings"]->logo_image_url}}">
    </a>
    <div class="menu">
      <div class="menu-title">
        Welcome
      </div>
      <ul class="links">
        <li>
          <a href="/menu">Food</a>
        </li>
        <li>
          <a href="/reservations">Reservations</a>
        </li>
        <li>
          <a href="/offers">Offers</a>
        </li>
        <li>
          <a href="/about">About</a>
        </li>
        <li>
          <a href="/contact">Contact</a>
        </li>
        {{-- <li>
          <a href="/giftcards">Giftcards</a>
        </li> --}}
      </ul>
    </div>
    <div class="social-icons">
      <a href="{{$settings["social_settings"]->facebook_url}}" target="_blank">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="{{$settings["social_settings"]->twitter_url}}" target="_blank">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="{{$settings["social_settings"]->instagram_url}}" target="_blank">
        <i class="fab fa-instagram"></i>
      </a>
    </div>
    <div class="location">
      <div class="address">
        {{$settings["general_settings"]->address_1}}<br>
        {{$settings["general_settings"]->city}}, {{$settings["general_settings"]->province}} <br>
        {{$settings["general_settings"]->postal_code}}
      </div>
      <div class="phone-number">
        <a href="tel:{{$settings["general_settings"]->phone_number}}">{{$settings["general_settings"]->phone_number}}</a>
      </div>
    </div>
  </div>