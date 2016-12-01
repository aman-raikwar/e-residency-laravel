<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="frontend/bootstrap/bootstrap.min.css">
        <!-- Font awesome styles -->
        <link rel="stylesheet" href="frontend/apartment-font/css/font-awesome.min.css">
        <!-- Custom styles -->
        <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,500italic,700,700italic&amp;subset=latin,latin-ext'>
        <link rel="stylesheet" type="text/css" href="frontend/css/plugins.css">
        <link rel="stylesheet" type="text/css" href="frontend/css/apartment-layout.css">
        <link id="skin" rel="stylesheet" type="text/css" href="frontend/css/apartment-colors-blue.css">
        <link rel="stylesheet" type="text/css" href="frontend/custom.css">
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Maps -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRCK2aKJXZ_VxuYdSQlujaIyn227C-jac&libraries=places"></script>

        <script type="text/javascript">
            window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token()]); ?>
        </script>
    </head>

    <body>
        <div class="loader-bg"></div>
        <div id="wrapper">
            <!-- Page header -->
            <header>
                <div class="top-bar-wrapper">
                    <div class="container top-bar">
                        <div class="row">
                            <div class="col-xs-5 col-sm-8">
                                <div class="top-mail pull-left hidden-xs">
                                    <span class="top-icon-circle">
                                        <i class="fa fa-envelope fa-sm"></i>
                                    </span>
                                    <span class="top-bar-text">apartment@domain.tld</span>
                                </div>
                                <div class="top-phone pull-left hidden-xxs">
                                    <span class="top-icon-circle">
                                        <i class="fa fa-phone"></i>
                                    </span>
                                    <span class="top-bar-text">(0)-123-456-789</span>
                                </div>
                                <div class="top-localization pull-left hidden-sm hidden-md hidden-xs">
                                    <span class="top-icon-circle pull-left">
                                        <i class="fa fa-map-marker"></i>
                                    </span>
                                    <span class="top-bar-text">One Brookings Drive St. Louis, Missouri 63130-4899, USA</span>
                                </div>
                            </div>
                            <div class="col-xs-7 col-sm-4">
                                <div class="top-social-last top-dark pull-right" data-toggle="tooltip" data-placement="bottom" title="Login/Register">
                                    <a class="top-icon-circle" href="#login-modal" data-toggle="modal">
                                        <i class="fa fa-lock"></i>
                                    </a>
                                </div>
                                <div class="top-social pull-right">
                                    <a class="top-icon-circle" href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </div>
                                <div class="top-social pull-right">
                                    <a class="top-icon-circle" href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </div>
                                <div class="top-social pull-right">
                                    <a class="top-icon-circle" href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div>
                                <div class="top-social pull-right">
                                    <a class="top-icon-circle" href="#">
                                        <i class="fa fa-skype"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.top-bar -->
                </div>
                <!-- /.Page top-bar-wrapper -->
                <nav class="navbar main-menu-cont">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar icon-bar1"></span>
                                <span class="icon-bar icon-bar2"></span>
                                <span class="icon-bar icon-bar3"></span>
                            </button>
                            <a href="{{ url('/') }}" title="" class="navbar-brand">
                                <img src="frontend/images/logo-dark.png" alt="{{ config('app.name', 'Laravel') }}" />
                            </a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('/about-us') }}">About Us</a></li>
                                <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>
                                <li><a href="{{ url('/add-property') }}" class="special-color">Submit property</a></li>
                                @if (Auth::guard('admin')->user())
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        Welcome Admin <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ route('adminDashboard') }}">Dashboard</a></li>
                                        <li>
                                            <a href="{{ route('adminLogout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('adminLogout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                @elseif (Auth::guard('web')->user())
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        My Account <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ url('/profile') }}">Profile</a></li>
                                        <li>
                                            <a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                @else
                                <li><a href="{{ url('/login') }}">Login</a></li>
                                <li><a href="{{ url('/register') }}">Register</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- /.mani-menu-cont -->
            </header>