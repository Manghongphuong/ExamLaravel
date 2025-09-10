@extends('layout_user.index')

@section('content')
		<!-- Start Hero Section -->
        <div class="hero">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-5">
						<div class="intro-excerpt">
							<h1>Chi Tiết Sản Phẩm</h1>
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
		<!-- Start Product Detail Section -->

		<div class="product-detail">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<img src="{{ asset('images/' . $product_detail->image) }}" class="img-fluid product-thumbnail">
					</div>
					<div class="col-md-6">
						<div class="col-md-6 d-flex flex-column justify-content-center">
							<h2 class="mb-3 section-title">{{ $product_detail->name }}</h2>
							<p class="mb-4 text-muted">{{ $product_detail->slug }}</p>
							<p class="mb-4">
								<strong class="text-danger h3">{{ $product_detail->price }}</strong>
							</p>
							<div class="mb-4">
								<a href="cart.html" class="btn btn-secondary me-2 px-4">🛒 Thêm vào giỏ hàng</a>
								<a href="#" class="btn btn-outline-dark px-4">❤ Yêu thích</a>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row mt-5">
					<div class="col-12">
						<h3 class="mb-3">Mô tả sản phẩm</h3>
						<p class="text-muted">
							{{ $product_detail->description }}
						</p>
					</div>
				</div>


			</div>
		</div>
		<!-- End Product Detail Section -->
		 

		
@endsection
