<!doctype html>
<html class="fixed">

<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>@yield('title')</title>
    <meta name="keywords" content="" />
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('admin-end/vendor/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin-end/vendor/font-awesome/css/font-awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin-end/vendor/magnific-popup/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin-end/vendor/bootstrap-datepicker/css/datepicker3.css') }}" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('admin-end/vendor/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin-end/vendor/jquery-datatables-bs3/assets/css/datatables.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin-end/vendor/pnotify/pnotify.custom.css') }}" />
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('admin-end/stylesheets/theme.css') }}" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('admin-end/stylesheets/skins/default.css') }}" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('admin-end/stylesheets/theme-custom.css') }}">

    <!-- sweetalert -->
    <link rel="stylesheet" href="{{ asset('admin-end/dist/sweetalert.css') }}">
    <script src="{{ asset('admin-end/dist/sweetalert.js') }}"></script>

    <!-- Head Libs -->
    <script src="{{ asset('admin-end/vendor/modernizr/modernizr.js') }}"></script>
</head>

<body>
    {{-- <div class="loader"></div> --}}
    <section class="body">

        <!-- start: header -->
        <header class="header">
            <div class="logo-container">
                <a href="{{ route('admin.dashboard') }}" class="logo">
                    
                    <img src="{{ asset('front-end/images/logo.png') }}" height="35" alt="Porto Admin" />
              
                </a>
                <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html"
                    data-fire-event="sidebar-left-opened">
                    <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>

            <!-- start: search & user box -->
            <div class="header-right">

                <span class="separator"></span>

                <div id="userbox" class="userbox">
                    <a href="#" data-toggle="dropdown">
                        <figure class="profile-picture">
                            <img src="{{ asset('admin-end/images/!logged-user.jpg') }}" alt="Joseph Doe"
                                class="img-circle" data-lock-picture="admin-end/images/!logged-user.jpg" />
                        </figure>
                        <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                            <span class="name">John Doe Junior</span>
                            <span class="role">administrator</span>
                        </div>

                        <i class="fa custom-caret"></i>
                    </a>

                    <div class="dropdown-menu">
                        <ul class="list-unstyled">
                            <li class="divider"></li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i
                                        class="fa fa-user"></i> My Profile</a>
                            </li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i
                                        class="fa fa-lock"></i> Lock Screen</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.logout') }}"role="menuitem" tabindex="-1"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa fa-power-off"></i>
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end: search & user box -->
        </header>
        <!-- end: header -->

        <div class="inner-wrapper">
            <!-- start: sidebar -->
            <aside id="sidebar-left" class="sidebar-left">

                <div class="sidebar-header">
                    <div class="sidebar-title">
                        Navigation
                    </div>
                    <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html"
                        data-fire-event="sidebar-left-toggle">
                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>

                <div class="nano">
                    <div class="nano-content">
                        <nav id="menu" class="nav-main" role="navigation">
                            <ul class="nav nav-main">
                                <li>
                                    <a href="index.html">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>
                                <li class="nav-parent">
                                    <a>
                                        <i class="fa fa-copy" aria-hidden="true"></i>
                                        <span>Users</span>
                                    </a>
                                    <ul class="nav nav-children">

                                        <li>
                                            <a href="{{ route('admin.user.list') }}">
                                                All Users
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                        </nav>



                        <hr class="separator" />


                    </div>

                </div>

            </aside>
            <!-- end: sidebar -->

            {{-- main --}}

            <div style="min-height: 224px;">
                <!-- start: page -->
                @yield('main')
                <!-- end: page -->

            </div>


    </section>
    <!-- Vendor -->
    <script src="{{ asset('admin-end/vendor/jquery/jquery.js') }}"></script>
    <script src="{{ asset('admin-end/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
    <script src="{{ asset('admin-end/vendor/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('admin-end/vendor/nanoscroller/nanoscroller.js') }}"></script>
    <script src="{{ asset('admin-end/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('admin-end/vendor/magnific-popup/magnific-popup.js') }}"></script>
    <script src="{{ asset('admin-end/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>

    <!-- Specific Page Vendor -->
    @yield('script')

    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('admin-end/javascripts/theme.js') }}"></script>
    <!-- Theme Custom -->
    <script src="{{ asset('admin-end/javascripts/theme.custom.js') }}"></script>
    <!-- Theme Initialization Files -->
    <script src="{{ asset('admin-end/javascripts/theme.init.js') }}"></script>
</body>

</html>
