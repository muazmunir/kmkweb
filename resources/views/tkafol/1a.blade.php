@extends('tkafol.layout')
@section('pageTitle')
    أقسام الموضوعات
@endsection
@section('formTitle')
    تعديل قسم   
@endsection
@section('pageContent')

@if ($message = Session::get('status'))
<div class="alert alert-success alert-block">
    <strong>{{$message}}</strong>
</div>
@endif

        
         

@endsection
