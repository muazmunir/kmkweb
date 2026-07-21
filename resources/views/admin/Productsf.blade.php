@extends('admin.layout')
@section('pageTitle')
     المشاريع  
@endsection
@section('formTitle')
    اضافة مشروع  
@endsection
@section('pageContent')

<script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>


@if ($message = Session::get('status'))
<div class="alert alert-success alert-block">
    <strong>{{$message}}</strong>
</div>
@endif
<form method="post" action="{{route('Products.addNewPost')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="title">العنوان</label>
      <input type="text" class="form-control" name="title" id="title" required aria-describedby="title" placeholder="Enter Post ">
      <small id="catname" class="form-text text-muted">Muste be Uniqe.</small>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">القسم </label>
      <select class="form-control" id="category_id" name="category_id">
       
        @foreach ($cats as $cat)
        <option value="{{$cat['id']}}">{{$cat['title']}}</option>
        @endforeach
 
      </select>
    </div>
    <div class="form-group">
     <div class="input-daterange input-group" id="datepicker">
       <input type="text" class="date form-control" id="from"  name="start" placeholder="بداية المشروع ">

     
       <input type="text" class="date form-control" id="to"   name="end" placeholder="إغلاق المشروع">

      </div>
    </div>
    <div class="form-group">
      <label for="title">الهدف </label>
      <input type="number" class="form-control" name="target" id="target" aria-describedby="title" placeholder="  الهدف ">
      <small id="catname" class="form-text text-muted">القيمة النهائية</small>
    </div> <div class="form-group">
      <label for="title">القيمة الافتراضية </label>
      <input type="number" class="form-control" name="price" id="price" aria-describedby="title" placeholder="القيمة الافتراضية">
      <small id="catname" class="form-text text-muted">القيمة الافتراضية</small>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">المحتوي  </label>

    <textarea required name="content"></textarea>
    <script>
            CKEDITOR.replace( 'content' );
    </script>
   </div>


            <div class="form-group">
        <label for="exampleFormControlFile1">صورة المشروع </label>
        <input type="file" required class="form-control"  name="photo" id="photo">
    </div>
    <div class="form-group">
      <div class="col-sm-6">

      <label for="exampleFormControlSelect1">العرض  </label>
      <select class="form-control" id="puplish" required name="puplish">
        <option value="0">اخفاء</option>
        <option value="1">إظهار</option>
      
 
      </select> </div>  
      <div class="col-sm-6">

      <label for="exampleFormControlSelect1">نوع المشروع  </label>
      <select class="form-control" id="att1" required name="att1">
        <option value="1">مشروع عام</option>
        <option value="2">مشروع خاص </option>
      
 
      </select> </div>  

    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>



  <script type="text/javascript">

    $('.date').datepicker({  

       format: 'yyyy-mm-dd'

     });  

</script> 
<script type="text/javascript">

    $('.to').datepicker({  

       format: 'mm-dd-yyyy'

     });  

</script> 
@endsection

