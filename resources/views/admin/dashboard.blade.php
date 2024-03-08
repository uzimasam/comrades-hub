@extends('admin')

@section('content')

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
									<img src="{{ asset('web/tim.png') }}" alt="">
								</div>
								<div class="ocard-name">
									<h4>{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</h4>
									<span>Comrades Hub Admin</span>
								</div>
							</div>
							<div class="ocard-right">
								<button class="pe-4 ps-4 co-main-btn min-width" onclick="window.location.href='{{ route('profile') }}'">
                                    <i class="fa-solid fa-user"></i>My Profile
                                </button>
							</div>
						</div>
						<div class="main-card mt-4">
							<div class="dashboard-wrap-content">
								<div class="dashboard-report-content">
									<div class="row mt-4">
										<div class="col-xl-3 col-lg-6 col-md-6">
											<div class="dashboard-report-card purple">
												<div class="card-content">
													<div class="card-content">
														<span class="card-title fs-6">System Users</span>
														<span class="card-sub-title fs-3">{{ number_format($users->count()) }}</span>
													</div>
													<div class="card-media">
														<i class="fa-solid fa-users"></i>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6 col-md-6">
											<div class="dashboard-report-card red">
												<div class="card-content">
													<div class="card-content">
														<span class="card-title fs-6">Seller Profiles</span>
														<span class="card-sub-title fs-3">{{ number_format($sellers->count()) }}</span>
													</div>
													<div class="card-media">
														<i class="fa-solid fa-store"></i>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6 col-md-6">
											<div class="dashboard-report-card info">
												<div class="card-content">
													<div class="card-content">
														<span class="card-title fs-6">Listed Products</span>
														<span class="card-sub-title fs-3">12k</span>
													</div>
													<div class="card-media">
														<i class="fa-solid fa-cart-plus"></i>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6 col-md-6">
											<div class="dashboard-report-card success">
												<div class="card-content">
													<div class="card-content">
														<span class="card-title fs-6">Total Ads</span>
														<span class="card-sub-title fs-3">32</span>
													</div>
													<div class="card-media">
														<i class="fa-solid fa-bullhorn"></i>
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
										<h4>Site Analytics</h4>
										<small class="mt-4">See the graphical representation below</small>
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

@endsection
