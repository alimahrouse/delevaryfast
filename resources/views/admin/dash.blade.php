
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords"
          content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>  modern </title>
    <link rel="apple-touch-icon" href="{{asset('css/admin/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('css/admin/images/ico/favicon.ico')}}">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
        rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
          rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/css-rtl/plugins/animate/animate.css')}}">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/css-rtl/vendors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/vendors/css/weather-icons/climacons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/fonts/meteocons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/vendors/css/charts/morris.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/vendors/css/charts/chartist.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/vendors/css/forms/selects/select2.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('css/admin/vendors/css/charts/chartist-plugin-tooltip.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('css/admin/vendors/css/forms/toggle/bootstrap-switch.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/vendors/css/forms/toggle/switchery.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/css-rtl/pages/chat-application.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/css-rtl/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/css-rtl/custom-rtl.css')}}">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('css/admin/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/css-rtl/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/fonts/simple-line-icons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/css-rtl/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/css-rtl/pages/timeline.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/vendors/css/cryptocoins/cryptocoins.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/vendors/css/extensions/datedropper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/vendors/css/extensions/timedropper.min.css')}}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/css-rtl/style-rtl.css')}}">
    <!-- END Custom CSS-->

    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Cairo', sans-serif;
        }
    </style>
</head>
<body class="vertical-layout vertical-menu 2-columns  @if(Request::is("{{asset('css/admin/users/tickets/reply*')}}")) chat-application @endif menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu" data-col="2-columns">
<!-- fixed-top-->

<!-- Begin Header -->
<nav
    class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-info navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a
                    class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                    class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item">
                    <a class="navbar-brand" href="">
                        <img class="brand-logo" alt="modern admin logo"
                             src="{{asset('css/admin/images/logo/logo.png')}}">
                        <h3 class="brand-text">Modern Admin</h3>
                    </a>
                </li>
                <li class="nav-item d-md-none">
                    <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i
                        class="la la-ellipsis-v"></i></a>
                </li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                                                              href="#"><i class="ft-menu"></i></a></li>
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i
                        class="ficon ft-maximize"></i></a></li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="/login" data-toggle="dropdown">
                <span class="mr-1">مرجبا
                  <span
                      class="user-name text-bold-700"> {{auth()->user()->name}} </span>
                </span>
                
                        <!--    <span class="avatar avatar-online">
                      <img  style="height: 35px;" src="" alt="avatar"><i></i></span>-->
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('logout')}}"  onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i class="ft-power"></i> تسجيل
                                الخروج </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                                  </form>
                        </div>
                    </li>
                   
                    

                    <li class="dropdown dropdown-notification nav-item">
                        <a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i>
                            <span class="badge badge-pill badge-default badge-danger badge-default badge-up badge-glow">5</span>
                            
                               
                
                        </a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <h6 class="dropdown-header m-0">
                                    <span class="grey darken-2">Notifications</span>
                                </h6>
                                <span
                                    class="notification-tag badge badge-default badge-danger float-right m-0">5 New</span>
                            </li>
                            <li class="scrollable-container media-list w-100">
                                <a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left align-self-center"><i
                                            class="ft-plus-square icon-bg-circle bg-cyan"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">You have new order!</h6>
                                            <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit
                                                amet, consectetuer elit.</p>
                                            <small>
                                                <time class="media-meta text-muted"
                                                      datetime="2015-06-11T18:29:20+08:00">30 minutes ago
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left align-self-center"><i
                                            class="ft-download-cloud icon-bg-circle bg-red bg-darken-1"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading red darken-1">99% Server load</h6>
                                            <p class="notification-text font-small-3 text-muted">Aliquam tincidunt
                                                mauris eu risus.</p>
                                            <small>
                                                <time class="media-meta text-muted"
                                                      datetime="2015-06-11T18:29:20+08:00">Five hour ago
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left align-self-center"><i
                                            class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                                            <p class="notification-text font-small-3 text-muted">Vestibulum auctor
                                                dapibus neque.</p>
                                            <small>
                                                <time class="media-meta text-muted"
                                                      datetime="2015-06-11T18:29:20+08:00">Today
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left align-self-center"><i
                                            class="ft-check-circle icon-bg-circle bg-cyan"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Complete the task</h6>
                                            <small>
                                                <time class="media-meta text-muted"
                                                      datetime="2015-06-11T18:29:20+08:00">Last week
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left align-self-center"><i
                                            class="ft-file icon-bg-circle bg-teal"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Generate monthly report</h6>
                                            <small>
                                                <time class="media-meta text-muted"
                                                      datetime="2015-06-11T18:29:20+08:00">Last month
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center"
                                                                href="javascript:void(0)">Read all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-notification nav-item">
                        <a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i
                            class="ficon ft-mail"> </i></a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <h6 class="dropdown-header m-0">
                                    <span class="grey darken-2">Messages</span>
                                </h6>
                                <span
                                    class="notification-tag badge badge-default badge-warning float-right m-0">4 New</span>
                            </li>
                            <li class="scrollable-container media-list w-100">
                                <a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left">
                        <span class="avatar avatar-sm avatar-online rounded-circle">
                          <img src="{{asset('css/admin/images/portrait/small/avatar-s-19.png')}}"
                               alt="avatar"><i></i></span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Margaret Govan</h6>
                                            <p class="notification-text font-small-3 text-muted">I like your portfolio,
                                                let's start.</p>
                                            <small>
                                                <time class="media-meta text-muted"
                                                      datetime="2015-06-11T18:29:20+08:00">Today
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left">
                        <span class="avatar avatar-sm avatar-busy rounded-circle">
                          <img src="{{asset('css/admin/images/portrait/small/avatar-s-2.png')}}" alt="avatar"><i></i></span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Bret Lezama</h6>
                                            <p class="notification-text font-small-3 text-muted">I have seen your work,
                                                there is</p>
                                            <small>
                                                <time class="media-meta text-muted"
                                                      datetime="2015-06-11T18:29:20+08:00">Tuesday
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left">
                        <span class="avatar avatar-sm avatar-online rounded-circle">
                          <img src="{{asset('css/admin/images/portrait/small/avatar-s-3.png')}}" alt="avatar"><i></i></span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Carie Berra</h6>
                                            <p class="notification-text font-small-3 text-muted">Can we have call in
                                                this week ?</p>
                                            <small>
                                                <time class="media-meta text-muted"
                                                      datetime="2015-06-11T18:29:20+08:00">Friday
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left">
                        <span class="avatar avatar-sm avatar-away rounded-circle">
                          <img src="{{asset('css/admin/images/portrait/small/avatar-s-6.png')}}" alt="avatar"><i></i></span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Eric Alsobrook</h6>
                                            <p class="notification-text font-small-3 text-muted">We have project party
                                                this saturday.</p>
                                            <small>
                                                <time class="media-meta text-muted"
                                                      datetime="2015-06-11T18:29:20+08:00">last month
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center"
                                                                href="javascript:void(0)">Read all messages</a></li>
                        </ul>
                    </li>
                </ul>
         
               
                
                         
                
            </div>
        </div>
    </div>
</nav>

<!--End  Header -->

<!-- Begin SideBar-->
<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
       
            
               
            
            
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
           
            <li class="nav-item active"><a href=""><i class="la la-mouse-pointer"></i><span
                class="menu-title" data-i18n="nav.add_on_drag_drop.main">home</span></a>
            </li>

         <li class="nav-item"><a href=""><i class="la la-home"></i>
                <span class="menu-title" data-i18n="nav.dash.main">الطلبات </span>
                <span
                    class="badge badge badge-info badge-pill float-right mr-2">5</span>
            </a>
                <ul class="menu-content">
                <li class="active"><a class="menu-item" href="{{route('new_orders')}}"
                                          data-i18n="nav.dash.ecommerce"> الطلبات الجديده </a>
                    </li>
                    <li><a class="menu-item" href="{{route('receved_orders')}}" data-i18n="nav.dash.crypto">الطلبات المستلمه </a>
                    </li>
                    <li><a class="menu-item" href="{{route('ececuted_orders')}}" data-i18n="nav.dash.crypto">الطلبات المنفذه </a>
                    </li>
                </ul>
            </li>
          
           
            <li class="nav-item"><a href=""><i class="la la-group"></i>
                <span class="menu-title" data-i18n="nav.dash.main">العملاء </span>
                <span
                    class="badge badge badge-danger badge-pill float-right mr-2"></span>
            </a>
                <ul class="menu-content">
                <li class="active"><a class="menu-item" href="{{route('show_users')}}"
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                   
                </ul>
            </li>

           


            <li class="nav-item"><a href=""><i class="la la-envelope-o"></i>
                <span class="menu-title" data-i18n="nav.dash.main">الرسائل </span>
                <span
                    class="badge badge badge-danger badge-pill float-right mr-2"></span>
            </a>
                <ul class="menu-content">
                <li class="active"><a class="menu-item" href="{{route('admin_showmessage')}}"
                                          data-i18n="nav.dash.ecommerce"> الرسائل الوارده </a>
                    </li>
                   
                </ul>
            </li>


          


                   
                    
                </ul>
            </li>
           
        </ul>
    </div>
</div>

<!--End Sidebare-->
<!-- content-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-body">
            @yield('content');
            </div>
    </div>
</div>

<!--end content-->


<!-- BEGIN VENDOR JS-->
<script  src="{{asset('css/admin/vendors/js/vendors.min.js')}}" type="text/javascript" ></script>
<!-- BEGIN VENDOR JS-->
<script src="{{asset('css/admin/vendors/js/tables/datatable/datatables.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('css/admin/vendors/js/tables/datatable/dataTables.buttons.min.js')}}"
        type="text/javascript"></script>

<script src="{{asset('css/admin/vendors/js/forms/toggle/bootstrap-switch.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('css/admin/vendors/js/forms/toggle/bootstrap-checkbox.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('css/admin/vendors/js/forms/toggle/switchery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('css/admin/js/scripts/forms/switch.js')}}" type="text/javascript"></script>
<script src="{{asset('css/admin/vendors/js/forms/select/select2.full.min.js')}}" type="text/javascript"></script>
<script src="{{asset('css/admin/js/scripts/forms/select/form-select2.js')}}" type="text/javascript"></script>

<!-- BEGIN PAGE VENDOR JS-->
<script src="{{asset('css/admin/vendors/js/charts/chart.min.js')}}" type="text/javascript"></script>
<script src="{{asset('css/admin/vendors/js/charts/echarts/echarts.js')}}" type="text/javascript"></script>

<script src="{{asset('css/admin/vendors/js/extensions/datedropper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('css/admin/vendors/js/extensions/timedropper.min.js')}}" type="text/javascript"></script>

<script src="{{asset('css/admin/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
<script src="{{asset('css/admin/js/scripts/pages/chat-application.js')}}" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN MODERN JS-->
<script src="{{asset('css/admin/js/core/app-menu.js')}}" type="text/javascript"></script>
<script src="{{asset('css/admin/js/core/app.js')}}" type="text/javascript"></script>
<script src="{{asset('css/admin/js/scripts/customizer.js')}}" type="text/javascript"></script>
<!-- END MODERN JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{asset('css/admin/js/scripts/pages/dashboard-crypto.js')}}" type="text/javascript"></script>


<script src="{{asset('css/admin/js/scripts/tables/datatables/datatable-basic.js')}}"
        type="text/javascript"></script>
<script src="{{asset('css/admin/js/scripts/extensions/date-time-dropper.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->

<script src="{{asset('css/admin/js/scripts/forms/checkbox-radio.js')}}" type="text/javascript"></script>

<script src="{{asset('css/admin/js/scripts/modal/components-modal.js')}}" type="text/javascript"></script>

<script>
    $('#meridians1').timeDropper({
        meridians: true,
        setCurrentTime: false
    });
    $('#meridians2').timeDropper({
        meridians: true,setCurrentTime: false

    });
    $('#meridians3').timeDropper({
        meridians: true,
        setCurrentTime: false
    });
    $('#meridians4').timeDropper({
        meridians: true,
        setCurrentTime: false
    });
    $('#meridians5').timeDropper({
        meridians: true,setCurrentTime: false

    });
    $('#meridians6').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians7').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians8').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians9').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians10').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians11').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians12').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians13').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians14').timeDropper({
        meridians: true,setCurrentTime: false
    });
</script>

</body>
</html>

