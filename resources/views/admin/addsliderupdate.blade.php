@extends('admin.layout')
@section('pageTitle')
     سلايدر   
@endsection
@section('formTitle')
    اضافة للرئيسية
@endsection
@section('pageContent')

<script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
 

@if ($message = Session::get('status'))
<div class="alert alert-success alert-block">
    <strong>{{$message}}</strong>
</div>
@endif







@endsection


@section('payementpagination')
<form method="post" action="{{route('slider.Updateslider',$slider->id)}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="title">العنوان</label>
      <input type="text" class="form-control" name="title" id="title" required aria-describedby="title" value="{{$slider->title}}" placeholder="{{$slider->title}}  ">
      <small id="catname" class="form-text text-muted">     العنوان .</small>
    </div>
    <div class="form-group">
        <label for="title">التعليق</label>
        <input type="text" class="form-control" name="description" id="description" required aria-describedby="title" value="{{$slider->description}}" placeholder="{{$slider->description}}  ">
        <small id="catname" class="form-text text-muted">وصف المشروع</small>
      </div>
 

      <div class="form-group">
        <label for="title">  الرابط</label>
        <input type="text" class="form-control" name="target" id="target" required aria-describedby="title" value="{{$slider->target}}" placeholder="{{$slider->target}}  ">
        <small id="catname" class="form-text text-muted">   رابط التحويل </small>
      </div>
      <div class="form-group">
        <label for="title">زر الرابط </label>
        <input type="text" class="form-control" name="presstitle" id="presstitle" required aria-describedby="title" value="{{$slider->presstitle}}" placeholder="{{$slider->presstitle}}  ">
        <small id="catname" class="form-text text-muted">وصف المشروع</small>
      </div>
      <div class="form-group">
        <div class="col-sm-6">
  
        <label for="exampleFormControlSelect1">العرض  </label>
       
        <select class="form-control" id="public" required name="public">
          <option value="{{$slider->public}}">الحالة</option>
          <option value="hide">اخفاء</option>
          <option value="public">إظهار</option>
        </select> 
            <div class="form-group">
        <label for="exampleFormControlFile1">صورة الرابط  </label>
        <input type="file" required class="form-control"  name="photo" id="photo">
        <small id="catname" class="form-text text-muted">   يرجي اختيار صورة نقية </small>
    </div>
    <button type="submit" class="btn btn-primary">إضافة </button>
  </form>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>





@endsection
