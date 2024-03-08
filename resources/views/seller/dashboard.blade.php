@extends('web')

@section('content')

	<!-- Body Start-->
	<div class="wrapper">
		<div class="profile-banner">
			<div class="hero-cover-block">
				<div class="hero-cover">
					<div class="hero-cover-img" style="background-image: url({{ asset('web/images/sellers/banner/'.$seller->store_banner) }}); background-size: cover; background-position: center center;">

                    </div>
				</div>
				<div class="upload-cover">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="cover-img-btn">
									<input type="file" id="cover-img">
									<label for="cover-img"><i class="fa-solid fa-panorama me-3"></i>Change Image</label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="user-dt-block">
				<div class="container">
					<div class="row">
						<div class="col-xl-4 col-lg-5 col-md-12">
							<div class="main-card user-left-dt">
								<div class="user-avatar-img">
									<img src="{{ asset('web/images/sellers/logo/'.$seller->store_logo) }}" alt="">
									<div class="avatar-img-btn">
										<input type="file" id="avatar-img">
										<label for="avatar-img"><i class="fa-solid fa-camera"></i></label>
									</div>
								</div>
								<div class="user-dts">
									<h4 class="user-name">
                                        {{ $seller->store_name }}
                                        <span class="verify-badge"><i class="fa-solid fa-circle-check"></i></span></h4>
									<span class="user-email">
                                        <a href="mailto:{{ $seller->store_email }}" class="text-dark">
                                            {{ $seller->store_email }}
                                        </a>
                                    </span>
								</div>
								<div class="ff-block">
									<a href="organiser_profile_view.html#" class="" role="button" data-bs-toggle="modal" data-bs-target="#FFModal"><span>{{ number_format(count($seller->followers)) }}</span>Followers</a>
									<a href="organiser_profile_view.html#" class="" role="button" data-bs-toggle="modal" data-bs-target="#FFModal"><span>2</span>Clients</a>
								</div>
								<div class="user-description">
									<p>{{ $seller->store_description }}</p>
								</div>
								<div class="user-btns">
									<a href="{{ route('profile') }}" class="co-main-btn co-btn-width min-width d-inline-block h_40">My Profile<i class="fa-solid fa-user-edit ms-3"></i></a>
								</div>
                                @if (auth()->user()->isAdmin())
                                    <div class="user-btns">
                                        <a href="{{ route('admin.dashboard') }}" class="co-main-btn co-btn-width min-width d-inline-block h_40">Admin Dashboard<i class="fa-solid fa-user-shield ms-3"></i></a>
                                    </div>
                                @endif
							</div>
						</div>
						<div class="col-xl-8 col-lg-7 col-md-12">
							<div class="right-profile">
								<div class="profile-tabs">
									<ul class="nav nav-pills nav-fill p-2 garren-line-tab" id="myTab" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" id="feed-tab" data-bs-toggle="tab" href="organiser_profile_view.html#feed" role="tab" aria-controls="feed" aria-selected="true"><i class="fa-solid fa-house"></i>Home</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="about-tab" data-bs-toggle="tab" href="organiser_profile_view.html#about" role="tab" aria-controls="about" aria-selected="false"><i class="fa-solid fa-circle-info"></i>Update Seller Profile</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="setting-tab" data-bs-toggle="tab" href="organiser_profile_view.html#setting" role="tab" aria-controls="setting" aria-selected="false"><i class="fa-solid fa-box"></i>My People</a>
										</li>
									</ul>
									<div class="tab-content" id="myTabContent">
										<div class="tab-pane fade active show" id="feed" role="tabpanel" aria-labelledby="feed-tab">
											<div class="nav my-event-tabs mt-4" role="tablist">
												<button class="event-link active" data-bs-toggle="tab" data-bs-target="#saved" type="button" role="tab" aria-controls="saved" aria-selected="true"><span class="event-count">1</span><span>Listed Items</span></button>
												<button class="event-link" data-bs-toggle="tab" data-bs-target="#organised" type="button" role="tab" aria-controls="organised" aria-selected="false"><span class="event-count">2</span><span>Ads Created</span></button>
											</div>
											<div class="tab-content">
												<div class="tab-pane fade show active" id="saved" role="tabpanel">
													<div class="row">
														<div class="col-md-12">
															<div class="main-card mt-4">
																<div class="card-top p-4">
																	<div class="card-event-img">
																		<img src="images/event-imgs/img-6.jpg" alt="">
																	</div>
																	<div class="card-event-dt">
																		<h5>Step Up Open Mic Show</h5>
																		<div class="evnt-time">Thu, Jun 30, 2022 4:30 AM</div>
																		<div class="event-btn-group">
																			<button class="esv-btn saved-btn me-2"><i class="fa-regular fa-bookmark me-2"></i>Save</button>
																			<button class="esv-btn me-2" onclick="window.location.href='online_event_detail_view.html'"><i class="fa-solid fa-arrow-up-from-bracket me-2"></i>View</button>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane fade" id="organised" role="tabpanel">
													<div class="row">
														<div class="col-md-12">
															<div class="main-card mt-4">
																<div class="card-top p-4">
																	<div class="card-event-img">
																		<img src="images/event-imgs/img-6.jpg" alt="">
																	</div>
																	<div class="card-event-dt">
																		<h5>Step Up Open Mic Show</h5>
																		<div class="evnt-time">Thu, Jun 30, 2022 4:30 AM</div>
																		<div class="event-btn-group">
																			<button class="esv-btn me-2" onclick="window.location.href='invoice.html'"><i class="fa-solid fa-arrow-up-from-bracket me-2"></i>View Ticket</button>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
											<div class="main-card mt-4">
												<div class="bp-title position-relative">
													<h4>About</h4>
													<button class="main-btn btn-hover ms-auto edit-btn me-3 pe-4 ps-4 h_40" data-bs-toggle="modal" data-bs-target="#aboutModal">
														<i class="fa-regular fa-pen-to-square me-2"></i>Edit
													</button>
												</div>
												<div class="about-details">
													<div class="about-step">
														<h5>Name</h5>
														<span>Joginder Singh</span>
													</div>
													<div class="about-step">
														<h5>Tell us about yourself and let people know who you are</h5>
														<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt interdum nunc et auctor. Phasellus quis pharetra sapien. Integer ligula sem, sodales vitae varius in, varius eget augue.</p>
													</div>
													<div class="about-step">
														<h5>Find me on</h5>
														<div class="social-links">
															<a href="organiser_profile_view.html#" class="social-link" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook"><i class="fab fa-facebook-square"></i></a>
															<a href="organiser_profile_view.html#" class="social-link" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram"><i class="fab fa-instagram"></i></a>
															<a href="organiser_profile_view.html#" class="social-link" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter"><i class="fab fa-twitter"></i></a>
															<a href="organiser_profile_view.html#" class="social-link" data-bs-toggle="tooltip" data-bs-placement="top" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
															<a href="organiser_profile_view.html#" class="social-link" data-bs-toggle="tooltip" data-bs-placement="top" title="Youtube"><i class="fab fa-youtube"></i></a>
															<a href="organiser_profile_view.html#" class="social-link" data-bs-toggle="tooltip" data-bs-placement="top" title="Website"><i class="fa-solid fa-globe"></i></a>
														</div>
													</div>
													<div class="about-step">
														<h5>Address</h5>
														<p class="mb-0">00 Challis St, Newport, Victoria, 0000, Australia</p>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade " id="setting" role="tabpanel" aria-labelledby="setting-tab">
											<div class="nav my-event-tabs mt-4" role="tablist">
												<button class="event-link active" data-bs-toggle="tab" data-bs-target="#saved" type="button" role="tab" aria-controls="saved" aria-selected="true"><span class="event-count">1</span><span>Listed Items</span></button>
												<button class="event-link" data-bs-toggle="tab" data-bs-target="#organised" type="button" role="tab" aria-controls="organised" aria-selected="false"><span class="event-count">2</span><span>Ads Created</span></button>
											</div>
											<div class="tab-content">
												<div class="tab-pane fade show active" id="saved" role="tabpanel">
													<div class="row">
														<div class="col-md-12">
															<div class="main-card mt-4">
																<div class="card-top p-4">
																	<div class="card-event-img">
																		<img src="images/event-imgs/img-6.jpg" alt="">
																	</div>
																	<div class="card-event-dt">
																		<h5>Step Up Open Mic Show</h5>
																		<div class="evnt-time">Thu, Jun 30, 2022 4:30 AM</div>
																		<div class="event-btn-group">
																			<button class="esv-btn saved-btn me-2"><i class="fa-regular fa-bookmark me-2"></i>Save</button>
																			<button class="esv-btn me-2" onclick="window.location.href='online_event_detail_view.html'"><i class="fa-solid fa-arrow-up-from-bracket me-2"></i>View</button>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane fade" id="organised" role="tabpanel">
													<div class="row">
														<div class="col-md-12">
															<div class="main-card mt-4">
																<div class="card-top p-4">
																	<div class="card-event-img">
																		<img src="images/event-imgs/img-6.jpg" alt="">
																	</div>
																	<div class="card-event-dt">
																		<h5>Step Up Open Mic Show</h5>
																		<div class="evnt-time">Thu, Jun 30, 2022 4:30 AM</div>
																		<div class="event-btn-group">
																			<button class="esv-btn me-2" onclick="window.location.href='invoice.html'"><i class="fa-solid fa-arrow-up-from-bracket me-2"></i>View Ticket</button>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="setting" role="tabpanel" aria-labelledby="setting-tab">
											<div class="row">
												<div class="col-lg-12">
													<div class="main-card mt-4 p-0">
														<div class="nav custom-tabs" role="tablist">
															<button class="tab-link active" data-bs-toggle="tab" data-bs-target="#tab-01" type="button" role="tab" aria-controls="tab-01" aria-selected="true"><i class="fa-solid fa-envelope me-3"></i>Email Preferences</button>
															<button class="tab-link" data-bs-toggle="tab" data-bs-target="#tab-02" type="button" role="tab" aria-controls="tab-02" aria-selected="false"><i class="fa-solid fa-key me-3"></i>Password Settings</button>
															<button class="tab-link" data-bs-toggle="tab" data-bs-target="#tab-03" type="button" role="tab" aria-controls="tab-03" aria-selected="false"><i class="fa-solid fa-gear me-3"></i>Privacy Settings</button>
														</div>
													</div>
												</div>
												<div class="col-lg-12">
													<div class="main-card mt-4">
														<div class="tab-content">
															<div class="tab-pane fade show active" id="tab-01" role="tabpanel">
																<div class="bp-title">
																	<h4>Email Preferences</h4>
																</div>
																<div class="profile-setting p-4">
																	<div class="setting-step">
																		<div class="d-flex align-items-center justify-content-between">
																			<h3 class="setting-title">Receive order confirmation</h3>
																			<label class="btn-switch m-0 ml-2">
																				<input type="checkbox" checked="">
																				<span class="checkbox-slider"></span>
																			</label>
																		</div>
																		<p class="mt-1 mb-4">On purchasing an event you will receive an order confirmation email.</p>
																	</div>
																	<div class="setting-step pt-4">
																		<div class="d-flex align-items-center justify-content-between">
																			<h3 class="setting-title">Receive communication from event organisers for my purchased events</h3>
																			<label class="btn-switch m-0 ml-2">
																				<input type="checkbox" checked="">
																				<span class="checkbox-slider"></span>
																			</label>
																		</div>
																		<p class="mt-1 mb-4">The organisations whose events you have bought will be able send you further follow up emails.</p>
																	</div>
																	<div class="setting-step pt-4">
																		<div class="d-flex align-items-center justify-content-between">
																			<h3 class="setting-title">Receive event invitations from event organisers sent to my email address</h3>
																			<label class="btn-switch m-0 ml-2">
																				<input type="checkbox" checked="">
																				<span class="checkbox-slider"></span>
																			</label>
																		</div>
																		<p class="mt-1 mb-4">Organisations will be able to send you Invitations in their events.</p>
																	</div>
																	<div class="setting-step pt-4">
																		<div class="d-flex align-items-center justify-content-between">
																			<h3 class="setting-title">Receive reminder from Comrades Hub for my purchased events</h3>
																			<label class="btn-switch m-0 ml-2">
																				<input type="checkbox" checked="">
																				<span class="checkbox-slider"></span>
																			</label>
																		</div>
																		<p class="mt-1 mb-4">After purchasing event you will receive reminder emails before the event starts so that you can get prepared.</p>
																	</div>
																	<div class="setting-step pt-4">
																		<div class="d-flex align-items-center justify-content-between">
																			<h3 class="setting-title">Receive critical notifications on Comrades Hub service status and product updates</h3>
																			<label class="btn-switch m-0 ml-2">
																				<input type="checkbox" checked="">
																				<span class="checkbox-slider"></span>
																			</label>
																		</div>
																		<p class="mt-1 mb-4">Get updates on new features and insights so that you can make the best use of Comrades Hub.</p>
																	</div>
																	<div class="setting-step pt-4">
																		<div class="d-flex align-items-center justify-content-between">
																			<h3 class="setting-title">Receive newsletters from Comrades Hub with general and other information</h3>
																			<label class="btn-switch m-0 ml-2">
																				<input type="checkbox" checked="">
																				<span class="checkbox-slider"></span>
																			</label>
																		</div>
																		<p class="mt-1 mb-4">Get more insights on Comrades Hub that can help to boost your event business.</p>
																	</div>
																	<div class="setting-step pt-4">
																		<div class="d-flex align-items-center justify-content-between">
																			<h3 class="setting-title">Receive notification when someone follows me</h3>
																			<label class="btn-switch m-0 ml-2">
																				<input type="checkbox" checked="">
																				<span class="checkbox-slider"></span>
																			</label>
																		</div>
																		<p class="mt-1 mb-4">We will notify you when someone starts following you or your organisation.</p>
																	</div>
																	<div class="setting-step pt-4">
																		<div class="d-flex align-items-center justify-content-between">
																			<h3 class="setting-title">Review review notification when someone shares my events</h3>
																			<label class="btn-switch m-0 ml-2">
																				<input type="checkbox" checked="">
																				<span class="checkbox-slider"></span>
																			</label>
																		</div>
																		<p class="mt-1 mb-0">We will notify you when someone shares event created by your organisation.</p>
																	</div>
																	<div class="setting-step pt-4">
																		<div class="d-flex align-items-center justify-content-between">
																			<h3 class="setting-title">Receive notification on review related activities</h3>
																			<label class="btn-switch m-0 ml-2">
																				<input type="checkbox" checked="">
																				<span class="checkbox-slider"></span>
																			</label>
																		</div>
																		<p class="mt-1 mb-0">We will notify you when someone leaves review for your organisation.</p>
																	</div>
																</div>
															</div>
															<div class="tab-pane fade" id="tab-02" role="tabpanel">
																<div class="bp-title">
																	<h4>Password Settings</h4>
																</div>
																<div class="password-setting p-4">
																	<div class="password-des">
																		<h4>Change password</h4>
																		<p>You can update your password from here. If you can't remember your current password, just log out and click on Forgot password.</p>
																	</div>
																	<div class="change-password-form">
																		<div class="form-group mt-4">
																			<label class="form-label">Current password*</label>
																			<div class="loc-group position-relative">
																				<input class="form-control h_50" type="password" placeholder="Enter your password">
																				<span class="pass-show-eye"><i class="fas fa-eye-slash"></i></span>
																			</div>
																		</div>
																		<div class="form-group mt-4">
																			<label class="form-label">New password*</label>
																			<div class="loc-group position-relative">
																				<input class="form-control h_50" type="password" placeholder="Enter your password">
																				<span class="pass-show-eye"><i class="fas fa-eye-slash"></i></span>
																			</div>
																		</div>
																		<div class="form-group mt-4">
																			<label class="form-label">Confirm new password*</label>
																			<div class="loc-group position-relative">
																				<input class="form-control h_50" type="password" placeholder="Enter your password">
																				<span class="pass-show-eye"><i class="fas fa-eye-slash"></i></span>
																			</div>
																		</div>
																		<button class="main-btn btn-hover w-100 mt-5" type="submit">Update Password</button>
																	</div>
																</div>
															</div>
															<div class="tab-pane fade" id="tab-03" role="tabpanel">
																<div class="bp-title">
																	<h4>Privacy Settings</h4>
																</div>
																<div class="privacy-setting p-4">
																	<div class="setting-step">
																		<div class="d-flex align-items-center justify-content-between">
																			<h3 class="setting-title">Lock my user profile</h3>
																			<label class="btn-switch m-0 ml-2">
																				<input type="checkbox">
																				<span class="checkbox-slider"></span>
																			</label>
																		</div>
																		<p class="mt-1 mb-4">Locking profile hides all kinds of user information, activities and interaction from public profile</p>
																	</div>
																	<div class="setting-step pt-4">
																		<div class="d-flex align-items-center justify-content-between">
																			<h3 class="setting-title">Allow people to contact me</h3>
																			<label class="btn-switch m-0 ml-2">
																				<input type="checkbox">
																				<span class="checkbox-slider"></span>
																			</label>
																		</div>
																		<p class="mt-1 mb-4">People will be able to send you emails through Comrades Hub who visits your profile</p>
																	</div>
																	<div class="setting-step pt-4">
																		<div class="d-flex align-items-center justify-content-between">
																			<h3 class="setting-title">Allow people to find and invite me to relevant events</h3>
																			<label class="btn-switch m-0 ml-2">
																				<input type="checkbox" checked="">
																				<span class="checkbox-slider"></span>
																			</label>
																		</div>
																		<p class="mt-1 mb-4">Based on your preferences event organisers will be able to send you invitations in their events</p>
																	</div>
																	<div class="setting-step pt-4">
																		<div class="d-flex align-items-center justify-content-between">
																			<h3 class="setting-title">Allow people to follow me</h3>
																			<label class="btn-switch m-0 ml-2">
																				<input type="checkbox">
																				<span class="checkbox-slider"></span>
																			</label>
																		</div>
																		<p class="mt-1 mb-4">People will be able to follow you</p>
																	</div>
																	<div class="setting-step pt-4">
																		<div class="d-flex align-items-center justify-content-between">
																			<h3 class="setting-title">Allow people to see my followings</h3>
																			<label class="btn-switch m-0 ml-2">
																				<input type="checkbox">
																				<span class="checkbox-slider"></span>
																			</label>
																		</div>
																		<p class="mt-1 mb-4">People will be able to see whom and which organisations you are following</p>
																	</div>
																	<div class="setting-step pt-4">
																		<div class="d-flex align-items-center justify-content-between">
																			<h3 class="setting-title">Allow people to see my join date</h3>
																			<label class="btn-switch m-0 ml-2">
																				<input type="checkbox">
																				<span class="checkbox-slider"></span>
																			</label>
																		</div>
																		<p class="mt-1 mb-4">People will be able to see when you have started using Comrades Hub</p>
																	</div>
																	<div class="setting-step pt-4">
																		<div class="d-flex align-items-center justify-content-between">
																			<h3 class="setting-title">Allow people to see the events I attend</h3>
																			<label class="btn-switch m-0 ml-2">
																				<input type="checkbox">
																				<span class="checkbox-slider"></span>
																			</label>
																		</div>
																		<p class="mt-1 mb-4">People will be able to see the events you have purchased</p>
																	</div>
																	<div class="setting-step pt-4">
																		<div class="d-flex align-items-center justify-content-between">
																			<h3 class="setting-title">Allow people to see the events I join as speaker</h3>
																			<label class="btn-switch m-0 ml-2">
																				<input type="checkbox">
																				<span class="checkbox-slider"></span>
																			</label>
																		</div>
																		<p class="mt-1 mb-0">People will be able to see the events you have joined as Speaker</p>
																	</div>
																	<div class="setting-step pt-4">
																		<div class="d-flex align-items-center justify-content-between">
																			<h3 class="setting-title">Allow people to see the events I share</h3>
																			<label class="btn-switch m-0 ml-2">
																				<input type="checkbox" checked="">
																				<span class="checkbox-slider"></span>
																			</label>
																		</div>
																		<p class="mt-1 mb-0">People will be able to see the events you have shared in Comrades Hub</p>
																	</div>
																	<div class="setting-step pt-4">
																		<div class="d-flex align-items-center justify-content-between">
																			<h3 class="setting-title">Hide review interactions from public</h3>
																			<label class="btn-switch m-0 ml-2">
																				<input type="checkbox">
																				<span class="checkbox-slider"></span>
																			</label>
																		</div>
																		<p class="mt-1 mb-0">The reviews and ratings given by you will not appear in your public profile</p>
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
			</div>
		</div>

	</div>
	<!-- Body End-->
@endsection
