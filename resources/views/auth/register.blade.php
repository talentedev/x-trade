<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="utf-8"/>
        <title>Register</title>
        <!-- ================== BEGIN BASE CSS STYLE ================== -->
        <link href="{{ asset('frontend_asset') }}/assets/css/transparent/app.min.css" rel="stylesheet"/>
        <!-- ================== END BASE CSS STYLE ================== -->
    </head>
 

 {{-- <script language=javascript>
    function checkform() {
    if (document.regform.fullname.value == '') {
        alert("Please enter your full name!");
        document.regform.fullname.focus();
        return false;
    }
    
    
    if (document.regform.username.value == '') {
        alert("Please enter your username!");
        document.regform.username.focus();
        return false;
    }
    if (!document.regform.username.value.match(/^[A-Za-z0-9_\-]+$/)) {
        alert("For username you should use English letters and digits only!");
        document.regform.username.focus();
        return false;
    }
    if (document.regform.password.value == '') {
        alert("Please enter your password!");
        document.regform.password.focus();
        return false;
    }
    if (document.regform.password.value != document.regform.password2.value) {
        alert("Please check your password!");
        document.regform.password2.focus();
        return false;
    }
    
    
    if (document.regform.email.value == '') {
        alert("Please enter your e-mail address!");
        document.regform.email.focus();
        return false;
    }
    if (document.regform.email.value != document.regform.email1.value) {
        alert("Please retype your e-mail!");
        document.regform.email.focus();
        return false;
    }

    for (i in document.regform.elements) {
        f = document.regform.elements[i];
        if (f.name && f.name.match(/^pay_account/)) {
        if (f.value == '') continue;
        var notice = f.getAttribute('data-validate-notice');
        var invalid = 0;
        if (f.getAttribute('data-validate') == 'regexp') {
            var re = new RegExp(f.getAttribute('data-validate-regexp'));
            if (!f.value.match(re)) {
            invalid = 1;
            }
        } else if (f.getAttribute('data-validate') == 'email') {
            var re = /^[^\@]+\@[^\@]+\.\w{2,4}$/;
            if (!f.value.match(re)) {
            invalid = 1;
            }
        }
        if (invalid) {
            alert('Invalid account format. Expected '+notice);
            f.focus();
            return false;
        }
        }
    }

    if (document.regform.agree.checked == false) {
        alert("You have to agree with the Terms and Conditions!");
        return false;
    }

    return true;
    }

    function IsNumeric(sText) {
    var ValidChars = "0123456789";
    var IsNumber=true;
    var Char;
    if (sText == '') return false;
    for (i = 0; i < sText.length && IsNumber == true; i++) {
        Char = sText.charAt(i);
        if (ValidChars.indexOf(Char) == -1) {
        IsNumber = false;
        }
    }
    return IsNumber;
    }
 </script> --}}
 




<body class="pace-top">
        <!-- begin #page-loader -->
        <div id="page-loader" class="fade show">
            <span class="spinner"></span>
        </div>
        <!-- end #page-loader -->
        <!-- begin #page-container -->
        <div id="page-container" class="fade">
            <!-- begin login -->
            <div class="login login-v1">
                <!-- begin login-container -->
                <div class="login-container">

                    <!-- begin login-header -->
                    <div class="login-header">
                        <div class="brand">
                            <img style="cursor: pointer" onclick="location.href='{{ url('/') }}';" src="{{ asset('frontend_asset') }}/images/log002.png" width="200px">
                            <small class="ml-2 mt-1">Register an account</small>
                        </div>
                        <div class="icon">
                            <i class="fa fa-user-plus"></i>
                        </div>
                    </div>
                    <!-- end login-header -->
                    <!-- begin login-body -->
                    <div class="login-body">

                        <!-- begin login-content -->
                        <div class="login-content">
                        <form class="margin-bottom-0"  method="POST" action="{{ route('register') }}">
                            @csrf
                            <input type="hidden" name="role" value="1">
                                <div class="form-group m-b-20">
                                    <input  id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Full name" autofocus>
                                </div>
                                <div class="form-group m-b-20">
                                    <input  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="email">
                                </div>
                                {{-- <script>
                                window.onload = function() {
                                        var src = document.getElementById("email"),
                                            dst = document.getElementById("email1");
                                        src.addEventListener('input', function() {
                                            dst.value = src.value;
                                        });
                                    };
                                </script> --}}
                                  <input type="text" id="email1" name="email1" value="" class="d-none">

                                <div class="form-group m-b-20">
                                    <input  id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                                </div>
                                <div class="form-group m-b-20">
                                    <input  id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                </div>
                                  
                                <div class="form-group m-b-20">

                             </div>
                                  <div class="text-center">
                                    <label for="remember_checkbox" style="color: #fff">
                                      By clicking below I accept the Terms and Conditions
                                    </label></div>


                                <div class="login-buttons">
                                        <button type="submit" class="btn btn-teal btn-block btn-lg">Register an account</button>
                                    </div>
                                    </div>
                            </form>                          
                        </div>
                        <!-- end login-content -->
                    </div>
                    <!-- end login-body -->
                </div>
                <!-- end login-container -->
            </div>
            <!-- end login -->
            <!-- begin scroll to top btn -->
            <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
            <!-- end scroll to top btn -->
        </div>
        <!-- end page container -->
        <!-- ================== BEGIN BASE JS ================== -->
        <script src="{{ asset('frontend_asset') }}/assets/js/app.min.js"></script>
        <script src="{{ asset('frontend_asset') }}/assets/js/theme/transparent.min.js"></script>
        <!-- ================== END BASE JS ================== -->
    </body>
</html>











{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
