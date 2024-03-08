@extends('admin')

@section('content')
	<div class="wrapper wrapper-body">
		<div class="dashboard-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="d-main-title">
							<h3><i class="fa-solid fa-rectangle-ad me-3"></i>Promotion</h3>
						</div>
					</div>
					<div class="col-md-12">
						<div class="main-card mt-5">
							<div class="dashboard-wrap-content p-4">
								<h5 class="mb-4">Coupons (1)</h5>
								<div class="d-md-flex flex-wrap align-items-center">
									<div class="dashboard-date-wrap">
										<div class="form-group">
											<div class="relative-input position-relative">
												<input class="form-control h_40" type="text" placeholder="Search by coupon name" value="">
												<i class="uil uil-search"></i>
											</div>
										</div>
									</div>
									<div class="rs ms-auto mt_r4">
										<button class="main-btn btn-hover h_40 w-100" data-bs-toggle="modal" data-bs-target="#couponModal">Create Coupon</button>
									</div>
								</div>
							</div>
						</div>
						<div class="all-promotion-list">
							<div class="main-card mt-4">
								<div class="contact-list coupon-active">
									<div class="top d-flex flex-wrap justify-content-between align-items-center p-4 border_bottom">
										<div class="icon-box">
											<span class="icon-big rotate-icon icon icon-purple">
												<i class="fa-solid fa-ticket"></i>
											</span>
											<h5 class="font-18 mb-1 mt-1 f-weight-medium">EB85789<span class="font-weight-normal"> - EB835789</span></h5>
											<p class="text-gray-50 m-0"><span class="visitor-date-time">Tue, Apr 26, 2022 07:30 AM (UTC)</span> - <span class="visitor-date-time">Wed, Apr 26, 2023 07:30 AM (UTC)</span></p>
										</div>
										<div class="d-flex align-items-center">
											<label class="btn-switch tfs-8 mb-0 me-4 mt-1">
												<input type="checkbox" value="" checked>
												<span class="checkbox-slider"></span>
											</label>
											<div class="dropdown dropdown-default dropdown-text dropdown-icon-item">
												<button class="option-btn-1" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i class="fa-solid fa-ellipsis-vertical"></i>
												</button>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="my_organisation_dashboard_promotion.html#" class="dropdown-item"><i class="fa-solid fa-pen me-3"></i>Edit</a>
													<a href="my_organisation_dashboard_promotion.html#" class="dropdown-item"><i class="fa-solid fa-trash-can me-3"></i>Delete</a>
												</div>
											</div>
										</div>
									</div>
									<div class="bottom d-flex flex-wrap justify-content-between align-items-center p-4">
										<div class="icon-box ">
											<span class="icon">
												<i class="fa-regular fa-circle-dot"></i>
											</span>
											<p>Status</p>
											<h6 class="coupon-status">Active</h6>
										</div>
										<div class="icon-box">
											<span class="icon">
												<i class="fa-solid fa-chart-column"></i>
											</span>
											<p>Total used</p>
											<h6 class="coupon-status">0/100</h6>
											<div class="progress">
												<div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
										<div class="icon-box">
											<span class="icon">
												<i class="fa-regular fa-clock"></i>
											</span>
											<p>Last used</p>
											<h6 class="coupon-status">N/A</h6>
										</div>
										<div class="icon-box">
											<span class="icon">
												<i class="fa-solid fa-tag"></i>
											</span>
											<p>Discount</p>
											<h6 class="coupon-status">10%</h6>
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
@endsection
