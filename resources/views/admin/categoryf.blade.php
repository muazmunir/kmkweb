@extends('admin.layout')
@section('pageTitle')
    أقسام الموضوعات
@endsection
@section('formTitle')
    اضافة قسم   
@endsection
@section('pageContent')
@if ($message = Session::get('status'))
<div class="alert alert-success alert-block">
    <strong>{{$message}}</strong>
</div>
@endif
<form method="post" action="{{route('category.addCategory')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="catname">Category Name</label>
      <input type="text" class="form-control" name="catname" id="catname" aria-describedby="catname" placeholder="Enter Category">
      <small id="catname" class="form-text text-muted">Muste be Uniqe.</small>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Parent </label>
      <select class="form-control" id="parent" name="parent">
        <option value="0">Main</option>
        @foreach ($cats as $cat)
        <option value="{{$cat['id']}}">{{$cat['title']}}</option>
        @endforeach
 
      </select>
    </div>


    <div class="form-group">
      <label for="exampleFormControlSelect1">Parent </label>
      <select class="form-control" id="puplish" required name="puplish">
        <option value="0">اخفاء القسم</option>
        <option value="1">إظهار القسم</option>
      
 
      </select>

    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>



        

@endsection

