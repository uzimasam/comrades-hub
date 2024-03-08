@extends('web')

@section('content')
	<!-- Body Start-->
	<div class="wrapper">
		<div class="hero-banner">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xl-7 col-lg-9 col-md-10">
						<div class="hero-banner-content">
							<h2>Comrades Hub</h2>
							<p>
								Comrades Hub is an all-in-one platform for comrades to buy and sell items, post and view events, and connect with other comrades.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="explore-events p-80">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="main-title">
							<h3>Listed Ads and Events</h3>
						</div>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="event-filter-items">
							<div class="featured-controls">
								<div class="controls">
									<button type="button" class="control" data-filter="all">All</button>
                                    <button type="button" class="control" data-filter=".items">Items</button>
                                    <button type="button" class="control" data-filter=".ads">Ads</button>
                                    @foreach($categories as $category)
                                        <button type="button" class="control" data-filter=".{{ $category->slug }}">{{ $category->name }}</button>
                                    @endforeach
								</div>
								<div class="row d-flex justify-content-center" data-ref="event-filter-content">
                                    @foreach($all as $item)
                                        @if($item->type == 'item')
                                            <div class="my-2 col-xl-3 col-lg-4  col-md-4 col-sm-6 mix items {{ $item->categoriesList()}}" data-ref="mixitup-target">
                                                <div class="main-card mt-4 h-100">
                                                    <div class="event-thumbnail">
                                                        <a href="venue_event_detail_view.html" class="thumbnail-img">
                                                            <img src="{{ asset('web/images/items/'.$item->image)}}" alt="">
                                                        </a>
                                                        <span class="bookmark-icon" title="Bookmark"></span>
                                                    </div>
                                                    <div class="event-content">
                                                        <a href="venue_event_detail_view.html" class=" py-0 my-0 event-title">{{ $item->name }}</a>
                                                        <p class="event-description py-0 my-0">
                                                            {{ substr($item->description, 0, 150) }}
                                                            {{ strlen($item->description) > 150 ? '...' : '' }}
                                                        </p>
                                                        <div class="duration-price-remaining py-0 my-0">
                                                            <span class="duration-price">KES {{ number_format($item->price, 2) }}</span>
                                                            <span class="remaining"></span>
                                                        </div>
                                                    </div>
                                                    <div class="event-footer my-0 py-0">
                                                        <div class="event-timing">
                                                            <div class="publish-date">
                                                                <span><i class="fa-solid fa-calendar-day me-2"></i>{{ $item->created_at->format('d M') }}</span>
                                                                <span class="dot"><i class="fa-solid fa-circle"></i></span>
                                                                <span>{{ $item->created_at->format('h:i A') }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="event-footer my-0 py-0">
                                                        <a aria-label="Chat on WhatsApp" href="{{ route('chat.item', $item->slug) }}" target="_blank" class="whatsapp-button">
                                                            <img alt="Chat on WhatsApp" src="{{ asset('web/WhatsAppButtonGreenSmall.png')}}" style="width: 100%;">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <div class="my-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 mix ads {{ $item->categoriesList()}}" data-ref="mixitup-target">
                                                <div class="main-card mt-4 h-100">
                                                    <div class="event-thumbnail ad">
                                                        <a href="#" class="thumbnanil-img">
                                                            <img src="{{ asset('web/images/ads/'.$item->image) }}" alt="{{ $item->title }}">
                                                        </a>
                                                    </div>
                                                    <div class="event-content my-1 py-1">
                                                        <a href="#" class="event-title m-0 p-0">{{ $item->title }}</a>
                                                        <p class="event-description py-0 my-0">
                                                            {{ substr($item->description, 0, 150) }}
                                                            {{ strlen($item->description) > 150 ? '...' : '' }}
                                                        </p>
                                                    </div>
                                                    <div class="event-footer my-0 py-0">
                                                        <div class="event-timing">
                                                            <div class="publish-date">
                                                                <span><i class="fa-solid fa-calendar-day me-2"></i>{{ $item->created_at->format('d M') }}</span>
                                                                <span class="dot"><i class="fa-solid fa-circle"></i></span>
                                                                <span>{{ $item->created_at->format('D') }}, {{ $item->created_at->format('h:i A') }} </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="event-footer my-0 py-0">
                                                        <a aria-label="Chat on WhatsApp" href="{{ route('chat.ad', $item->slug) }}" target="_blank" class="whatsapp-button">
                                                            <img alt="Chat on WhatsApp" src="{{ asset('web/WhatsAppButtonGreenSmall.png')}}" style="width: 100%;">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
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
