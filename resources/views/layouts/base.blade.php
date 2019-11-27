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

    <style>
      .nav>li, .nav>li>a {
            position: relative;
            display: block;
            width: 100%;
        }         
    </style>

</head>
<body>
<div id="viewport">
  <!-- Sidebar -->
  <div id="sidebar">
    <header>
      <a href="#">My App</a>
    </header>
    <ul class="nav">
      <li>
        <a href="{{ route('home') }}">
          <i class="zmdi zmdi-view-dashboard"></i> Accueil
        </a>
      </li>
      <li>
        <a href="{{ route('all_services') }}">
          <i class="zmdi zmdi-link"></i> Services
        </a>
      </li>
      <li>
        <a href="#">
          <i class="zmdi zmdi-widgets"></i> Overview
        </a>
      </li>
      <li>
        <a href="#">
          <i class="zmdi zmdi-calendar"></i> Events
        </a>
      </li>
      <li>
        <a href="#">
          <i class="zmdi zmdi-info-outline"></i> About
        </a>
      </li>
      <li>
        <a href="#">
          <i class="zmdi zmdi-settings"></i> Services
        </a>
      </li>
      <li>
        <a href="#">
          <i class="zmdi zmdi-comment-more"></i> Contact
        </a>
      </li>
    </ul>
  </div>
  <!-- Content -->
  <div id="content">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="#"><i class="zmdi zmdi-notifications text-danger"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-user"></i>
              Test User
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container-fluid">
      @yield('content')
    </div>
  </div>
</div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
