
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

        


<x-app-layout>
    <x-slot name="header">
     
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if(!empty($payments))
   
                    <table class="table text-nowrap text-md-nowrap mb-0">
                       <thead>
                       <tr>
                           <th>id</th> <th>المتبرع </th><th>القيمة</th><th>المشروع</th><th>العملية</th>
                           <th>created_at</th>
                       </tr>
                    </thead>
                    
                           @foreach($payments as $payment)
                               <tr>
                                   <td>{{$payment->id}}</td> <td>{{$payment->username }}</td><td>{{$payment->value}}</td><td>{{$payment->productname}} </td>
                                   <td>{{$payment->result}}</td>
                                   <td>{{$payment->created_at }} </td> 
                               </tr>
                           @endforeach
                       @else
                           <tr>
                               <td colspan="10">There are no data.</td>
                           </tr>
                       @endif
                    </tbody>
                    </table>
                    <br><br><br>
                    <p > {!! $payments->links() !!}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


@include('tkafol.footer')