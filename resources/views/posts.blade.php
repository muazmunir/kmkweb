
<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> @yield('pageTitle')       </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets2/images/favicons/apple-touch-icon.png')}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets2/images/favicons/favicon-32x32.png')}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets2/images/favicons/favicon-16x16.png')}}" />
    <link rel="manifest" href="{{asset('assets2/images/favicons/site.webmanifest')}}"  />
    <meta name="description" content="Crsine HTML Template For Car Services" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets2/vendors/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets2/vendors/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets2/vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets2/vendors/jarallax/jarallax.css')}}" />
    <link rel="stylesheet" href="{{asset('assets2/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('assets2/vendors/nouislider/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets2/vendors/nouislider/nouislider.pips.css')}}" />
    <link rel="stylesheet" href="{{asset('assets2/vendors/odometer/odometer.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets2/vendors/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets2/vendors/halpes-icons/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/vendors/tiny-slider/tiny-slider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets2/vendors/reey-font/stylesheet.css')}}" />
    <link rel="stylesheet" href="{{asset('assets2/vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets2/vendors/owl-carousel/owl.theme.default.min.css')}}" />
    <!-- test -->

    <!-- template styles -->
    <link rel="stylesheet" href="{{asset('assets2/css/halpes.css')}}" />
    <link rel="stylesheet" href="{{asset('assets2/css/halpes-responsive.css')}}" />
    <link rel="stylesheet" href="{{asset('assets2/css/custom.css')}}" />
	<link rel="stylesheet" href="{{asset('assets2/css/tabo.css')}}" />
	<link rel="stylesheet" href="{{asset('assets2/css/login.css')}}" />
</head>

<body>


  @if ($message = Session::get('success'))
  <div class="alert alert-success alert-block">
      <strong>{{$message}}</strong>
  </div>
  @endif
<!-- /.stricky-header -->
@include('tkafol.header')

<section class="page-header">
    <div class="page-header__bg"
        style="background-image: url(assets2/images/backgrounds/page-header-bg-1-1.jpg);"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2>الأخبار</h2>
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="/main">الرئيسية</a></li>
            <li class="color-thm-gray">/</li>
            <li><span>أخبار المبرة</span></li>
        </ul>
    </div>
</section>

<section class="news-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">

                @foreach ($posts as $post)
                <!--News Two Single-->
                <div class="news-two__single">
                    <div class="news-two__img-box">
                        <div class="news-two__img">
                            <img src="{{asset($post->image) }}" height="310" width="229" alt="">
                            <a href="{{route('post',$post->id)}}">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                        <div class="news-two__date">
                            <p>{{date('d-m-Y', strtotime($post->created_at))}}</p>
                        </div>
                    </div>
                    <div class="news-two__content">
                        <ul class="list-unstyled news-two__meta">
                            <li><a href="{{route('post',$post->id)}}"><i class="far fa-user-circle"></i> Admin</a></li>
                            <li><span>/</span></li>
                            <li><a href="{{route('post',$post->id)}}"><i class="far fa-comments"></i> 2 تعليق</a>
                            </li>
                        </ul>
                        <h3>
                            <a href="{{route('post',$post->id)}}"> {{$post->title}} </a>
                        </h3>
                        <p class="news-two__text"> {{Str::limit(strip_tags($post->content), 120) }}  </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">


@endforeach




        </div>
        <div class="row text-center contentWrapper">
            <nav aria-label="Page navigation example">
              {!! $posts->links() !!}
            </nav>
          </div>
    </div>
</section>
<!--Causes One End-->






                @include('tkafol.footer')
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




                    <script src="{{asset('assets2/vendors/jquery/jquery-3.5.1.min.js')}}"></script>
                    <script src="{{asset('assets2/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
                    <script src="{{asset('assets2/vendors/jarallax/jarallax.min.js')}}"></script>
                    <script src="{{asset('assets2/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>
                    <script src="{{asset('assets2/vendors/jquery-appear/jquery.appear.min.js')}}"></script>
                    <script src="{{asset('assets2/vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}"></script>
                    <script src="{{asset('assets2/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>
                    <script src="{{asset('assets2/vendors/jquery-validate/jquery.validate.min.js')}}"></script>
                    <script src="{{asset('assets2/vendors/nouislider/nouislider.min.js')}}"></script>
                    <script src="{{asset('assets2/vendors/odometer/odometer.min.js')}}"></script>
                    <script src="{{asset('assets2/vendors/swiper/swiper.min.js')}}"></script>
                    <script src="{{asset('assets2/vendors/tiny-slider/tiny-slider.min.js')}}"></script>
                    <script src="{{asset('assets2/vendors/wnumb/wNumb.min.js')}}"></script>
                    <script src="{{asset('assets2/vendors/wow/wow.js')}}"></script>
                    <script src="{{asset('assets2/vendors/isotope/isotope.js')}}"></script>
                    <script src="{{asset('assets2/vendors/countdown/countdown.min.js')}}"></script>
                    <script src="{{asset('assets2/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
                    <!-- template js -->
                    <script src="{{asset('assets2/js/halpes.js')}}"></script>
                    <script src="{{asset('assets2/js/custom.js')}}"></script>
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
