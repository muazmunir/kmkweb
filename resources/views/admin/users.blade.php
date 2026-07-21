
@extends('admin.layout')
@section('pageTitle')
المدفوعات

@endsection
@section('formTitle')
المدفوعات

@endsection


@section('pageContent')
 

   

  



 
@endsection
 
 
@section('pageTitlein')
    المتبرعين 
@endsection

@section('payementpagination')
 <tbody>
   @if(!empty($allusers))
   <a href="{{url('admin/users/export/')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">تصدير</a>
<br>
<table class="table text-nowrap text-md-nowrap mb-0">
   <thead>
   <tr>
       <th>id</th> <th> المتبرع</th><th>   البريد الالكتروني </th><th> تاريخ التسجيل  </th>
   </tr>
</thead>

       @foreach($allusers as $user)
           <tr>
               <td>{{$user->id}}</td> <td>{{$user->name}} </td><td>{{$user->email}}</td><td>{{$user->created_at }}</td> 
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
 

@if (count($allusers)>= 15)
{!! $allusers->links() !!}

@endif


@endsection
