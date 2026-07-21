@section('header')
<div class="preloader">
    <img class="preloader__image" width="60" src="{{asset('assets2/images/loader.png')}}" alt="" />
</div>
<!-- /.preloader -->
<div class="page-wrapper">
    <header class="main-header clearfix">
        <div class="main-header__logo">
            <a href="index.html">
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
                                    <a href="mailto:info@altkaful.com">info@altkaful.com</a>
                                </div>
                            </div>
                            <!--
                              <a href="#" class="main-menu__search search-toggler icon-magnifying-glass"></a>
                            -->
                            <form action="#" class="senssh">
                                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                                <input type="text" id="search" placeholder="بحث..." />
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
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                        <ul class="main-menu__list">
                            <li class="dropdown ">
                                <a href="{{route('main')}}">الرئيسية</a>
                            </li>
                            <li class="dropdown">
                                <a href="#">المشروعات</a>
                                <ul>
                                    <li><a href="causes.html">المشروعات</a></li>
                                    
                                    <li><a href="causes-details.html">تفاصيل المشروع</a></li>
                                    <li><a href="donation-option.html">خيارات التبرع</a></li>
                                </ul>
                            </li>
                            </li>
                            <li class="dropdown">
                                <a href="{{route('main',1)}}">الزكاة</a>

                            </li>
                            <li class="dropdown">
                                <a href="{{route('main',2)}}">الصدقات</a>

                            </li>
                            <li class="dropdown">
                                <a href="#">عن الجمعية</a>
                                <ul>
                                
                                    <li><a href="roya.html">الرؤية والرسالة والأهداف</a></li>
                                    <li><a href="magles.html">أعضاء مجلس الإدارة</a></li>
                                    <li><a href="kalema.html">كلمة رئيس مجلس الإدارة</a></li>
                                    <li><a href="news.html">أخبار الجمعية</a></li>
                                    <li><a href="news-details.html">تفاصيل الخبر</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('contact'}}">اتصل بنا</a></li>
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
                            <a href="#test-popup" class="main-menu__donate-btn open-popup-link">التبرع السريع</a>
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