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
                                    <span class="user-email">
                                        <a href="tel:{{ $seller->store_phone }}" class="text-dark">
                                            {{ $seller->store_phone }}
                                        </a>
                                    </span>
								</div>
								<div class="ff-block">
									<a href="#" class="" role="button" data-bs-toggle="modal" data-bs-target="#FFModal"><span>{{ number_format(count($seller->followers)) }}</span>Followers</a>
									<a href="#" class="" role="button" data-bs-toggle="modal" data-bs-target="#FFModal"><span>{{ number_format(count($seller->ads)+count($seller->items)) }}</span>Listings</a>
								</div>
								<div class="user-description">
									<p>{{ $seller->store_description }}</p>
								</div>
								<div class="user-btns">
                                    @auth
                                        @if(!$seller->isFollowedByUser(auth()->user()->id))
                                            <a href="{{ route('follow.seller', $seller->store_slug) }}" class="co-main-btn co-btn-width min-width d-inline-block h_40">
                                                <i class="fa-solid fa-user-plus"></i>
                                                Follow ({{ number_format($seller->followers->count()) }})
                                            </a>
                                        @else
                                        <a href="{{ route('unfollow.seller', $seller->store_slug) }}" class="co-main-btn co-btn-width min-width d-inline-block h_40">
                                            <i class="fa-solid fa-user-minus"></i>
                                                Un-Follow ({{ number_format($seller->followers->count()) }})
                                            </a>
                                        @endif
                                    @endauth
								</div>
							</div>
						</div>
						<div class="col-xl-8 col-lg-7 col-md-12">
							<div class="right-profile">
								<div class="profile-tabs">
									<div class="tab-content" id="myTabContent">
										<div class="tab-pane fade active show" id="feed" role="tabpanel" aria-labelledby="feed-tab">
											<div class="nav my-event-tabs mt-4" role="tablist">
												<button class="event-link active" data-bs-toggle="tab" data-bs-target="#items" type="button" role="tab" aria-controls="items" aria-selected="true">
                                                    <span class="event-count">
                                                        {{ count($seller->items) }}
                                                    </span>
                                                    <span>
                                                        Listed Items
                                                    </span>
                                                </button>
												<button class="event-link" data-bs-toggle="tab" data-bs-target="#ads" type="button" role="tab" aria-controls="ads" aria-selected="false">
                                                    <span class="event-count">
                                                        {{ count($seller->ads) }}
                                                    </span>
                                                    <span>
                                                        Ads Created
                                                    </span>
                                                </button>
											</div>
											<div class="tab-content">
												<div class="tab-pane fade show active" id="items" role="tabpanel">
													<div class="row">
                                                        @foreach ($items as $item)
                                                            <div class="col-md-12">
                                                                <div class="main-card mt-4">
                                                                    <div class="card-top p-4">
                                                                        <div class="card-event-img">
                                                                            <img src="{{ asset('web/images/items/'.$item->image) }}" alt='{{ $item->name }}'>
                                                                        </div>
                                                                        <div class="card-event-dt">
                                                                            <h5>{{ $item->name }} (KES {{ number_format($item->price, 2) }})</h5>
                                                                            <p>{{ $item->description }}</p>
                                                                            <div class="evnt-time">Listed: {{ $item->created_at->diffForHumans() }}</div>
                                                                            <div class="event-btn-group">
                                                                                <a aria-label="Chat on WhatsApp" href="{{ route('chat.item', $item->slug) }}" target="_blank" class="whatsapp-button">
                                                                                    <img alt="Chat on WhatsApp" src="{{ asset('web/WhatsAppButtonGreenSmall.png')}}" style="height: 50px;">
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
													</div>
												</div>
												<div class="tab-pane fade" id="ads" role="tabpanel">
													<div class="row">
                                                        @foreach ($ads as $item)
                                                            <div class="col-md-12">
                                                                <div class="main-card mt-4">
                                                                    <div class="card-top p-4">
                                                                        <div class="card-event-img">
                                                                            <img src="{{ asset('web/images/ads/'.$item->image) }}" alt='{{ $item->slug }}'>
                                                                        </div>
                                                                        <div class="card-event-dt">
                                                                            <h5>{{ $item->title }}</h5>
                                                                            <p>{{ $item->description }}</p>
                                                                            <div class="evnt-time">Created: {{ $item->created_at->diffForHumans() }}</div>
                                                                            <div class="event-btn-group">
                                                                                <a aria-label="Chat on WhatsApp" href="{{ route('chat.ad', $item->slug) }}" target="_blank" class="whatsapp-button">
                                                                                    <img alt="Chat on WhatsApp" src="{{ asset('web/WhatsAppButtonGreenSmall.png')}}" style="height: 50px;">
                                                                                </a>
                                                                            </div>
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
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- Body End-->
@endsection
