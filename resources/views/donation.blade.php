 
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>التبرع السريع      </title>
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
	<link rel="stylesheet" href="{{asset('assets2/css/tabo.css')}}" />
	<link rel="stylesheet" href="{{asset('assets2/css/login.css')}}" />
</head>

<body>


  @if ($message = Session::get('success'))
  <div class="alert alert-success alert-block">
      <strong>{{$message}}</strong>
  </div>
  @endif
<!-- /.stricky-header -->
@include('tkafol.header')


              
  
 
  
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h5 class="text-center">الرجاء إدخال المعلومات التالية</h5>
   <br /><br />     <form class="donate-page-form" name="apply_donate_form" id="apply_donate_form"
              action="{{ route('cart.store') }}" method="POST" >
          <div class="row" id="donation_form_fields">
              @csrf
<div class="col-md-6">
<div class="form-group col-md-6">
<select name="id" class="selectpicker" required id="id">
<option value="" selected>فئة المشروع</option>
<option value="1"> زكـــاة  </option>
<option value="2"> صدقـــة  </option>
<option value="8">  الغارمين </option>

</select>
<input type="hidden" name="price" value="1">
<input type="hidden" name="name" value="xxx">
</div>
<div class="form-group">
<select name="country" class="selectpicker form-group col-md-6" id="id_country">
<option value="">اختر الدولة</option>

<option value="73">اثيوبيا</option>

<option value="72">استونيا</option>

<option value="71">اريتريا</option>

<option value="70">غينيا الاستوائية</option>

<option value="69">السلفادور</option>

<option value="67">الاكوادور</option>

<option value="66">East Germany</option>

<option value="65">Dronning Maud Land</option>

<option value="64">جمهورية الدومينيك</option>

<option value="63">دومينيكا</option>

<option value="62">جيبوتي</option>

<option value="61">الدانمرك</option>

<option value="59">جمهورية التشيك</option>

<option value="57">كوبا</option>

<option value="56">كرواتيا</option>

<option value="55">كوستاريكا</option>

<option value="54">جزر كوك</option>

<option value="53">جمهورية الكونغو الديمقراطية</option>

<option value="52">الكونغو - برازافيل</option>

<option value="51">جزر القمر</option>

<option value="50">كولومبيا</option>

<option value="49">جزر كوكوس</option>

<option value="48">جزيرة الكريسماس</option>

<option value="46">شيلي</option>

<option value="45">تشاد</option>

<option value="44">جمهورية افريقيا الوسطى</option>

<option value="43">جزر الكايمن</option>

<option value="42">الرأس الأخضر</option>

<option value="41">Canton and Enderbury Islands</option>

<option value="40">كندا</option>

<option value="39">الكاميرون</option>

<option value="38">كمبوديا</option>

<option value="37">بوروندي</option>

<option value="36">بوركينا فاسو</option>

<option value="35">بلغاريا</option>

<option value="34">بروناي</option>

<option value="33">جزر فرجين البريطانية</option>

<option value="32">المحيط الهندي البريطاني</option>

<option value="31">British Antarctic Territory</option>

<option value="30">البرازيل</option>

<option value="29">جزيرة بوفيه</option>

<option value="28">بتسوانا</option>

<option value="27">البوسنة والهرسك</option>

<option value="26">بوليفيا</option>

<option value="25">بوتان</option>

<option value="24">برمودا</option>

<option value="23">بنين</option>

<option value="22">بليز</option>

<option value="21">بلجيكا</option>

<option value="20">روسيا البيضاء</option>

<option value="19">بربادوس</option>

<option value="18">بنجلاديش</option>

<option value="16">الباهاما</option>

<option value="15">أذربيجان</option>

<option value="14">النمسا</option>

<option value="13">أستراليا</option>

<option value="12">آروبا</option>

<option value="11">أرمينيا</option>

<option value="10">الأرجنتين</option>

<option value="9">أنتيجوا وبربودا</option>

<option value="8">القطب الجنوبي</option>

<option value="7">أنجويلا</option>

<option value="6">أنجولا</option>

<option value="5">أندورا</option>

<option value="4">ساموا الأمريكية</option>

<option value="2">ألبانيا</option>

<option value="1">أفغانستان</option>

<option value="68">مصر</option>

<option value="60">ساحل العاج</option>

<option value="58">قبرص</option>

<option value="47">الصين</option>

<option value="17">البحرين</option>

<option value="3">الجزائر</option>

<option value="153">مونتسرات</option>

<option value="121" selected>الكويت</option>

<option value="151">منغوليا</option>

<option value="150">موناكو</option>

<option value="149">مولدافيا</option>

<option value="148">Midway Islands</option>

<option value="147">ميكرونيزيا</option>

<option value="145">Metropolitan France</option>

<option value="144">مايوت</option>

<option value="143">موريشيوس</option>

<option value="142">موريتانيا</option>

<option value="141">مارتينيك</option>

<option value="140">جزر المارشال</option>

<option value="139">مالطا</option>

<option value="138">مالي</option>

<option value="137">جزر الملديف</option>

<option value="136">ماليزيا</option>

<option value="135">ملاوي</option>

<option value="134">مدغشقر</option>

<option value="133">مقدونيا</option>

<option value="132">ماكاو الصينية</option>

<option value="131">لوكسمبورج</option>

<option value="130">ليتوانيا</option>

<option value="129">ليختنشتاين</option>

<option value="127">ليبيريا</option>

<option value="126">ليسوتو</option>

<option value="124">لاتفيا</option>

<option value="123">لاوس</option>

<option value="122">قرغيزستان</option>

<option value="120">كيريباتي</option>

<option value="119">كينيا</option>

<option value="118">كازاخستان</option>

<option value="116">Johnston Island</option>

<option value="115">جيرسي</option>

<option value="113">جامايكا</option>

<option value="110">جزيرة مان</option>

<option value="109">أيرلندا</option>

<option value="104">أيسلندا</option>

<option value="103">المجر</option>

<option value="102">هونج كونج الصينية</option>

<option value="101">هندوراس</option>

<option value="100">جزيرة هيرد وماكدونالد</option>

<option value="99">هايتي</option>

<option value="98">غيانا</option>

<option value="97">غينيا بيساو</option>

<option value="96">غينيا</option>

<option value="95">Guernsey</option>

<option value="94">جواتيمالا</option>

<option value="93">جوام</option>

<option value="92">جوادلوب</option>

<option value="91">جرينادا</option>

<option value="90">جرينلاند</option>

<option value="89">اليونان</option>

<option value="88">جبل طارق</option>

<option value="87">غانا</option>

<option value="86">ألمانيا</option>

<option value="85">جورجيا</option>

<option value="84">غامبيا</option>

<option value="83">الجابون</option>

<option value="82">French Southern and Antarctic Territories</option>

<option value="81">المقاطعات الجنوبية الفرنسية</option>

<option value="80">بولينيزيا الفرنسية</option>

<option value="79">غويانا</option>

<option value="77">فنلندا</option>

<option value="76">فيجي</option>

<option value="75">جزر فارو</option>

<option value="152">الجبل الأسود</option>

<option value="146">المكسيك</option>

<option value="128">ليبيا</option>

<option value="125">لبنان</option>

<option value="117">الأردن</option>

<option value="114">اليابان</option>

<option value="112">ايطاليا</option>

<option value="108">العراق</option>

<option value="107">ايران</option>

<option value="106">اندونيسيا</option>

<option value="105">الهند</option>

<option value="78">فرنسا</option>

<option value="163">كاليدونيا الجديدة</option>

<option value="162">Neutral Zone</option>

<option value="161">جزر الأنتيل الهولندية</option>

<option value="225">سويسرا</option>

<option value="224">السويد</option>

<option value="223">سوازيلاند</option>

<option value="222">سفالبارد وجان مايان</option>

<option value="221">سورينام</option>

<option value="219">سريلانكا</option>

<option value="217">كوريا الجنوبية</option>

<option value="245">أوغندا</option>

<option value="216">جورجيا الجنوبية وجزر ساندويتش الجنوبية</option>

<option value="215">جمهورية جنوب افريقيا</option>

<option value="214">الصومال</option>

<option value="213">جزر سليمان</option>

<option value="212">سلوفينيا</option>

<option value="211">سلوفاكيا</option>

<option value="210">سنغافورة</option>

<option value="209">سيراليون</option>

<option value="208">سيشل</option>

<option value="207">صربيا والجبل الأسود</option>

<option value="206">صربيا</option>

<option value="205">السنغال</option>

<option value="204">المملكة العربية السعودية</option>

<option value="203">سان مارينو</option>

<option value="202">ساموا</option>

<option value="201">سانت فنسنت وغرنادين</option>

<option value="200">سانت بيير وميكولون</option>

<option value="199">سانت مارتين</option>

<option value="198">سانت لوسيا</option>

<option value="197">سانت كيتس ونيفيس</option>

<option value="196">سانت هيلنا</option>

<option value="195">Saint Barthélemy</option>

<option value="194">روينيون</option>

<option value="193">رواندا</option>

<option value="191">رومانيا</option>

<option value="188">البرتغال</option>

<option value="187">بولندا</option>

<option value="186">بتكايرن</option>

<option value="185">الفيلبين</option>

<option value="184">بيرو</option>

<option value="183">People&#39;s Democratic Republic of Yemen</option>

<option value="182">باراجواي</option>

<option value="181">بابوا غينيا الجديدة</option>

<option value="180">Panama Canal Zone</option>

<option value="179">بنما</option>

<option value="177">بالاو</option>

<option value="175">Pacific Islands Trust Territory</option>

<option value="174">عمان</option>

<option value="172">جزر ماريانا الشمالية</option>

<option value="171">North Vietnam</option>

<option value="170">كوريا الشمالية</option>

<option value="169">جزيرة نورفوك</option>

<option value="168">نيوي</option>

<option value="167">نيجيريا</option>

<option value="166">النيجر</option>

<option value="165">نيكاراجوا</option>

<option value="160">هولندا</option>

<option value="159">نيبال</option>

<option value="158">نورو</option>

<option value="157">ناميبيا</option>

<option value="156">ميانمار</option>

<option value="155">موزمبيق</option>

<option value="154">المغرب</option>

<option value="220">السودان</option>

<option value="218">أسبانيا</option>

<option value="192">روسيا</option>

<option value="190">قطر</option>

<option value="189">بورتوريكو</option>

<option value="178">فلسطين</option>

<option value="176">باكستان</option>

<option value="173">النرويج</option>

<option value="251">منطقة غير معرفة</option>

<option value="164">نيوزيلاندا</option>

<option value="264">جزر أولان</option>

<option value="263">زيمبابوي</option>

<option value="262">زامبيا</option>

<option value="260">الصحراء الغربية</option>

<option value="259">جزر والس وفوتونا</option>

<option value="258">Wake Island</option>

<option value="257">فيتنام</option>

<option value="256">فنزويلا</option>

<option value="255">الفاتيكان</option>

<option value="254">فانواتو</option>

<option value="253">أوزبكستان</option>

<option value="252">أورجواي</option>

<option value="248">الامارات العربية المتحدة</option>

<option value="247">Union of Soviet Socialist Republics</option>

<option value="244">جزر فرجين الأمريكية</option>

<option value="243">U.S. Miscellaneous Pacific Islands</option>

<option value="242">جزر الولايات المتحدة البعيدة الصغيرة</option>

<option value="241">توفالو</option>

<option value="240">جزر الترك وجايكوس</option>

<option value="239">تركمانستان</option>

<option value="238">تركيا</option>

<option value="236">ترينيداد وتوباغو</option>

<option value="235">تونجا</option>

<option value="234">توكيلو</option>

<option value="233">توجو</option>

<option value="232">تيمور الشرقية</option>

<option value="231">تايلند</option>

<option value="230">تانزانيا</option>

<option value="229">طاجكستان</option>

<option value="228">تايوان</option>

<option value="227">ساو تومي وبرينسيبي</option>

<option value="226">سوريا</option>

<option value="74">جزر فوكلاند</option>

<option value="261">اليمن</option>

<option value="250">الولايات المتحدة الأمريكية</option>

<option value="249">المملكة المتحدة</option>

<option value="246">أوكرانيا</option>

<option value="237">تونس</option>

</select><input type="hidden" name="initial-country" value="121" id="initial-id_country" />

</div>
<div class="form-group">
  <input type="text" name="quantity" placeholder="مبلغ التبرع" class="form-control input-sm" required id="quantity" />
  
</div>
<div class="form-group">
  <input type="text" name="namey" placeholder="الأسم" class="form-control input-sm" maxlength="255" id="id_name" />
</div>
<div class="form-group">
  <input type="text" name="email" placeholder="بريد إلكتروني" class="form-control input-sm" maxlength="254" id="id_email" />
</div>
<div class="form-group">
  <input type="text" name="phone" placeholder="رقم الهاتف" class="form-control input-sm" maxlength="255" id="id_phone" />
</div>

 
<div class="form-group">
  <textarea name="message" cols="15" rows="8" class="form-control" placeholder="رسالتك" id="id_message"></textarea>
</div>
 

          
         <br /><br />
         
                
                  <button  type="submit" name="fast" class="btn but2 btn-md active"  value="fast" >  تبرع الأن   </button>
                  <button  type="submit"  name="addcart" class="btn but2 btn-md active"  value="addcart" > إضافة للسلة </button>
             
           <br /><br /> <br /><br />
            
          </div>
        </form>
        {{-- slider  --}}
      <div class="col-md-6">

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">

            @for ($i = 0; $i < count($products); $i++)
            @if ($i == 0)
            <div class="carousel-item active">
              <img src="{{asset($products[$i]['image']) }}" class="d-block w-100" alt="...">
            </div>
            @else
            <div class="carousel-item">
              <img src="{{asset($products[$i]['image']) }}" class="d-block w-100" alt="...">
            </div>
            @endif
                
            @endfor

            


  
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        
              </div>
        {{-- slider  --}}

      </div>


    </div>
  </div>
</section>






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
                