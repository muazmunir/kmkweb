
@extends('admin.layout')
@section('pageTitle')
الرسائل

@endsection
 

@section('pageContent')
 

   

  



 
@endsection
 
 
@section('pageTitlein')
الرسائل 
@endsection

@section('payementpagination')
     
<tbody>
   @if(!empty($messages))
   
<table class="table text-nowrap text-md-nowrap mb-0">
   <thead>
   <tr>
       <th>id</th> <th> الأسم</th><th>   البريد الالكتروني </th><th> تاريخ الرسالة  </th><th>  الهاتف    </th><th>    الرسالة  </th>
   </tr>
</thead>

       @foreach($messages as $message)
           <tr>
               <td>{{$message->id}}</td> <td>{{$message->name}} </td><td>{{$message->email}}</td><td>{{$message->created_at }}</td>
                <td>{{$message->phone }}</td> <td>{{$message->message }}</td> 
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
 

@if (count($messages)>= 15)
{!! $messages->links() !!}

@endif


@endsection
