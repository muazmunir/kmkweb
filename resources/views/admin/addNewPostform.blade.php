@extends('admin.layout')
@section('pageTitle')
   الموضوعات
@endsection
@section('formTitle')
اضافة موضوع 
@endsection
@section('pageContent')

@if ($message = Session::get('status'))
<div class="alert alert-success alert-block">
    <strong>{{$message}}</strong>
</div>
@endif

        
  
<script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>

@if ($message = Session::get('status'))
<div class="alert alert-success alert-block">
    <strong>{{$message}}</strong>
</div>
@endif
<form method="post" action="{{route('allposts.addNewPost')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="title">Posts Title</label>
      <input type="text" class="form-control" name="title" id="title" aria-describedby="title" placeholder="Enter Post ">
      <small id="catname" class="form-text text-muted">Muste be Uniqe.</small>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Category </label>
      <select class="form-control" id="category_id" name="category_id">
       
        @foreach ($cats as $cat)
        <option value="{{$cat['id']}}">{{$cat['title']}}</option>
        @endforeach
 
      </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Content </label>

    <textarea name="content"></textarea>
    <script>
            CKEDITOR.replace( 'content' );
    </script>
   </div>


            <div class="form-group">
         <input type="file" class="form-control"  name="photo" id="photo">
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Parent </label>
      <select class="form-control" id="puplish" required name="puplish">
            <option value="1">Publish Post</option>
        <option value="0">Hide Post</option>
      
      
 
      </select>

    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

 
        @endsection

