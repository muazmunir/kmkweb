
<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> مبرة عنزة الخيرية       </title>
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
                 @if ($message = Session::get('error'))
  <div class="alert alert-danger alert-block">
      <strong>{{$message}}</strong>
  </div>
  @endif
                  <div class="section-title text-right">
                        <h2 class="section-title__title">عزيزي المتبرع</h2>
                        <span class="section-title__tagline">لديكم {{count($cartItems)}} مشروع في سلة التبرع</span>
                        <p class="ttoo">الإجمالي : {{ Cart::getTotal() }} د.ك</p>
                        <p>

                        <!--<form action="{{route('checkout')}}" method="post" id="pay">-->
                        <!--  @csrf-->
                        <!--  <input type="hidden" id="total" name="total" value="{{Cart::getTotal()}}">-->
                        <!--  <input type="hidden" id="paymethod" name="paymethod" value="knet">-->
                        <!--  <input type="hidden" id="" name="saller" value="1">-->

                        <!--  <button  class="btn btn-primary" type="submit" value="Submit" form="pay">-->


                        <!--  </button>-->
                        <!--</form>-->

                        </p>
                    </div>



{{-- {{Session::get('saller')}} --}}
              @foreach ($cartItems as $item)
<br> <br>
<table class="table table-sm">
  <tbody>
    <td>{{ $item->id }}</td>
    <td>{{ $item->name }}</td>


    <td><img src="{{asset( $item->attributes->image) }}" class="w-20 rounded" height="70" width="70" alt="Thumbnail"></td>


    <td><form action="{{ route('cart.update') }}" method="POST">
     @csrf
     <input type="hidden" name="id" value="{{ $item->id}}" >


     <input type="text" class="form-control text-center" name="quantity" value="{{ $item->quantity }}"    size="10" >

   </td>
   <td>  <button type="submit" class="btn but2 btn-md active">تحديث</button>  </form>   <td>

  <td><form action="{{ route('cart.remove') }}" method="POST">
       @csrf
       <input type="hidden" value="{{ $item->id }}" name="id">
       <button class="btn btn-danger">حذف </button>
     </form>

   </td>

 </tbody>
</table>

@endforeach


                  <div class="container">
                  <br> <br> <br> <br>

                  </div>

                  @if (Auth::check()&&( Cart::getTotal() != 0))

                        <p><div class="row ">
                          <div class="col-xl-12">
                            <div class="container parent">
                              <div class="row ">
                              <div class='col col-xl-6 text-right'>

                                    <form action="{{route('checkout')}}" method="post" id="pay">
                                      @csrf
                                      <input type="radio" name="paymethod" id="img1" class="d-none imgbgchk" value="knet">
                                      <label for="img1">
                                      <img src="{{asset('assets2/images/payment/knet.jpg')}}" alt="Image 1">
                                  <div class="tick_container">
                                    <div class="tick"><i class="fa fa-check"></i></div>
                                  </div>
                                  </label>
                                  <label class="tityo">كي - نت</label>
                              </div>
                                <div class='col col-xl-6 text-right'>
                                <input type="radio" name="paymethod" id="img2" class="d-none imgbgchk" value="visa">
                                  <label for="img2">
                                  <img src="{{asset('assets2/images/payment/visa.jpg')}}" alt="Image 2">
                                <input type="hidden" id="total" name="total" value="{{Cart::getTotal()}}">
                                      <input type="hidden" id="" name="saller" value="{{Session::get('saller')}}">
             <div class="tick_container">
                                      <div class="tick"><i class="fa fa-check"></i></div>
                                    </div>
                                  </label>
                                    <label class="tityo">فيـــزا / ماســـتر</label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row ">
                          <div class="col-xl-12">
                              <div class="contact-page__input-box">
                                <textarea id="textarea" placeholder="أضف ملاحظاتك هنا" rows="4"></textarea> <br/><br/>
                              </div>
                          </div>
                        </div>
                         <div class="row ">
                        <div class="col-xl-12 text-center">
                          <br/><br/>
                                  <button type="submit"  class="btn but2 btn-md active" value="submit">تبرع الآن<i class="fas fa-arrow-circle-left"></i></button>
                           <br> </div></div>
                          </form>

                              </p>
                    @else
                       <div>
                    <ul class="tabs">
                    	<li class="tab-style active" rel="tab1">فاعل خير</li>
                    	<li class="tab-style" rel="tab2">المتبرع</li>
                    	<li class="tab-style" rel="tab3">متبرع جدبد</li>
                    </ul>

                    <ul class="tabs_mobile">
                    	<li class="tab-style active" rel="tab1">فاعل خير</li>
                    	<li class="tab-style" rel="tab2">المتبرع</li>
                    	<li class="tab-style" rel="tab3">جديد </li>
                    </ul>

                    <div class="tab_container">

                    	<div id="tab1" class="tab_content">
                            <form action="assets/inc/sendemail.php" class="page__option-form">
                            </form>
                            <div class="row ">
                                 <div class="col-xl-12">
                                  <div class="contact-page__input-box">
                                   </div>
                                   </div>
                                      <div class="col-xl-12">



                                  <div class="contact-page__input-box">
                                  </div>
                              </div>
                            </div>
                            <div class="row ">
                            <div class="col-xl-12">
                              <div class="container parent">
                                <div class="row ">
                                <div class='col col-xl-6 text-right'>

                                      <form action="{{route('checkout')}}" method="post" id="pay">
                                        @csrf
<input type="phone" placeholder=" الهاتف الزامي  " name="phone" required style="border: 5px solid #3498db;">
<br><br><br>
                                        <input type="radio" name="paymethod" id="img1" class="d-none imgbgchk" value="knet">
                                        <label for="img1">
                                        <img src="{{asset('assets2/images/payment/knet.jpg')}}" alt="Image 1">
                                  <div class="tick_container">
                                      <div class="tick"><i class="fa fa-check"></i></div>
                                    </div>
                                    </label>
                                    <label class="tityo">كي - نت</label>
                                </div>
                               
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row ">
                          <div class="col-xl-12">
                              <div class="contact-page__input-box">
                                <textarea id="textarea" placeholder="أضف ملاحظاتك هنا" rows="4"></textarea><br/><br/>
                              </div>
                          </div>  <div class="col-xl-12 text-center">

                                  <button type="submit"  class="btn but2 btn-md active" value="submit">تبرع الآن<i class="fas fa-arrow-circle-left"></i></button>
                            </div>
                        </div>
                          </form>
                      </div><div id="tab2" class="tab_content">
                                <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">

        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('البريد الالكتروني')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"   autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('الرقم السري')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __(' تذكرني') }}</span>
                </label>
            </div>




            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('    نسيت الرقم السري') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('   دخـــول') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
                    	</div><!-- #tab2 -->

                    	<div id="tab3" class="tab_content">
                       <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">

        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('اسم المستخدم')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
 
                <x-input id="phone" class="block mt-1 w-full" type="phone" name="phone"  required />
            </div>
                  <!-- Email Address -->
            <div class="mt-4">
                <x-label for="phone" :value="__(' الهاتف    ')" />

                <x-input id="phone" class="block mt-1 w-full" type="number" name="phone"   required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('الرقم السري')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('إعادة الرقم السري')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('هل انت  مسجل بالفعل ؟') }}
                </a>

                <x-button class="ml-4">
                    {{ __('تسجيل') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
                    	</div><!-- #tab3 -->
                    </div><!-- #tab_container -->
                    @endif








                  </div>
            </div>
        </section>

        <!--Causes Details End-->

        @include('tkafol.footer')
