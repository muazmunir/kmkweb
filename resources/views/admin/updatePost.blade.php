@extends('admin.layout')
@section('pageTitle')
    تعديل الموضوعات  
@endsection
@section('formTitle')
    بيانات المحتوي  
@endsection
@section('pageContent')

@if ($message = Session::get('status'))
<div class="alert alert-success alert-block">
    <strong>{{$message}}</strong>
</div>
@endif

        
<script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>

 
<form method="post" action="{{route('allposts.saveUpdatePost',$post['id'])}}" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="title">Posts Title</label>
    <input type="text" class="form-control" name="title" id="title" aria-describedby="title" value="{{$post['title']}}" placeholder="{{$post['title']}}">
    <small id="catname" class="form-text text-muted">  .</small>
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
      <label for="exampleFormControlSelect1">Content </label>

  <textarea name="content">{{$post['content']}}</textarea>
  <script>
          CKEDITOR.replace( 'content' );
  </script>
 </div>


          <div class="form-group">
      <label for="exampleFormControlFile1">Upload Image File</label>
      <input type="file" class="form-control"  name="photo" id="photo">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Parent </label>
    <select class="form-control" id="puplish" required name="puplish">
      <option value="0">إخفاء الموضوع</option>
      <option value="1">إظهار الموضوع</option>
    

    </select>

  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
         

@endsection
 