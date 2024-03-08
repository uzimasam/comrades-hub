@extends('admin')

@section('content')
    <!-- Create Category Model Start-->
        <div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="categoryModalLabel" aria-hidden="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="POST" action="{{ route('store.category') }}">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="categoryModalLabel">Create Your Category</h5>
                            <button type="button" class="close-model-btn" data-bs-dismiss="modal" aria-label="Close"><i class="uil uil-multiply"></i></button>
                        </div>
                        <div class="modal-body">
                            <div class="model-content main-form">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="gift-category-icon mt-5 pb-2 text-center">
                                            <img src="{{ asset('web/logo.png') }}" alt="" class="img-fluid" style="width: 100px;">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group mt-4">
                                            <label class="form-label">Category Name*</label>
                                            <input class="form-control h_40" type="text" placeholder="Category Name" required name="name">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group mt-4">
                                            <label class="form-label">Description*</label>
                                            <textarea class="form-control h_40" placeholder="Description" required name="description" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="co-main-btn min-width btn-hover h_40" data-bs-target="#categoryModal" data-bs-toggle="modal" data-bs-dismiss="modal">Cancel</button>
                            <button class="main-btn min-width btn-hover h_40" type="submit">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!-- Create Category Model End-->
	<div class="wrapper wrapper-body">
		<div class="dashboard-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="d-main-title">
							<h3><i class="fa-solid fa-square-plus me-3"></i>Categories</h3>
						</div>
					</div>
					<div class="col-md-12">
						<div class="main-card mt-5">
							<div class="dashboard-wrap-content p-4">
								<h5 class="mb-4">Categories ({{ $categories->count() }})</h5>
								<div class="d-md-flex flex-wrap align-items-center">
									<div class="dashboard-date-wrap">
										<div class="form-group">
											<div class="relative-input position-relative">
												<input class="form-control h_40" type="text" placeholder="Search by category name" value="">
												<i class="uil uil-search"></i>
											</div>
										</div>
									</div>
									<div class="rs ms-auto mt_r4">
										<button class="main-btn btn-hover h_40 w-100" data-bs-toggle="modal" data-bs-target="#categoryModal">Create Category</button>
									</div>
								</div>
							</div>
						</div>
						<div class="all-promotion-list">
                            @foreach($categories as $category)
                                <div class="main-card mt-4">
                                    <div class="contact-list category-active">
                                        <div class="top d-flex flex-wrap justify-content-between align-items-center p-4 border_bottom">
                                            <div class="icon-box">
                                                <span class="icon-big rotate-icon icon icon-purple">
                                                    <i class="fa-solid fa-square-plus"></i>
                                                </span>
                                                <h5 class="font-18 mb-1 mt-1 f-weight-medium">
                                                    {{ $category->name }}
                                                </h5>
                                                <p class="text-gray-50 m-0">
                                                    {{ $category->description }}
                                                </p>
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
                                                <h6 class="category-status">{{ ucfirst($category->status) }}</h6>
                                            </div>
                                            <div class="icon-box">
                                                <span class="icon">
                                                    <i class="fa-solid fa-chart-column"></i>
                                                </span>
                                                <p>Total Views</p>
                                                <h6 class="category-status">{{ number_format($category->views()) }}</h6>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="icon-box">
                                                <span class="icon">
                                                    <i class="fa-solid fa-calendar-days"></i>
                                                </span>
                                                <p>Listed Items</p>
                                                <h6 class="category-status">{{ number_format($category->items->count()) }}</h6>
                                            </div>
                                            <div class="icon-box">
                                                <span class="icon">
                                                    <i class="fa-solid fa-rectangle-ad"></i>
                                                </span>
                                                <p>Ads</p>
                                                <h6 class="category-status">{{ number_format($category->ads->count()) }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
