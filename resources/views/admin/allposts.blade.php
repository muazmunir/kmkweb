@extends('admin.layout')
@section('pageTitle')
      الموضوعات
@endsection
@section('formTitle')
عرض الموضوعات
@endsection
@section('pageContent')

{{-- @foreach ($posts as $post)
  <a href="{{route('allposts.updatePost',$post['id'])}}"> <h1>  {{$post['category_id']}}  {{$post['title']}}</h1><br></a>
        @endforeach
 --}}




<table class="table text-nowrap text-md-nowrap mb-0">
    <thead>
        <tr>
            <th>المسمي</th>
             <th width="">تعديل</th>
             <th width="">حذف</th>
        </tr>
    </thead>
    <tbody>
        @if(!empty($posts) && $posts->count())
            @foreach($posts as $post)
                <tr>
                    <td>
                          <script>
                            function myFunctionCopy{{$post['id']}}() {
                              // Get the text field
                              var copyText = document.getElementById("myInput{{$post['id']}}");
                            
                              // Select the text field
                              copyText.select();
                              copyText.setSelectionRange(0, 99999); // For mobile devices
                            
                              // Copy the text inside the text field
                              navigator.clipboard.writeText(copyText.value);
                              
                              // Alert the copied text
                              alert("تم نسخ الموضوع رقم  " + copyText.value);
                            }
                            </script>
                        <input type="text" value="{{route('post',$post['id'])}}" id="myInput{{$post['id']}}">          

                        <h4>   <button type="button" class="btn btn-primary" onclick="myFunctionCopy{{$post['id']}}()"> {{$post['title']}}  </button> </h4>
                        
                        
                     

                      
                      {{-- {{$cat['parent']}}  {{$cat['title']}} --}}
                    </td>
                  
                    <td>
                      <a href="{{route('allposts.updatePost',$post['id'])}}" class="btn btn-success">تعديل</a>
                    </td>
                    <td>
                     <form method="post" action="{{route('allposts.deletePost',$post['id'])}}">
                        @csrf
                    @if ($post['deleted'] == 0)
                    <input type="hidden" name="delete" value="1">
                    <button type="submit" class="btn btn-danger"> حذف </button><br>
                    @else
                    <input type="hidden" name="delete" value="0">
                    <button type="submit" class="btn btn-warning"> إستعادة </button><br>
                    
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
{!! $posts->links() !!}
</div>  


@endsection

