
@extends('tkafol.layout')

@section('pageTitle')

 مبرة عنزة الخيرية
@endsection

@if (!$product )

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

@elseif ($product)
             @section('main-slider')
                @endsection
                @section('causes-details')
                @parent
                @endsection
                @section('causes_detailsInclude')
                    @include('tkafol.causes_details')
                @endsection

                @section('causes-one')
                @endsection
                @section('join-one')
                @endsection
                @section('news-page')
                @endsection

                @section('project_details')
                            {{$product}}
                @endsection
@else





@endif

