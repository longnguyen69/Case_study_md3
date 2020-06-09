<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title></title>
    <link rel="icon" href="{{asset('/images/favicon.ico')}}" type="image/x-icon">
    <!-- Vector CSS -->
    <link href="{{asset('/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>

    <link href="{{asset('/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>

    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <!-- animate CSS-->
    <link href="{{asset('/css/animate.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS-->
    <link href="{{asset('/css/icons.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Sidebar CSS-->
    <link href="{{asset('/css/sidebar-menu.css')}}" rel="stylesheet"/>
    <!-- Custom Style-->
    <link href="{{asset('/css/app-style.css')}}" rel="stylesheet"/>

</head>

<body class="bg-theme bg-theme1">

<!-- start loader -->
<div id="pageloader-overlay" class="visible incoming">
    <div class="loader-wrapper-outer">
        <div class="loader-wrapper-inner">
            <div class="loader"></div>
        </div>
    </div>
</div>
<!-- end loader -->

<!-- Start wrapper-->
<div id="wrapper">

    <!--Start sidebar-wrapper-->
    <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
        <div class="brand-logo">
            <a href="index.html">
                <h5 class="logo-text">Flower</h5>
            </a>
        </div>
        <div class="user-details">
            <div class="media align-items-center user-pointer collapsed" data-toggle="collapse"
                 data-target="#user-dropdown">
                <div class="media-body">
                    <h6 class="side-user-name">{{$user->username}}</h6>
                </div>
            </div>
            <div id="user-dropdown" class="collapse">
                <ul class="user-setting-menu">
                    <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                    <li><a href="#"><i class="icon-settings"></i> Change Password</a></li>
                    <li><a href="{{route('admin.logout')}}"><i class="icon-power"></i>Logout</a></li>
                </ul>
            </div>
        </div>
        <ul class="sidebar-menu do-nicescrol">
            <li class="sidebar-header">MAIN NAVIGATION</li>
            <li>
                <a href="javaScript:void();" class="waves-effect">
                    <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span><i
                        class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="index.html"><i class="zmdi zmdi-long-arrow-right"></i> Ecommerce</a></li>
                    <li><a href="index2.html"><i class="zmdi zmdi-long-arrow-right"></i> Property Listings</a></li>
                    <li><a href="dashboard-service-support.html"><i class="zmdi zmdi-long-arrow-right"></i> Services &
                            Support</a></li>
                    <li><a href="dashboard-logistics.html"><i class="zmdi zmdi-long-arrow-right"></i> Logistics</a></li>
                </ul>
            </li>
            <!--  <li>
               <a href="javaScript:void();" class="waves-effect">
                 <i class="zmdi zmdi-layers"></i>
                 <span>UI Elements</span> <i class="fa fa-angle-left pull-right"></i>
               </a>
               <ul class="sidebar-submenu">
           <li><a href="ui-typography.html"><i class="zmdi zmdi-long-arrow-right"></i> Typography</a></li>
               <li><a href="ui-cards.html"><i class="zmdi zmdi-long-arrow-right"></i> Cards</a></li>
           <li><a href="ui-buttons.html"><i class="zmdi zmdi-long-arrow-right"></i> Buttons</a></li>
               <li><a href="ui-nav-tabs.html"><i class="zmdi zmdi-long-arrow-right"></i> Nav Tabs</a></li>
               <li><a href="ui-accordions.html"><i class="zmdi zmdi-long-arrow-right"></i> Accordions</a></li>
               <li><a href="ui-modals.html"><i class="zmdi zmdi-long-arrow-right"></i> Modals</a></li>
               <li><a href="ui-list-groups.html"><i class="zmdi zmdi-long-arrow-right"></i> List Groups</a></li>
               <li><a href="ui-bootstrap-elements.html"><i class="zmdi zmdi-long-arrow-right"></i> BS Elements</a></li>
               <li><a href="ui-pagination.html"><i class="zmdi zmdi-long-arrow-right"></i> Pagination</a></li>
               <li><a href="ui-alerts.html"><i class="zmdi zmdi-long-arrow-right"></i> Alerts</a></li>
               <li><a href="ui-progressbars.html"><i class="zmdi zmdi-long-arrow-right"></i> Progress Bars</a></li>
           <li><a href="ui-checkbox-radio.html"><i class="zmdi zmdi-long-arrow-right"></i> Checkboxes & Radios</a></li>
               <li><a href="ui-notification.html"><i class="zmdi zmdi-long-arrow-right"></i> Notifications</a></li>
               <li><a href="ui-sweet-alert.html"><i class="zmdi zmdi-long-arrow-right"></i> Sweet Alerts</a></li>
               </ul>
             </li> -->
            <!-- <li>
              <a href="javaScript:void();" class="waves-effect">
                <i class="zmdi zmdi-card-travel"></i>
                <span>Components</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="sidebar-submenu">
                <li><a href="components-range-slider.html"><i class="zmdi zmdi-long-arrow-right"></i> Range Sliders</a></li>
                <li><a href="components-image-carousel.html"><i class="zmdi zmdi-long-arrow-right"></i> Image Carousels</a></li>
                <li><a href="components-grid-layouts.html"><i class="zmdi zmdi-long-arrow-right"></i> Grid Layouts</a></li>
                <li><a href="components-switcher-buttons.html"><i class="zmdi zmdi-long-arrow-right"></i> Switcher Buttons</a></li>
                <li><a href="components-pricing-table.html"><i class="zmdi zmdi-long-arrow-right"></i> Pricing Tables</a></li>
                <li><a href="components-vertical-timeline.html"><i class="zmdi zmdi-long-arrow-right"></i> Vertical Timeline</a></li>
                <li><a href="components-horizontal-timeline.html"><i class="zmdi zmdi-long-arrow-right"></i> Horizontal Timeline</a></li>
                <li><a href="components-fancy-lightbox.html"><i class="zmdi zmdi-long-arrow-right"></i> Fancy Lightbox</a></li>
                <li><a href="components-color-palette.html"><i class="zmdi zmdi-long-arrow-right"></i> Color Palette</a></li>
              </ul>
            </li> -->
            <!--  <li>
               <a href="javaScript:void();" class="waves-effect">
                 <i class="zmdi zmdi-chart"></i> <span>Charts</span>
                 <i class="fa fa-angle-left float-right"></i>
               </a>
               <ul class="sidebar-submenu">
                 <li><a href="charts-chartjs.html"><i class="zmdi zmdi-long-arrow-right"></i> Chart JS</a></li>
                 <li><a href="charts-morris.html"><i class="zmdi zmdi-long-arrow-right"></i> Morris Charts</a></li>
                 <li><a href="charts-sparkline.html"><i class="zmdi zmdi-long-arrow-right"></i> Sparkline Charts</a></li>
                 <li><a href="charts-peity.html"><i class="zmdi zmdi-long-arrow-right"></i> Peity Charts</a></li>
                 <li><a href="charts-other.html"><i class="zmdi zmdi-long-arrow-right"></i> Other Charts</a></li>
               </ul>
              </li> -->
            <!-- <li>
               <a href="javaScript:void();" class="waves-effect">
                 <i class="zmdi zmdi-invert-colors"></i> <span>UI Icons</span>
                 <i class="fa fa-angle-left float-right"></i>
               </a>
               <ul class="sidebar-submenu">
                 <li><a href="icons-font-awesome.html"><i class="zmdi zmdi-long-arrow-right"></i> Font Awesome</a></li>
                 <li><a href="icons-material-designs.html"><i class="zmdi zmdi-long-arrow-right"></i> Material Design</a></li>
                 <li><a href="icons-themify.html"><i class="zmdi zmdi-long-arrow-right"></i> Themify Icons</a></li>
                 <li><a href="icons-simple-line-icons.html"><i class="zmdi zmdi-long-arrow-right"></i> Line Icons</a></li>
                 <li><a href="icons-flags.html"><i class="zmdi zmdi-long-arrow-right"></i> Flag Icons</a></li>
               </ul>
             </li> -->
            <li>
                <a href="calendar.html" class="waves-effect">
                    <i class="zmdi zmdi-calendar-check"></i> <span>Calendar</span>
                    <small class="badge float-right badge-light">New</small>
                </a>
            </li>

            <!--  <li>
               <a href="javaScript:void();" class="waves-effect">
                 <i class="zmdi zmdi-email"></i>
                 <span>Mailbox</span>
                  <small class="badge float-right badge-warning">12</small>
               </a>
               <ul class="sidebar-submenu">
                 <li><a href="mail-inbox.html"><i class="zmdi zmdi-long-arrow-right"></i> Inbox</a></li>
                 <li><a href="mail-compose.html"><i class="zmdi zmdi-long-arrow-right"></i> Compose</a></li>
                 <li><a href="mail-read.html"><i class="zmdi zmdi-long-arrow-right"></i> Read Mail</a></li>
               </ul>
             </li> -->
            <!-- -------------------------------------form----------------------------------------------------------------------- -->
            <li>
                <a href="#" class="waves-effect">
                    <i class="zmdi zmdi-format-list-bulleted"></i> <span>Danh muc</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href=""><i class="zmdi zmdi-long-arrow-right"></i>Them moi danh muc</a></li>
                    <li><a href=""><i class="zmdi zmdi-long-arrow-right"></i>Danh sach danh muc</a></li>
                    <!-- <li><a href="form-input-group.html"><i class="zmdi zmdi-long-arrow-right"></i> Input Groups</a></li>
                    <li><a href="form-layouts.html"><i class="zmdi zmdi-long-arrow-right"></i> Form Layouts</a></li>
                    <li><a href="form-advanced.html"><i class="zmdi zmdi-long-arrow-right"></i> Form Advanced</a></li>
                    <li><a href="form-uploads.html"><i class="zmdi zmdi-long-arrow-right"></i> Form Uploads</a></li>
                    <li><a href="form-validation.html"><i class="zmdi zmdi-long-arrow-right"></i> Form Validation</a></li>
                    <li><a href="form-step-wizard.html"><i class="zmdi zmdi-long-arrow-right"></i> Form Wizard</a></li>
                    <li><a href="form-text-editor.html"><i class="zmdi zmdi-long-arrow-right"></i> Form Editor</a></li> -->
                </ul>
            </li>
            <!-- --------------------------------------------------endform------------------------------------------- -->
            <li>
                <a href="#" class="waves-effect">
                    <i class="zmdi zmdi-format-list-bulleted"></i> <span>San phẩm</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href=""><i class="zmdi zmdi-long-arrow-right"></i>Them moi danh muc</a></li>
                    <li><a href=""><i class="zmdi zmdi-long-arrow-right"></i>Danh sach danh muc</a></li>
                    <!-- <li><a href="form-input-group.html"><i class="zmdi zmdi-long-arrow-right"></i> Input Groups</a></li>
                    <li><a href="form-layouts.html"><i class="zmdi zmdi-long-arrow-right"></i> Form Layouts</a></li>
                    <li><a href="form-advanced.html"><i class="zmdi zmdi-long-arrow-right"></i> Form Advanced</a></li>
                    <li><a href="form-uploads.html"><i class="zmdi zmdi-long-arrow-right"></i> Form Uploads</a></li>
                    <li><a href="form-validation.html"><i class="zmdi zmdi-long-arrow-right"></i> Form Validation</a></li>
                    <li><a href="form-step-wizard.html"><i class="zmdi zmdi-long-arrow-right"></i> Form Wizard</a></li>
                    <li><a href="form-text-editor.html"><i class="zmdi zmdi-long-arrow-right"></i> Form Editor</a></li> -->
                </ul>
            </li>
            <!--  <li>
              <a href="javaScript:void();" class="waves-effect">
                <i class="zmdi zmdi-grid"></i> <span>Tables</span>
                <i class="fa fa-angle-left float-right"></i>
              </a>
              <ul class="sidebar-submenu">
                <li><a href="table-simple-tables.html"><i class="zmdi zmdi-long-arrow-right"></i> Simple Tables</a></li>
                <li><a href="table-data-tables.html"><i class="zmdi zmdi-long-arrow-right"></i> Data Tables</a></li>
              </ul>
             </li> -->
            <!-- -------------------------------- -->

            <li>
                <a href="javaScript:void();" class="waves-effect">
                    <i class="zmdi zmdi-lock"></i> <span>Authentication</span>
                    <i class="fa fa-angle-left float-right"></i>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="authentication-signin.html"><i class="zmdi zmdi-long-arrow-right"></i> SignIn 1</a>
                    </li>
                    <li><a href="authentication-signup.html"><i class="zmdi zmdi-long-arrow-right"></i> SignUp 1</a>
                    </li>
                    <li><a href="authentication-signin2.html"><i class="zmdi zmdi-long-arrow-right"></i> SignIn 2</a>
                    </li>
                    <li><a href="authentication-signup2.html"><i class="zmdi zmdi-long-arrow-right"></i> SignUp 2</a>
                    </li>
                    <li><a href="authentication-lock-screen.html"><i class="zmdi zmdi-long-arrow-right"></i> Lock Screen</a>
                    </li>
                    <li><a href="authentication-reset-password.html"><i class="zmdi zmdi-long-arrow-right"></i> Reset
                            Password 1</a></li>
                    <li><a href="authentication-reset-password2.html"><i class="zmdi zmdi-long-arrow-right"></i> Reset
                            Password 2</a></li>
                </ul>
            </li>

            <!--  <li>
              <a href="widgets.html" class="waves-effect">
                <i class="zmdi zmdi-widgets"></i> <span>Widgets</span>
                <small class="badge float-right badge-danger">10</small>
              </a>
            </li> -->


            <!--
             <li>
                <a href="javaScript:void();" class="waves-effect">
                  <i class="zmdi zmdi-map"></i> <span>Maps</span>
                  <i class="fa fa-angle-left float-right"></i>
                </a>
                <ul class="sidebar-submenu">
                  <li><a href="maps-google.html"><i class="zmdi zmdi-long-arrow-right"></i> Google Maps</a></li>
                  <li><a href="maps-vector.html"><i class="zmdi zmdi-long-arrow-right"></i> Vector Maps</a></li>
                </ul>
               </li> -->

            <!--  <li>
               <a href="javaScript:void();" class="waves-effect">
                 <i class="zmdi zmdi-collection-folder-image"></i> <span>Sample Pages</span>
                 <i class="fa fa-angle-left float-right"></i>
               </a>
               <ul class="sidebar-submenu">
                     <li><a href="pages-invoice.html"><i class="zmdi zmdi-long-arrow-right"></i> Invoice</a></li>
                 <li><a href="pages-user-profile.html"><i class="zmdi zmdi-long-arrow-right"></i> User Profile</a></li>
                 <li><a href="pages-blank-page.html"><i class="zmdi zmdi-long-arrow-right"></i> Blank Page</a></li>
                     <li><a href="pages-coming-soon.html"><i class="zmdi zmdi-long-arrow-right"></i> Coming Soon</a></li>
                 <li><a href="pages-403.html"><i class="zmdi zmdi-long-arrow-right"></i> 403 Error</a></li>
                 <li><a href="pages-404.html"><i class="zmdi zmdi-long-arrow-right"></i> 404 Error</a></li>
                 <li><a href="pages-500.html"><i class="zmdi zmdi-long-arrow-right"></i> 500 Error</a></li>
               </ul>
              </li> -->

            <!--  <li>
               <a href="javaScript:void();" class="waves-effect">
                 <i class="fa fa-share"></i> <span>Multilevel</span>
                 <i class="fa fa-angle-left pull-right"></i>
               </a>
               <ul class="sidebar-submenu">
                 <li><a href="javaScript:void();"><i class="zmdi zmdi-long-arrow-right"></i> Level One</a></li>
                 <li>
                   <a href="javaScript:void();"><i class="zmdi zmdi-long-arrow-right"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                   <ul class="sidebar-submenu">
                     <li><a href="javaScript:void();"><i class="zmdi zmdi-long-arrow-right"></i> Level Two</a></li>
                     <li>
                       <a href="javaScript:void();"><i class="zmdi zmdi-long-arrow-right"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                       <ul class="sidebar-submenu">
                         <li><a href="javaScript:void();"><i class="zmdi zmdi-long-arrow-right"></i> Level Three</a></li>
                         <li><a href="javaScript:void();"><i class="zmdi zmdi-long-arrow-right"></i> Level Three</a></li>
                       </ul>
                     </li>
                   </ul>
                 </li>
                 <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-long-arrow-right"></i> Level One</a></li>
               </ul>
             </li> -->
            <li class="sidebar-header">LABELS</li>
            <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-coffee text-danger"></i> <span>Important</span></a>
            </li>
            <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-chart-donut text-success"></i>
                    <span>Warning</span></a></li>
            <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a>
            </li>
        </ul>

    </div>
    <!--End sidebar-wrapper-->

    <!--Start topbar header-->
    <header class="topbar-nav">
        <nav class="navbar navbar-expand fixed-top">
            <ul class="navbar-nav mr-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link toggle-menu" href="javascript:void();">
                        <i class="icon-menu menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <form class="search-bar">
                        <input type="text" class="form-control" placeholder="Enter keywords">
                        <a href="javascript:void();"><i class="icon-magnifier"></i></a>
                    </form>
                </li>
            </ul>

            <ul class="navbar-nav align-items-center right-nav-link">
                <li class="nav-item dropdown-lg">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                       href="javascript:void();">
                        <i class="fa fa-envelope-open-o"></i><span class="badge badge-light badge-up">12</span></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                You have 12 new messages
                                <span class="badge badge-light">12</span>
                            </li>
                            <li class="list-group-item">
                                <a href="javaScript:void();">
                                    <div class="media">
                                        <div class="avatar"><img class="align-self-start mr-3"
                                                                 src="assets/images/avatars/avatar-5.png"
                                                                 alt="user avatar"></div>
                                        <div class="media-body">
                                            <h6 class="mt-0 msg-title">Jhon Deo</h6>
                                            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                            <small>Today, 4:10 PM</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javaScript:void();">
                                    <div class="media">
                                        <div class="avatar"><img class="align-self-start mr-3"
                                                                 src="assets/images/avatars/avatar-6.png"
                                                                 alt="user avatar"></div>
                                        <div class="media-body">
                                            <h6 class="mt-0 msg-title">Sara Jen</h6>
                                            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                            <small>Yesterday, 8:30 AM</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javaScript:void();">
                                    <div class="media">
                                        <div class="avatar"><img class="align-self-start mr-3"
                                                                 src="assets/images/avatars/avatar-7.png"
                                                                 alt="user avatar"></div>
                                        <div class="media-body">
                                            <h6 class="mt-0 msg-title">Dannish Josh</h6>
                                            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                            <small>5/11/2018, 2:50 PM</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javaScript:void();">
                                    <div class="media">
                                        <div class="avatar"><img class="align-self-start mr-3"
                                                                 src="assets/images/avatars/avatar-8.png"
                                                                 alt="user avatar"></div>
                                        <div class="media-body">
                                            <h6 class="mt-0 msg-title">Katrina Mccoy</h6>
                                            <p class="msg-info">Lorem ipsum dolor sit amet.</p>
                                            <small>1/11/2018, 2:50 PM</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item text-center"><a href="javaScript:void();">See All Messages</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item dropdown-lg">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                       href="javascript:void();">
                        <i class="fa fa-bell-o"></i><span class="badge badge-info badge-up">14</span></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                You have 14 Notifications
                                <span class="badge badge-info">14</span>
                            </li>
                            <li class="list-group-item">
                                <a href="javaScript:void();">
                                    <div class="media">
                                        <i class="zmdi zmdi-accounts fa-2x mr-3 text-info"></i>
                                        <div class="media-body">
                                            <h6 class="mt-0 msg-title">New Registered Users</h6>
                                            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javaScript:void();">
                                    <div class="media">
                                        <i class="zmdi zmdi-coffee fa-2x mr-3 text-warning"></i>
                                        <div class="media-body">
                                            <h6 class="mt-0 msg-title">New Received Orders</h6>
                                            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javaScript:void();">
                                    <div class="media">
                                        <i class="zmdi zmdi-notifications-active fa-2x mr-3 text-danger"></i>
                                        <div class="media-body">
                                            <h6 class="mt-0 msg-title">New Updates</h6>
                                            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item text-center"><a href="javaScript:void();">See All
                                    Notifications</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item language">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                       href="javascript:void();"><i class="fa fa-flag"></i></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="dropdown-item"><i class="flag-icon flag-icon-gb mr-2"></i> English</li>
                        <li class="dropdown-item"><i class="flag-icon flag-icon-fr mr-2"></i> French</li>
                        <li class="dropdown-item"><i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
                        <li class="dropdown-item"><i class="flag-icon flag-icon-de mr-2"></i> German</li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                        <span class="user-profile"><img src="assets/images/avatars/avatar-13.png" class="img-circle"
                                                        alt="user avatar"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="dropdown-item user-details">
                            <a href="javaScript:void();">
                                <div class="media">
                                    <div class="avatar"><img class="align-self-start mr-3"
                                                             src="assets/images/avatars/avatar-13.png"
                                                             alt="user avatar"></div>
                                    <div class="media-body">
                                        <h6 class="mt-2 user-title">Sarajhon Mccoy</h6>
                                        <p class="user-subtitle">mccoy@example.com</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>


    <!--End topbar header-->
@yield('main')


<!-- Bootstrap core JavaScript-->
    <script src="{{asset('/js/jquery.min.js')}}"></script>
    <script src="{{asset('/js/popper.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>

    <!-- simplebar js -->
    <script src="{{asset('/plugins/simplebar/js/simplebar.js')}}"></script>
    <!-- sidebar-menu js -->
    <script src="{{asset('/js/sidebar-menu.js')}}"></script>
    <!-- loader scripts -->
    <script src="{{asset('/js/jquery.loading-indicator.html')}}"></script>
    <!-- Custom scripts -->
    <script src="{{asset('/js/app-script.js')}}"></script>


    <script src="{{asset('/plugins/Chart.js/Chart.min.js')}}"></script>
    <!-- Vector map JavaScript -->
    <script src="{{asset('/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <!-- Easy Pie Chart JS -->
    <script src="{{asset('/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
    <!-- Sparkline JS -->
    <script src="{{asset('/plugins/sparkline-charts/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('/plugins/jquery-knob/excanvas.js')}}"></script>
    <script src="{{asset('/plugins/jquery-knob/jquery.knob.js')}}"></script>

    <script>
        $(function () {
            $(".knob").knob();
        });
    </script>
    <!-- Index js -->
    <!-- <script src="/js/index.js"></script> -->
    <script src="../../../public/js/index.js"></script>


</body>
</html>
