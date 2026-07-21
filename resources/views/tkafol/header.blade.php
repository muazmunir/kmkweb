@section('header')
<div class="preloader">
    <img class="preloader__image" width="60" src="{{asset('assets2/images/loader.png')}}" alt="" />
</div>
<!-- /.preloader -->
<div class="page-wrapper">
  <header class="main-header-two clearfix">
      <div class="main-header-two__inner">
          <div class="container">
              <div class="main-header-two__top clearfix">
                  <div class="main-header-two__logo">
                    <a href="{{route('main')}}">
                        <img src="{{asset('assets2/images/resources/logo-1.png')}}" alt="">
                    </a>
                  </div>
                  <div class="main-header-two__contact-info">

                      <div class="main-header-two__btn">
                            <a href="#test-popup" class="main-menu__donate-btn open-popup-link">التبرع السريع</a>
                      </div>
                      <ul class="main-header-two__contact-list list-unstyled">
                          <li>
                            <div class="main-header-two__contact-icon">
                                <span class="icon-message"></span>
                            </div>
                              <div class="main-header-two__contact-text">
                                  <p>بريدنا الالكتروني</p>
                                <a href="mailto:info@baniwail.com">info@baniwail.com</a>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
      <div class="main-header-two__bottom">
          <nav class="main-menu main-menu__two">
              <div class="container">
                  <div class="main-menu__inner clearfix">
                      <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                      <ul class="main-menu__list">
                          <li class="dropdown current">
                            <a href="{{route('main')}}">الرئيسية</a>
                          </li>


                          @foreach($menu as $button)
                          <li class="dropdown">
                              <a href="{{$button->link}}">{{$button->title}}</a>
                              @if (isset($subbutton))
                              <ul>
                                    @foreach($subbutton as $sbuttons)

                                          @if ($sbuttons->parent == $button->id)

                                              <li><a href="{{$sbuttons->link}}">{{$sbuttons->title}}</a></li>


                                          @endif
                                    @endforeach

                              </ul>

                              @endif


                          </li>

                              @endforeach


                          <li><a href="{{route('contact')}}">اتصل بنا</a></li>
                      </ul>
                      <div class="main-menu__right">
                          <div class="main-menu__right-social">
                              <a href="https://twitter.com/ALenzi_UP"><i class="fab fa-twitter"></i></a>
                              <a href="https://www.facebook.com/#"><i class="fab fa-facebook-square"></i></a>
                              <a href="https://api.whatsapp.com/send?phone=https://wa.me/965"><i class="fab fa-whatsapp"></i></a>
                              <a href="https://www.instagram.com/#"><i class="fab fa-instagram"></i></a>
                          </div>
                          <a href="#" class="main-menu__search search-toggler icon-magnifying-glass"></a>
                              <a href="{{route('login')}}" class="uoz"><i class="fa fab fa-user-circle"></i></a>
                              <a href="{{route('cart.list')}}" class="main-menu__cart icon-shopping-cart  ">{{Session::get('cartcount')}}</a>
                            </div>
                  </div>
              </div>
          </nav>
      </div>
  </header>

    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->
<!-- new -->

@show
