@extends('layout_user.index')

@section('content')
		<!-- Start Hero Section -->
        <div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Dịch Vụ</h1>
								<p class="mb-4"> Giúp người dùng có nhiều cảm hứng lựa chọn các nội thất thiết kế trong ngôi nhà xinh yêu.</p>
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

		

		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
			<div class="container">
				
				
				<div class="row my-5">
					<div class="col-6 col-md-6 col-lg-3 mb-4">
						<div class="feature">
							<div class="icon">
								<img src="{{ asset('furni/images/truck.svg') }}" alt="Image" class="imf-fluid">
							</div>
							<h3>Vận Chuyển Nhanh &amp; Miễn Phí</h3>
							<p>Đơn hàng của bạn sẽ được vận chuyển nhanh chóng và hoàn toàn miễn phí. Chúng tôi đảm bảo sự hài lòng của bạn.</p>
						</div>
					</div>

					<div class="col-6 col-md-6 col-lg-3 mb-4">
						<div class="feature">
							<div class="icon">
								<img src="{{ asset('furni/images/bag.svg') }}" alt="Image" class="imf-fluid">
							</div>
							<h3>Mua Sắm Dễ Dàng</h3>
							<p>Quy trình mua sắm đơn giản, nhanh chóng, giúp bạn tiết kiệm thời gian và công sức.</p>
						</div>
					</div>

					<div class="col-6 col-md-6 col-lg-3 mb-4">
						<div class="feature">
							<div class="icon">
								<img src="{{ asset('furni/images/support.svg') }}" alt="Image" class="imf-fluid">
							</div>
							<h3>Hỗ Trợ 24/7</h3>
							<p>Đội ngũ hỗ trợ của chúng tôi luôn sẵn sàng giúp đỡ bạn mọi lúc, mọi nơi.</p>
						</div>
					</div>

					<div class="col-6 col-md-6 col-lg-3 mb-4">
						<div class="feature">
							<div class="icon">
								<img src="{{ asset('furni/images/return.svg') }}" alt="Image" class="imf-fluid">
							</div>
							<h3>Hoàn Trả Dễ Dàng</h3>
							<p>Quy trình hoàn trả không rắc rối, đảm bảo quyền lợi tốt nhất cho bạn.</p>
						</div>
					</div>

				</div>
			
			</div>
		</div>
		<!-- End Why Choose Us Section -->

		<!-- Start Product Section -->
		<div class="product-section pt-0">
			<div class="container">
				<div class="row">

					<!-- Start Column 1 -->
					<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
						<h2 class="mb-4 section-title">Được chế tác từ chất liệu tuyệt vời.</h2>
						<p class="mb-4">Mỗi sản phẩm được thiết kế với chất liệu cao cấp, mang lại sự thoải mái và bền bỉ. Khám phá ngay!</p>
						<p><a href="#" class="btn">Xem Thêm</a></p>
					</div> 
					<!-- End Column 1 -->

					<!-- Start Column 2 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="#">
							<img src="{{ asset('furni/images/product-1.png') }}" class="img-fluid product-thumbnail">
							<h3 class="product-title">Nordic Chair</h3>
							<strong class="product-price">$50.00</strong>

							<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
						</a>
					</div> 
					<!-- End Column 2 -->

					<!-- Start Column 3 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="#">
							<img src="{{ asset('furni/images/product-2.png') }}" class="img-fluid product-thumbnail">
							<h3 class="product-title">Kruzo Aero Chair</h3>
							<strong class="product-price">$78.00</strong>

							<span class="icon-cross">
								<img src="{{ asset('furni/images/cross.svg') }}" class="img-fluid">
							</span>
						</a>
					</div>
					<!-- End Column 3 -->

					<!-- Start Column 4 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="#">
							<img src="{{ asset('furni/images/product-3.png') }}" class="img-fluid product-thumbnail">
							<h3 class="product-title">Ergonomic Chair</h3>
							<strong class="product-price">$43.00</strong>

							<span class="icon-cross">
								<img src="{{ asset('furni/images/cross.svg') }}" class="img-fluid">
							</span>
						</a>
					</div>
					<!-- End Column 4 -->

				</div>
			</div>
		</div>
		<!-- End Product Section -->

		

		<!-- Start Testimonial Slider -->
		@include('layout_user.feedback')
		<!-- End Testimonial Slider -->
@endsection