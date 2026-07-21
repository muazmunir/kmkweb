@extends('admin.layout')
@section('pageTitle')
المدفوعات

@endsection
@section('formTitle')
بحث متخصص

@endsection


@section('pageContent')


<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>


<form action="{{route('paymnts.search')}}" method="post">
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
      <div class="col">      
        <select id="saller" name="saller" class="form-control">
            <option value="">المندوب</option>
            @foreach($sallers as $saller)
            <option  value="{{$saller->id}}"> {{$saller->name}} </option>

            @endforeach
                </select>
      </div>
        <div class="col">      
        <select id="ptype" name="ptype" class="form-control">
            <option value="">نظام الدفع </option>
            <option  value="Knet">كي نت </option>
            <option  value="cash">نقدي  </option>

            
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
 
   <a href="{{url('admin/payments/export/')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">تصدير</a>


<table class="table text-nowrap text-md-nowrap mb-0">
   <thead>
   <tr>
       <th>المعرف</th> <th>المشروع</th><th>كود</th><th>البائع</th><th>الوسيلة</th><th>القيمة</th><th>مرجع</th><th>النتيجة</th>
       <th>تاريخ</th><th>المستخدم</th><th>الهاتف</th> 
   </tr>
</thead>

       @foreach($payments as $payment)
           <tr>
               <td>{{$payment->id}}</td> <td>{{$payment->productname}} </td><td>{{$payment->product_id}}</td><td>{{$payment->sallername }}</td><td>{{$payment->paymethod }}</td><td>{{$payment->value}}</td><td>{{$payment->ref}}</td><td>{{$payment->result}}</td>
               <td>{{$payment->created_at }} </td><td>{{$payment->username }}</td><td>{{$payment->phone }}</td>
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
