<!DOCTYPE html>
<html lang="en" class="h-100">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="UzimaSam">
		<meta name="author" content="UzimaSam">
		<title>Comrades Hub | Password Reset</title>

		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="{{ asset('web/logo.png') }}">

		<!-- Stylesheets -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
		<link href='{{ asset('web/vendor/unicons-2.0.1/css/unicons.css') }}' rel='stylesheet'>
		<link href="{{ asset('web/css/style.css') }}" rel="stylesheet">
		<link href="{{ asset('web/css/responsive.css') }}" rel="stylesheet">
		<link href="{{ asset('web/css/night-mode.css') }}" rel="stylesheet">

		<!-- Vendor Stylesheets -->
		<link href="{{ asset('web/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
		<link href="{{ asset('web/vendor/OwlCarousel/assets/owl.carousel.css') }}" rel="stylesheet">
		<link href="{{ asset('web/vendor/OwlCarousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">
		<link href="{{ asset('web/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('web/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
	</head>
    <body>
        <div class="form-wrapper">
            <div class="app-form">
                <div class="app-form-sidebar">
                    <div class="sidebar-sign-logo">
                        <img src="{{ asset('web/logo.png') }}" alt="">
                    </div>
                    <div class="sign_sidebar_text">
                        <h1>The Easiest Way to buy, sell and advertise</h1>
                    </div>
                </div>
                <div class="app-form-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 col-md-10">
                                <div class="app-top-items">
                                    <a href="index.html">
                                        <div class="sign-logo" id="logo">
                                            <img src="{{ asset('web/logo.png') }}" alt="">
                                            <img class="logo-inverse" src="{{ asset('web/logo.png') }}" alt="">
                                        </div>
                                    </a>
                                    <div class="app-top-right-link">
                                        Remembered Password?<a class="sidebar-register-link" href="{{ route('login') }}">Sign In</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-6 col-md-7">
                                <div class="registration">
                                    <form role="form" method="POST" action="{{ route('reset.perform') }}">
                                        @csrf
                                        @method('post')
                                        <h2 class="registration-title">Forgot Password</h2>
                                        <div class="form-group mt-5">
                                            <label class="form-label">Your Email*</label>
                                            <input class="form-control h_50" type="email" placeholder="Enter your email" value="{{ old('email') }}" required name="email">
                                        </div>
                                        <button class="main-btn btn-hover w-100 mt-4" type="submit">Reset Password</button>
                                    </form>
                                    <div class="new-sign-link">
                                        Remenbered Password?<a class="signup-link" href="{{ route('login') }}">Sign In</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="copyright-footer">
                        © 2022, Comrades Hub. All rights reserved. Powered by UzimaSam
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ asset('web/js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('web/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('web/vendor/OwlCarousel/owl.carousel.js') }}"></script>
        <script src="{{ asset('web/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
        <script src="{{ asset('web/js/custom.js') }}"></script>
        <script src="{{ asset('web/js/night-mode.js') }}"></script>

    </body>
</html>
