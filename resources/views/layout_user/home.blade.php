@extends('layout_user.index')

@section('content')
    <!-- Start Hero Section -->
    <div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Studio Nội Thất <span clsas="d-block">Hiện Đại</span></h1>
								<p class="mb-4">Mang đến không gian sống tinh tế, tiện nghi với những thiết kế tối giản, sang trọng.</p>
								<p>
									<a href="" class="btn btn-secondary me-2">Khám Phá</a>
									<a href="#" class="btn btn-white-outline">Xem Thêm</a></p>
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

		<!-- Start Product Section -->
		<div class="product-section">
			<div class="container">
				<div class="row">

					<!-- Start Column 1 -->
					<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
						<h2 class="mb-4 section-title">Tinh Tế Trong Từng Chất Liệu</h2>
						<p class="mb-4">Mỗi sản phẩm được chế tác từ chất liệu cao cấp, bền bỉ và an toàn, mang đến trải nghiệm thoải mái cho không gian sống của bạn.</p>
						<p><a href="shop.html" class="btn">Xem Thêm</a></p>
					</div> 
					<!-- End Column 1 -->

					<!-- Start Column 2 -->
					 @foreach ($products as $product)
						<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
							<a class="product-item" href="{{ route('detail_product', $product->id) }}">
								<img src="{{ asset('images/'. $product->image) }}" class="img-fluid product-thumbnail">
								<h3 class="product-title">{{ $product->name }}</h3>
								<strong class="product-price">{{ $product->price }}</strong>
							</a>
							<button class="add-to-cart"><i class="fas fa-cart-plus"></i> Thêm vào giỏ hàng</button>
    						<button class="add-to-wishlist"><i class="fas fa-heart"></i> Yêu thích</button>
						</div> 
					 @endforeach
					<!-- End Column 2 -->

				</div>
			</div>
		</div>
		<!-- End Product Section -->

		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-6">
						<h2 class="section-title">Tại Sao Chọn Chúng Tôi</h2>
						<p>Chúng tôi cam kết mang đến cho bạn trải nghiệm mua sắm nội thất hiện đại, tiện lợi và đáng tin cậy.</p>

						<div class="row my-5">
							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="{{ asset('furni/images/truck.svg') }}" alt="Image" class="imf-fluid">
									</div>
									<h3>Giao Hàng Nhanh &amp; Miễn Phí</h3>
									<p>Vận chuyển nhanh chóng, miễn phí toàn quốc cho mọi đơn hàng.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="{{ asset('furni/images/bag.svg') }}" alt="Image" class="imf-fluid">
									</div>
									<h3>Mua Sắm Dễ Dàng</h3>
									<p>Đặt hàng chỉ với vài bước, giao diện thân thiện và đơn giản cho mọi người dùng.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="{{ asset('furni/images/support.svg') }}" alt="Image" class="imf-fluid">
									</div>
									<h3>Hỗ Trợ 24/7</h3>
									<p>Đội ngũ tư vấn viên luôn sẵn sàng hỗ trợ bạn mọi lúc, kể cả ngoài giờ hành chính.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="{{ asset('furni/images/return.svg') }}" alt="Image" class="imf-fluid">
									</div>
									<h3>Đổi Trả Linh Hoạt</h3>
									<p>Chính sách đổi trả nhanh chóng, dễ dàng, đảm bảo quyền lợi tốt nhất cho khách hàng.</p>
								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-5">
						<div class="img-wrap">
							<img src="{{ asset('furni/images/why-choose-us-img.jpg') }}" alt="Image" class="img-fluid">
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Why Choose Us Section -->

		<!-- Start We Help Section -->
		<div class="we-help-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-7 mb-5 mb-lg-0">
						<div class="imgs-grid">
							<div class="grid grid-1"><img src="{{ asset('furni/images/img-grid-1.jpg') }}" alt="Untree.co"></div>
							<div class="grid grid-2"><img src="{{ asset('furni/images/img-grid-2.jpg') }}" alt="Untree.co"></div>
							<div class="grid grid-3"><img src="{{ asset('furni/images/img-grid-3.jpg') }}" alt="Untree.co"></div>
						</div>
					</div>
					<div class="col-lg-5 ps-lg-5">
						<h2 class="section-title mb-4">Chúng tôi giúp bạn thiết kế nội thất hiện đại</h2>
						<p>Chúng tôi chuyên cung cấp giải pháp thiết kế nội thất hiện đại, giúp bạn biến không gian sống thành nơi thoải mái và phong cách. Với đội ngũ chuyên gia giàu kinh nghiệm, chúng tôi cam kết mang đến sự hài lòng từ khâu tư vấn đến hoàn thiện.</p>

						<ul class="list-unstyled custom-list my-4">
							<li>Tư vấn thiết kế cá nhân hóa</li>
							<li>Sử dụng vật liệu cao cấp</li>
							<li>Chất liệu nhập khẩu từ nước ngoài</li>
							<li>Đáp ứng nhu cầu tiêu dùng của khách hàng</li>
						</ul>
						<p><a herf="#" class="btn">Xem Thêm</a></p>
					</div>
				</div>
			</div>
		</div>
		<!-- End We Help Section -->

		<!-- Start Popular Product -->
		<div class="popular-product">
			<div class="container">
				<div class="row">
					@foreach ($products_view as $product)
					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="{{ asset('images/' . $product->image) }}" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>{{ $product->name }}</h3>
								<p>{{ $product->slug }}</p>
								<p><a href="#">Đọc Thêm</a></p>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		<!-- End Popular Product -->

		<!-- Start Testimonial Slider -->
		@include('layout_user.feedback')
		<!-- End Testimonial Slider -->

		<!-- Start Blog Section -->
		<div class="blog-section">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md-6">
						<h2 class="section-title">Tin Tức</h2>
					</div>
					<div class="col-md-6 text-start text-md-end">
						<a href="#" class="more">Xem Tất Cả Tin</a>
					</div>
				</div>

				<div class="row">

					<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
						<div class="post-entry">
							<a href="#" class="post-thumbnail"><img src="{{ asset('furni/images/post-1.jpg') }}" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="#">Không Gian Nhà Xinh</a></h3>
								<div class="meta">
									<p>Hãy thăm quan showroom để thiết kế nội thất thật sáng tạo</p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
						<div class="post-entry">
							<a href="#" class="post-thumbnail"><img src="{{ asset('furni/images/post-2.jpg') }}" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="#">Không Gian Nhà Xinh</a></h3>
								<div class="meta">
									<p>Hãy thăm quan showroom để thiết kế nội thất thật sáng tạo</p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
						<div class="post-entry">
							<a href="#" class="post-thumbnail"><img src="{{ asset('furni/images/post-3.jpg') }}" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="#">Không Gian Nhà Xinh</a></h3>
								<div class="meta">
									<p>Hãy thăm quan showroom để thiết kế nội thất thật sáng tạo</p>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Blog Section -->	
@endsection

