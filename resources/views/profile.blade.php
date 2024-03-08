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
									<a href="organiser_profile_view.html#" class="" role="button" data-bs-toggle="modal" data-bs-target="#FFModal"><span>0</span>Interests</a>
									<a href="organiser_profile_view.html#" class="" role="button" data-bs-toggle="modal" data-bs-target="#FFModal"><span>{{ auth()->user()->following->count() }}
                                    </span>Following</a>
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
											<a class="nav-link active" id="about-tab" data-bs-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false"><i class="fa-solid fa-circle-info"></i>Edit Profile</a>
										</li>
                                        @if(auth()->user()->isSeller())
										    <li class="nav-item">
											    <a class="nav-link" href="{{ route('seller.dashboard') }}"><i class="fa-solid fa-box"></i>My Seller Dashboard</a>
										    </li>
                                        @endif
                                        @if (auth()->user()->isAdmin())
										    <li class="nav-item">
											    <a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="fa-solid fa-user-shield"></i>Admin Dashboard</a>
										    </li>
                                        @endif
									</ul>
									<div class="tab-content" id="myTabContent">
										<div class="tab-pane fade active show" id="about" role="tabpanel" aria-labelledby="about-tab">
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
