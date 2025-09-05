<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="{{ asset('furni/images/favicon.png') }}">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

  <!-- Bootstrap CSS -->
  <link href="{{ asset('furni/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="{{ asset('furni/css/tiny-slider.css') }}" rel="stylesheet">
  <link href="{{ asset('furni/css/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  
  <title>Furni</title>
</head>

	<body>
		<!-- Start Header/Navigation -->
		@include('layout_user.menu')
		<!-- End Header/Navigation -->

		@yield('content')

		<!-- Start Footer Section -->
		@include('layout_user.footer')
		<!-- End Footer Section -->	

		<script src="{{ asset('furni/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ asset('furni/js/tiny-slider.js') }}"></script>
		<script src="{{ asset('furni/js/custom.js') }}"></script>
	</body>

</html>
