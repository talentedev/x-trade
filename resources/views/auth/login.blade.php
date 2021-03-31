<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="utf-8"/>
        <title>Login</title>
        <!-- ================== BEGIN BASE CSS STYLE ================== -->
        <link href="{{ asset('frontend_asset') }}/assets/css/transparent/app.min.css" rel="stylesheet"/>
        <!-- ================== END BASE CSS STYLE ================== -->
        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
      <link rel="icon" type="{{ asset('frontend_asset') }}/image/png" sizes="32x32" href="favicon-32x32.png">
      <link rel="icon" type="{{ asset('frontend_asset') }}/image/png" sizes="16x16" href="favicon-16x16.png">
    </head>


<script language=javascript>
function checkform() {
  if (document.mainform.username.value=='') {
    alert("Please type your username!");
    document.mainform.username.focus();
    return false;
  }
  if (document.mainform.password.value=='') {
    alert("Please type your password!");
    document.mainform.password.focus();
    return false;
  }
  return true;
}
</script>






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
                            <small class="ml-2 mt-1">Login to your account</small>
                        </div>
                        <div class="icon">
                            <i class="fa fa-lock"></i>
                        </div>
                    </div>
                    <!-- end login-header -->
                    <!-- begin login-body -->
                    <div class="login-body">
                            <!-- begin login-content -->
                        <div class="login-content">
                          <form method=post name=mainform onsubmit="return checkform()"><input type="hidden" name="form_id" value="16150457249824"><input type="hidden" name="form_token" value="207195bac524b891b134d828350f79ae">
                          <input type=hidden name=a value='do_login'>
                          <input type=hidden name=follow value=''>
                          <input type=hidden name=follow_id value=''>
                            <form class="margin-bottom-0"  method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group m-b-20">
                                    <input  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email" type="text" class="form-control form-control-lg inverse-mode" >
                                </div>
                                <div class="form-group m-b-20">
                                    <input type="password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your password" class="form-control form-control-lg inverse-mode">
                                </div>

                                
                                <div class="login-buttons">
                                    <button type="submit" class="btn btn-teal btn-block btn-lg">Sign In</button>
                                    <div class="text-center">

                                      <div class="row pt-4">
                                        <div class="col-7 text-center">
                                          No account?
                                          <a class="text-teal" href="{{ route('register') }}">Register here!</a>
                                        </div>
                                        <div class="col-5 text-center">
                                          <a href="{{ route('password.request') }}" class="text-muted">Forgot Password?</a>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div></form>
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








{{-- <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Login | Dashboard</title>

    <!-- vendor css -->
    <link href="{{ asset('dashboard_asset') }}/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{ asset('dashboard_asset') }}/lib/Ionicons/css/ionicons.css" rel="stylesheet">


    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard_asset') }}/css/starlight.css">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
        <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">{{ env('APP_NAME') }}</div>
        <div class="tx-center mg-b-60">Heath Care Website</div>

        <form method="POST" action="{{ route('login') }}">
            @csrf
        <div class="form-group">
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email">
        </div><!-- form-group -->
        <div class="form-group">
          <input  id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your password">
          <a href="{{ route('password.request') }}" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
        </div><!-- form-group -->
            <div  class="form-check form-group">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                Remember Me
            </div>
        <button type="submit" class="btn btn-info btn-block">Sign In</button>
        </form>
        <div class="mg-t-60 tx-center">Not yet a member? <a href="page-signup.html" class="tx-info">Sign Up</a></div>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

    <script src="{{ asset('dashboard_asset') }}/lib/jquery/jquery.js"></script>
    <script src="{{ asset('dashboard_asset') }}/lib/popper.js/popper.js"></script>
    <script src="{{ asset('dashboard_asset') }}/lib/bootstrap/bootstrap.js"></script>

  </body>
</html> --}}
