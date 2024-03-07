<!DOCTYPE html>
<html lang="en" class="h-100">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="UzimaSam">
		<meta name="author" content="UzimaSam">
		<title>Comrades Hub</title>

		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="{{ asset('web/images/fav.png') }}">

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

<body class="d-flex flex-column h-100">
	<!-- Header Start-->
	<header class="header">
		<div class="header-inner">
			<nav class="navbar navbar-expand-lg bg-barren barren-head navbar fixed-top justify-content-sm-start pt-0 pb-0">
				<div class="container">
					<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
						<span class="navbar-toggler-icon">
							<i class="fa-solid fa-bars"></i>
						</span>
					</button>
					<a class="navbar-brand order-1 order-lg-0 ml-lg-0 ml-2 me-auto" href="index.html">
						<div class="res-main-logo">
							<img src="{{ asset('web/images/logo-icon.svg') }}" alt="">
						</div>
						<div class="main-logo" id="logo">
							<img src="{{ asset('web/images/logo.svg') }}" alt="">
							<img class="logo-inverse" src="{{ asset('web/images/dark-logo.svg') }}" alt="">
						</div>
					</a>
					<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
						<div class="offcanvas-header">
							<div class="offcanvas-logo" id="offcanvasNavbarLabel">
								<img src="{{ asset('web/images/logo-icon.svg') }}" alt="">
							</div>
							<button type="button" class="close-btn" data-bs-dismiss="offcanvas" aria-label="Close">
								<i class="fa-solid fa-xmark"></i>
							</button>
						</div>
						<div class="offcanvas-body">
							<div class="offcanvas-top-area">
								<div class="create-bg">
									<a href="create.html" class="offcanvas-create-btn">
										<i class="fa-solid fa-calendar-days"></i>
										<span>List Item</span>
									</a>
								</div>
								<div class="create-bg">
									<a href="create.html" class="offcanvas-create-btn">
										<i class="fa-solid fa-calendar-days"></i>
										<span>List Item</span>
									</a>
								</div>
							</div>
							<ul class="navbar-nav justify-content-end flex-grow-1 pe_5">
								<li class="nav-item">
									<a class="nav-link active" aria-current="page" href="index.html">Home</a>
								</li>
                                <li class="nav-item">
                                    <a class="nav-link" href="items.html">Listed Items</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="ads.html">Ads</a>
                                </li>
								<li class="nav-item">
									<a class="nav-link" href="sellers.html">Seller Profiles</a>
								</li>
							</ul>
						</div>
						<div class="offcanvas-footer">
							<div class="offcanvas-social">
								<h5>Follow Us</h5>
								<ul class="social-links">
									<li><a href="index.html#" class="social-link"><i class="fab fa-facebook-square"></i></a>
									<li><a href="index.html#" class="social-link"><i class="fab fa-instagram"></i></a>
									<li><a href="index.html#" class="social-link"><i class="fab fa-twitter"></i></a>
									<li><a href="index.html#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
									<li><a href="index.html#" class="social-link"><i class="fab fa-youtube"></i></a>
								</ul>
							</div>
						</div>
					</div>
					<div class="right-header order-2">
						<ul class="align-self-stretch">
							<li>
								<a href="create.html" class="create-btn btn-hover">
									<i class="fa-solid fa-plus"></i>
									<span>List Item</span>
								</a>
								<a href="create.html" class="create-btn btn-hover">
									<i class="fa-solid fa-bullhorn"></i>
									<span>Create Ad</span>
								</a>
							</li>
							<li class="dropdown account-dropdown">
								<a href="index.html#" class="account-link" role="button" id="accountClick" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
									<img src="{{ asset('web/tim.png') }}" alt="">
									<i class="fas fa-caret-down arrow-icon"></i>
								</a>
								<ul class="dropdown-menu dropdown-menu-account dropdown-menu-end" aria-labelledby="accountClick">
									<li>
										<div class="dropdown-account-header">
											<div class="account-holder-avatar">
												<img src="{{ asset('web/tim.png') }}" alt="">
											</div>
											<h5>John Doe</h5>
											<p>johndoe@example.com</p>
										</div>
									</li>
									<li class="profile-link">
                                        @auth
										    <a href="my_organisation_dashboard.html" class="link-item">My Seller Profile</a>
										    <a href="{{ route('profile') }}" class="link-item">My Account</a>
                                            <form role="form" method="post" action="{{ route('logout') }}" id="logout-form">
                                                @csrf
                                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                                    class="link-item">
                                                    <span class="d-sm-inline d-none">Sign out</span>
                                                </a>
                                            </form>
                                        @endauth
                                        @guest
                                            <a href="sign_in.html" class="link-item">Sign In</a>
                                            <a href="sign_up.html" class="link-item">Sign Up</a>
                                        @endguest
									</li>
								</ul>
							</li>
							<li>
								<div class="night_mode_switch__btn">
									<div id="night-mode" class="fas fa-moon fa-sun"></div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<div class="overlay"></div>
		</div>
	</header>
	<!-- Header End-->
    @yield('content')
	<!-- Footer Start-->
	<footer class="footer mt-auto">
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="footer-copyright-text">
							<p class="mb-0">© 2022, <strong>Comrades Hub</strong>. All rights reserved. Powered by UzimaSam</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer End-->


	<script src="{{ asset('web/js/jquery-3.6.0.min.js') }}"></script>
	<script src="{{ asset('web/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('web/vendor/OwlCarousel/owl.carousel.js') }}"></script>
	<script src="{{ asset('web/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('web/vendor/mixitup/dist/mixitup.min.js') }}"></script>
	<script src="{{ asset('web/js/custom.js') }}"></script>
	<script src="{{ asset('web/js/night-mode.js') }}"></script>
	<script>
		var containerEl = document.querySelector('[data-ref~="event-filter-content"]');

            var mixer = mixitup(containerEl, {
                selectors: {
                    target: '[data-ref~="mixitup-target"]'
                }
            });
	</script>
</body>
</html>
