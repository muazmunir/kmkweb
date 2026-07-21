<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/brand/favicon.ico')}}" />

    <!-- TITLE -->
    <title> لوحة تحكم الادارة </title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/dark-style.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/transparent-style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/skin-modes.css')}}" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('assets/colors/color1.css')}}" />

</head>

<body class="app sidebar-mini ltr light-mode">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="{{asset('assets/images/loader.svg')}}" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->
            <div class="app-header header sticky">
                <div class="container-fluid main-container">
                    <div class="d-flex">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0)"></a>
                        <!-- sidebar-toggle-->
                        <a class="logo-horizontal " href="index.html">
                            <img src="{{asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
                            <img src="{{asset('assets/images/brand/logo-3.png')}}" class="header-brand-img light-logo1"
                                alt="logo">
                        </a>
                        <!-- LOGO -->
                        <div class="main-header-center ms-3 d-none d-lg-block">
                            <input type="text" class="form-control" id="typehead" placeholder="Search for results..." autocomplete="off">
                            <button class="btn px-0 pt-2"><i class="fe fe-search" aria-hidden="true"></i></button>
                        </div>
                        <div class="d-flex order-lg-2 ms-auto header-right-icons">
                            <!-- SEARCH -->
                            <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                            </button>
                            <div class="navbar navbar-collapse responsive-navbar p-0">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <div class="d-flex order-lg-2">
                                        <div class="dropdown d-lg-none d-flex">
                                            <a href="javascript:void(0)" class="nav-link icon" data-bs-toggle="dropdown">
                                                <i class="fe fe-search"></i>
                                            </a>
                                            <div class="dropdown-menu header-search dropdown-menu-start">
                                                <div class="input-group w-100 p-2">
                                                    <input type="text" class="form-control" placeholder="Search....">
                                                    <div class="input-group-text btn btn-primary">
                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <!-- COUNTRY -->
                                        <div class="d-flex country">
                                            <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                                <span class="dark-layout"><i class="fe fe-moon"></i></span>
                                                <span class="light-layout"><i class="fe fe-sun"></i></span>
                                            </a>
                                        </div>
                                        <!-- Theme-Layout -->
                                        
                                        <!-- CART -->
                                        <div class="dropdown d-flex">
                                            <a class="nav-link icon full-screen-link nav-link-bg">
                                                <i class="fe fe-minimize fullscreen-button"></i>
                                            </a>
                                        </div>
                                        <!-- FULL-SCREEN -->
                                       
                                        <!-- NOTIFICATIONS -->
                                        
                                        <!-- MESSAGE-BOX -->
                                        <div class="dropdown d-flex header-settings">
                                            <a href="javascript:void(0);" class="nav-link icon"
                                                data-bs-toggle="sidebar-right" data-target=".sidebar-right">
                                                <i class="fe fe-align-right"></i>
                                            </a>
                                        </div>
                                        <!-- SIDE-MENU -->
                                        <div class="dropdown d-flex profile-1">
                                            <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                                                <img src="{{asset('assets/images/users/21.jpg')}}" alt="profile-user"
                                                    class="avatar  profile-user brround cover-image">
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading">
                                                    <div class="text-center">
                                                        <h5 class="text-dark mb-0 fs-14 fw-semibold">مرحبا Admin</h5>
                                                        <small class="text-muted">  Admin</small>
                                                    </div>
                                                </div>
                                                <div class="dropdown-divider m-0"></div>
                                                <a class="dropdown-item" href="profile.html">
                                                    <i class="dropdown-icon fe fe-user"></i> Profile
                                                </a>
                                                <a class="dropdown-item" href="email-inbox.html">
                                                    <i class="dropdown-icon fe fe-mail"></i> Inbox
                                                    <span class="badge bg-danger rounded-pill float-end">5</span>
                                                </a>
                                                <a class="dropdown-item" href="lockscreen.html">
                                                    <i class="dropdown-icon fe fe-lock"></i> Lockscreen
                                                </a>
                                                <a class="dropdown-item" href="{{route('admin.logout')}}">
                                                    <i class="dropdown-icon fe fe-alert-circle"></i> تسجيل الخروج 
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /app-Header -->

            <!--APP-SIDEBAR-->
            <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <div class="app-sidebar">
                    <div class="side-header">
                        <a class="header-brand1" href="index.html">
                            <img src="{{asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
                            <img src="{{asset('assets/images/brand/logo-1.png')}}" class="header-brand-img toggle-logo" alt="logo">
                            <img src="{{asset('assets/images/brand/logo-2.png')}}" class="header-brand-img light-logo" alt="logo">
                            <img src="{{asset('assets/images/brand/logo-3.png')}}" class="header-brand-img light-logo1" alt="logo">
                        </a>
                        <!-- LOGO -->
                    </div>
                    <div class="main-sidemenu">
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/></svg></div>
                        <ul class="side-menu">
                            <li class="sub-category">
                                <h3> </h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('log')}}"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">الرئيسية</span></a>
                            </li>
                            <li class="sub-category">
                                <h3>الرئيسية</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-slack"></i><span class="side-menu__label">الموضوعات</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">المشغلات</a></li>
                                    <li><a href="{{route('category.index')}}" class="slide-item"> أقسام الموضوعات</a></li>
                                    <li><a href="{{route('category.categoryf')}}" class="slide-item"> اضافة قسم </a></li>
                                    <li><a href="{{route('allposts.addNewPostform')}}" class="slide-item"> اضافة موضوع</a></li>
                                    <li><a href="{{route('allposts.index')}}" class="slide-item"> الموضوعات</a></li>
                                    <li><a href="{{route('allposts.deletedPosts')}}" class="slide-item"> الموضوعات المحذوفة</a></li>
                                  
                              
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-package"></i><span
                                        class="side-menu__label">المشاريع</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu mega-slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">المشاريع</a></li>
                                    <div class="mega-menu">
                                        <div class="">
                                            <ul>
                                                <li><a href="{{route('ProductCategory.index')}}" class="slide-item"> أقسام المشاريع</a></li>
 
                                                <li><a href="{{route('ProductCategory.ProductCategoryform')}}" class="slide-item"> اضافة قسم </a></li>
                                                <li><a href="{{route('Products.index')}}" class="slide-item"> عرض المشاريع</a></li>
                                                <li><a href="{{route('Products.ProductsDeleted')}}" class="slide-item">    المشاريع المحذوفة</a></li>

                                                <li><a href="{{route('Products.Productsf')}}" class="slide-item">اضافة مشروع</a></li>
                                               
                                            </ul>
                                        </div>
                                        
                                        
                                    </div>
                                </ul>
                            </li>
                            <li>
                                <a class="side-menu__item has-link" href="{{route('paymnts.index')}}" ><i
                                        class="side-menu__icon fe fe-zap"></i><span
                                        class="side-menu__label">  التبرعات</span><span class="badge bg-green br-5 side-badge blink-text pb-1">Pay</span></a>
                            </li>
                            <li>
                                <a class="side-menu__item has-link" href="{{route('slider.addsliderf')}}" ><i
                                        class="side-menu__icon fe fe-wind"></i><span
                                        class="side-menu__label">  المعرض</span><span class="badge bg-green br-5 side-badge blink-text pb-1">Slider</span></a>
                            </li>
                                <li>
                                <a class="side-menu__item has-link" href="{{route('menu.addmenuf')}}" ><i
                                        class="side-menu__icon  glyphicon glyphicon-th-list"></i><span
                                        class="side-menu__label">  القوائم</span><span class="badge bg-green br-5 side-badge blink-text pb-1">Menu</span></a>
                            </li>
                            
                            <li class="sub-category">
                                <h3>الصلاحيات  </h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-layers"></i><span class="side-menu__label">المتبرعين</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li><a href="{{route('users.index')}}" class="slide-item">عرض المتبرعين</a></li>
                                    <li><a href="profile.html" class="slide-item"> مشاريع المتبرعين</a></li>
                                    <li><a href="editprofile.html" class="slide-item">  اضافة تقرير لمتبرع </a></li>
                                    <li><a href="notify-list.html" class="slide-item"> رسائل المتبرعين </a></li>
                             
                                     
                                     
                                 </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-shopping-bag"></i><span class="side-menu__label">المسوقين</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">المسوقين</a></li>
                                    <li><a href="{{route('sallers.index')}}" class="slide-item"> عرض المسوقين</a></li>
                                    <li><a href="{{route('saller.register')}}" class="slide-item">  انشاء مسوق  </a></li>

                          
                                </ul>
                            </li>
                            
                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg></div>
                    </div>
                </div>
                <!--/APP-SIDEBAR-->
            </div>

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">@yield('pageTitle')</h1>
                            
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW-1 OPEN -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">@yield('formTitle')</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="btn-list">
                                           @yield('pageContent')
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        {{-- <h3 class="card-title">Side Alerts Notifications</h3> --}}
                                    </div>
                                    <div class="card-body">
                                        <div class="card-body">
                                            @yield('payementpagination')
                                            {{-- <p>Use <code class="highlighter-rouge">.active</code> to indicate the current page.</p>
                                            <ul class="pagination">
                                                <li class="page-item page-prev">
                                                    <a class="page-link" href="javascript:void(0)" tabindex="-1">Prev</a>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                                <li class="page-item page-next">
                                                    <a class="page-link" href="javascript:void(0)">Next</a>
                                                </li>
                                            </ul> --}}
                                            <!-- pagination-wrapper -->
                                        </div>
                                        {{-- <div class="btn-list">
                                            <a href="javascript:void(0)" class="btn btn-success notice">Success</a>
                                            <a href="javascript:void(0)" class="btn btn-warning warning">Warning</a>
                                            <a href="javascript:void(0)" class="btn btn-danger error">Danger</a>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        {{-- <h3 class="card-title">Gradient Side Alerts Notifications</h3> --}}
                                    </div>
                                    {{-- <div class="card-body">
                                        <div class="btn-list">
                                            <a href="javascript:void(0)" class="btn btn-success bg-success-gradient notice1">Success</a>
                                            <a href="javascript:void(0)" class="btn btn-warning bg-warning-gradient warning1">Warning</a>
                                            <a href="javascript:void(0)" class="btn btn-danger bg-danger-gradient error1">Danger</a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <!-- COL-END -->
                        </div>
                        <!-- ROW-1 CLOSED -->
                    </div>
                    <!-- CONTAINER CLOSED -->
                </div>
            </div>
            <!--app-content closed-->
        </div>

        <!-- Sidebar-right -->
        
        <!--/Sidebar-right-->

        <!-- Country-selector modal-->
        <div class="modal fade" id="country-selector">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content country-select-modal">
                    <div class="modal-header">
                        <h6 class="modal-title">Choose Country</h6><button aria-label="Close" class="btn-close"
                            data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <ul class="row p-3">
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block active">
                                    <span class="country-selector"><img alt="" src="{{asset('assets/images/flags/us_flag.jpg')}}"
                                            class="me-3 language"></span>USA
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                        src="{{asset('assets/images/flags/italy_flag.jpg')}}"
                                        class="me-3 language"></span>Italy
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                        src="{{asset('assets/images/flags/spain_flag.jpg')}}"
                                        class="me-3 language"></span>Spain
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                        src="{{asset('assets/images/flags/india_flag.jpg')}}"
                                        class="me-3 language"></span>India
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                        src="{{asset('assets/images/flags/french_flag.jpg')}}"
                                        class="me-3 language"></span>French
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                        src="{{asset('assets/images/flags/russia_flag.jpg')}}"
                                        class="me-3 language"></span>Russia
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                        src="{{asset('assets/images/flags/germany_flag.jpg')}}"
                                        class="me-3 language"></span>Germany
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                        src="{{asset('assets/images/flags/argentina.jpg')}}"
                                        class="me-3 language"></span>Argentina
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt="" src="{{asset('assets/images/flags/malaysia.jpg')}}"
                                        class="me-3 language"></span>Malaysia
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt="" src="{{asset('assets/images/flags/turkey.jpg')}}"
                                        class="me-3 language"></span>Turkey
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Country-selector modal-->

        <!-- FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        Copyright © <span id="year"></span> <a href="altkaful.org">anazah</a>.  <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0)">   </a> All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER CLOSED -->
    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- SIDEBAR JS -->
    <script src="{{asset('assets/plugins/sidebar/sidebar.js')}}"></script>

    <!-- SIDE-MENU JS -->
    <script src="{{asset('assets/plugins/sidemenu/sidemenu.js')}}"></script>

	<!-- TypeHead js -->
	<script src="{{asset('assets/plugins/bootstrap5-typehead/autocomplete.js')}}"></script>
    <script src="{{asset('assets/js/typehead.js')}}"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{asset('assets/plugins/p-scroll/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('assets/plugins/p-scroll/pscroll.js')}}"></script>
    <script src="{{asset('assets/plugins/p-scroll/pscroll-1.js')}}"></script>

    <!-- INTERNAL Notifications js -->
    <script src="{{asset('assets/plugins/notify/js/rainbow.js')}}"></script>
    <script src="{{asset('assets/plugins/notify/js/sample.js')}}"></script>
    <script src="{{asset('assets/plugins/notify/js/jquery.growl.js')}}"></script>
    <script src="{{asset('assets/plugins/notify/js/notifIt.js')}}"></script>

    <!-- Color Theme js -->
    <script src="{{asset('assets/js/themeColors.js')}}"></script>

    <!-- Sticky js -->
    <script src="{{asset('assets/js/sticky.js')}}"></script>

    <!-- CUSTOM JS -->
    <script src="{{asset('assets/js/custom.js')}}"></script>


</body>

</html>