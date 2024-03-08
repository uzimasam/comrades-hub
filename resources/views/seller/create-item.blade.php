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
                                <h2>List Item</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<div class="user-dt-block">
				<div class="container">
                    <form action="{{ route('store.item') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="main-card mt-4">
                            <div class="bp-title position-relative">
                                <h4>Item Information</h4>
                                <button class="main-btn btn-hover ms-auto edit-btn me-3 pe-4 ps-4 h_40" type="submit">
                                    Save <i class="fa-regular fa-save me-2"></i>
                                </button>
                            </div>
                            <div class="about-details">
                                <div class="about-step">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="title">Item Name*</label>
                                                <input type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Item Name" required>
                                                <span class="text-danger">@error('title'){{ $message }}@enderror</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="price">Item Price*</label>
                                                <input type="number" class="form-control" name="price" value="{{ old('price') }}" placeholder="Item Price" required min="0">
                                                <span class="text-danger">@error('price'){{ $message }}@enderror</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="image" class="d-block">Item Image*</label>
                                                <input type="file" class="form-control" name="image" required accept="image/*">
                                                <span class="text-danger">@error('image'){{ $message }}@enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4 d-flex align-items-center">
                                    <div class="col-md-6">
                                        <div class="about-step">
                                            <h5>Tell everyone about your item</h5>
                                            <div class="form-group mb-3">
                                                <textarea class="form-control" name="description" placeholder="About Item" required rows="5"></textarea>
                                                <span class="text-danger">@error('description'){{ $message }}@enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="about-step">
                                            <h5>Item Categories</h5>
                                            <p>Select the categories that best fit your item</p>
                                            <div class="form-group mb-3">
                                                <select class="form-control" name="categories[]" multiple required>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}" class="my-2 border p-2">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                                <span class="text-danger">@error('categories'){{ $message }}@enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="about-step">
                                    <div class="d-flex justify-content-center">
                                        <button class="main-btn btn-hover" type="submit">
                                            Create Item
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
