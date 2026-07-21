@section('header')
<div class="preloader">
    <img class="preloader__image" width="60" src="{{asset('assets2/images/loader.png')}}" alt="" />
</div>
<!-- /.preloader -->
<div class="page-wrapper">
    <header class="main-header clearfix">
        <div class="main-header__logo">
            <a href="{{route('main')}}">
                <img src="{{asset('assets2/images/resources/logo2.png')}}" alt="">
            </a>
        </div>
        <div class="main-menu-wrapper">
            <div class="main-menu-wrapper__top">
                <div class="main-menu-wrapper__top-inner">
                    <div class="main-menu-wrapper__left">
                        <div class="main-menu-wrapper__left-content">

                            <div class="main-menu-wrapper__left-email-box">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="email">
                                    <p>بريدنا الالكتروني</p>
                                    <a href="mailto:info@baniwail.com">info@baniwail.com</a>
                                </div>
                            </div>
                            <!--
                              <a href="#" class="main-menu__search search-toggler icon-magnifying-glass"></a>
                            -->
                            <form action="#" class="senssh">
                                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                                <input type="text" id="search" name="search" placeholder="بحث..." />
                                <button type="submit" aria-label="search submit" class="thm-btn">
                                    <i class="icon-magnifying-glass"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="main-menu-wrapper__right">
                        <div class="main-menu-wrapper__right-social">
                            <a href="https://twitter.com/altakaful"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.facebook.com/Takaful.Association?ref=hl"><i class="fab fa-facebook-square"></i></a>
                            <a href="https://api.whatsapp.com/send?phone=https://wa.me/96594064061"><i class="fab fa-whatsapp"></i></a>
                            <a href="https://www.instagram.com/altakaful?igshid=kk7dkq7q9kfv/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-menu-wrapper__bottom">
                <nav class="main-menu">
                    <div class="main-menu__inner">
                        <a href="{{route('main')}}" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                        <ul class="main-menu__list">
                            <li class="dropdown ">
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
                            </li>

                            <li><a href="{{route('contact')}}">اتصل بنا</a></li>
                        </ul>
                        <div class="main-menu__right">
                          <!--
                            <a href="#" class="main-menu__search search-toggler icon-magnifying-glass"></a>
                          -->




                          <a href="{{route('login')}}" class="uoz"><i class="fa fab fa-user-circle"></i></a>


                            <a href="{{route('cart.list')}}" class="main-menu__cart icon-shopping-cart  ">{{Session::get('cartcount')}}</a>
                            <!--
                            <div class="main-menu__phone-contact">
                                <div class="main-menu__phone-icon">
                                    <span class="icon-chat"></span>
                                </div>

                                <div class="main-menu__phone-number">
                                    <p>Call Anytime</p>
                                    <a href="tel:92 666 888 0000">92 666 888 0000</a>
                                </div>

                            </div>
                            -->
                            <a href="{{route('donation')}}" class="main-menu__donate-btn">التبرع السريع</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

    </header>

    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div>
@show
