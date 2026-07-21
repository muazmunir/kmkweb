@extends('saller.layout')
@section('pageTitle')
المدفوعات

@endsection
@section('formTitle')
المدفوعات

@endsection


@section('pageContent')
 
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

<form action="{{route('payementsSerachSaller.search')}}" method="post">
    @csrf
    <div class="form-row">

        <div class="col">   
              
        <input type="date" class="date form-control" id="from"  name="from" placeholder="from">
      </div>
      <div class="col">   
        <input type="date" class="date form-control" id="to"   name="to"placeholder="to">
      </div>
    
  
      <div class="col">      
        <select id="project"  name="project" class="form-control">
            <option value="">المشروع</option>
            @foreach($products as $product)
            <option  value="{{$product->id}}"> {{$product->name}} </option>

            @endforeach
        
          
                </select>
      </div>
     
 
      <button type="submit" class="btn btn-primary">  بحث </button>

    </div>
   
  </form>
  <script type="text/javascript">

    $('.date').datepicker({  

       format: 'yyyy-mm-dd'

     });  

</script> 
<script type="text/javascript">

    $('.to').datepicker({  

       format: 'mm-dd-yyyy'

     });  

</script> 



 
@endsection
 
 
@section('payementpagination')
     

   @if(!empty($payments))
   
<table class="table text-nowrap text-md-nowrap mb-0">
   <thead>
   <tr>
       <th>id</th> <th>product name</th><th>product id</th><th>paymethod</th><th>value</th><th>ref</th><th>result</th>
       <th>created_at</th>
   </tr>
</thead>

       @foreach($payments as $payment)
           <tr>
               <td>{{$payment->id}}</td> <td>{{$payment->productname}} </td><td>{{$payment->product_id}}</td>
               <td>{{$payment->paymethod }}</td><td>{{$payment->value}}</td><td>{{$payment->ref}}</td><td>{{$payment->result}}</td>
               <td>{{$payment->created_at }} </td>
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
