.
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Domain Hosting Offers</title>
  <link rel="icon" type="image/png" href="{!! asset('master/img/logo.png') !!}">

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Barlow:400,700&display=swap" rel="stylesheet">
  <!-- Optional theme -->
  <link href="{!! asset('master/css/style.css') !!}" rel="stylesheet">
  <link href="{!! asset('master/css/owl.carousel.css') !!}" rel="stylesheet">
  <link href="{!! asset('master/css/owl.carousel.min.css') !!}" rel="stylesheet">
  <link href="{!! asset('master/css/owl.theme.green.css') !!}" rel="stylesheet">
  <link href="{!! asset('master/css/owl.theme.green.min.css') !!}" rel="stylesheet">
  <link rel="stylesheet" href="{!! asset('master/css/bootstrap-datetimepicker.css') !!}">
  <link rel="stylesheet" href="{!! asset('master/css/bootstrap-datetimepicker.min.css') !!}">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">



<body>
  <div class="wrapper">
    <div class="wrapper-inner">
      <header>
        <nav class="navbar navbar-expand-lg navbar-dark rounded">
          <a class="navbar-brand" href="{{route('/')}}"> <img src="{!! asset('master/img/logo.png') !!}" alt=""> </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a href="{{route('/')}}" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                <a href="{{route('DomainOffer')}}" class="nav-link">Domain Offers</a>
              </li>
              <li class="nav-item">
                <a href="{{route('HostingOffer')}}" class="nav-link">Hosting Offers</a>
              </li>
              <li class="nav-item">
                <a href="{{route('CombogOffer')}}" class="nav-link">Combo Offers</a>
              </li>
              <li class="nav-item">
                <a href="{{route('WebservergOffer')}}" class="nav-link">Web-Server offers</a>
              </li>
              <li class="nav-item">
                <ul class="side-menu">
                  <li class="nav-item">
                    <a href="{{route('SubmitOffer')}}" class="nav-link">Submit Offer</a>
                  </li>
                  <li class="nav-item"style="float:right;">
                          @if(null == Auth::user())
                          <a href="{{route('login')}}" class="nav-link"style="float:left; margin-right:5px;">Log in</a>
                          <a href="{{route('sign-up')}}" class="nav-link"style="float:right;margin-left:5px;">Sign up</a>
                          
                          </a>
                          @else
                              <a class="btn nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          {{Auth::user()->username}}
                          
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="float:right;">
                            <!-- <a class="dropdown-item" href="dashboard.php">My Account</a> -->
                            <a class="dropdown-item" href="{{route('Userdashboard')}}">Offer Management</a>
                            <a class="dropdown-item" href="#" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a>
                          </div>
                            <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                          @endif
                        </li>

                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>