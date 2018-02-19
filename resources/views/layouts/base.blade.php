<!DOCTYPE html>
<html>

<!-- Mirrored from coderthemes.com/adminox/b4/horizontal/page-starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Feb 2018 11:34:05 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Imara Lib - Teacher Helper</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="{{asset('theme/assets/images/favicon.ico')}}">
@yield('styles')
    <!-- App css -->
    <link href="{{asset('theme/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('theme/assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('theme/assets/css/style.css')}}" rel="stylesheet" type="text/css" />

    <script src="{{asset('theme/assets/js/modernizr.min.js')}}"></script>

</head>


<body>


<!-- Navigation Bar-->
<header id="topnav">
    <div class="topbar-main">
        <div class="container">

            <!-- Logo container-->
            <div class="logo">
                <!-- Text Logo -->
                <a href="{{url('/')}}" class="logo">
                Imara Lib
                </a>
                <!-- Image Logo -->
                {{--<a href="index.html" class="logo">--}}
                    {{--<img src="assets/images/logo_dark.png" alt="" height="24" class="logo-lg">--}}
                    {{--<img src="assets/images/logo_sm.png" alt="" height="24" class="logo-sm">--}}
                {{--</a>--}}

            </div>
            <!-- End Logo container-->

            <div class="menu-extras topbar-custom ">
                <ul class="list-inline float-right mb-0">
                    <li class="menu-item list-inline-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle nav-link">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>
                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <i class="dripicons-list noti-icon"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5>Notification</h5>
                            </div>

                            <!-- item-->
                            <a href="{{route('categories.create')}}" class="dropdown-item notify-item">
                                <div class="notify-icon bg-success"><i class="dripicons-document"></i></div>
                                <p class="notify-details">Categories</p>
                            </a>
                            <a href="{{route('files.create')}}" class="dropdown-item notify-item">
                                <div class="notify-icon bg-success"><i class="fa fa-upload"></i></div>
                                <p class="notify-details">Upload</p>
                            </a>
                            <a href="{{route('subjects.create')}}" class="dropdown-item notify-item">
                                <div class="notify-icon bg-success"><i class="fa fa-file"></i></div>
                                <p class="notify-details">Subjects</p>
                            </a>


                        </div>
                    </li>

                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <img src="{{asset('theme/assets/images/users/avatar-1.jpg')}}" alt="user" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="text-overflow"><small>Welcome ! John</small> </h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="zmdi zmdi-account-circle"></i> <span>Profile</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="zmdi zmdi-settings"></i> <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="zmdi zmdi-lock-open"></i> <span>Lock Screen</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="zmdi zmdi-power"></i> <span>Logout</span>
                            </a>

                        </div>
                    </li>

                </ul>
            </div>
            <!-- end menu-extras -->

            <div class="clearfix"></div>

        </div> <!-- end container -->
    </div>
    <!-- end topbar-main -->

    <div class="navbar-custom">
        <div class="container">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li> <a href="{{ url('/') }}"><i class="fa fa-home" style="color: #F44336"></i>Home</a> </li>
                @foreach($menus as $menu)
                        <li> <a href="{{route('categories.show', $menu->id)}}"><i class="icon-book-open" style="color: #FF9800"></i>{{$menu->title}}</a> </li>
                    @endforeach
                    {{--<li> <a href="#"><i class="fi-book" style="color: #FFCA28"></i>Schemes of work</a> </li>--}}
                    {{--<li> <a href="#"><i class="icon-graduation" style="color: #FFCA28"></i>Revision Papers</a> </li>--}}

                </ul>
                <!-- End navigation menu -->
            </div> <!-- end #navigation -->
        </div> <!-- end container -->
    </div> <!-- end navbar-custom -->
</header>
<!-- End Navigation Bar-->


<div class="wrapper">
    <div class="container">

        @yield('content')

    </div> <!-- end container -->
</div>
<!-- end wrapper -->


<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                {{ Date('Y') }} © Imara Lib - Imarishwa.com
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->


<!-- jQuery  -->
<script src="{{asset('theme/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('theme/assets/js/tether.min.js')}}"></script><!-- Tether for Bootstrap -->
<script src="{{asset('theme/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('theme/assets/js/waves.js')}}"></script>
<script src="{{asset('theme/assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('theme/assets/js/jquery.scrollTo.min.js')}}"></script>

@yield('scripts')
<script type="text/javascript" src="{{asset('theme/plugins/parsleyjs/parsley.min.js')}}"></script>

<!-- App js -->
<script src="{{asset('theme/assets/js/jquery.core.js')}}"></script>
<script src="{{asset('theme/assets/js/jquery.app.js')}}"></script>

</body>
</html>