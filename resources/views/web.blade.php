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
					<a class="navbar-brand order-1 order-lg-0 ml-lg-0 ml-2 me-auto" href="{{ route('home') }}">
						<div class="res-main-logo">
							<img src="{{ asset('web/logo.png') }}" alt="">
						</div>
						<div class="main-logo" id="logo">
							<img src="{{ asset('web/logo.png') }}" alt="" style="width: 50px;">
							<img class="logo-inverse" src="{{ asset('web/logo.png') }}" alt="" style="width: 50px;">
						</div>
					</a>
					<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
						<div class="offcanvas-header">
							<div class="offcanvas-logo" id="offcanvasNavbarLabel">
								<img src="{{ asset('web/logo.png') }}" alt="">
							</div>
							<button type="button" class="close-btn" data-bs-dismiss="offcanvas" aria-label="Close">
								<i class="fa-solid fa-xmark"></i>
							</button>
						</div>
						<div class="offcanvas-body">
							<ul class="navbar-nav justify-content-end flex-grow-1 pe_5">
								<li class="nav-item">
									<a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Home</a>
								</li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Route::currentRouteName() == 'items' ? 'active' : '' }}" href="{{ route('items') }}">Listed Items</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Route::currentRouteName() == 'ads' ? 'active' : '' }}" href="{{ route('ads') }}">Ads</a>
                                </li>
								<li class="nav-item">
									<a class="nav-link {{ Route::currentRouteName() == 'sellers' ? 'active' : '' }}" href="{{ route('sellers') }}">Seller Profiles</a>
								</li>
							</ul>
						</div>
                        <div class="offcanvas-footer">
                            <div class="create-bg pt-4">
                                <a href="create.html" class="offcanvas-create-btn">
									<i class="fa-solid fa-plus"></i>
									<span>List Item</span>
                                </a>
                            </div>
                            <div class="create-bg pt-2">
                                <a href="create.html" class="offcanvas-create-btn">
									<i class="fa-solid fa-bullhorn"></i>
									<span>Create Ad</span>
                                </a>
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
                                            @auth
                                                <div class="account-holder-avatar">
                                                    <img src="{{ asset('web/tim.png') }}" alt="">
                                                </div>
                                                <h5>{{ auth()->user()->name }}</h5>
                                                <p>{{ auth()->user()->email }}</p>
                                            @else
											    <div class="account-holder-avatar">
												    <img src="{{ asset('web/logo.png') }}" alt="">
											    </div>
											    <h5>Guest</h5>
                                                <p>Login or Register</p>
                                            @endauth
										</div>
									</li>
									<li class="profile-link">
                                        @auth
                                            @if (auth()->user()->isAdmin())
                                                <a href="{{ route('admin.dashboard') }}" class="link-item">Admin Dashboard</a>
                                            @endif
                                            @if (auth()->user()->isSeller())
                                                <a href="{{ route('seller.dashboard') }}" class="link-item">My Seller Dashboard</a>
                                            @else
                                                <a href="{{ route('create.seller') }}" class="link-item">Become a Seller</a>
                                            @endif
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
                                            <a href="{{ route('login') }}" class="link-item">Sign In</a>
                                            <a href="{{ route('register') }}" class="link-item">Sign Up</a>
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
