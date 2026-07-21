@extends('admin.layout')
@section('pageTitle')
المشاريع@endsection
@section('formTitle')
عرض المشاريع
@endsection
@section('pageContent')

@if ($message = Session::get('status'))
<div class="alert alert-success alert-block">
    <strong>{{$message}}</strong>
</div>
@endif
<script>
h1 {
    text-align:center;
}
</script>



        @if(!empty($posts) && $posts->count() )
        <table class="table text-nowrap text-md-nowrap mb-0">
            <thead>
                <tr>
                     <th width="">نوع المشروع </th>
                    <th width="">تعديل</th>
                    <th width="">اضافة مبلغ </th>
                     <th width="">حذف</th>
                     <th>الرابط</th>
                     <th>العنوان</th>
                     <th>مسلسل</th>
                </tr>
            </thead>
            <tbody>
             @foreach($posts as $post)


                <tr>

                    <td>

                        @if ($post['att1'] == 2 )
                        <a href="" class="btn btn-warning bg-warning-gradient warning1">مشروع خاص</a>

                        @else
                        <a href="" class="btn btn-warning bg-warning-gradient warning1">مشروع عام </a>

                        @endif


                      </td>
                      <td><a href="{{route('Products.updatePost',$post['id'])}}" class="btn btn-success">تعديل</a> </td>
                      <td><a href="{{route('Products.pay',$post['id'])}}" class="btn btn-success">اضافة مبلغ </a> </td>

                    <td>
                     <form method="post" action="{{route('Products.deletePost',$post['id'])}}">
                    @csrf
                    @if ($post['deleted'] == 0)
                    <input type="hidden" name="delete" value="1">
                    <button type="submit" class="btn btn-danger"> Delete </button><br>
                    @else
                    <input type="hidden" name="delete" value="0">
                    <button type="submit" class="btn btn-warning"> Restore </button><br>
                    @endif
                     </form>
                     </td>
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
                              alert("تم نسخ المشروع رقم  " + copyText.value);
                            }
                            </script>
                        <input type="text" value="{{route('main',$post['id'])}}" id="myInput{{$post['id']}}">

                        <h4>   <button type="button" class="btn btn-primary" onclick="myFunctionCopy{{$post['id']}}()">نسخ الرابط</button> </h4> </td>

                     <td><h4>   {{$post['name']}}</h4> </td>
                      <td> <h4>  {{$post['id']}}  </h4> </td>
                         </tr>
            @endforeach

            <tr>
                <td colspan="10">There are no data.</td>
            </tr>

        </tbody>
        </table>

        <div class="btn-group me-2 mb-1" role="group" aria-label="Second group">
            {!! $posts->links() !!}
            </div>


        @else
            <tr>
                <td colspan="10">There are no data.</td>
            </tr>

        </tbody>
        </table>
        <div class="btn-group me-2 mb-1" role="group" aria-label="Second group">
            {!! $posts->links() !!}
            </div>

        @endif

</div>



@endsection

