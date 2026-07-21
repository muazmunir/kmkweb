<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> @yield('pageTitle')       </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets2/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets2/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets2/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets2/images/favicons/site.webmanifest" />
    <meta name="description" content="Crsine HTML Template For Car Services" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets2/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets2/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets2/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets2/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets2/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets2/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="assets2/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="assets2/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="assets2/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="assets2/vendors/halpes-icons/style.css">
    <link rel="stylesheet" href="assets2/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="assets2/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="assets2/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets2/vendors/owl-carousel/owl.theme.default.min.css" />
    <!-- test -->

    <!-- template styles -->
    <link rel="stylesheet" href="assets2/css/halpes.css" />
    <link rel="stylesheet" href="assets2/css/halpes-responsive.css" />
    <link rel="stylesheet" href="assets2/css/custom.css" />
	<link rel="stylesheet" href="assets2/css/tabo.css" />
	<link rel="stylesheet" href="assets2/css/login.css" />
</head>

<body>
    <div class="preloader">
        <img class="preloader__image" width="60" src="assets2/images/loader.png" alt="" />
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header clearfix">
            <div class="main-header__logo">
                <a href="index.html">
                    <img src="assets2/images/resources/logo2.png" alt="">
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
                                    <a href="index.html">الرئيسية</a>
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
                                    <a href="#">الزكاة</a>

                                </li>
                                <li class="dropdown">
                                    <a href="#">الصدقات</a>

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
                                <li><a href="contact.html">اتصل بنا</a></li>
                            </ul>
                            <div class="main-menu__right">
                              <!--
                                <a href="#" class="main-menu__search search-toggler icon-magnifying-glass"></a>
                              -->


                              <a href="login.html" class="uoz"><i class="fa fab fa-user-circle"></i></a>


                                <a href="#" class="main-menu__cart icon-shopping-cart  "></a>
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
        </div><!-- /.stricky-header -->


        <section class="main-slider">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
    "effect": "fade",
     "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
      },
    "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
    },
    "autoplay": {
        "delay": 5000
    }}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/backgrounds/main-slider-1-1.jpg);">
                        </div>
                        <div class="image-layer-overlay"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="main-slider__content">
                                        <p>مساعدة ذوي الاحتياجات الخاصة</p>
                                        <h2>مشروع كن لهم عوناً</h2>
                                        <a href="#" class="thm-btn"><i class="fas fa-arrow-circle-right"></i>تبرع الآن</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/backgrounds/main-slider-2-1.jpg);">
                        </div>
                        <div class="image-layer-overlay"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="main-slider__content">
                                        <p>بتبرع واحد 5 د.ك تساعد 5 فئات محتاجة</p>
                                        <h2>مشروع 5 تساعد 5</h2>
                                        <a href="#" class="thm-btn"><i class="fas fa-arrow-circle-right"></i>Learn
                                            More</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/backgrounds/main-slider-3-1.jpg);">
                        </div>
                        <div class="image-layer-overlay"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="main-slider__content">
                                        <p>أسر متعففة في أمس الحاجة لعطاءك</p>
                                        <h2>دعم الأسر المتعففة</h2>
                                        <a href="#" class="thm-btn"><i class="fas fa-arrow-circle-right"></i>Learn
                                            More</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- If we need navigation buttons -->
                <div class="swiper-pagination" id="main-slider-pagination"></div>
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i
                            class="icon-right-arrow icon-left-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i
                            class="icon-right-arrow"></i>
                    </div>
                </div>
            </div>
        </section>


        <!--Causes One Start-->
        <section class="causes-one">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">أحــدث</span>
                    <h2 class="section-title__title">مشروعات المبرة</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                      <div class="causes-one__carousel owl-theme owl-carousel">
                            <div class="causes-one__single wow fadeInLeft" data-wow-duration="1500ms">
                                <div class="causes-one__img">
                                    <div class="causes-one__img-box">
                                        <img src="assets2/images/resources/causes-one-img-1.jpg" alt="">
                                        <a href="#">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                    <div class="causes-one__category">
                                        <span>بسمة</span>
                                    </div>
                                </div>
                                <div class="causes-one__content">
                                    <h3 class="causes-one__title">
                                        <a href="causes-details.html">بسمه ..دعم طالب العلم</a>
                                    </h3>
                                    <div class="causes-one__goals">
                                        <p class="text-center">المستهدف <br><span> 5,000 </span><span class="cuur">  د.ك </span> </p>
                                        <p class="text-center">المدفوع <br><span> 2,500 </span> <span class="cuur">  د.ك </span> </p>
                                        <p class="text-center">المتبقي <br><span> 2,500 </span> <span class="cuur">  د.ك </span> </p>
                                    </div>
                                </div>
                                <div class="causes-one__progress">
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="50%">
                                            <div class="count-text">50%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="causes-one__donaz">
                                  <a href="#" class="btn   btn-md active" role="button" aria-pressed="true">10 د.ك</a>
                                  <a href="#" class="btn    btn-md active" role="button" aria-pressed="true">50 د.ك</a>
                                  <a href="#" class="btn    btn-md active" role="button" aria-pressed="true">100 د.ك</a>
                                  <a href="#" class="btn    btn-md active" role="button" aria-pressed="true">500 د.ك</a>
                                  <a href="#" class="btn    btn-md active" role="button" aria-pressed="true">1000 د.ك</a>
                                </div>
                                <div class="causes-one__no">
                                  <div class="input-group number-spinner">
                                    <span class="input-group-btn data-dwn">
                                      <button class="btn btn-default btn-info btn-numz" data-dir="dwn">-</button>
                                    </span>
                                    <input type="text" class="form-control text-center" value="1" min="-10" max="40">
                                    <span class="input-group-btn data-up">
                                      <button class="btn btn-default btn-info btn-numz" data-dir="up">+</button>
                                    </span>
                                  </div>
                                  <div class="causes-one__act">
                                      <a href="#" class="btn but1  btn-md active" role="button">التبرع السريع</a>
                                        <a href="#" class="btn but2 btn-md active" role="button" >أضف إلي السلة</a>
                                  </div>
                                </div>
                            </div>
                            <div class="causes-one__single wow fadeInUp" data-wow-duration="1500ms"
                                data-wow-delay="100ms">
                                <div class="causes-one__img">
                                    <div class="causes-one__img-box">
                                        <img src="assets2/images/resources/causes-one-img-2.jpg" alt="">
                                        <a href="#">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                    <div class="causes-one__category">
                                        <span>وقفيات</span>
                                    </div>
                                </div>
                                <div class="causes-one__content">
                                    <h3 class="causes-one__title">
                                        <a href="causes-details.html">مشروع 5 تساعد 5</a>
                                    </h3>
                                    <div class="causes-one__goals">
                                        <p class="text-center">المستهدف <br><span> 66,000 </span><span class="cuur">  د.ك </span> </p>
                                        <p class="text-center">المدفوع <br><span> 2,500 </span> <span class="cuur">  د.ك </span> </p>
                                        <p class="text-center">المتبقي <br><span> 62,500 </span> <span class="cuur">  د.ك </span> </p>
                                    </div>
                                </div>
                                <div class="causes-one__progress">
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="36%">
                                            <div class="count-text">36%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="causes-one__donaz">
                                  <a href="#" class="btn   btn-md active" role="button" aria-pressed="true">10 د.ك</a>
                                  <a href="#" class="btn    btn-md active" role="button" aria-pressed="true">50 د.ك</a>
                                  <a href="#" class="btn    btn-md active" role="button" aria-pressed="true">100 د.ك</a>
                                  <a href="#" class="btn    btn-md active" role="button" aria-pressed="true">500 د.ك</a>
                                  <a href="#" class="btn    btn-md active" role="button" aria-pressed="true">1000 د.ك</a>
                                </div>
                                <div class="causes-one__no">
                                  <div class="input-group number-spinner">
                                    <span class="input-group-btn data-dwn">
                                      <button class="btn btn-default btn-info btn-numz" data-dir="dwn">-</button>
                                    </span>
                                    <input type="text" class="form-control text-center" value="1" min="-10" max="40">
                                    <span class="input-group-btn data-up">
                                      <button class="btn btn-default btn-info btn-numz" data-dir="up">+</button>
                                    </span>
                                  </div>
                                  <div class="causes-one__act">
                                      <a href="#" class="btn but1  btn-md active" role="button">التبرع السريع</a>
                                        <a href="#" class="btn but2 btn-md active" role="button" >أضف إلي السلة</a>
                                  </div>
                                </div>
                            </div>
                            <div class="causes-one__single wow fadeInRight" data-wow-duration="1500ms"
                                data-wow-delay="200ms">
                                <div class="causes-one__img">
                                    <div class="causes-one__img-box">
                                        <img src="assets2/images/resources/causes-one-img-3.jpg" alt="">
                                        <a href="#">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                    <div class="causes-one__category">
                                        <span>جديد</span>
                                    </div>
                                </div>
                                <div class="causes-one__content">
                                    <h3 class="causes-one__title">
                                        <a href="causes-details.html">طالب العلم</a>
                                    </h3>
                                    <div class="causes-one__goals">
                                        <p class="text-center">المستهدف <br><span> 5,000 </span><span class="cuur">  د.ك </span> </p>
                                        <p class="text-center">المدفوع <br><span> 2,500 </span> <span class="cuur">  د.ك </span> </p>
                                        <p class="text-center">المتبقي <br><span> 2,500 </span> <span class="cuur">  د.ك </span> </p>
                                    </div>
                                </div>
                                <div class="causes-one__progress">
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="36%">
                                            <div class="count-text">36%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="causes-one__donaz">
                                  <a href="#" class="btn   btn-md active" role="button" aria-pressed="true">10 د.ك</a>
                                  <a href="#" class="btn    btn-md active" role="button" aria-pressed="true">50 د.ك</a>
                                  <a href="#" class="btn    btn-md active" role="button" aria-pressed="true">100 د.ك</a>
                                  <a href="#" class="btn    btn-md active" role="button" aria-pressed="true">500 د.ك</a>
                                  <a href="#" class="btn    btn-md active" role="button" aria-pressed="true">1000 د.ك</a>
                                </div>
                                <div class="causes-one__no">
                                  <div class="input-group number-spinner">
                                    <span class="input-group-btn data-dwn">
                                      <button class="btn btn-default btn-info btn-numz" data-dir="dwn">-</button>
                                    </span>
                                    <input type="text" class="form-control text-center" value="1" min="-10" max="40">
                                    <span class="input-group-btn data-up">
                                      <button class="btn btn-default btn-info btn-numz" data-dir="up">+</button>
                                    </span>
                                  </div>
                                  <div class="causes-one__act">
                                      <a href="#" class="btn but1  btn-md active" role="button">التبرع السريع</a>
                                        <a href="#" class="btn but2 btn-md active" role="button" >أضف إلي السلة</a>
                                  </div>
                                </div>
                            </div>
                            <div class="causes-one__single wow fadeInLeft" data-wow-duration="1500ms">
                                <div class="causes-one__img">
                                    <div class="causes-one__img-box">
                                        <img src="assets2/images/resources/causes-one-img-1.jpg" alt="">
                                        <a href="#">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                    <div class="causes-one__category">
                                        <span>بسمة</span>
                                    </div>
                                </div>
                                <div class="causes-one__content">
                                    <h3 class="causes-one__title">
                                        <a href="causes-details.html">بسمه ..دعم طالب العلم</a>
                                    </h3>
                                    <div class="causes-one__goals">
                                        <p class="text-center">المستهدف <br><span> 5,000 </span><span class="cuur">  د.ك </span> </p>
                                        <p class="text-center">المدفوع <br><span> 2,500 </span> <span class="cuur">  د.ك </span> </p>
                                        <p class="text-center">المتبقي <br><span> 2,500 </span> <span class="cuur">  د.ك </span> </p>
                                    </div>
                                </div>
                                <div class="causes-one__progress">
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="50%">
                                            <div class="count-text">50%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="causes-one__donaz">
                                  <a href="#" class="btn   btn-md active" role="button" aria-pressed="true">10 د.ك</a>
                                  <a href="#" class="btn    btn-md active" role="button" aria-pressed="true">50 د.ك</a>
                                  <a href="#" class="btn    btn-md active" role="button" aria-pressed="true">100 د.ك</a>
                                  <a href="#" class="btn    btn-md active" role="button" aria-pressed="true">500 د.ك</a>
                                  <a href="#" class="btn    btn-md active" role="button" aria-pressed="true">1000 د.ك</a>
                                </div>
                                <div class="causes-one__no">
                                  <div class="input-group number-spinner">
                                    <span class="input-group-btn data-dwn">
                                      <button class="btn btn-default btn-info btn-numz" data-dir="dwn">-</button>
                                    </span>
                                    <input type="text" class="form-control text-center" value="1" min="-10" max="40">
                                    <span class="input-group-btn data-up">
                                      <button class="btn btn-default btn-info btn-numz" data-dir="up">+</button>
                                    </span>
                                  </div>
                                  <div class="causes-one__act">
                                      <a href="#" class="btn but1  btn-md active" role="button">التبرع السريع</a>
                                        <a href="#" class="btn but2 btn-md active" role="button" >أضف إلي السلة</a>
                                  </div>
                                </div>
                            </div>
                            <div class="causes-one__single wow fadeInUp" data-wow-duration="1500ms"
                                data-wow-delay="100ms">
                                <div class="causes-one__img">
                                    <div class="causes-one__img-box">
                                        <img src="assets2/images/resources/causes-one-img-2.jpg" alt="">
                                        <a href="#">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                    <div class="causes-one__category">
                                        <span>وقفيات</span>
                                    </div>
                                </div>
                                <div class="causes-one__content">
                                    <h3 class="causes-one__title">
                                        <a href="causes-details.html">مشروع 5 تساعد 5</a>
                                    </h3>
                                    <div class="causes-one__goals">
                                        <p class="text-center">المستهدف <br><span> 5,000 </span><span class="cuur">  د.ك </span> </p>
                                        <p class="text-center">المدفوع <br><span> 2,500 </span> <span class="cuur">  د.ك </span> </p>
                                        <p class="text-center">المتبقي <br><span> 2,500 </span> <span class="cuur">  د.ك </span> </p>
                                    </div>
                                </div>
                                <div class="causes-one__progress">
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="36%">
                                            <div class="count-text">36%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="causes-one__donaz">
                                  <a href="#" class="btn   btn-md active" role="button" aria-pressed="true">10 د.ك</a>
                                  <a href="#" class="btn    btn-md active" role="button" aria-pressed="true">50 د.ك</a>
                                  <a href="#" class="btn    btn-md active" role="button" aria-pressed="true">100 د.ك</a>
                                  <a href="#" class="btn    btn-md active" role="button" aria-pressed="true">500 د.ك</a>
                                  <a href="#" class="btn    btn-md active" role="button" aria-pressed="true">1000 د.ك</a>
                                </div>
                                <div class="causes-one__no">
                                  <div class="input-group number-spinner">
                                    <span class="input-group-btn data-dwn">
                                      <button class="btn btn-default btn-info btn-numz" data-dir="dwn">-</button>
                                    </span>
                                    <input type="text" class="form-control text-center" value="1" min="-10" max="40">
                                    <span class="input-group-btn data-up">
                                      <button class="btn btn-default btn-info btn-numz" data-dir="up">+</button>
                                    </span>
                                  </div>
                                  <div class="causes-one__act">
                                      <a href="#" class="btn but1  btn-md active" role="button">التبرع السريع</a>
                                        <a href="#" class="btn but2 btn-md active" role="button" >أضف إلي السلة</a>
                                  </div>
                                </div>
                            </div>
                            <div class="causes-one__single wow fadeInRight" data-wow-duration="1500ms"
                                data-wow-delay="200ms">
                                <div class="causes-one__img">
                                    <div class="causes-one__img-box">
                                        <img src="assets2/images/resources/causes-one-img-3.jpg" alt="">
                                        <a href="#">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                    <div class="causes-one__category">
                                        <span>جديد</span>
                                    </div>
                                </div>
                                <div class="causes-one__content">
                                    <h3 class="causes-one__title">
                                        <a href="causes-details.html">طالب العلم</a>
                                    </h3>
                                    <div class="causes-one__goals">
                                        <p class="text-center">المستهدف <br><span> 5,000 </span><span class="cuur">  د.ك </span> </p>
                                        <p class="text-center">المدفوع <br><span> 2,500 </span> <span class="cuur">  د.ك </span> </p>
                                        <p class="text-center">المتبقي <br><span> 2,500 </span> <span class="cuur">  د.ك </span> </p>
                                    </div>
                                </div>
                                <div class="causes-one__progress">
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="36%">
                                            <div class="count-text">36%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="causes-one__donaz">
                                  <a href="#" class="btn   btn-md active" role="button" aria-pressed="true">10 د.ك</a>
                                  <a href="#" class="btn    btn-md active" role="button" aria-pressed="true">50 د.ك</a>
                                  <a href="#" class="btn    btn-md active" role="button" aria-pressed="true">100 د.ك</a>
                                  <a href="#" class="btn    btn-md active" role="button" aria-pressed="true">500 د.ك</a>
                                  <a href="#" class="btn    btn-md active" role="button" aria-pressed="true">1000 د.ك</a>
                                </div>
                                <div class="causes-one__no">
                                  <div class="input-group number-spinner">
                                    <span class="input-group-btn data-dwn">
                                      <button class="btn btn-default btn-info btn-numz" data-dir="dwn">-</button>
                                    </span>
                                    <input type="text" class="form-control text-center" value="1" min="-10" max="40">
                                    <span class="input-group-btn data-up">
                                      <button class="btn btn-default btn-info btn-numz" data-dir="up">+</button>
                                    </span>
                                  </div>
                                  <div class="causes-one__act">
                                      <a href="#" class="btn but1  btn-md active" role="button">التبرع السريع</a>
                                        <a href="#" class="btn but2 btn-md active" role="button" >أضف إلي السلة</a>
                                  </div>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </section>
        <!--Causes One End-->

        <!--Join One Start-->
        <section class="join-one">
            <div class="join-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url(assets/images/backgrounds/join-one-bg.jpg)"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="join-one__inner">
                            <h2 class="join-one__title">مشروعات دعم حلقات تحفيظ القرآن الكريم</h2>
                            <a href="#" class="join-one__btn thm-btn"><i class="fas fa-arrow-circle-left"></i>تبرع الآن</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Join One End-->

        <!--News Page Start-->
        <section class="news-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <!--News Two Single-->
                        <div class="news-two__single">
                            <div class="news-two__img-box">
                                <div class="news-two__img">
                                    <img src="assets2/images/blog/news-page-img-1.jpg" alt="">
                                    <a href="news-details.html">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                                <div class="news-two__date">
                                    <p>20 يناير 2021</p>
                                </div>
                            </div>
                            <div class="news-two__content">
                                <ul class="list-unstyled news-two__meta">
                                    <li><a href="#"><i class="far fa-user-circle"></i> Admin</a></li>
                                    <li><span>/</span></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 2 تعليق</a>
                                    </li>
                                </ul>
                                <h3>
                                    <a href="news-details.html">وزير الدفاع: تطبيق القانون على الجميع وصون حرمة المال العام</a>
                                </h3>
                                <p class="news-two__text">أكد خلال استقباله قيادات الوزارة أمس على ضرورة ترجمة توجيهات القيادة السياسية ومواصلة العمل ووضع مصلحة الوطن فوق كل مصلحة</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <!--News Two Single-->
                        <div class="news-two__single">
                            <div class="news-two__img-box">
                                <div class="news-two__img">
                                    <img src="assets2/images/blog/news-page-img-2.jpg" alt="">
                                    <a href="news-details.html">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                                <div class="news-two__date">
                                    <p>20 يناير 2021</p>
                                </div>
                            </div>
                            <div class="news-two__content">
                                <ul class="list-unstyled news-two__meta">
                                    <li><a href="#"><i class="far fa-user-circle"></i> Admin</a></li>
                                    <li><span>/</span></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 2 تعليق</a>
                                    </li>
                                </ul>
                                <h3>
                                    <a href="news-details.html">«الشباب»: ورشة عمل «الطريق إلى النجاح» لمساعدة الطلبة في القبول الجامعي</a>
                                </h3>
                                <p class="news-two__text">ضمن جهود الهيئة في استقطاب وتأهيل الكفاءات والخبرات لمركز الإرشاد الأكاديمي</p></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <!--News Two Single-->
                        <div class="news-two__single">
                            <div class="news-two__img-box">
                                <div class="news-two__img">
                                    <img src="assets2/images/blog/news-page-img-3.jpg" alt="">
                                    <a href="news-details.html">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                                <div class="news-two__date">
                                    <p>  20 يناير 2021</p>
                                </div>
                            </div>
                            <div class="news-two__content">
                                <ul class="list-unstyled news-two__meta">
                                    <li><a href="#"><i class="far fa-user-circle"></i> Admin</a></li>
                                    <li><span>/</span></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 2 تعليق</a>
                                    </li>
                                </ul>
                                <h3>
                                    <a href="news-details.html">وكيل الحرس بالتكليف استقبل وفداً من جهاز الأمن الوطني</a>
                                </h3>
                                <p class="news-two__text">الدرك الفرنسي قدم محاضرة لأعضاء الوفد وقادة وضباط الحرس الوطني</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="400ms">
                        <!--News Two Single-->
                        <div class="news-two__single">
                            <div class="news-two__img-box">
                                <div class="news-two__img">
                                    <img src="assets2/images/blog/news-page-img-4.jpg" alt="">
                                    <a href="news-details.html">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                                <div class="news-two__date">
                                    <p>  20 يناير 2021</p>
                                </div>
                            </div>
                            <div class="news-two__content">
                                <ul class="list-unstyled news-two__meta">
                                    <li><a href="#"><i class="far fa-user-circle"></i> Admin</a></li>
                                    <li><span>/</span></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 2 تعليق</a>
                                    </li>
                                </ul>
                                <h3>
                                    <a href="news-details.html">بالفيديو.. وزير التجارة تفقّد «الجمارك»: تقديم الدعم لحلّ المعوقات وتطوير العمل الجمركي</a>
                                </h3>
                                <p class="news-two__text">أكد على أهمية دور الجمارك في الجانبين الأمني والاقتصادي</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="500ms">
                        <!--News Two Single-->
                        <div class="news-two__single">
                            <div class="news-two__img-box">
                                <div class="news-two__img">
                                    <img src="assets2/images/blog/news-page-img-5.jpg" alt="">
                                    <a href="news-details.html">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                                <div class="news-two__date">
                                    <p>  20 يناير 2021</p>
                                </div>
                            </div>
                            <div class="news-two__content">
                                <ul class="list-unstyled news-two__meta">
                                    <li><a href="#"><i class="far fa-user-circle"></i> Admin</a></li>
                                    <li><span>/</span></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 2 تعليق</a>
                                    </li>
                                </ul>
                                <h3>
                                    <a href="news-details.html">43.92 % إنجاز تقاطعات طريق السادس المؤدي إلى غرب الجليب</a>
                                </h3>
                                <p class="news-two__text">تنفذه «هيئة الطرق».. ووفق «الأداء الحكومي» المشروع متأخر عن البرنامج الزمني بفارق 6.89%</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="600ms">
                        <!--News Two Single-->
                        <div class="news-two__single">
                            <div class="news-two__img-box">
                                <div class="news-two__img">
                                    <img src="assets2/images/blog/news-page-img-6.jpg" alt="">
                                    <a href="news-details.html">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                                <div class="news-two__date">
                                    <p>  20 يناير 2021</p>
                                </div>
                            </div>
                            <div class="news-two__content">
                                <ul class="list-unstyled news-two__meta">
                                    <li><a href="#"><i class="far fa-user-circle"></i> Admin</a></li>
                                    <li><span>/</span></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 2 تعليق</a>
                                    </li>
                                </ul>
                                <h3>
                                    <a href="news-details.html">«الداخلية» تفرض رسماً بقيمة 9 دنانير على القادمين من الجنسية المصرية جواً</a>
                                </h3>
                                <p class="news-two__text">أصدر مدير جوزات المطار العميد بدر الشايع تعميما تضمن تحصيل رسم قدره 9 دنانير عند إصدار اي نوع من أنواع التأشيرات على المصريين القادمين جوا.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--News Page End-->



                        <!--Site Footer One Start-->
                        <footer class="site-footer">
                            <div class="site-footer-bg" style="background-image: url(assets/images/backgrounds/footer-bg.jpg)"></div>
                            <div class="container">
                                <div class="site-footer__top">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                                            <div class="footer-widget__column footer-widget__about">
                                                <h3 class="footer-widget__title">عن الجمعية</h3>
                                                <p class="footer-widget__text">الريــادة والتميــز في خدمــة الغارمـيـن و الغارمــات والمحافظة  علــى كيــان الأسر والمجتمع مــن التشــرد، ً. وإبــراز هــذه التجربــة محليــاً وإقليميــا وعالمياً

 </p>
                                                <a href="causes.html" class="footer-widget__about-btn">تبرع </a>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                                            <div class="footer-widget__column footer-widget__explore clearfix">
                                                <h3 class="footer-widget__title">روابط</h3>
                                                <ul class="footer-widget__explore-list list-unstyled">
                                                    <li><a href="causes.html">المشروعات</a></li>
                                                    <li><a href="#">الزكاة</a></li>
                                                    <li><a href="about.html">عن الجمعية</a></li>
                                                    <li><a href="contact.html">اتصل بنا</a></li>
                                                </ul>

                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                                            <div class="footer-widget__column footer-widget__contact">
                                                <h3 class="footer-widget__title">نسعد بتواصلكم </h3>
                                                <ul class="list-unstyled footer-widget__contact-list">
                                                    <li>
                                                        <div class="icon">
                                                            <i class="icon-chat"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>
                                                                <span>الخط الساخن</span>
                                                                <a href="tel:94064061">94064061</a>
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="icon-message"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>
                                                                <span>Send Email</span>
                                                                <a href="mailto:info@altkaful.com">info@altkaful.com</a>
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="icon-address"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p><spanزر مكتبنا</span>عبدالعزيز المشعل قطعة رقم 7 -منزل رقم 29

</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                            <div class="footer-widget__column footer-widget__newsletter">
                                                <h3 class="footer-widget__title">النشرة البريدية</h3>
                                                <p class="footer-widget__newsletter-text">اشترك ليصلك جديدنا من المشروعات الخيرية</p>
                                                <form class="footer-widget__newsletter-form">
                                                    <input type="email" placeholder="بريد الكتروني" name="email">
                                                    <button type="submit" class="footer-widget__newsletter-btn">إرسل <i
                                                            class="fas fa-arrow-circle-left"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="site-footer__bottom">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="site-footer__bottom-inner">
                                                <div class="site-footer__bottom-logo-social">
                                                    <div class="site-footer__bottom-logo">
                                                        <a href="index.html"><img src="assets2/images/resources/footer-logo.jpg"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="site-footer__bottom-social">
                                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                                                        <a href="#"><i class="fab fa-dribbble"></i></a>
                                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                                    </div>
                                                </div>
                                                <div class="site-footer__bottom-copy-right">
                                                    <p>© Copyright 2022 by <a href="https://altkaful.org/">altkaful.org</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </footer>
                        <!--Site Footer One End-->



    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets2/images/resources/logo-1.svg" width="155"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:info@khairkw.com">info@khairkw.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:94113411">94 11 34 11</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">

            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->
    <!-- test popup -->
    <!-- Popup itself -->
          <div id="test-popup" class="white-popup mfp-hide">
            <div class="wrapper">

              <div class="buttonWrapper">
                <button class="tab-button active" style="border-top-left-radius: 10px;" data-id="home">صدقـــة</button>
                <button class="tab-button" data-id="about">زكـــاة</button>

              </div>
              <div class="contentWrapper">
                <div class="content tabz-home active" id="home">
                  <div class="causes-one__selectz noback">
                      <select class="form-control">
                        <option>زكــاة مالك 2.5% </option>
                      </select>
                  </div>
                  <div class="causes-one__donaz noback">
                    <a href="#" class="btn rigo   btn-md active" role="button" aria-pressed="true">10 د.ك</a>
                    <a href="#" class="btn rigo   btn-md active" role="button" aria-pressed="true">50 د.ك</a>
                    <a href="#" class="btn  rigo  btn-md active" role="button" aria-pressed="true">100 د.ك</a>
                    <a href="#" class="btn  rigo  btn-md active" role="button" aria-pressed="true">500 د.ك</a>
                  </div>
                  <div class="causes-one__no noback nopad">
                    <div class="input-group number-spinner">
                      <span class="input-group-btn data-dwn">
                        <button class="btn btn-default btn-info btn-numz" data-dir="dwn">-</button>
                      </span>
                      <input type="text" class="form-control text-center" value="1" min="-10" max="40">
                      <span class="input-group-btn data-up">
                        <button class="btn btn-default btn-info btn-numz" data-dir="up">+</button>
                      </span>
                    </div>
                    <div class="causes-one__act">
                        <a href="#" class="btn but1  btn-md active" role="button">التبرع السريع</a>
                          <a href="#" class="btn but2 btn-md active" role="button" >أضف إلي السلة</a>
                    </div>
                  </div>

              </div>
                <div class="content" id="about">
                  <div class="causes-one__selectz noback">
                      <select class="form-control">
                        <option>زكــاة مالك 2.5% </option>
                      </select>
                  </div>
                  <div class="causes-one__donaz noback">
                    <a href="#" class="btn rigo   btn-md active" role="button" aria-pressed="true">10 د.ك</a>
                    <a href="#" class="btn rigo   btn-md active" role="button" aria-pressed="true">50 د.ك</a>
                    <a href="#" class="btn  rigo  btn-md active" role="button" aria-pressed="true">100 د.ك</a>
                    <a href="#" class="btn  rigo  btn-md active" role="button" aria-pressed="true">500 د.ك</a>
                  </div>

              </div>
            </div>

          </div>
    <!-- end of test popup -->


    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="assets2/vendors/jquery/jquery-3.5.1.min.js"></script>
    <script src="assets2/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets2/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets2/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets2/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets2/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets2/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets2/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets2/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets2/vendors/odometer/odometer.min.js"></script>
    <script src="assets2/vendors/swiper/swiper.min.js"></script>
    <script src="assets2/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="assets2/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets2/vendors/wow/wow.js"></script>
    <script src="assets2/vendors/isotope/isotope.js"></script>
    <script src="assets2/vendors/countdown/countdown.min.js"></script>
    <script src="assets2/vendors/owl-carousel/owl.carousel.min.js"></script>
    <!-- template js -->
    <script src="assets2/js/halpes.js"></script>
    <script src="assets2/js/custom.js"></script>
    <script>
    const tabs = document.querySelector(".wrapper");
    const tabButton = document.querySelectorAll(".tab-button");
    const contents = document.querySelectorAll(".content");

    tabs.onclick = e => {
      const id = e.target.dataset.id;
      if (id) {
        tabButton.forEach(btn => {
          btn.classList.remove("active");
        });
        e.target.classList.add("active");

        contents.forEach(content => {
          content.classList.remove("active");
        });
        const element = document.getElementById(id);
        element.classList.add("active");
      }
    }
    </script>
</body>

</html>
