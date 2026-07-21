@extends('admin.layout')
@section('pageTitle')
    أقسام الموضوعات
@endsection
@section('formTitle')
    تعديل قسم   
@endsection
@section('pageContent')

<script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
<script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

@if ($message = Session::get('status'))
<div class="alert alert-success alert-block">
    <strong>{{$message}}</strong>
</div>
@endif

<form method="post" action="{{route('Products.saveUpdatePost',$post['id'])}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="title">Posts Title</label>
      <input type="text" class="form-control" name="title" id="title" aria-describedby="title" value ="{{$post['name']}}" placeholder="{{$post['title']}}">
      <small id="catname" class="form-text text-muted">Muste be Uniqe.</small>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Category </label>
      <select class="form-control" id="category_id" name="category_id">
        <option value="{{$post['category_id']}}">القسم</option>
        @foreach ($cats as $cat)
        <option value="{{$cat['id']}}">{{$cat['title']}}</option>
        @endforeach
 
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Period </label>
    <div class="input-daterange input-group" id="datepicker"  >
  

       <input type="text" class="date form-control" id="from" name="start" value ="{{$post['start']}}" placeholder="{{$post['start']}}" >

       <input type="text" class="date form-control" id="to"   name="end"  value ="{{$post['end']}}" placeholder="{{$post['end']}}">

     </div>
    </div>
    <div class="form-group">
      <label for="title">Target</label>
      <input type="number" class="form-control" name="target" id="target" aria-describedby="title" value ="{{$post['target']}}" placeholder="{{$post['target']}}">
      <small id="catname" class="form-text text-muted">If Needed target</small>
    </div>
  </div> <div class="form-group">
    <label for="title">القيمة الافتراضية </label>
    <input type="number" class="form-control" name="price" id="price" aria-describedby="title" value ="{{$post['price']}}" placeholder="القيمة الافتراضية">
    <small id="catname" class="form-text text-muted">القيمة الافتراضية</small>
  </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Content </label>

    <textarea name="content">  {{$post['description']}}" </textarea>
    <script>
            CKEDITOR.replace( 'content' );
    </script>
   </div>


            <div class="form-group">
        <label for="exampleFormControlFile1">Upload Image File</label>
        <input type="file" class="form-control"  name="photo" id="photo">
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">إظهار المشروع </label>
      <select class="form-control" id="puplish"  name="puplish">
        <option value="">إختيار</option>
        <option value="0">إخفاء </option>
        <option value="1">إظهار </option>
      
 
      </select>

    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
<div class="text-center">

  <img src="{{asset('uploads/'.$post->image) }}" class="img-fluid" alt="Responsive image">

</div>

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

