@section('causes-one')
  <section class="causes-one causes-page">
    <div class="container">
        <div class="row">
            @foreach ($products as $product)



            <div class="col-xl-4 col-lg-6 col-md-6">
                <!--Causes Page Single-->
                <div class="causes-one__single">
                    <div class="causes-one__img">
                        <div class="causes-one__img-box">
                            <img src="{{asset($product->image) }}" alt="">
                            <a href="{{route('main',$product->id)}}">
                                <i class="fa fa-eye"></i>
                            </a>
                        </div>
                        <div class="causes-one__category">
                            <span>{{$product->cateTitle }}</span>
                        </div>
                    </div>
                    <div class="causes-one__content">
                        <h3 class="causes-one__title">
                            <a  href="{{route('main',$product->id)}}">  {{$product->name}}     </a>
                        </h3>

                        @if ($product->target != 0 )
                        <?php  $percentage = ($product->paied / $product->target) *100 ; ?>
                        @if ($percentage <= 100)
                         <div class="causes-one__goals">
                            <p class="text-center">المستهدف <br><span> {{ $product->target }}  </span><span class="cuur">  د.ك </span> </p>
                            <p class="text-center">المدفوع <br><span>  {{ $product->paied }} </span> <span class="cuur">  د.ك </span> </p>
                            <p class="text-center">المتبقي <br><span> {{ $product->target - $product->paied }} </span> <span class="cuur">  د.ك </span> </p>
                        </div>
                        @endif


                        @else
                        <div class="causes-one__goals">
                          <p class="text-center"> <br><span> </span><span class="cuur"> </span> </p>
                          <p class="text-center"> <br><span></span> <span class="cuur"> </span> </p>
                          <p class="text-center"> <br><span>  </span> <span class="cuur"> </span> </p>
                      </div>

                        @endif

                        @if ($product->id > 2)
                        <div class="form-check">
                          <table class="table">
                            <tr>
                                <select class="form-select" aria-label="Default select example">
                                  <option value="1">صدقة</option>
                                  <option value="2">زكاة</option>
                                </select>

                            </tr>

                          </table>


                            </div>
                            @endif
                          </div>



                    @if ($product->target != 0 )
                    <?php  $percentage = ($product->paied / $product->target) *100 ; ?>
                   @if ($percentage <= 100)
                   <div class="causes-one__progress">

                    <div class="bar">
                        <div class="bar-inner count-bar" data-percent="{{$percentage}}%">
                            <div class="count-text">{{$percentage}}%</div>
                        </div>
                    </div>
                </div>
                   @endif
                   @else
                   <div class="causes-one__progress">

                    <div class="bar">
                        <div class="bar-inner count-bar" data-percent="1%">
                            <div class="count-text">1%</div>
                        </div>
                    </div>
                </div>
                    @endif
                    @if ($percentage >= 100)
                    <div class="causes-one__donaz">

                        {{-- <a href="#" class="btn   btn-md active" role="button" aria-pressed="true">10 د.ك</a>
                        <a href="#" class="btn    btn-md active" role="button" aria-pressed="true">50 د.ك</a>
                        <a href="#" class="btn    btn-md active" role="button" aria-pressed="true">100 د.ك</a>
                        <a href="#" class="btn    btn-md active" role="button" aria-pressed="true">500 د.ك</a>
                        <a href="#" class="btn    btn-md active" role="button" aria-pressed="true">1000 د.ك</a> --}}
                      </div>
                    <button  type="submit" class="btn but2 btn-md active"     >   لقد اكتمل المشروع     </button>
                    <div class="causes-one__no">
                        <div class="input-group number-spinner">
                          <span class="input-group-btn">
                            {{-- <button type="button" class="btn btn-default btn-info btn-numz" onclick="decrez{{$product->id}}()" >-</button> --}}
                             {{-- <button class="btn btn-default btn-info btn-numz" data-dir="dwn">-</button> --}}
                          </span>
                           <span class="input-group-btn">


                            {{-- <button type="button" class="btn btn-default btn-info btn-numz" onclick="increz{{$product->id}}()" >+</button> --}}
                            {{-- <button class="btn btn-default btn-info btn-numz" data-dir="up">+</button> --}}
                          </span>
                        </div>
                        <div class="causes-one__act">

                    @else

                    <script>
                      function myFunction{{$product->id}}(x){
                          if(document.getElementById("textb{{$product->id}}").value != x){
                            document.getElementById("textb{{$product->id}}").value = x
                          }
                        }
                      </script>
                    <div class="causes-one__donaz">
                      <button type="button" class="btn btn-outline-primary" onclick="myFunction{{$product->id}}(10)" >10 د.ك</button>
                      <button type="button" class="btn btn-outline-primary" onclick="myFunction{{$product->id}}(50)" >50 د.ك</button>
                      <button type="button" class="btn btn-outline-primary" onclick="myFunction{{$product->id}}(100)" >100 د.ك</button>
                      <button type="button" class="btn btn-outline-primary" onclick="myFunction{{$product->id}}(500)" >500 د.ك</button>
                      <button type="button" class="btn btn-outline-primary" onclick="myFunction{{$product->id}}(1000)" >1000 د.ك</button>

                      {{-- <a href="#" class="btn   btn-md active" role="button" aria-pressed="true">10 د.ك</a>
                      <a href="#" class="btn    btn-md active" role="button" aria-pressed="true">50 د.ك</a>
                      <a href="#" class="btn    btn-md active" role="button" aria-pressed="true">100 د.ك</a>
                      <a href="#" class="btn    btn-md active" role="button" aria-pressed="true">500 د.ك</a>
                      <a href="#" class="btn    btn-md active" role="button" aria-pressed="true">1000 د.ك</a> --}}
                    </div>
                    <form action="{{ route('cart.store') }}" method="POST" id="myform{{ $product->id }}" >
                      @csrf
                      <input type="hidden" value="{{ $product->id }}" name="id">
                      <input type="hidden" value="{{ $product->name }}" name="name">
                      <input type="hidden" value="{{ $product->price}}" name="price">
                      <input type="hidden" value="{{ $product->image }}"  name="image">
                    <div class="causes-one__no">
                      <div class="input-group number-spinner">
                        <span class="input-group-btn">
                          {{-- <button type="button" class="btn btn-default btn-info btn-numz" onclick="decrez{{$product->id}}()" >-</button> --}}
                          <input class="btn btn-dark" type="button"   id="minus" value="-" onClick="textb{{$product->id}}.value = (textb{{$product->id}}.value / 2 )">
                          {{-- <button class="btn btn-default btn-info btn-numz" data-dir="dwn">-</button> --}}
                        </span>
                        <input type="text" class="form-control text-center"  name="quantity"   id="textb{{$product->id}}" value="{{$product->price }}" min="1" >
                        <span class="input-group-btn">
                          <input class="btn btn-primary" type="button" value="+" onClick="textb{{$product->id}}.value = (+textb{{$product->id}}.value*2)">


                          {{-- <button type="button" class="btn btn-default btn-info btn-numz" onclick="increz{{$product->id}}()" >+</button> --}}
                          {{-- <button class="btn btn-default btn-info btn-numz" data-dir="up">+</button> --}}
                        </span>
                      </div>
                      <div class="causes-one__act">


                            {{-- <input type="hidden" value="1" class="form-control text-center"  name="quantity"> --}}
                            {{-- <input type="hidden" class="form-control text-center"  name="quantity" value="1" min="1" max="40"> --}}
                            <button  type="submit" name="fast" class="btn but2 btn-md active" form="myform{{ $product->id }}" value="Submit" >  تبرع الأن   </button>
                            <button  type="submit"  name="addcart" class="btn but2 btn-md active" form="myform{{ $product->id }}" value="Submit" > إضافة للسلة </button>
                        </form>
                        @endif
                                            </div>

                    </div>
                </div>
            </div>

@endforeach









        </div>

    </div>
</section>


@show
