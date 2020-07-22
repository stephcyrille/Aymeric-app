<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/customNav.css') }}" rel="stylesheet">
    <link href="{{ asset('DataTables/datatables.css') }}" rel="stylesheet" /> 	

    <!-- FontAwesome CSS -->
    <link href="{{ asset('bootstrap-4/css/bootstrap.css') }}" rel="stylesheet"/>
    <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet"/>

    <!-- JQuery Script -->
    <script src="{{ asset('jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('DataTables/datatables.js') }}"></script> 	
    
    @yield('customCSS')

    <style>
      .nav>li, .nav>li>a {
            position: relative;
            display: block;
            width: 100%;
        }     
        body{
          margin: 0;
          font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
          font-size: 1.5rem;
          font-weight: 400;
          line-height: 1.5;
          color: #212529;
          text-align: left;
          background-color: #fff;
        }    
    </style>

</head>
<body style="background-image : url('{{ url('/../fond.jpg') }}'); background-attachment:fixed;">
<div id="viewport">
  <!-- Sidebar -->
  <div id="sidebar">
    <header>
    	<b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{ url('http://localhost/aymeric/public/logo.png') }}" height="35" width="50" alt="homepage" class="dark-logo" />
                            
                        </b>
      <a href="#">GMAO ASECNA</a>
    </header>
    <ul class="nav">
      <li>
        <a href="{{ route('home') }}">
          Accueil
        </a>
      </li>
      <li>
        <a href="{{ route('liste_taches') }}">
          Ordre de travail
        </a>
      </li>
      <li>
        <a href="{{ route('liste_equipements') }}">
          Equipements
        </a>
      </li>
      <li>
        <a href="#">
          Fiches de rapport
        </a>
      </li>
      <?php $role = Auth::user()->profile->role;
      if ($role=="Technicien"){}else{
      	?>
      <li>
        <a href="{{ route('liste_profiles') }}">
          Gestion des utilisateurs
        </a>
      </li>
      <?php
       }
      ?>
      <li>
        <a href="{{ route('analytic') }}">
          Analytic
        </a>
      </li>
      <li>
        <a href="#">
          Paramètres
        </a>
      </li>
    </ul>
  </div>
  <!-- Content -->
  <div id="content">
    <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-left">
                        <form class="form-inline my-2 my-lg-0">
                            <li><input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"></li>
                            <li><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button></li>
                        </form>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }}, 
                                    {{ Auth::user()->profile->role }}
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    <div class="container-fluid">
      @yield('content')
    </div>
  </div>
</div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    @yield('customJS')
</body>
</html>
