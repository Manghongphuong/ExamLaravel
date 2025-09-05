@extends('layout_user.index')
@section('content')
		<!-- Start Hero Section -->
        <div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Về Chúng Tôi</h1>
								<p class="mb-4">
									Hãy cùng Nhà Xinh khám phá xưởng sản xuất nhà máy AA Tây Ninh, nơi ra đời phần lớn các sản phẩm đậm chất Việt tại Nhà Xinh. 
									Với quy mô hơn 150ha, hiện là một trong những nhà máy lớn và hiện đại hàng đầu Đông Nam Á.</p>
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

		<!-- Start Team Section -->
		<div class="untree_co-section">
			<div class="container">

				<div class="row mb-5">
					<div class="col-lg-5 mx-auto text-center">
						<h2 class="section-title">Đội Ngũ</h2>
					</div>
				</div>

				<div class="row">

					<!-- Start Column 1 -->
					<div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
						<img src="{{ asset('furni/images/person_1.jpg') }}" class="img-fluid mb-5">
						<h3 clas>
							<a href="#">
								Hồng Phương
							</a>
						</h3>
						<span class="d-block position mb-4">CEO, Nhà Sáng Lập</span>
						<p>Với hơn 10 năm kinh nghiệm trong ngành nội thất, 
							Hồng Phương đã dẫn dắt Furni. trở thành thương hiệu hàng đầu tại Việt Nam.
						</p>
						<p class="mb-0"><a href="#" class="more dark">Đọc Thêm<span class="icon-arrow_forward"></span></a></p>
					</div> 
					<!-- End Column 1 -->		
					<!-- Start Column 1 -->
					<div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
						<img src="{{ asset('furni/images/person_1.jpg') }}" class="img-fluid mb-5">
						<h3 clas>
							<a href="#">
								Hồng Phương
							</a>
						</h3>
						<span class="d-block position mb-4">CEO, Nhà Sáng Lập</span>
						<p>Với hơn 10 năm kinh nghiệm trong ngành nội thất, 
							Hồng Phương đã dẫn dắt Furni. trở thành thương hiệu hàng đầu tại Việt Nam.
						</p>
						<p class="mb-0"><a href="#" class="more dark">Đọc Thêm<span class="icon-arrow_forward"></span></a></p>
					</div> 
					<!-- End Column 1 -->	
					<!-- Start Column 1 -->
					<div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
						<img src="{{ asset('furni/images/person_1.jpg') }}" class="img-fluid mb-5">
						<h3 clas>
							<a href="#">
								Hồng Phương
							</a>
						</h3>
						<span class="d-block position mb-4">CEO, Nhà Sáng Lập</span>
						<p>Với hơn 10 năm kinh nghiệm trong ngành nội thất, 
							Hồng Phương đã dẫn dắt Furni. trở thành thương hiệu hàng đầu tại Việt Nam.
						</p>
						<p class="mb-0"><a href="#" class="more dark">Đọc Thêm<span class="icon-arrow_forward"></span></a></p>
					</div> 
					<!-- End Column 1 -->	
					<!-- Start Column 1 -->
					<div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
						<img src="{{ asset('furni/images/person_1.jpg') }}" class="img-fluid mb-5">
						<h3 clas>
							<a href="#">
								Hồng Phương
							</a>
						</h3>
						<span class="d-block position mb-4">CEO, Nhà Sáng Lập</span>
						<p>Với hơn 10 năm kinh nghiệm trong ngành nội thất, 
							Hồng Phương đã dẫn dắt Furni. trở thành thương hiệu hàng đầu tại Việt Nam.
						</p>
						<p class="mb-0"><a href="#" class="more dark">Đọc Thêm<span class="icon-arrow_forward"></span></a></p>
					</div> 
					<!-- End Column 1 -->	

				</div>
			</div>
		</div>
		<!-- End Team Section -->

		

		<!-- Start Testimonial Slider -->
			@include('layout_user.feedback')
		<!-- End Testimonial Slider -->
@endsection