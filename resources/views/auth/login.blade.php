<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>
    <link rel="icon" href="{{asset('template')}}/images/logo2.png">

    <!-- Fontfaces CSS-->
    <link href="{{asset('template')}}/css/font-face.css" rel="stylesheet" media="all">
    <link href="{{asset('template')}}/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="{{asset('template')}}/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="{{asset('template')}}/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('template')}}/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('template')}}/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="{{asset('template')}}/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="{{asset('template')}}/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="{{asset('template')}}/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="{{asset('template')}}/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="{{asset('template')}}/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="{{asset('template')}}/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('template')}}/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="{{asset('template')}}/images/logo2.png" height="90px" width="90px" alt="">
                                <h2>Wikrama</h2>
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="email">{{ __('E-Mail Address') }}</label>
                                    <input class="au-input au-input--full @error('email') is-invalid @enderror" type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">{{ __('Password') }}</label>
                                    <input class="au-input au-input--full @error('password') is-invalid @enderror" type="password" id="password" name="password" placeholder="Password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--blue m-b-20" type="submit">{{ __('Login') }}</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="register">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{asset('template')}}/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('template')}}/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="{{asset('template')}}/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('template')}}/vendor/slick/slick.min.js">
    </script>
    <script src="{{asset('template')}}/vendor/wow/wow.min.js"></script>
    <script src="{{asset('template')}}/vendor/animsition/animsition.min.js"></script>
    <script src="{{asset('template')}}/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="{{asset('template')}}/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="{{asset('template')}}/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="{{asset('template')}}/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="{{asset('template')}}/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{asset('template')}}/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="{{asset('template')}}/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="{{asset('template')}}/js/main.js"></script>

</body>

</html>
<!-- end document-->