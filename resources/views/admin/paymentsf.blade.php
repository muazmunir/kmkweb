@extends('admin.layout')
@section('pageTitle')
المدفوعات

@endsection
@section('formTitle')
بحث متخصص

@endsection


@section('pageContent')
<form action="{{route('paymnts.search')}}" method="post">
    @csrf
    <div class="form-row">

        <div class="col">   
              
        <input type="text" class="form-control" id="from"  name="from" placeholder="from">
      </div>
      <div class="col">   
        <input type="text" class="form-control" id="to"   name="to"placeholder="to">
      </div>
    
  
      <div class="col">      
        <select id="project"  name="project" class="form-control">
            <option value="">المشروع</option>
            @foreach($products as $product)
            <option  value="{{$product->id}}"> {{$product->name}} </option>

            @endforeach
        
          
                </select>
      </div>
      <div class="col">      
        <select id="saller" name="saller" class="form-control">
            <option value="">المندوب</option>
            @foreach($sallers as $saller)
            <option  value="{{$saller->id}}"> {{$saller->name}} </option>

            @endforeach
                </select>
      </div>
 
      <button type="submit" class="btn btn-primary">  بحث </button>

    </div>
   
  </form>
 
@endsection
 
 
@section('payementpagination')
     

   @if(!empty($payments))
 


<table class="table text-nowrap text-md-nowrap mb-0">
   <thead>
   <tr>
       <th>id</th> <th>product name</th><th>product id</th><th>sallername</th><th>paymethod</th><th>value</th><th>ref</th><th>result</th>
       <th>created_at</th><th>username</th> 
   </tr>
</thead>

       @foreach($payments as $payment)
           <tr>
               <td>{{$payment->id}}</td> <td>{{$payment->productname}} </td><td>{{$payment->product_id}}</td><td>{{$payment->sallername }}</td><td>{{$payment->paymetdod }}</td><td>{{$payment->value}}</td><td>{{$payment->ref}}</td><td>{{$payment->result}}</td>
               <td>{{$payment->created_at }} </td><td>{{$payment->username }}</td>
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
<p > {!! $payments->links() !!}</p>

@endsection
