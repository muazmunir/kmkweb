 
@extends('tkafol.layout')

@section('pageTitle')
مبرة العنزة الخيرية
@endsection
<?php
 //$products = [];
$posts = [];?>

@if (!$post )

                @section('main-slider')
                @parent
                @endsection

                @section('causes-details')
                @endsection

                @section('causes-one')
                @parent
                @endsection



                @section('join-one')
                @parent
                @endsection

                @section('news-page')
                @parent
                @endsection

@elseif ($post)
                @section('main-slider')
                @endsection
                @section('causes-details')
                @parent
                @endsection
             

                @section('causes-one')
                @endsection
                @section('join-one')
                @endsection
                @section('news-page')
                @endsection

                @section('news_details')
                @include('tkafol.news_details') 
                @parent
                
                
                            {{$post}}
                @endsection
@else

            

       
    
@endif

