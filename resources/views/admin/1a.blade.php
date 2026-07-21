@extends('admin.layout')
@section('pageTitle')
    أقسام الموضوعات
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

        
         

@endsection

{{-- 

<table class="table text-nowrap text-md-nowrap mb-0">
    <thead>
        <tr>
            <th>Name</th>
             <th width="">Action</th>
        </tr>
    </thead>
    <tbody>
        @if(!empty($cats) && $cats->count())
            @foreach($cats as $cat)
                <tr>
                    <td>
                      <h1>  {{$cat['parent']}}  {{$cat['title']}}</h1>

                      
                      {{-- {{$cat['parent']}}  {{$cat['title']}} --}}
                    </td>
                  
                    <td>
                      <a href="{{route('category.updatecategory',$cat['id'])}}" class="btn btn-success">تعديل</a>
                     <br>
                      <form method="post" action="{{route('category.deletecategory',$cat['id'])}}">
                        @csrf
                    @if ($cat['deleted'] == 0)
                    <input type="hidden" name="delete" value="1">
                    <button type="submit" class="btn btn-danger"> حذف  </button><br>
                    @else
                    <input type="hidden" name="delete" value="0">
                    <button type="submit" class="btn btn-warning"> إستعادة  </button><br>
                    
                        
                    @endif
                    
                        
                      </form>
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



</div>
<div class="btn-group me-2 mb-1" role="group" aria-label="Second group">
{!! $cats->links() !!}
</div>   --}}