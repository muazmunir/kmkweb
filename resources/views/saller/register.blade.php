@extends('admin.layout')
@section('pageTitle')
انشاء مسوق

@endsection
@section('formTitle')
بيانات المسوق

@endsection


@section('pageContent')
                            
                            <form action="{{route('saller.create')}}" class="d-block" method="post">
                                @csrf
                                @if (Session::has('error'))
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>{{Session::get('error')}}</strong> 
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                  </div>
                                @endif

                                @if ($message = Session::get('status'))
                                <div class="alert alert-success alert-block">
                                    <strong>{{$message}}</strong>
                                </div>
                                @endif

                                <div class="form-group icon_parent">
                                    <label for="uname">Username</label>
                         <input id="name" type="text" class="form-control"   required name="name"   autofocus placeholder="الاسم">
                                    
                                    <span class="icon_soon_bottom_right"><i class="fas fa-user"></i></span>
                                </div>
                                
                                <div class="form-group icon_parent">
                                    <label for="uname">Phone</label>
                         <input id="phone" type="text" class="form-control"   required name="phone"   autofocus placeholder="الهاتف">
                                    
                                    <span class="icon_soon_bottom_right"><i class="fas fa-user"></i></span>
                                </div>
                                
                                
                  <div class="form-group icon_parent">
                                    <label for="email">E-mail</label>
             <input id="email" type="email" class="form-control" name="email" value=" " required  placeholder="  البريد الالكتروني  ">
    
                                    
                                    <span class="icon_soon_bottom_right"><i class="fas fa-envelope"></i></span>
                                </div>
                                <div class="form-group icon_parent">
                                    <label for="password">Password</label>
                                    <input id="password" type="password" class="form-control" name="password" required   placeholder="الرقم السري">
    
                                     
                                    <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>
                                </div>
                                <div class="form-group icon_parent">
                                    <label for="rtpassword">Re-type Password</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required   placeholder="   اعادة الرقم السري">
                                    <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>
                                </div>
                                <div class="form-group">
                                     <button type="submit" class="btn btn-blue"> إنشاء </button>
                                </div>
                            </form> 
                            @endsection
                             