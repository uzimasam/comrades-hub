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
                                <h2>Create Seller Profile</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<div class="user-dt-block">
				<div class="container">
                    <form action="{{ route('store.seller') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="main-card mt-4">
                            <div class="bp-title position-relative">
                                <h4>Seller Information</h4>
                                <button class="main-btn btn-hover ms-auto edit-btn me-3 pe-4 ps-4 h_40" type="submit">
                                    Save <i class="fa-regular fa-save me-2"></i>
                                </button>
                            </div>
                            <div class="about-details">
                                <div class="about-step">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group mb-3">
                                                <label for="store_name">Seller Name*</label>
                                                <input type="text" class="form-control" name="store_name" value="{{ auth()->user()->firstname }} {{ auth()->user()->lastname}}" placeholder="Seller Name" required>
                                                <span class="text-danger">@error('store_name'){{ $message }}@enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="about-step">
                                    <h5>Contact Information</h5>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="store_email">Contact Email*</label>
                                                <input type="email" class="form-control" name="store_email" value="{{ auth()->user()->email }}" placeholder="Contact Email" required>
                                                <span class="text-danger">@error('store_email'){{ $message }}@enderror</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="store_phone">Contact Phone*</label>
                                                <input type="text" class="form-control" name="store_phone" value="{{ auth()->user()->phone }}" placeholder="Contact Phone" required>
                                                <span class="text-danger">@error('store_phone'){{ $message }}@enderror</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="store_address">Seller Address*</label>
                                                <input type="text" class="form-control" name="store_address" value="{{ auth()->user()->address }}" placeholder="Physical Address" required>
                                                <span class="text-danger">@error('store_address'){{ $message }}@enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="about-step">
                                    <h5>Tell us about yourself and let people know who you are and what you do</h5>
                                    <div class="form-group mb-3">
                                        <textarea class="form-control" name="store_description" placeholder="About Shop" required rows="3">{{ auth()->user()->about }}</textarea>
                                        <span class="text-danger">@error('store_description'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                                <div class="about-step">
                                    <h5>Shop Pictures</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="store_logo">Shop Logo*</label>
                                                <input type="file" class="form-control" name="store_logo" required accept="image/*">
                                                <span class="text-danger">@error('store_logo'){{ $message }}@enderror</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="store_banner">Shop Banner*</label>
                                                <input type="file" class="form-control" name="store_banner" required accept="image/*">
                                                <span class="text-danger">@error('store_banner'){{ $message }}@enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="about-step">
                                    <div class="d-flex justify-content-center">
                                        <button class="main-btn btn-hover" type="submit">
                                            Save
                                            <i class="fa-regular fa-save ms-2"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
				</div>
			</div>
		</div>

	</div>
	<!-- Body End-->
@endsection
