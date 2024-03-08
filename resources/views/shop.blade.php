<!DOCTYPE html>
<html lang="en" class="h-100">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="UzimaSam">
		<meta name="author" content="UzimaSam">
		<title>Comrades Hub | Admin Dashboard</title>

		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="{{ asset('web/logo.png') }}">

		<!-- Stylesheets -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
		<link href='{{ asset('web/vendor/unicons-2.0.1/css/unicons.css') }}' rel='stylesheet'>
		<link href="{{ asset('web/css/style.css') }}" rel="stylesheet">
		<link href="{{ asset('web/css/vertical-responsive-menu.min.css') }}" rel="stylesheet">
		<link href="{{ asset('web/css/analytics.css') }}" rel="stylesheet">
		<link href="{{ asset('web/css/responsive.css') }}" rel="stylesheet">
		<link href="{{ asset('web/css/night-mode.css') }}" rel="stylesheet">

		<!-- Vendor Stylesheets -->
		<link href="{{ asset('web/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
		<link href="{{ asset('web/vendor/OwlCarousel/assets/owl.carousel.css') }}" rel="stylesheet">
		<link href="{{ asset('web/vendor/OwlCarousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">
		<link href="{{ asset('web/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('web/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
		<link href="{{ asset('web/vendor/chartist/dist/chartist.min.css') }}" rel="stylesheet">
		<link href="{{ asset('web/vendor/chartist-plugin-tooltip/dist/chartist-plugin-tooltip.css') }}" rel="stylesheet">

	</head>

<body class="d-flex flex-column h-100">
	<!-- Header Start-->
	<header class="header">
		<div class="header-inner">
			<nav class="navbar navbar-expand-lg bg-barren barren-head navbar fixed-top justify-content-sm-start pt-0 pb-0 ps-lg-0 pe-2">
				<div class="container-fluid ps-0">
					<button type="button" id="toggleMenu" class="toggle_menu">
						<i class="fa-solid fa-bars-staggered"></i>
					</button>
					<button id="collapse_menu" class="collapse_menu me-4">
						<i class="fa-solid fa-bars collapse_menu--icon "></i>
						<span class="collapse_menu--label"></span>
					</button>
					<button class="navbar-toggler order-3 ms-2 pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
						<span class="navbar-toggler-icon">
							<i class="fa-solid fa-bars"></i>
						</span>
					</button>
					<a class="navbar-brand order-1 order-lg-0 ml-lg-0 ml-2 me-auto" href="index.html">
						<div class="res-main-logo">
							<img src="{{ asset('web/logo.png') }}" alt="" style="width: 50px; height: 50px;">
						</div>
						<div class="main-logo" id="logo">
							<img src="{{ asset('web/logo.png') }}" alt="" style="width: 50px; height: 50px;">
							<img class="logo-inverse" src="{{ asset('web/logo.png') }}" alt="" style="width: 50px; height: 50px;">
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
	<!-- Left Sidebar Start -->
	<nav class="vertical_nav">
		<div class="left_section menu_left" id="js-menu">
			<div class="left_section">
				<ul>
					<li class="menu--item">
						<a href="my_organisation_dashboard.html" class="menu--link active" title="Dashboard" data-bs-toggle="tooltip" data-bs-placement="right">
							<i class="fa-solid fa-gauge menu--icon"></i>
							<span class="menu--label">Dashboard</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="my_organisation_dashboard_events.html" class="menu--link" title="Events" data-bs-toggle="tooltip" data-bs-placement="right">
							<i class="fa-solid fa-calendar-days menu--icon"></i>
							<span class="menu--label">Listed Items</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="my_organisation_dashboard_promotion.html" class="menu--link" title="Promotion" data-bs-toggle="tooltip" data-bs-placement="right">
							<i class="fa-solid fa-rectangle-ad menu--icon"></i>
							<span class="menu--label">Listed Ads</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="my_organisation_dashboard_contact_lists.html" class="menu--link" title="Contact List" data-bs-toggle="tooltip" data-bs-placement="right">
							<i class="fa-regular fa-address-card menu--icon"></i>
							<span class="menu--label">Sellers</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="my_organisation_dashboard_my_team.html" class="menu--link" title="My Team" data-bs-toggle="tooltip" data-bs-placement="right">
							<i class="fa-solid fa-user-group menu--icon"></i>
							<span class="menu--label">System Users</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="my_organisation_dashboard_conversion_setup.html" class="menu--link" title="Conversion Setup" data-bs-toggle="tooltip" data-bs-placement="right">
							<i class="fa-solid fa-square-plus menu--icon"></i>
							<span class="menu--label">Categories</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="my_organisation_dashboard_about.html" class="menu--link" title="About" data-bs-toggle="tooltip" data-bs-placement="right">
							<i class="fa-solid fa-circle-info menu--icon"></i>
							<span class="menu--label">About Shop</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Left Sidebar End -->
	<!-- Body Start -->
	<div class="wrapper wrapper-body">
		<div class="dashboard-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="d-main-title">
							<h3><i class="fa-solid fa-gauge me-3"></i>Dashboard</h3>
						</div>
					</div>
					<div class="col-md-12">
						<div class="main-card add-organisation-card p-4 mt-5">
							<div class="ocard-left">
								<div class="ocard-avatar">
									<img src="images/profile-imgs/img-13.jpg" alt="">
								</div>
								<div class="ocard-name">
									<h4>John Doe</h4>
									<span>My Organisation</span>
								</div>
							</div>
							<div class="ocard-right">
								<button class="pe-4 ps-4 co-main-btn min-width" data-bs-toggle="modal" data-bs-target="#addorganisationModal"><i class="fa-solid fa-plus"></i>Add Organisation</button>
							</div>
						</div>
						<div class="main-card mt-4">
							<div class="dashboard-wrap-content">
								<div class="d-flex flex-wrap justify-content-between align-items-center p-4">
									<div class="dashboard-date-wrap d-flex flex-wrap justify-content-between align-items-center">
										<div class="dashboard-date-arrows">
											<a href="my_organisation_dashboard.html#" class="before_date"><i class="fa-solid fa-angle-left"></i></a>
											<a href="my_organisation_dashboard.html#" class="after_date disabled"><i class="fa-solid fa-angle-right"></i></a>
										</div>
										<h5 class="dashboard-select-date">
											<span>1st April, 2022</span>
											-
											<span>30th April, 2022</span>
										</h5>
									</div>
									<div class="rs">
										<div class="dropdown dropdown-text event-list-dropdown">
											<button class="dropdown-toggle event-list-dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
												<span>Selected Events (1)</span>
											</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="my_organisation_dashboard.html#">1</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="dashboard-report-content">
									<div class="row">
										<div class="col-xl-3 col-lg-6 col-md-6">
											<div class="dashboard-report-card purple">
												<div class="card-content">
													<div class="card-content">
														<span class="card-title fs-6">Revenue (AUD)</span>
														<span class="card-sub-title fs-3">$550.00</span>
														<div class="d-flex align-items-center">
															<span><i class="fa-solid fa-arrow-trend-up"></i></span>
															<span class="text-Light font-12 ms-2 me-2">0.00%</span>
															<span class="font-12 color-body text-nowrap">From Previous Period</span>
														</div>
													</div>
													<div class="card-media">
														<i class="fa-solid fa-money-bill"></i>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6 col-md-6">
											<div class="dashboard-report-card red">
												<div class="card-content">
													<div class="card-content">
														<span class="card-title fs-6">Orders</span>
														<span class="card-sub-title fs-3">2</span>
														<div class="d-flex align-items-center">
															<span><i class="fa-solid fa-arrow-trend-up"></i></span>
															<span class="text-Light font-12 ms-2 me-2">0.00%</span>
															<span class="font-12 color-body text-nowrap">From Previous Period</span>
														</div>
													</div>
													<div class="card-media">
														<i class="fa-solid fa-box"></i>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6 col-md-6">
											<div class="dashboard-report-card info">
												<div class="card-content">
													<div class="card-content">
														<span class="card-title fs-6">Page Views</span>
														<span class="card-sub-title fs-3">30</span>
														<div class="d-flex align-items-center">
															<span><i class="fa-solid fa-arrow-trend-up"></i></span>
															<span class="text-Light font-12 ms-2 me-2">0.00%</span>
															<span class="font-12 color-body text-nowrap">From Previous Period</span>
														</div>
													</div>
													<div class="card-media">
														<i class="fa-solid fa-eye"></i>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6 col-md-6">
											<div class="dashboard-report-card success">
												<div class="card-content">
													<div class="card-content">
														<span class="card-title fs-6">Ticket Sales</span>
														<span class="card-sub-title fs-3">3</span>
														<div class="d-flex align-items-center">
															<span><i class="fa-solid fa-arrow-trend-up"></i></span>
															<span class="text-Light font-12 ms-2 me-2">0.00%</span>
															<span class="font-12 color-body text-nowrap">From Previous Period</span>
														</div>
													</div>
													<div class="card-media">
														<i class="fa-solid fa-ticket"></i>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="main-card mt-4">
							<div class="d-flex flex-wrap justify-content-between align-items-center border_bottom p-4">
								<div class="dashboard-date-wrap d-flex flex-wrap justify-content-between align-items-center">
									<div class="select-graphic-category">
										<div class="form-group main-form mb-2">
											<select class="selectpicker" data-width="150px">
												<option value="revenue">Revenue</option>
												<option value="orders">Orders</option>
												<option value="pageviews">Page Views</option>
												<option value="ticketsales">Ticket Sales</option>
											</select>
										</div>
										<small class="mt-4">See the graphical representation below</small>
									</div>
								</div>
								<div class="rs">
									<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
										<input type="radio" class="btn-check" name="btnradio" id="btnradio1">
										<label class="btn btn-outline-primary" for="btnradio1">Monthly</label>
										<input type="radio" class="btn-check" name="btnradio" id="btnradio2" checked>
										<label class="btn btn-outline-primary" for="btnradio2">Weekly</label>
										<input type="radio" class="btn-check" name="btnradio" id="btnradio3">
										<label class="btn btn-outline-primary" for="btnradio3">Dailty</label>
									</div>
								</div>
							</div>
							<div class="item-analytics-content p-4 ps-1 pb-2">
								<div id="views-graphic"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Body End -->


	<script src="{{ asset('web/js/vertical-responsive-menu.min.js') }}"></script>
	<script src="{{ asset('web/js/jquery-3.6.0.min.js') }}"></script>
	<script src="{{ asset('web/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('web/vendor/OwlCarousel/owl.carousel.js') }}"></script>
	<script src="{{ asset('web/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('web/vendor/chartist/dist/chartist.min.js') }}"></script>
	<script src="{{ asset('web/vendor/chartist-plugin-tooltip/dist/chartist-plugin-tooltip.min.js') }}"></script>
	<script src="{{ asset('web/js/analytics.js') }}"></script>
	<script src="{{ asset('web/js/custom.js') }}"></script>
	<script src="{{ asset('web/js/night-mode.js') }}"></script>

</body>
</html>
