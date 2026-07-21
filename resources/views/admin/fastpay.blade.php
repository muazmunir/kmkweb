@extends('admin.layout')
@section('pageTitle')
   التبرع اليدوي
@endsection
@section('formTitle')
    بيانات السند
@endsection
@section('pageContent')

@if ($message = Session::get('status'))
<div class="alert alert-success alert-block">
    <strong>{{$message}}</strong>
</div>
@endif


<script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>


<form method="post" action="{{route('Product.pay',$post['id'])}}" enctype="multipart/form-data">
  @csrf
  <input type="hidden"   name="id" id="id" value="{{$post['id']}}">

  <div class="form-group">
    <label for="title">Posts Title</label>
    <input type="text" class="form-control" name="title" id="title" aria-describedby="title" value="{{$post['id']}}"  placeholder="{{$post['name']}}" disabled>
    <small id="catname" class="form-text text-muted">  .</small>
  </div>
  <div class="form-group">
    <label for="title">  المبلغ</label>
    <input type="number" class="form-control" name="value" id="value" aria-describedby="title"    placeholder="{{$post['paied']}}" disabled>>
    <small id="catname" class="form-text text-muted">  .</small>
  </div>

  <div class="form-group">
    <label for="title">  المبلغ</label>
    <input type="number" class="form-control" name="newvalue" id="newvalue" aria-describedby="title"   placeholder="مبلغ التبرع" >
    <small id="catname" class="form-text text-muted">  .</small>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1"> نوع الدفع  </label>
    <select class="form-control" id="paymethod" required name="paymethod">
      <option value="cash">  نقدي </option>
      <option value="knet"> كي نت   </option>
    </select>
  </div>
    </select>

  </div>


  <button type="submit" class="btn btn-primary">دفع </button>
</form>


@endsection
