<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, shrink-to-fit=9">
        <meta name="description" content="Gambolthemes">
        <meta name="author" content="Gambolthemes">
        <title>Domain Hosting Offer - Login Now</title>
		
        <!-- Favicon Icon -->
        <link rel="icon" type="image/png" href="{!! asset('master/img/logo.png') !!}">
		
        <!-- Stylesheets -->
        <link href="{!! asset('master/css/responsive.css') !!}" rel="stylesheet">
        <link href="{!! asset('master/css/style2.css') !!}" rel="stylesheet">
        <link href="{!! asset('master/css/datepicker.min.css') !!}" rel="stylesheet">
        <link href="{!! asset('master/css/bootstrap.min.css') !!}" rel="stylesheet">
        <link href="{!! asset('master/css/all.min.css') !!}" rel="stylesheet">
    
    </head>

    <body class="body-bg" oncontextmenu="return false;">				
        <!-- Body Start -->	
        <main class="register-mp">	
            <div class="main-section">
                <div class="container">					
                    <div class="row justify-content-md-center">
                        <div class="col-md-10">
                            <div class="login-register-bg">
                                <div class="row no-gutters">
                                    <div class="col-lg-6">
                                        <div class="lg-left">
                                            <div class="lg-logo">
                                                <a href="{{route('/')}}"><img src="{!! asset('master/img/logo.png') !!}" alt=""></a>
                                            </div>
                                            <div class="lr-text">
                                                <h2>Domain Hosting Offer</h2>
                                                <!-- <p>Domain Hosting Offer a brand of Innovadeus Pvt Ltd.</p> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="lr-right">
                                        <h4>Sign In to Domain Hosting Offer</h4>
                                            <div class="login-register-form">
                                            @include("layouts.includes.flash")
                                            <form class="form-horizontal" method="POST" action="{{ route('user.login') }}">
                                                    {{ csrf_field() }}
                                                    <div class="form-group">									
                                                        <input class="title-discussion-input{{ $errors->has('username') ? ' has-error' : '' }}" type="text" name="username" placeholder="Your user name / email" value="{{ old('username') }}" required>
                                                        @if ($errors->has('username'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('username') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">									
                                                        <input class="title-discussion-input{{ $errors->has('username') ? ' has-error' : '' }}" type="password" name="password" placeholder="Password" required>
                                                        @if ($errors->has('password'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                    <button class="login-btn" type="submit">Login Now</button>
                                                </form>
                                                <!-- <a href="{{ route('password.request')}}" class="forgot-link">Forgot Password?</a> -->
                                                <div class="regstr-link">Don’t have an account? <a href="{{route('sign-up')}}">Register Now</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>							
                    </div>										
										
                </div>
            </div>
        </main>
        <!-- Body End -->			
        @include('layouts.master_layout.footer')

