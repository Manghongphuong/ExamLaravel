@extends('layout_user.index')

@section('content')
		<!-- Start Hero Section -->
        <div class="hero">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-5">
						<div class="intro-excerpt">
							<h1>Bài Viết</h1>
							<p class="mb-4">Phòng khách là không gian chính của ngôi nhà, là nơi sum họp gia đình</p>
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
		 

		
@endsection
