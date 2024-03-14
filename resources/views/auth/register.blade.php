<!DOCTYPE html>
<html lang="en" class="h-100">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="UzimaSam">
		<meta name="author" content="UzimaSam">
		<title>Comrades Hub | Sign Up</title>

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
                                        Already have an account?<a class="sidebar-register-link" href="{{ route('login') }}">Sign in</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-6 col-md-7">
                                <div class="registration">
                                    <form role="form" method="POST" action="{{ route('register.perform') }}">
                                        @csrf
                                        @method('post')
                                        <h2 class="registration-title">Sign Up to Comrades Hub</h2>
                                        <div class="row mt-3">
										    <div class="col-lg-6 col-md-12">
                                                <div class="form-group mt-2">
                                                    <label class="form-label">First Name*</label>
                                                    <input class="form-control h_50" type="text" placeholder="First Name" value="{{ old('firstname') }}" required name="firstname">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group mt-2">
                                                    <label class="form-label">Last Name*</label>
                                                    <input class="form-control h_50" type="text" placeholder="Last Name" value="{{ old('lastname') }}" required name="lastname">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group mt-2">
                                                    <label class="form-label">Your Email*</label>
                                                    <input class="form-control h_50" type="email" placeholder="Enter your email" value="{{ old('email') }}" required name="email">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group mt-2">
                                                    <label class="form-label">Password*</label>
                                                    <div class="loc-group position-relative">
                                                        <input class="form-control h_50" type="password" placeholder="Password" required name="password">
                                                        <span class="pass-show-eye"><i class="fas fa-eye-slash"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group mt-2">
                                                    <label class="form-label">Confirm Password*</label>
                                                    <div class="loc-group position-relative">
                                                        <input class="form-control h_50" type="password" placeholder="Confirm" required name="password_confirmation">
                                                        <span class="pass-show-eye"><i class="fas fa-eye-slash"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="main-btn btn-hover w-100 mt-4" type="submit">Sign Up</button>
                                    </form>
                                    <div class="new-sign-link">
                                        Already have an account?<a class="signup-link" href="{{ route('login') }}">Sign in</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="copyright-footer">
                        ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script>, Comrades Hub. All rights reserved. Team Project
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
