
<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> مبرة عنزة الخيرية </title>
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
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-WBJL5Q6');</script>
  <!-- End Google Tag Manager -->
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WBJL5Q6"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  @if ($message = Session::get('success'))
  <div class="alert alert-success alert-block">
      <strong>{{$message}}</strong>
  </div>
  @endif

 @if (!Session::has('saller'))
{{ Session::put('saller',1)}}

 @endif

<!-- /.stricky-header -->
@include('tkafol.header')
        <!--Page Header End-->





        <!--Causes Details Start-->
        <section class="causes-details">
            <div class="container">

            @if (isset($_GET['status']))
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">  </th>
                    <th scope="col"> <img src="{{asset('assets2/images/resources/thanks.png')}}" height="150" width="350"></th>
                    </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>العملية</td>
                    <td>ناجحة</td>
                  </tr>
                  <!-- <tr>
                    <td>  قيمة التبرع</td>
                    <td>
                       <?php //echo $_GET['total']; ?>
                         </td>
                  </tr> -->
                  <tr>
                    <td>المتبرع </td>
                    <td>فاعل خير </td>
                  </tr>

                  <tr>
                  <td>فاعل خير </td>
                    <td>المتبرع </td>

                  </tr>
                </tbody>
              </table>
              @else
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">                    <a href="{{route('cart.list')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">   عودة للسلة </a>
                    </th>
                    <meta http-equiv="refresh" content="3; url={{route('cart.list')}}" />
 </th>
                    </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>العملية</td>
                    <td>  لم تتم عملية التبرع بنجاح جاري العودة للسلة </td>
                  </tr>

                  <tr>
                  </td>
                    <td>    </td>
                  </tr>

                </tbody>
              </table>


              @endif

                  </div>
            </div>
        </section>

        <!--Causes Details End-->

        @include('tkafol.footer')
