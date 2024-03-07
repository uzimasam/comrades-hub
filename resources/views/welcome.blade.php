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
										    <a href="organiser_profile_view.html" class="link-item">My Account</a>
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
	<!-- Body Start-->
	<div class="wrapper">
		<div class="hero-banner">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xl-7 col-lg-9 col-md-10">
						<div class="hero-banner-content">
							<h2>Comrades Hub</h2>
							<p>
								Comrades Hub is an all-in-one platform for comrades to buy and sell items, post and view events, and connect with other comrades.
							</p>
							<a href="create.html" class="main-btn btn-hover">Sell Item <i class="fa-solid fa-arrow-right ms-3"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="explore-events p-80">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="main-title">
							<h3>Listed Ads and Events</h3>
						</div>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="event-filter-items">
							<div class="featured-controls">
								<div class="controls">
									<button type="button" class="control" data-filter="all">All</button>
									<button type="button" class="control" data-filter=".arts">Arts</button>
									<button type="button" class="control" data-filter=".business">Business</button>
									<button type="button" class="control" data-filter=".concert">Concert</button>
									<button type="button" class="control" data-filter=".workshops">Workshops</button>
									<button type="button" class="control" data-filter=".coaching_consulting">Coaching and Consulting</button>
									<button type="button" class="control" data-filter=".health_Wellness">Health and Wellbeing</button>
									<button type="button" class="control" data-filter=".volunteer">Volunteer</button>
									<button type="button" class="control" data-filter=".sports">Sports</button>
									<button type="button" class="control" data-filter=".free">Free</button>
								</div>
								<div class="row" data-ref="event-filter-content">
									<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix arts concert workshops volunteer sports health_Wellness" data-ref="mixitup-target">
										<div class="main-card mt-4">
											<div class="event-thumbnail">
												<a href="venue_event_detail_view.html" class="thumbnail-img">
													<img src="images/event-imgs/img-1.jpg" alt="">
												</a>
												<span class="bookmark-icon" title="Bookmark"></span>
											</div>
											<div class="event-content">
												<a href="venue_event_detail_view.html" class="event-title">A New Way Of Life</a>
												<div class="duration-price-remaining">
													<span class="duration-price">AUD $100.00*</span>
													<span class="remaining"></span>
												</div>
											</div>
											<div class="event-footer">
												<div class="event-timing">
													<div class="publish-date">
														<span><i class="fa-solid fa-calendar-day me-2"></i>15 Apr</span>
														<span class="dot"><i class="fa-solid fa-circle"></i></span>
														<span>Fri, 3.45 PM</span>
													</div>
													<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>1h</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix business workshops volunteer sports health_Wellness" data-ref="mixitup-target">
										<div class="main-card mt-4">
											<div class="event-thumbnail">
												<a href="online_event_detail_view.html" class="thumbnail-img">
													<img src="images/event-imgs/img-2.jpg" alt="">
												</a>
												<span class="bookmark-icon" title="Bookmark"></span>
											</div>
											<div class="event-content">
												<a href="online_event_detail_view.html" class="event-title">Earrings Workshop with Bronwyn David</a>
												<div class="duration-price-remaining">
													<span class="duration-price">AUD $75.00*</span>
													<span class="remaining"><i class="fa-solid fa-ticket fa-rotate-90"></i>6 Remaining</span>
												</div>
											</div>
											<div class="event-footer">
												<div class="event-timing">
													<div class="publish-date">
														<span><i class="fa-solid fa-calendar-day me-2"></i>30 Apr</span>
														<span class="dot"><i class="fa-solid fa-circle"></i></span>
														<span>Sat, 11.20 PM</span>
													</div>
													<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>2h</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix coaching_consulting free concert volunteer health_Wellness bussiness" data-ref="mixitup-target">
										<div class="main-card mt-4">
											<div class="event-thumbnail">
												<a href="venue_event_detail_view.html" class="thumbnail-img">
													<img src="images/event-imgs/img-3.jpg" alt="">
												</a>
												<span class="bookmark-icon" title="Bookmark"></span>
											</div>
											<div class="event-content">
												<a href="venue_event_detail_view.html" class="event-title">Spring Showcase Saturday April 30th 2022 at 7pm</a>
												<div class="duration-price-remaining">
													<span class="duration-price">Free*</span>
													<span class="remaining"></span>
												</div>
											</div>
											<div class="event-footer">
												<div class="event-timing">
													<div class="publish-date">
														<span><i class="fa-solid fa-calendar-day me-2"></i>1 May</span>
														<span class="dot"><i class="fa-solid fa-circle"></i></span>
														<span>Sun, 4.30 PM</span>
													</div>
													<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>3h</span>
												</div>
											</div>
										</div>
									</div>
									<div class=" col-xl-3 col-lg-4 col-md-6 col-sm-12 mix health_Wellness concert volunteer sports free business" data-ref="mixitup-target">
										<div class="main-card mt-4">
											<div class="event-thumbnail">
												<a href="online_event_detail_view.html" class="thumbnail-img">
													<img src="images/event-imgs/img-4.jpg" alt="">
												</a>
												<span class="bookmark-icon" title="Bookmark"></span>
											</div>
											<div class="event-content">
												<a href="online_event_detail_view.html" class="event-title">Shutter Life</a>
												<div class="duration-price-remaining">
													<span class="duration-price">AUD $85.00</span>
													<span class="remaining"><i class="fa-solid fa-ticket fa-rotate-90"></i>7 Remaining</span>
												</div>
											</div>
											<div class="event-footer">
												<div class="event-timing">
													<div class="publish-date">
														<span><i class="fa-solid fa-calendar-day me-2"></i>1 May</span>
														<span class="dot"><i class="fa-solid fa-circle"></i></span>
														<span>Sun, 5.30 PM</span>
													</div>
													<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>1h</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix concert sports health_Wellness free arts" data-ref="mixitup-target">
										<div class="main-card mt-4">
											<div class="event-thumbnail">
												<a href="venue_event_detail_view.html" class="thumbnail-img">
													<img src="images/event-imgs/img-5.jpg" alt="">
												</a>
												<span class="bookmark-icon" title="Bookmark"></span>
											</div>
											<div class="event-content">
												<a href="venue_event_detail_view.html" class="event-title">Friday Night Dinner at The Old Station May 27 2022</a>
												<div class="duration-price-remaining">
													<span class="duration-price">AUD $41.50*</span>
													<span class="remaining"></span>
												</div>
											</div>
											<div class="event-footer">
												<div class="event-timing">
													<div class="publish-date">
														<span><i class="fa-solid fa-calendar-day me-2"></i>27 May</span>
														<span class="dot"><i class="fa-solid fa-circle"></i></span>
														<span>Fri, 12.00 PM</span>
													</div>
													<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>5h</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix workshops concert arts volunteer sports" data-ref="mixitup-target">
										<div class="main-card mt-4">
											<div class="event-thumbnail">
												<a href="venue_event_detail_view.html" class="thumbnail-img">
													<img src="images/event-imgs/img-6.jpg" alt="">
												</a>
												<span class="bookmark-icon" title="Bookmark"></span>
											</div>
											<div class="event-content">
												<a href="venue_event_detail_view.html" class="event-title">Step Up Open Mic Show</a>
												<div class="duration-price-remaining">
													<span class="duration-price">AUD $200.00*</span>
													<span class="remaining"></span>
												</div>
											</div>
											<div class="event-footer">
												<div class="event-timing">
													<div class="publish-date">
														<span><i class="fa-solid fa-calendar-day me-2"></i>30 Jun</span>
														<span class="dot"><i class="fa-solid fa-circle"></i></span>
														<span>Thu, 4.30 PM</span>
													</div>
													<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>1h</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix volunteer free health_Wellness" data-ref="mixitup-target">
										<div class="main-card mt-4">
											<div class="event-thumbnail">
												<a href="online_event_detail_view.html" class="thumbnail-img">
													<img src="images/event-imgs/img-7.jpg" alt="">
												</a>
												<span class="bookmark-icon" title="Bookmark"></span>
											</div>
											<div class="event-content">
												<a href="online_event_detail_view.html" class="event-title">Tutorial on Canvas Painting for Beginners</a>
												<div class="duration-price-remaining">
													<span class="duration-price">AUD $50.00*</span>
													<span class="remaining"><i class="fa-solid fa-ticket fa-rotate-90"></i>17 Remaining</span>
												</div>
											</div>
											<div class="event-footer">
												<div class="event-timing">
													<div class="publish-date">
														<span><i class="fa-solid fa-calendar-day me-2"></i>17 Jul</span>
														<span class="dot"><i class="fa-solid fa-circle"></i></span>
														<span>Sun, 5.30 PM</span>
													</div>
													<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>1h</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix sports concert volunteer arts" data-ref="mixitup-target">
										<div class="main-card mt-4">
											<div class="event-thumbnail">
												<a href="venue_event_detail_view.html" class="thumbnail-img">
													<img src="images/event-imgs/img-8.jpg" alt="">
												</a>
												<span class="bookmark-icon" title="Bookmark"></span>
											</div>
											<div class="event-content">
												<a href="venue_event_detail_view.html" class="event-title">Trainee Program on Leadership' 2022</a>
												<div class="duration-price-remaining">
													<span class="duration-price">AUD $120.00*</span>
													<span class="remaining"><i class="fa-solid fa-ticket fa-rotate-90"></i>7 Remaining</span>
												</div>
											</div>
											<div class="event-footer">
												<div class="event-timing">
													<div class="publish-date">
														<span><i class="fa-solid fa-calendar-day me-2"></i>20 Jul</span>
														<span class="dot"><i class="fa-solid fa-circle"></i></span>
														<span>Wed, 11.30 PM</span>
													</div>
													<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>12h</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="our-organisations-block p-80">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="main-title text-center">
							<h3>321+ items listed by comrades all over</h3>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="organisations-area">
							<div class="owl-carousel organisations-slider owl-theme">
								<div class="item">
									<div class="sponsor">
										<a href="index.html#"><img src="{{ asset('web/images/icons/sponsor-1.png') }}" alt=""></a>
									</div>
								</div>
								<div class="item">
									<div class="sponsor">
										<a href="index.html#"><img src="{{ asset('web/images/icons/sponsor-2.png') }}" alt=""></a>
									</div>
								</div>
								<div class="item">
									<div class="sponsor">
										<a href="index.html#"><img src="{{ asset('web/images/icons/sponsor-3.png') }}" alt=""></a>
									</div>
								</div>
								<div class="item">
									<div class="sponsor">
										<a href="index.html#"><img src="{{ asset('web/images/icons/sponsor-4.png') }}" alt=""></a>
									</div>
								</div>
								<div class="item">
									<div class="sponsor">
										<a href="index.html#"><img src="{{ asset('web/images/icons/sponsor-5.png') }}" alt=""></a>
									</div>
								</div>
								<div class="item">
									<div class="sponsor">
										<a href="index.html#"><img src="{{ asset('web/images/icons/sponsor-6.png') }}" alt=""></a>
									</div>
								</div>
								<div class="item">
									<div class="sponsor">
										<a href="index.html#"><img src="{{ asset('web/images/icons/sponsor-7.png') }}" alt=""></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Body End-->
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
