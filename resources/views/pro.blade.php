
<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> @yield('pageTitle')       </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets2/images/favicons/apple-touch-icon.png')}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets2/images/favicons/favicon-32x32.png')}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets2/images/favicons/favicon-16x16.png')}}" />
    <link rel="manifest" href="{{asset('assets2/images/favicons/site.webmanifest')}}"  />
    <meta name="description" content="Crsine HTML Template For Car Services" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets2/vendors/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets2/vendors/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets2/vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets2/vendors/jarallax/jarallax.css')}}" />
    <link rel="stylesheet" href="{{asset('assets2/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('assets2/vendors/nouislider/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets2/vendors/nouislider/nouislider.pips.css')}}" />
    <link rel="stylesheet" href="{{asset('assets2/vendors/odometer/odometer.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets2/vendors/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets2/vendors/halpes-icons/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/vendors/tiny-slider/tiny-slider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets2/vendors/reey-font/stylesheet.css')}}" />
    <link rel="stylesheet" href="{{asset('assets2/vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets2/vendors/owl-carousel/owl.theme.default.min.css')}}" />
    <!-- test -->

    <!-- template styles -->
    <link rel="stylesheet" href="{{asset('assets2/css/halpes.css')}}" />
    <link rel="stylesheet" href="{{asset('assets2/css/halpes-responsive.css')}}" />
    <link rel="stylesheet" href="{{asset('assets2/css/custom.css')}}" />

</head>

<body>


  @if ($message = Session::get('success'))
  <div class="alert alert-success alert-block">
      <strong>{{$message}}</strong>
  </div>
  @endif
<!-- /.stricky-header -->
@include('tkafol.header')
<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->
<!-- new -->
<section class="page-header">
    <div class="page-header__bg"
        style="background-image: url(assets2/images/backgrounds/page-header-bg-1-1.jpg);"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2>المشروعات</h2>
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="/main">الرئيسية</a></li>
            <li class="color-thm-gray">/</li>
            <li><span>المشروعات</span></li>
        </ul>
    </div>
</section>



  <!--Causes One Start-->
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
                        <div class="causes-one__goals causes-chex">
                          @if ($product->id > 2)
                          <div class="form-check">
                            <table class="table">
                              <tr>
                               <select class="form-select" aria-label="Default select example">
                                  <option value="1">صدقة</option>
                                  <option value="2">زكاة</option>
                                </select>

                            </table>


                              </div>
                              @endif

                          </div>
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
                          <input class="btn btn-dark" type="button"   id="minus" value="-" onClick="textb{{$product->id}}.value = (textb{{$product->id}}.value / 2)">
                          {{-- <button class="btn btn-default btn-info btn-numz" data-dir="dwn">-</button> --}}
                        </span>
                        <input type="text" class="form-control text-center"  name="quantity"   id="textb{{$product->id}}" value="{{$product->price }}" min="1" >
                        <span class="input-group-btn">
                          <input class="btn btn-primary" type="button" value="+" onClick="textb{{$product->id}}.value = (+textb{{$product->id}}.value * 2)">
                          {{-- <button type="button" class="btn btn-default btn-info btn-numz" onclick="increz{{$product->id}}()" >+</button> --}}
                          {{-- <button class="btn btn-default btn-info btn-numz" data-dir="up">+</button> --}}
                        </span>
                      </div>
                      <div class="causes-one__act">


                            {{-- <input type="hidden" value="1" class="form-control text-center"  name="quantity"> --}}
                            {{-- <input type="hidden" class="form-control text-center"  name="quantity" value="1" min="1" max="40"> --}}
                            <button  type="submit" name="fast" class="btn but1  btn-md active" form="myform{{ $product->id }}" value="Submit" >  تبرع الأن   </button>
                            <button  type="submit"  name="addcart" class="btn but2 btn-md active" form="myform{{ $product->id }}" value="Submit" > إضافة للسلة </button>
                        </form>                       </div>
                    </div>
                </div>
            </div>

@endforeach









        </div>
        <div class="row text-center contentWrapper">
          <nav aria-label="Page navigation example">
            {!! $products->links() !!}
          </nav>
        </div>
    </div>
</section>
<!--Causes One End-->






                @include('tkafol.footer')
                <!--Site Footer One End-->



                    </div><!-- /.page-wrapper -->


                    <div class="mobile-nav__wrapper">
                        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
                        <!-- /.mobile-nav__overlay -->
                        <div class="mobile-nav__content">
                            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

                            <div class="logo-box">
                                <a href="index.html" aria-label="logo image"><img src="assets2/images/resources/logo-1.svg" width="155"
                                        alt="" /></a>
                            </div>
                            <!-- /.logo-box -->
                            <div class="mobile-nav__container"></div>
                            <!-- /.mobile-nav__container -->

                            <ul class="mobile-nav__contact list-unstyled">
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    <a href="mailto:info@khairkw.com">info@khairkw.com</a>
                                </li>
                                <li>
                                    <i class="fa fa-phone-alt"></i>
                                    <a href="tel:94113411">94 11 34 11</a>
                                </li>
                            </ul><!-- /.mobile-nav__contact -->
                            <div class="mobile-nav__top">
                                <div class="mobile-nav__social">
                                    <a href="#" class="fab fa-twitter"></a>
                                    <a href="#" class="fab fa-facebook-square"></a>
                                    <a href="#" class="fab fa-pinterest-p"></a>
                                    <a href="#" class="fab fa-instagram"></a>
                                </div><!-- /.mobile-nav__social -->
                            </div><!-- /.mobile-nav__top -->



                        </div>
                        <!-- /.mobile-nav__content -->
                    </div>
                    <!-- /.mobile-nav__wrapper -->
                    <div class="search-popup">
                        <div class="search-popup__overlay search-toggler"></div>
                        <!-- /.search-popup__overlay -->
                        <div class="search-popup__content">

                            <form action="#">
                                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                                <input type="text" id="search" placeholder="Search Here..." />
                                <button type="submit" aria-label="search submit" class="thm-btn">
                                    <i class="icon-magnifying-glass"></i>
                                </button>
                            </form>
                        </div>
                        <!-- /.search-popup__content -->
                    </div>
                    <!-- /.search-popup -->
                    <!-- test popup -->
                    <!-- Popup itself -->
                          <div id="test-popup" class="white-popup mfp-hide">
                            <div class="wrapper">

                              <div class="buttonWrapper">
                                <button class="tab-button active" style="border-top-left-radius: 10px;" data-id="home">صدقـــة</button>
                                <button class="tab-button" data-id="about">زكـــاة</button>

                              </div>
                              <div class="contentWrapper">
                                <div class="content tabz-home active" id="home">
                                  <div class="causes-one__selectz noback">
                                      <select class="form-control">
                                        <option>زكــاة مالك 2.5% </option>
                                      </select>
                                  </div>
                                  <div class="causes-one__donaz noback">
                                    <a href="#" class="btn rigo   btn-md active" role="button" aria-pressed="true">10 د.ك</a>
                                    <a href="#" class="btn rigo   btn-md active" role="button" aria-pressed="true">50 د.ك</a>
                                    <a href="#" class="btn  rigo  btn-md active" role="button" aria-pressed="true">100 د.ك</a>
                                    <a href="#" class="btn  rigo  btn-md active" role="button" aria-pressed="true">500 د.ك</a>
                                  </div>
                                  <div class="causes-one__no noback nopad">
                                    <div class="input-group number-spinner">
                                      <span class="input-group-btn data-dwn">
                                        <button class="btn btn-default btn-info btn-numz" data-dir="dwn">-</button>
                                      </span>
                                      <input type="text" class="form-control text-center" value="1" min="-10" max="40">
                                      <span class="input-group-btn data-up">
                                        <button class="btn btn-default btn-info btn-numz" data-dir="up">+</button>
                                      </span>
                                    </div>
                                    <div class="causes-one__act">
                                        <a href="#" class="btn but1  btn-md active" role="button">التبرع السريع</a>
                                          <a href="#" class="btn but2 btn-md active" role="button" >أضف إلي السلة</a>
                                    </div>
                                  </div>

                              </div>
                                <div class="content" id="about">
                                  <div class="causes-one__selectz noback">
                                      <select class="form-control">
                                        <option>زكــاة مالك 2.5% </option>
                                      </select>
                                  </div>
                                  <div class="causes-one__donaz noback">
                                    <a href="#" class="btn rigo   btn-md active" role="button" aria-pressed="true">10 د.ك</a>
                                    <a href="#" class="btn rigo   btn-md active" role="button" aria-pressed="true">50 د.ك</a>
                                    <a href="#" class="btn  rigo  btn-md active" role="button" aria-pressed="true">100 د.ك</a>
                                    <a href="#" class="btn  rigo  btn-md active" role="button" aria-pressed="true">500 د.ك</a>
                                  </div>

                              </div>
                            </div>

                          </div>
                    <!-- end of test popup -->


                    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>




                    <script src="{{asset('assets2/vendors/jquery/jquery-3.5.1.min.js')}}"></script>
                    <script src="{{asset('assets2/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
                    <script src="{{asset('assets2/vendors/jarallax/jarallax.min.js')}}"></script>
                    <script src="{{asset('assets2/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>
                    <script src="{{asset('assets2/vendors/jquery-appear/jquery.appear.min.js')}}"></script>
                    <script src="{{asset('assets2/vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}"></script>
                    <script src="{{asset('assets2/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>
                    <script src="{{asset('assets2/vendors/jquery-validate/jquery.validate.min.js')}}"></script>
                    <script src="{{asset('assets2/vendors/nouislider/nouislider.min.js')}}"></script>
                    <script src="{{asset('assets2/vendors/odometer/odometer.min.js')}}"></script>
                    <script src="{{asset('assets2/vendors/swiper/swiper.min.js')}}"></script>
                    <script src="{{asset('assets2/vendors/tiny-slider/tiny-slider.min.js')}}"></script>
                    <script src="{{asset('assets2/vendors/wnumb/wNumb.min.js')}}"></script>
                    <script src="{{asset('assets2/vendors/wow/wow.js')}}"></script>
                    <script src="{{asset('assets2/vendors/isotope/isotope.js')}}"></script>
                    <script src="{{asset('assets2/vendors/countdown/countdown.min.js')}}"></script>
                    <script src="{{asset('assets2/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
                    <!-- template js -->
                    <script src="{{asset('assets2/js/halpes.js')}}"></script>
                    <script src="{{asset('assets2/js/custom.js')}}"></script>
                    <script>
                    const tabs = document.querySelector(".wrapper");
                    const tabButton = document.querySelectorAll(".tab-button");
                    const contents = document.querySelectorAll(".content");

                    tabs.onclick = e => {
                      const id = e.target.dataset.id;
                      if (id) {
                        tabButton.forEach(btn => {
                          btn.classList.remove("active");
                        });
                        e.target.classList.add("active");

                        contents.forEach(content => {
                          content.classList.remove("active");
                        });
                        const element = document.getElementById(id);
                        element.classList.add("active");
                      }
                    }
                    </script>
                </body>

                </html>
