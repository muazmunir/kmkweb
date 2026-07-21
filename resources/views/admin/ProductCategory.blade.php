
@extends('admin.layout')
@section('pageTitle')
    أقسام المشاريع
@endsection
 
@section('pageContent')

@if ($message = Session::get('status'))
<div class="alert alert-success alert-block">
    <strong>{{$message}}</strong>
</div>
@endif



<a class="btn btn-success" href="{{route('ProductCategory.ProductCategoryform')}}" role="button">اضافة قسم </a>

           <table class="table text-nowrap text-md-nowrap mb-0">
              <thead>
                  <tr>
                      <th>العنوان</th>
                       <th width="">تعديل</th>
                       <th width="">حذف</th>
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
                                <a href="{{route('ProductCategory.updatecategory',$cat['id'])}}" class="btn btn-success">تعديل</a>
                              </td><td>
                                <form method="post" action="{{route('Productupdatecategory.deletecategory',$cat['id'])}}">
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
      </div>  
         

@endsection

