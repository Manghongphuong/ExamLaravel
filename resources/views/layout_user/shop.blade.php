@extends('layout_user.index')

@section('content')
		<!-- Start Hero Section -->
        <div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Cửa Hàng</h1>
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

		

		<div class="untree_co-section product-section before-footer-section">
		    <div class="container">
		      	<div class="row">

		      		<!-- Start Column 1 -->
					@foreach ($products_shop as $product)
						<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
							<a class="product-item" href="cart.html">
								<img src="{{ asset('images/' . $product->image) }}" class="img-fluid product-thumbnail">
								<h3 class="product-title">{{ $product->name }}</h3>
								<strong class="product-price">{{ $product->price }}</strong>

								<span class="icon-cross">
									<img src="{{ asset('furni/images/cross.svg') }}" class="img-fluid">
								</span>
							</a>
						</div> 
					 @endforeach
					<!-- End Column 1 -->

		      	</div>
		    </div>
		</div>
@endsection
