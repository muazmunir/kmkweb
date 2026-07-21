
@extends('admin.layout')
@section('pageTitle')
    أقسام المشاريع
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

@if ($message = Session::get('status'))
<div class="alert alert-success alert-block">
    <strong>{{$message}}</strong>
</div>
@endif
<form method="post" action="{{route('Productupdatecategory.saveUpdatecategory',$cat['id'])}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="catname">Category Name</label>
      <input type="text" class="form-control" name="catname" id="catname" aria-describedby="catname" value="{{$cat['title']}}" placeholder="Enter Category">
      <small id="catname" class="form-text text-muted">Muste be Uniqe.</small>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Parent </label>
      <select class="form-control" id="parent" name="parent">
        <option  value="{{$cat['id']}}">  {{$cat['title']}} </option>
        <option value="0">Main</option>
        @foreach ($cats as $caty)
        <option value="{{$caty['id']}}">{{$caty['title']}}</option>
        @endforeach
 
      </select>
    </div>
    @if (   $cat['puplish']  == 0 )
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="puplish" name="puplish" value="1">
      <label class="form-check-label" for="exampleCheck1">Puplish Category</label>
    </div>
        
    @else
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="puplish" name="puplish" value="0">
      <label class="form-check-label" for="exampleCheck1">Hide Category</label>
    </div> 
 
    @endif
    
    
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection

