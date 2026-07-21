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
<form method="post" action="{{route('slider.addNewaddslider')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="title">العنوان</label>
      <input type="text" class="form-control" name="title" id="title" required aria-describedby="title" placeholder="العنوان  ">
      <small id="catname" class="form-text text-muted">     العنوان .</small>
    </div>
    <div class="form-group">
        <label for="title">التعليق</label>
        <input type="text" class="form-control" name="description" id="description" required aria-describedby="title" placeholder=" التعليق   ">
        <small id="catname" class="form-text text-muted">وصف المشروع</small>
      </div>
 

      <div class="form-group">
        <label for="title">  الرابط</label>
        <input type="text" class="form-control" name="target" id="target" required aria-describedby="title" placeholder="    الرابط   ">
        <small id="catname" class="form-text text-muted">   رابط التحويل </small>
      </div>
      <div class="form-group">
        <label for="title">زر الرابط </label>
        <input type="text" class="form-control" name="presstitle" id="presstitle" required aria-describedby="title" placeholder="  زر الرابط   ">
        <small id="catname" class="form-text text-muted">وصف المشروع</small>
      </div>
      <div class="form-group">
        <div class="col-sm-6">
  
        <label for="exampleFormControlSelect1">العرض  </label>
        <select class="form-control" id="public" required name="public">
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


 @if(!empty($sliders))
 <table class="table text-nowrap text-md-nowrap mb-0">
   <thead>
   <tr>
       <th>id</th> <th>العنوان</th><th> الوصف</th><th>الزر</th><th>الصورة</th><th>تعديل</th><th>النشر</th><th>الانشاء</th>
    </tr>
</thead>

       @foreach($sliders as $slider)
           <tr>
               <td>{{$slider->id}}</td> <td>
                @if ($slider->public == 'public')
                <a href="{{route('slider.Updatesliderf',$slider->id)}}" class="btn btn-success">{{$slider->title}}</a>
                @else
                <a href="{{route('slider.Updatesliderf',$slider->id)}}" class="btn btn-danger">{{$slider->title}}</a>
                @endif
                 
            
            
            </td><td>{{$slider->description}}</td><td>{{$slider->presstitle }}</td>
               <td>{{$slider->image }}</td><td>  <a href="javascript:void(0)" class="btn btn-success notice">تعديل</a> </td><td>{{$slider->public}}</td><td>{{$slider->created_at}}</td>
           
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
<p > {!! $sliders->links() !!}</p>



@endsection
