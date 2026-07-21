@section('causes-details')
       <!--Page Header Start-->
       <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{asset('assets2/images/backgrounds/page-header-bg-1-1.jpg')}});"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2>{{ $product->name }}</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="">الرئيسية</a></li>
                <li class="color-thm-gray">/</li>
                <li><span>تفاصيل المشروع</span></li>
            </ul>
        </div>
    </section>
    <!--Page Header End-->

    <!--Causes Details Start-->
    <section class="causes-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 ">
                    <div class="causes-details__left-bar">
                        <div class="causes-details__img">
                            <div class="causes-details__img-box">
                                <img src="{{asset($product->image) }}" alt="">
                                <div class="causes-details__category">
                                    <span> {{$getcat->title}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="causes-details__share">

                            <div class="causes-details__share-social">
                                <div class="shar-tit">
                                  شــارك المشروع <i class="fas fa-arrow-circle-left"></i>
                                </div>
                                <a href="http://twitter.com/share?text={{route('main',$product->title)}}&url{{route('main',$product->id)}}" class="fnod"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{route('main',$product->id)}}" target="_blank"><i class="fab fa-facebook-square"></i></a>
                                <a  href="whatsapp://send?text={{route('main',$product->id)}}"       data-action="share/whatsapp/share"
                                target="_blank"><i class="fab fa-whatsapp"></i></a>
                                <a href="instagram.com"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-1">
                    <div class="causes-details__right">
                      <div class="causes-details__text-box">
                          <h3>  {{ $product->name }}</h3>
                          {{-- <span class="causes-details__text-1">نستهدف عدد 100عملية صغيرة  </span>
                          <ul>
                            <li>عمليات جيوب أنفية</li>
                            <li> عمليات اللوز</li>
                          </ul>
                          <span class="causes-details__text-1">تكلفة العملية الواحدة 45 د.ك عطاؤكم  بلسم لهم  </span> --}}
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
                        <div class="bar-inner count-bar" data-percent="-1%">
                            <div class="count-text"></div>
                        </div>
                    </div>
                </div>
                    @endif
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
                          <div class="causes-one__goals causes-chex">
                            @if ($product->id > 2)
                            <div class="form-check">
                              <table class="table">
                                <tr>
                                  <td align="center">زكاة</td>
                                  <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
                                  <td>             </td>
                                  <td  align="center" >صدقة</td>
                                  <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
                                </tr>

                              </table>


                                </div>
                            @endif
                          </div>
                          </div>
                          <?php 
                    $percentage = 0 ;
                    if($product->target > 0 ){
                      $percentage = 0 ? 0 :(($product->paied / $product->target) *100) ;

                    }
                      ?>

                          @if ($percentage >= 100)
                          <form action="{{ route('cart.store') }}" method="POST"  >
                            <script>
                              function myFunction{{$product->id}}(x){
                                  if(document.getElementById("textb{{$product->id}}").value != x){
                                    document.getElementById("textb{{$product->id}}").value = x
                                  }
                                }
                              </script>


                          <div class="causes-one__donaz">


                          </div>
                          <div class="causes-one__no">
                            <div class="input-group number-spinner nu-divo">
                              <span class="input-group-btn">
                                {{-- <button type="button" class="btn btn-default btn-info btn-numz" onclick="decrez{{$product->id}}()" >-</button> --}}
                                 {{-- <button class="btn btn-default btn-info btn-numz" data-dir="dwn">-</button> --}}
                              </span>
                               <button  type="submit"   class="btn but2 btn-md active"   >   لقد اكتمل المشروع    </button>

                              <span class="input-group-btn">
                                 {{-- <button type="button" class="btn btn-default btn-info btn-numz" onclick="increz{{$product->id}}()" >+</button> --}}
                                {{-- <button class="btn btn-default btn-info btn-numz" data-dir="up">+</button> --}}
                              </span>
                            </div>
                            <div class="causes-one__act">





                            </div>
                          @else
                          <form action="{{ route('cart.store') }}" method="POST"  >
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

                          </div>
                          <div class="causes-one__no">
                            <div class="input-group number-spinner nu-divo">
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

                              <form action="{{ route('cart.store') }}" method="POST"  >
                                @csrf
                                <input type="hidden" value="{{ $product->id }}" name="id">
                                <input type="hidden" value="{{ $product->name }}" name="name">
                                <input type="hidden" value="{{ $product->price}}" name="price">
                                <input type="hidden" value="{{ $product->image }}"  name="image">
                                {{-- <input type="hidden" value="1" class="form-control text-center"  name="quantity"> --}}
                                {{-- <input type="hidden"  id="count{{$product->id }}"  name="quantity" value="5" min="1" max="40"> --}}
                                <button  type="submit" name="fast" class="btn but2 btn-md active"  value="Submit" >  تبرع الأن   </button>
                                <button  type="submit"  name="addcart" class="btn but2 btn-md active"  value="Submit" > إضافة للسلة </button>

                            </form>



                            </div>
                            @endif
                          </div>
                      </div>

                    </div>
                </div>
                <div class=" col-md-12 col-sm-12 ">
                  <div class="section-title text-left">
                    <h3 class="about-page__right-title">وصف المشروع</h3>
                  </div>
                  <p align="center">


                 {{-- // @yield('project_details') --}}

                 {!!html_entity_decode($product->description)!!}

                  </p>
<p align="center">
<button id="copy">
  {!! QrCode::size(200)->generate(route('main',$product->id)) !!}
</button>
</p>

<script>
const img =  {!! QrCode::size(200)->generate(route('main',$product->id)) !!};
const copyBtn = document.querySelector("#copy");

copyBtn.onclick = e => {
    const canvas = document.createElement("canvas");
    canvas.width = img.width;
    canvas.height = img.height;
    canvas.getContext("2d").drawImage(img, 0, 0, img.width, img.height);
    canvas.toBlob((blob) => {
      navigator.clipboard.write([
          new ClipboardItem({ "image/png": blob })
      ]);
    }, "image/png");
};
</script>
{{-- {!! QrCode::size(300)->backgroundColor(255,90,0)->generate(route('main',$product->id)) !!} --}}

                </div>
            </div>
        </div>
        </div>
    </section>
    @show
