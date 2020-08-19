<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/preview-equation/default/user_register_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Aug 2020 13:25:01 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>SWAMP MS </title>
    <link rel="icon" type="image/x-icon" href="{{asset('asset/assets/img/favicon.ico')}}"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="{{asset('asset/assets/css/loader.css')}}" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="{{asset('asset/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('asset/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('asset/assets/css/users/register-2.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->    
</head>
<body class="register">
    <div id="eq-loader">
      <div class="eq-loader-div">
          <div class="eq-loading dual-loader mx-auto mb-5"></div>
      </div>
    </div>

       <form method="POST" class="form-register" action="{{ route('cooperative.register') }}" aria-label="{{ __('Register') }}">
                        @csrf
        <div class="row">
            <div class="col-md-12 text-center mb-4">
                <img alt="logo" src="{{asset('asset/assets/img/swamp_logo.jpeg')}}" style="width:200px;height:80px;" class="theme-logo">
            </div>

            <div class="col-md-12">

                <label for="username" class="sr-only">Names</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="icon-username"><i class="flaticon-user-7"></i> </span>
                    </div>
                    <input placeholder="Names" id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                </div>

                <label for="inputEmail" class="sr-only">Email address</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="icon-inputEmail"><i class="flaticon-email-fill-2"></i> </span>
                    </div>
                    <input id="email" placeholder="Email Address" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                </div>
                
                <label for="inputPassword" class="sr-only">Password</label>
                
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="icon-inputPassword"><i class="flaticon-key-2"></i> </span>
                    </div>
                    <input id="password" placeholder="Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                </div>

                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="icon-inputPassword"><i class="flaticon-key-2"></i> </span>
                    </div>
                    <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required>

                           
                </div>
                
                <div class="checkbox d-flex justify-content-center mt-3">
                    <div class="custom-control custom-checkbox mr-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" value="remember-me">
                        <label class="custom-control-label" for="customCheck1">Remember me</label>
                    </div>                    
                </div>
                
                <button class="btn btn-lg btn-gradient-warning btn-block btn-rounded mb-4 mt-5" type="submit">Register</button>
                 <div class="forgot-pass text-center">
                    <a href="user_pass_recovery_2.html">Forgot Password ?</a>
                </div>

            </div>

        </div>
    </form>
    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('asset/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('asset/assets/js/loader.js')}}"></script>
    <script src="{{asset('asset/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('asset/bootstrap/js/bootstrap.min.js')}}"></script>
    
    <!-- END GLOBAL MANDATORY SCRIPTS -->
</body>

<!-- Mirrored from designreset.com/preview-equation/default/user_register_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Aug 2020 13:25:02 GMT -->
</html>