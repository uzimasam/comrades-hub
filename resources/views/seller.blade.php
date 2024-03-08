<!DOCTYPE html>
<html lang="en" class="h-100">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="UzimaSam">
		<meta name="author" content="UzimaSam">
		<title>Barren - Simple Online Event Ticketing System</title>

		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="images/fav.png">

		<!-- Stylesheets -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
		<link href='vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
		<link href="css/style.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">
		<link href="css/night-mode.css" rel="stylesheet">

		<!-- Vendor Stylesheets -->
		<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
		<link href="vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
		<link href="vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">

	</head>

<body class="d-flex flex-column h-100">
	<!-- Follow People Model Start-->
	<div class="modal fade" id="FFModal" tabindex="-1" aria-labelledby="FFModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="FFModalLabel">Following & Followers</h5>
					<button type="button" class="close-model-btn" data-bs-dismiss="modal" aria-label="Close"><i class="uil uil-multiply"></i></button>
				</div>
				<div class="modal-body">
					<div class="model-content follow-people-content">
						<div class="">
							<ul class="nav nav-pills ff-tablist mb-2" role="tablist">
								<li class="nav-item d-flex me-4">
									<a class="nav-link px-0 pt-0 pb-3 active" id="pills-following-tab" data-bs-toggle="pill" href="attendee_profile_view.html#following" role="tab" aria-controls="following" aria-selected="true">Following <span class="following_count">(2)</span></a>
								</li>
										<li class="nav-item d-flex">
									<a class="nav-link px-0 pt-0 pb-3" id="pills-followers-tab" data-bs-toggle="pill" href="attendee_profile_view.html#followers" role="tab" aria-controls="followers" aria-selected="false">Followers  </a>
								</li>
							</ul>
							<div class="tab-content mt-4">
								<div class="tab-pane fade active show" id="following" role="tabpanel" aria-labelledby="pills-following-tab">
									<div class="users-list min-height-430">
										<div class="user-follow-card mb-4">
											<div class="follow-card-left">
												<div class="follow-avatar">
													<img src="images/profile-imgs/img-2.jpg" alt="">
												</div>
												<div class="follow-name">
													<h5>Jassica William</h5>
													<span>1 Follower</span>
												</div>
											</div>
											<div class="follow-card-btn">
												<button class="follow-btn">Following</button>
											</div>
										</div>
										<div class="user-follow-card mb-4">
											<div class="follow-card-left">
												<div class="follow-avatar">
													<img src="images/profile-imgs/img-1.jpg" alt="">
												</div>
												<div class="follow-name">
													<h5>Rock Smith</h5>
													<span>3 Followers</span>
												</div>
											</div>
											<div class="follow-card-btn">
												<button class="follow-btn">Following</button>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="followers" role="tabpanel" aria-labelledby="pills-followers-tab">
									<div id="followers-empty-state" class="d-flex align-items-center justify-content-center flex-column min-height-430">
										<span>
											<svg width="60" height="47" viewBox="0 0 60 47" fill="none">
												<path d="M41.8884 39.501C41.2649 38.8161 41.1572 37.7618 41.9808 37.0461L48.8852 30.1433C50.44 28.5811 52.8108 30.9436 51.2559 32.4981L47.1225 36.6306H56.1899C56.467 35.6917 56.644 35.0145 56.644 34.0064C56.644 28.0732 50.5247 24.6256 45.152 24.6256C40.9724 24.6256 36.4387 26.5956 34.5067 30.4819C36.5234 33.0521 37.7088 36.138 37.7088 39.4702C37.7088 41.6788 37.1623 43.8566 36.1693 45.8267C35.1918 47.7967 32.1976 46.3038 33.1828 44.3337C33.9525 42.8023 34.3528 41.1863 34.3528 39.4702C34.3528 31.4515 26.1321 26.7188 18.8505 26.7188C11.5767 26.7188 3.36369 31.4515 3.36369 39.4702C3.36369 41.2017 3.74856 42.7793 4.52598 44.326C5.51892 46.2961 2.5247 47.7967 1.53945 45.8344C0.546504 43.8643 0 41.6711 0 39.4702C0 32.3749 5.23412 26.8573 11.6228 24.5948C7.8127 22.1322 5.49583 17.9151 5.49583 13.3594C5.49583 5.98709 11.4843 0 18.8505 0C26.2322 0 32.2207 5.98709 32.2207 13.3594C32.2207 17.9228 29.8961 22.1322 26.086 24.5948C28.3412 25.3874 30.3656 26.5495 32.0744 27.9808C33.6369 25.4798 36.0616 23.6098 38.7787 22.5016C36.1001 20.4854 34.5221 17.3533 34.5221 13.9904C34.5221 8.11875 39.2867 3.35524 45.152 3.35524C51.0327 3.35524 55.7896 8.11105 55.7896 13.9904C55.7896 17.3533 54.2117 20.4931 51.5253 22.5016C56.2668 24.4332 60 28.6811 60 34.0064C60 34.8683 59.8922 35.7379 59.6921 36.5921C59.492 37.4386 59.1841 38.262 58.7838 39.0623C58.4913 39.6472 57.9063 39.9858 57.2906 39.9858L47.1302 39.9935L51.2559 44.1183C52.8185 45.6805 50.4477 48.0507 48.8852 46.4885L41.8884 39.501ZM18.8505 3.36293C13.3239 3.36293 8.85183 7.83401 8.85183 13.3594C8.85183 18.9001 13.3085 23.3481 18.8505 23.3481C24.3926 23.3481 28.857 18.9001 28.857 13.3594C28.857 7.84171 24.3772 3.36293 18.8505 3.36293ZM45.152 6.71047C41.1418 6.71047 37.8781 9.97336 37.8781 13.9904C37.8781 18.0152 41.1341 21.255 45.1597 21.255C49.1931 21.255 52.4336 18.0228 52.4336 13.9904C52.4336 9.97336 49.1777 6.71047 45.152 6.71047Z" fill="#6ac045"></path>
											</svg>
										</span>
										<p class="font-16 mt-4 text-light3">No followers yet</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Follow People Model End-->
	<!-- Contact Model Start-->
	<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="contactModalLabel">John Doe</h5>
					<button type="button" class="close-model-btn" data-bs-dismiss="modal" aria-label="Close"><i class="uil uil-multiply"></i></button>
				</div>
				<div class="modal-body">
					<div class="model-content main-form">
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="form-group mt-4">
									<label class="form-label">Subject*</label>
									<input class="form-control h_40" type="text" placeholder="" value="">
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="form-group mt-4">
									<label class="form-label">Message*</label>
									<textarea class="form-textarea"  placeholder=""></textarea>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="co-main-btn min-width btn-hover h_40" data-bs-target="#contactModal" data-bs-toggle="modal" data-bs-dismiss="modal">Cancel</button>
					<button type="button" class="main-btn min-width btn-hover h_40">Submit</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact Model End-->
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
							<img src="images/logo-icon.svg" alt="">
						</div>
						<div class="main-logo" id="logo">
							<img src="images/logo.svg" alt="">
							<img class="logo-inverse" src="images/dark-logo.svg" alt="">
						</div>
					</a>
					<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
						<div class="offcanvas-header">
							<div class="offcanvas-logo" id="offcanvasNavbarLabel">
								<img src="images/logo-icon.svg" alt="">
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
										<span>Create Event</span>
									</a>
								</div>
							</div>
							<ul class="navbar-nav justify-content-end flex-grow-1 pe_5">
								<li class="nav-item">
									<a class="nav-link active" aria-current="page" href="index.html">Home</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="attendee_profile_view.html#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										Explore Events
									</a>
									<ul class="dropdown-menu dropdown-submenu">
										<li><a class="dropdown-item" href="explore_events.html">Explore Events</a></li>
										<li><a class="dropdown-item" href="venue_event_detail_view.html">Venue Event Detail View</a></li>
										<li><a class="dropdown-item" href="online_event_detail_view.html">Online Event Detail View</a></li>
									</ul>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="pricing.html">Pricing</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="attendee_profile_view.html#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										Blog
									</a>
									<ul class="dropdown-menu dropdown-submenu">
										<li><a class="dropdown-item" href="our_blog.html">Our Blog</a></li>
										<li><a class="dropdown-item" href="blog_detail_view.html">Blog Detail View</a></li>
									</ul>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="attendee_profile_view.html#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										Help
									</a>
									<ul class="dropdown-menu dropdown-submenu">
										<li><a class="dropdown-item" href="faq.html">FAQ</a></li>
										<li><a class="dropdown-item" href="help_center.html">Help Center</a></li>
										<li><a class="dropdown-item" href="contact_us.html">Contact Us</a></li>
									</ul>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="attendee_profile_view.html#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										Pages
									</a>
									<ul class="dropdown-menu dropdown-submenu">
										<li>
											<a class="dropdown-item submenu-item" href="attendee_profile_view.html#">Other Pages</a>
											<ul class="submenu dropdown-menu">
												<li><a class="dropdown-item pe-5" href="sign_in.html">Sign In</a></li>
												<li><a class="dropdown-item pe-5" href="sign_up.html">Sign Up</a></li>
												<li><a class="dropdown-item pe-5" href="forgot_password.html">Forgot Password</a></li>
												<li><a class="dropdown-item pe-5" href="about_us.html">About Us</a></li>
												<li><a class="dropdown-item pe-5" href="checkout.html">Checkout</a></li>
												<li><a class="dropdown-item pe-5" href="checkout_premium.html">Checkout Premium</a></li>
												<li><a class="dropdown-item pe-5" href="invoice.html">Invoice</a></li>
												<li><a class="dropdown-item pe-5" href="coming_soon.html">Coming Soon</a></li>
												<li><a class="dropdown-item pe-5" href="error_404.html">Error 404</a></li>
											</ul>
										</li>
										<li>
											<a class="dropdown-item submenu-item" href="attendee_profile_view.html#">Create Event</a>
											<ul class="submenu dropdown-menu">
												<li><a class="dropdown-item pe-5" href="create.html">Create</a></li>
												<li><a class="dropdown-item pe-5" href="create_venue_event.html">Create Venue Event</a></li>
												<li><a class="dropdown-item pe-5" href="create_online_event.html">Create Online Event</a></li>
											</ul>
										</li>
										<li>
											<a class="dropdown-item submenu-item" href="attendee_profile_view.html#">Events View</a>
											<ul class="submenu dropdown-menu">
												<li><a class="dropdown-item pe-5" href="online_event_detail_view.html">Online Event Detail View</a></li>
												<li><a class="dropdown-item pe-5" href="venue_event_detail_view.html">Venue Event Detail View</a></li>
											</ul>
										</li>
										<li><a class="dropdown-item" href="booking_confirmed.html">Booking Confirmed</a></li>
										<li><a class="dropdown-item" href="attendee_profile_view.html">Attendee Profile View</a></li>
										<li><a class="dropdown-item" href="organiser_profile_view.html">Organiser Profile View</a></li>
										<li><a class="dropdown-item" href="my_organisation_dashboard.html">Organization Dashboard</a></li>
										<li><a class="dropdown-item" href="sell_tickets_online.html">Sell Tickets Online</a></li>
										<li><a class="dropdown-item" href="refer_a_friend.html">Refer a Friend</a></li>
										<li><a class="dropdown-item" href="term_and_conditions.html">Terms & Conditions</a></li>
										<li><a class="dropdown-item" href="privacy_policy.html">Privacy Policy</a></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="offcanvas-footer">
							<div class="offcanvas-social">
								<h5>Follow Us</h5>
								<ul class="social-links">
									<li><a href="attendee_profile_view.html#" class="social-link"><i class="fab fa-facebook-square"></i></a>
									<li><a href="attendee_profile_view.html#" class="social-link"><i class="fab fa-instagram"></i></a>
									<li><a href="attendee_profile_view.html#" class="social-link"><i class="fab fa-twitter"></i></a>
									<li><a href="attendee_profile_view.html#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
									<li><a href="attendee_profile_view.html#" class="social-link"><i class="fab fa-youtube"></i></a>
								</ul>
							</div>
						</div>
					</div>
					<div class="right-header order-2">
						<ul class="align-self-stretch">
							<li>
								<a href="create.html" class="create-btn btn-hover">
									<i class="fa-solid fa-calendar-days"></i>
									<span>Create Event</span>
								</a>
							</li>
							<li class="dropdown account-dropdown">
								<a href="attendee_profile_view.html#" class="account-link" role="button" id="accountClick" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
									<img src="images/profile-imgs/img-13.jpg" alt="">
									<i class="fas fa-caret-down arrow-icon"></i>
								</a>
								<ul class="dropdown-menu dropdown-menu-account dropdown-menu-end" aria-labelledby="accountClick">
									<li>
										<div class="dropdown-account-header">
											<div class="account-holder-avatar">
												<img src="images/profile-imgs/img-13.jpg" alt="">
											</div>
											<h5>John Doe</h5>
											<p>johndoe@example.com</p>
										</div>
									</li>
									<li class="profile-link">
										<a href="my_organisation_dashboard.html" class="link-item">My Organisation</a>
										<a href="organiser_profile_view.html" class="link-item">My Profile</a>
										<a href="sign_in.html" class="link-item">Sign Out</a>
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
		<div class="profile-banner">
			<div class="hero-cover-block">
				<div class="hero-cover">
					<div class="hero-cover-img"></div>
				</div>
			</div>
			<div class="user-dt-block">
				<div class="container">
					<div class="row">
						<div class="col-xl-4 col-lg-5 col-md-12">
							<div class="main-card user-left-dt">
								<div class="user-avatar-img">
									<img src="images/profile-imgs/img-2.jpg" alt="">
								</div>
								<div class="user-dts">
									<h4 class="user-name">Jassica William<span class="verify-badge"><i class="fa-solid fa-circle-check"></i></span></h4>
									<span class="user-email">jassica@example.com</span>
								</div>
								<div class="ff-block">
									<a href="attendee_profile_view.html#" class="" role="button" data-bs-toggle="modal" data-bs-target="#FFModal"><span>0</span>Followers</a>
									<a href="attendee_profile_view.html#" class="" role="button" data-bs-toggle="modal" data-bs-target="#FFModal"><span>2</span>Following</a>
								</div>
								<div class="user-description">
									<p>Hey I am a Jassica William</p>
								</div>
								<div class="user-btns">
									<button class="main-btn btn-hover min-width h_40 me-2">Follow</button>
									<button class="co-main-btn min-width h_40" data-bs-toggle="modal" data-bs-target="#contactModal">Contant Us</button>
								</div>
								<div class="profile-social-link">
									<h6>Find me on</h6>
									<div class="social-links">
										<a href="attendee_profile_view.html#" class="social-link" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook"><i class="fab fa-facebook-square"></i></a>
										<a href="attendee_profile_view.html#" class="social-link" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram"><i class="fab fa-instagram"></i></a>
										<a href="attendee_profile_view.html#" class="social-link" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter"><i class="fab fa-twitter"></i></a>
										<a href="attendee_profile_view.html#" class="social-link" data-bs-toggle="tooltip" data-bs-placement="top" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
										<a href="attendee_profile_view.html#" class="social-link" data-bs-toggle="tooltip" data-bs-placement="top" title="Youtube"><i class="fab fa-youtube"></i></a>
										<a href="attendee_profile_view.html#" class="social-link" data-bs-toggle="tooltip" data-bs-placement="top" title="Website"><i class="fa-solid fa-globe"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-8 col-lg-7 col-md-12">
							<div class="right-profile mt-2">
								<div class="user-events">
									<div class="row">
										<div class="col-md-12">
											<div class="main-card mt-4">
												<div class="card-top p-4 border-bottom-0">
													<div class="card-event-img">
														<img src="images/event-imgs/img-6.jpg" alt="">
													</div>
													<div class="card-event-dt">
														<h5>Step Up Open Mic Show</h5>
														<div class="evnt-time">Thu, Jun 30, 2022 4:30 AM</div>
														<div class="event-btn-group">
															<button class="esv-btn me-2" onclick="window.location.href='venue_event_detail_view.html'"><i class="fa-solid fa-arrow-up-from-bracket me-2"></i>View</button>
														</div>
													</div>
												</div>
											</div>
											<div class="main-card mt-4">
												<div class="card-top p-4 border-bottom-0">
													<div class="card-event-img">
														<img src="images/event-imgs/img-7.jpg" alt="">
													</div>
													<div class="card-event-dt">
														<h5>Tutorial on Canvas Painting for Beginners</h5>
														<div class="evnt-time">Sun, Jul 17, 2022 5:30 AM</div>
														<div class="event-btn-group">
															<button class="esv-btn me-2" onclick="window.location.href='online_event_detail_view.html'"><i class="fa-solid fa-arrow-up-from-bracket me-2"></i>View</button>
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
			</div>
		</div>

	</div>
	<!-- Body End-->
	<!-- Footer Start-->
	<footer class="footer mt-auto">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="footer-content">
							<h4>Company</h4>
							<ul class="footer-link-list">
								<li><a href="about_us.html" class="footer-link">About Us</a></li>
								<li><a href="help_center.html" class="footer-link">Help Center</a></li>
								<li><a href="faq.html" class="footer-link">FAQ</a></li>
								<li><a href="contact_us.html" class="footer-link">Contact Us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="footer-content">
							<h4>Useful Links</h4>
							<ul class="footer-link-list">
								<li><a href="create.html" class="footer-link">Create Event</a></li>
								<li><a href="sell_tickets_online.html" class="footer-link">Sell Tickets Online</a></li>
								<li><a href="privacy_policy.html" class="footer-link">Privacy Policy</a></li>
								<li><a href="term_and_conditions.html" class="footer-link">Terms & Conditions</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="footer-content">
							<h4>Resources</h4>
							<ul class="footer-link-list">
								<li><a href="pricing.html" class="footer-link">Pricing</a></li>
								<li><a href="our_blog.html" class="footer-link">Blog</a></li>
								<li><a href="refer_a_friend.html" class="footer-link">Refer a Friend</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="footer-content">
							<h4>Follow Us</h4>
							<ul class="social-links">
								<li><a href="attendee_profile_view.html#" class="social-link"><i class="fab fa-facebook-square"></i></a>
								<li><a href="attendee_profile_view.html#" class="social-link"><i class="fab fa-instagram"></i></a>
								<li><a href="attendee_profile_view.html#" class="social-link"><i class="fab fa-twitter"></i></a>
								<li><a href="attendee_profile_view.html#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
								<li><a href="attendee_profile_view.html#" class="social-link"><i class="fab fa-youtube"></i></a>
							</ul>
						</div>
						<div class="footer-content">
							<h4>Download Mobile App</h4>
							<div class="download-app-link">
								<a href="attendee_profile_view.html#" class="download-btn"><img src="images/app-store.png" alt=""></a>
								<a href="attendee_profile_view.html#" class="download-btn"><img src="images/google-play.png" alt=""></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="footer-copyright-text">
							<p class="mb-0">© 2022, <strong>Barren</strong>. All rights reserved. Powered by UzimaSam</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer End-->


	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="vendor/OwlCarousel/owl.carousel.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/night-mode.js"></script>
</body>
</html>
