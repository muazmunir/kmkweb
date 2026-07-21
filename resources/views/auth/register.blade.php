

<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>مبرة عنزة       </title>
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

 @if (!Session::has('saller'))
{{ Session::put('saller',1)}}

 @endif

<!-- /.stricky-header -->
@include('tkafol.header')
        <!--Page Header End-->





        <!--Causes Details Start-->
        <section class="causes-details">
            <div class="container">
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            {{-- <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a> --}}
            <img id="profile-img" class="profile-img-card" src="{{asset('assets2/images/login/user.svg')}}" />
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
                <x-label for="email" :value="__('البريد الالكتروني')" />

                <x-input id="email" class="block mt-1 w-full" type="tel" name="email" :value="old('email')" required />
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

@include('tkafol.footer')
