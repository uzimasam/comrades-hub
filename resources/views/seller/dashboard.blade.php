@extends('web')

@section('content')

	<!-- Body Start-->
	<div class="wrapper">
		<div class="profile-banner">
            <div class="hero-banner">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-9 col-md-10">
                            <div class="hero-banner-content">
                                <h2>My Profile</h2>
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
									<img src="{{ asset('web/tim.png') }}" alt="">
								</div>
								<div class="user-dts">
									<h4 class="user-name">{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}<span class="verify-badge"><i class="fa-solid fa-circle-check"></i></span></h4>
									<span class="user-email">{{ auth()->user()->email }}</span>
								</div>
								<div class="ff-block">
									<a href="organiser_profile_view.html#" class="" role="button" data-bs-toggle="modal" data-bs-target="#FFModal"><span>0</span>Followers</a>
									<a href="organiser_profile_view.html#" class="" role="button" data-bs-toggle="modal" data-bs-target="#FFModal"><span>2</span>Following</a>
								</div>
								<div class="user-description">
									<p>{{ auth()->user()->about }}</p>
								</div>
								<div class="user-btns">
                                    @if(auth()->user()->isSeller())
                                        <a href="{{ route('seller.dashboard') }}" class="co-main-btn co-btn-width min-width d-inline-block h_40">My Seller Dashboard<i class="fa-solid fa-right-left ms-3"></i></a>
                                    @else
                                        <a href="{{ route('create.seller') }}" class="co-main-btn co-btn-width min-width d-inline-block h_40">Become a Seller<i class="fa-solid fa-right-left ms-3"></i></a>
                                    @endif
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
											<a class="nav-link active" id="feed-tab" data-bs-toggle="tab" href="#feed" role="tab" aria-controls="feed" aria-selected="true"><i class="fa-solid fa-house"></i>Home</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="about-tab" data-bs-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false"><i class="fa-solid fa-circle-info"></i>Edit Profile</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="false"><i class="fa-solid fa-box"></i>My Orders</a>
										</li>
									</ul>
									<div class="tab-content" id="myTabContent">
										<div class="tab-pane fade active show" id="feed" role="tabpanel" aria-labelledby="feed-tab">
											<div class="nav my-event-tabs mt-4" role="tablist">
												<button class="event-link active" data-bs-toggle="tab" data-bs-target="#saved" type="button" role="tab" aria-controls="saved" aria-selected="true"><span class="event-count">1</span><span>Saved Items</span></button>
												<button class="event-link" data-bs-toggle="tab" data-bs-target="#organised" type="button" role="tab" aria-controls="organised" aria-selected="false"><span class="event-count">2</span><span>Listed Items</span></button>
												<button class="event-link" data-bs-toggle="tab" data-bs-target="#attending" type="button" role="tab" aria-controls="attending" aria-selected="false"><span class="event-count">1</span><span>Items Purchased</span></button>
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
																			<button class="esv-btn me-2" onclick="window.location.href='create_online_event.html'"><i class="fa-solid fa-gear me-2"></i>Manage Event</button>
																		</div>
																	</div>
																</div>
															</div>
															<div class="main-card mt-4">
																<div class="card-top p-4">
																	<div class="card-event-img">
																		<img src="images/event-imgs/img-7.jpg" alt="">
																	</div>
																	<div class="card-event-dt">
																		<h5>Tutorial on Canvas Painting for Beginners</h5>
																		<div class="evnt-time">Sun, Jul 17, 2022 5:30 AM</div>
																		<div class="event-btn-group">
																			<button class="esv-btn me-2" onclick="window.location.href='create_online_event.html'"><i class="fa-solid fa-gear me-2"></i>Manage Event</button>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane fade" id="attending" role="tabpanel">
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
                                            <form action="{{ route('profile.update') }}" method="post">
                                                @csrf
                                                <div class="main-card mt-4">
                                                    <div class="bp-title position-relative">
                                                        <h4>Edit Profile</h4>
                                                        <button class="main-btn btn-hover ms-auto edit-btn me-3 pe-4 ps-4 h_40" type="submit">
                                                            <i class="fa-regular fa-save me-2"></i>Save
                                                        </button>
                                                    </div>
                                                    <div class="about-details">
                                                        <div class="about-step">
                                                            <h5>Name</h5>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group mb-3">
                                                                        <label for="firstname">First Name*</label>
                                                                        <input type="text" class="form-control" name="firstname" value="{{ auth()->user()->firstname }}" placeholder="First Name" required>
                                                                        <span class="text-danger">@error('firstname'){{ $message }}@enderror</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group mb-3">
                                                                        <label for="lastname">Last Name*</label>
                                                                        <input type="text" class="form-control" name="lastname" value="{{ auth()->user()->lastname }}" placeholder="Last Name" required>
                                                                        <span class="text-danger">@error('lastname'){{ $message }}@enderror</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="about-step">
                                                            <h5>Contact Information</h5>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group mb-3">
                                                                        <label for="email">Email*</label>
                                                                        <input type="email" class="form-control" name="email" value="{{ auth()->user()->email }}" placeholder="Email" required>
                                                                        <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group mb-3">
                                                                        <label for="phone">Phone*</label>
                                                                        <input type="text" class="form-control" name="phone" value="{{ auth()->user()->phone }}" placeholder="Phone" required>
                                                                        <span class="text-danger">@error('phone'){{ $message }}@enderror</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group mb-3">
                                                                        <label for="address">Address*</label>
                                                                        <input type="text" class="form-control" name="address" value="{{ auth()->user()->address }}" placeholder="Address" required>
                                                                        <span class="text-danger">@error('address'){{ $message }}@enderror</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="about-step">
                                                            <h5>Tell us about yourself and let people know who you are</h5>
                                                            <div class="form-group mb-3">
                                                                <textarea class="form-control" name="about" placeholder="About" required rows="3">{{ auth()->user()->about }}</textarea>
                                                                <span class="text-danger">@error('about'){{ $message }}@enderror</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
										</div>
										<div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
											<div class="main-card mt-4">
												<div class="card-top p-4">
													<div class="card-event-img">
														<img src="images/event-imgs/img-7.jpg" alt="">
													</div>
													<div class="card-event-dt">
														<h5>Tutorial on Canvas Painting for Beginners</h5>
														<div class="invoice-id">Invoice ID : <span>BRCCRW-11111111</span></div>
													</div>
												</div>
												<div class="card-bottom">
													<div class="card-bottom-item">
														<div class="card-icon">
															<i class="fa-solid fa-calendar-days"></i>
														</div>
														<div class="card-dt-text">
															<h6>Event Starts on</h6>
															<span>01 June 2022</span>
														</div>
													</div>
													<div class="card-bottom-item">
														<div class="card-icon">
															<i class="fa-solid fa-ticket"></i>
														</div>
														<div class="card-dt-text">
															<h6>Total Tickets</h6>
															<span>1</span>
														</div>
													</div>
													<div class="card-bottom-item">
														<div class="card-icon">
															<i class="fa-solid fa-money-bill"></i>
														</div>
														<div class="card-dt-text">
															<h6>Paid Amount</h6>
															<span>AUD $50.00</span>
														</div>
													</div>
													<div class="card-bottom-item">
														<div class="card-icon">
															<i class="fa-solid fa-money-bill"></i>
														</div>
														<div class="card-dt-text">
															<h6>Invoice</h6>
															<a href="invoice.html">Download</a>
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
