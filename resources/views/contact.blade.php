
<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>   مبرة عنزة الخيرية     </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets2/images/favicons/apple-touch-icon.png')}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets2/images/favicons/favicon-32x32.png')}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets2/images/favicons/favicon-16x16.png')}}" />
    <link rel="manifest" href="{{asset('assets2/images/favicons/site.webmanifest')}}" />
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
        <!--Page Header End-->



        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <strong>{{$message}}</strong>
        </div>
        @endif

        <!--Causes Details Start-->


 <!--Contact page Start-->
 <section class="contact-page">
  <div class="container">
      <div class="section-title text-center">
          <span class="section-title__tagline">تواصل معنا</span>
          <h2 class="section-title__title"> مبرة عنزة الخيرية        </h2>
      </div>
      <div class="row">
          <div class="col-xl-6 col-lg-6">
              <div class="contact-page__left">
                  <div class="contact-page__img">
                      <img src="{{asset('assets2/images/resources/contact-page-img-1.jpg')}}" alt="">
                  </div>
                  <p class="contact-page__text">
                    مَبرّة عنزة، تستقبل مساهماتكم من الصدقات والزكوات. نتعاون معكم على البر والتقوى بتقديم مشاريع خيرية لمجتمعنا وبلدنا الكويت

                </p>
                  <div class="contact-page__contact-info">
                      <ul class="contact-page__contact-list list-unstyled">
                          <li>
                              <div class="icon">
                                  <span class="icon-chat"></span>
                              </div>
                              <div class="text">
                                  <p>الخط الساخن :  </p>
                                  <a href="tel:94113411">51 75 56 92</a>
                                </div>
                          </li>
                          <li>
                              <div class="icon">
                                  <span class="icon-message"></span>
                              </div>
                              <div class="text">
                                  <p>البريد الإلكتروني : </p>
                                  <a href="mailto:info@baniwail.com">info@baniwail.com</a>
                                </div>
                          </li>
                          <li>
                              <div class="icon">
                                  <span class="icon-address"></span>
                              </div>
                              <div class="text">
                                <p>تشرفنا زيارتكم :</p>
                                <h5>الجهراء - شارع عبدالله بن جدعان - مبنى 77</h5>
                            </div>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col-xl-6 col-lg-6">
              <div class="contact-page__form">
                  <form action="{{route('contact.addDataf')}}" method="post" >
                    @csrf
                      <div class="row ">
                          <div class="col-xl-12">
                              <div class="contact-page__input-box">
                                  <input type="text" placeholder="الإسم" name="name">
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-xl-6">
                              <div class="contact-page__input-box">
                                  <input type="email" placeholder="البريد الإلكتروني" name="email">
                              </div>
                          </div>
                          <div class="col-xl-6">
                              <div class="contact-page__input-box">
                                  <input type="text" placeholder="الموضوع" name="subject">
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-xl-12 text-centers">
                              <div class="contact-page__input-box">
                                  <input type="text" placeholder="رقم الجوال" name="phone">
                              </div>
                          </div>
                          <div class="col-xl-12 text-center">
                              <div class="contact-page__input-box">
                                  <textarea name="message" placeholder="الرسالة"></textarea>
                              </div>

                              <button type="submit" class="thm-btn contact-page__btn">إرسل الرسالة<i class="fas fa-arrow-circle-left"></i></button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</section>
<!--Contact page End-->


        <!--Become Volunteer Start-->
        <section class="become-volunteer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="become-volunteer__inner">
                            <div class="become-volunteer__left">
                                <h2>مشروعات ومساعدات إنسانية عاجلة</h2>
                                <div class="become-volunteer__big-text">
                                    <h2>كُلُّ امْرِئٍ في ظِلِّ صَدَقَتِهِ حَتَّى يُفْصَلَ بَيْنَ النَّاسِ</h2>
                                </div>
                            </div>
                            <div class="become-volunteer__btn-box">
                                <a href="/pro" class="become-volunteer__btn thm-btn">تصفح المشروعات<i class="fas fa-arrow-circle-left"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Become Volunteer End-->
        <!--Causes Details End-->

        @include('tkafol.footer')
