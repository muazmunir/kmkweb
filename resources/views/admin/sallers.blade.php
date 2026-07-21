

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

<table class="table text-nowrap text-md-nowrap mb-0">
   <thead>
   <tr>
       <th>id</th> <th> المتبرع</th><th>   البريد الالكتروني </th><th> تاريخ التسجيل  </th><th> الروابط</th><th> الحالة</th>
   </tr>
</thead>

       @foreach($allusers as $user)
           <tr>
               <td>{{$user->id}}</td> <td>{{$user->name}} </td><td>{{$user->email}}</td><td>{{$user->created_at }}</td>
               <th>


                <form action="{{route('admin.adminautologin')}}" method="post">
                    @csrf
                 <input name="id" type="hidden" value="{{$user->id}}" >
                <button type="submit" class="btn btn-success"> الروابط </button>

                    </form>

               </th>
               <td>

                @if ($user->status == 0 )
                    <form action="{{route('saller.stopsallers')}}" method="post">
                    @csrf
                <input name="status" type="hidden" value="1" >
                <input name="id" type="hidden" value="{{$user->id}}" >
                <button type="submit" class="btn btn-success"> إيقاف </button>

                    </form>
                @else
                <form action="{{route('saller.stopsallers')}}" method="post">
                    @csrf
                    <input name="status" type="hidden" value="0" >
                    <input name="id" type="hidden" value="{{$user->id}}" >
                    <button type="submit" class="btn btn-warning"> تنشيط </button>

                </form>
                @endif




            </td>

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


 
 


@endsection
