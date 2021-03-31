<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="utf-8"/>
        <title>User Register</title>
        <!-- ================== BEGIN BASE CSS STYLE ================== -->
        <link href="{{ asset('frontend_asset') }}/assets/css/transparent/app.min.css" rel="stylesheet"/>
        <!-- ================== END BASE CSS STYLE ================== -->
    </head>
 




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
                            <input type="hidden" name="role" value="2">
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