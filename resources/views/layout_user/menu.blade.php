		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="index.html">Furni<span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="nav-item active">
							<a class="nav-link" href="{{ route('index') }}">Trang Chủ</a>
						</li>
						<li><a class="nav-link" href="{{ route('shop') }}">Sản Phẩm</a></li>
						<li><a class="nav-link" href="{{ route('about') }}">Chúng Tôi</a></li>
						<li><a class="nav-link" href="{{ route('services') }}">Dịch Vụ</a></li>
						<li><a class="nav-link" href="{{ route('blog') }}">Tin Tức</a></li>
						<li><a class="nav-link" href="{{ route('contact') }}">Liên Hệ</a></li>
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">	
								@auth
									{{-- Khi đã đăng nhập: Hiện tên user --}}
									<p class="mb-1 mt-3 fw-semibold d-inline">{{ Auth::user()->name }}</p>
								@else
									{{-- Khi chưa đăng nhập: Hiện icon --}}
									<img src="{{ asset('furni/images/user.svg') }}" alt="User">
								@endauth 
							</a>

							<ul class="dropdown-menu" aria-labelledby="userDropdown">
								@auth
									{{-- Nếu đăng nhập thì hiện nút Đăng xuất --}}
									<li>
									<form action="{{ route('logout_user') }}" method="POST">
										@csrf
										<button type="submit" class="dropdown-item">Đăng xuất</button>
									</form>
									</li>
								@else
									{{-- Nếu chưa đăng nhập thì hiện nút Đăng nhập --}}
									<li>
									<a class="dropdown-item" href="{{ route('user_login') }}">Đăng nhập</a>
									</li>
								@endauth
							</ul>
						</li>
						<li><a class="nav-link" href="{{ route('cart') }}"><img src="{{ asset('furni/images/cart.svg') }}"></a></li>
					</ul>
				</div>
			</div>
				
		</nav>
		<!-- End Header/Navigation -->