@extends('web')

@section('content')
	<!-- Body Start-->
	<div class="wrapper">
		<div class="hero-banner">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xl-7 col-lg-9 col-md-10">
						<div class="hero-banner-content">
							<h2>Verified Seller Profiles</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="explore-events p-80">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="event-filter-items">
							<div class="featured-controls">
								<div class="row d-flex justify-content-center">
                                    @foreach ($sellers as $seller)
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                            <div class="main-card mt-4">
                                                <div class="event-thumbnail">
                                                    <a href="{{ route('seller', $seller->store_slug) }}" class="thumbnail-img">
                                                        <img src="{{ asset('web/images/sellers/logo/'.$seller->store_logo) }}" alt="Seller Logo">
                                                    </a>
                                                </div>
                                                <div class="event-content">
                                                    <a href="{{ route('seller', $seller->store_slug) }}" class="my-0 py-0 event-title">{{ $seller->store_name }}</a>
                                                    <div class="d-flex justify-content-center m-0 p-0">
                                                        @auth
                                                            @if(!$seller->isFollowedByUser(auth()->user()->id))
                                                                <a href="{{ route('follow.seller', $seller->store_slug) }}" class="btn btn-xs btn-hover">
                                                                    <i class="fa-solid fa-user-plus"></i>
                                                                    Follow ({{ number_format($seller->followers->count()) }})
                                                                </a>
                                                            @else
                                                            <a href="{{ route('unfollow.seller', $seller->store_slug) }}" class="btn btn-xs btn-hover">
                                                                <i class="fa-solid fa-user-minus"></i>
                                                                    Un-Follow ({{ number_format($seller->followers->count()) }})
                                                                </a>
                                                            @endif
                                                        @else
                                                            <a class="btn btn-xs btn-hover">
                                                                <i class="fa-solid fa-users"></i>
                                                                ({{ number_format($seller->followers->count()) }}) Followers
                                                            </a>
                                                        @endauth
                                                    </div>
                                                </div>
                                                <div class="event-footer">
                                                    <div class="event-timing">
                                                        <div class="publish-date">
                                                            <span><i class="fa-solid fa-calendar-day me-2"></i>Created {{ $seller->created_at->format('D, d M') }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="event-footer row">
                                                    <a aria-label="Chat on WhatsApp" href="{{ route('chat.seller', $seller->store_slug) }}" target="_blank" class="whatsapp-button">
                                                        <img alt="Chat on WhatsApp" src="{{ asset('web/WhatsAppButtonGreenSmall.png')}}" style="width: 100%;">
                                                    </a>
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
	<!-- Body End-->
@endsection
