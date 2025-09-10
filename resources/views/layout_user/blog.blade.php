@extends('layout_user.index')

@section('content')
		<!-- Start Hero Section -->
        <div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Tin Tức</h1>
								<p class="mb-4">Mua sắm hôm nay, giao hàng tận tay</p>
								<p><a href="" class="btn btn-secondary me-2">Khám Phá</a><a href="#" class="btn btn-white-outline">Xem Thêm</a></p>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
								<img src="{{ asset('furni/images/couch.png') }}" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		

		<!-- Start Blog Section -->
		<div class="blog-section">
			<div class="container">
				@foreach($blog as $bl)
				<div class="row">
					<div class="col-12 col-sm-6 col-md-4 mb-5">
						<div class="post-entry">
							<a href="{{ route('detail_blog', $bl->id) }}" class="post-thumbnail"><img src="{{ asset('images/' . $bl->image) }}" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="{{ route('detail_blog', $bl->id) }}">{{ $bl->title }}</a></h3>
								<div class="meta">
									<p>{{ Str::limit($bl->slug, 100) }}</p> 
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
		<!-- End Blog Section -->	

		

		<!-- Start Testimonial Slider -->
		@include('layout_user.feedback')
		<!-- End Testimonial Slider -->
@endsection