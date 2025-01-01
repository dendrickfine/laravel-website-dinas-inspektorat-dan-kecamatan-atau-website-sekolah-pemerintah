<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Admin SMA Negeri Bandung</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{ asset('back/img/bandung.png') }}" type="image/x-icon"/>
	<meta name="robots" content="noindex, nofollow">
	<!-- Fonts and icons -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@600&display=swap" rel="stylesheet">
	<script src="{{ asset('back/js/plugin/webfont/webfont.min.js') }}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{ asset('back/css/fonts.min.css') }}']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{ asset('back/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('back/css/atlantis.min.css') }}">

</head>

<style>
* {
      font-family: "Plus Jakarta Sans", sans-serif;
      font-optical-sizing: auto;
      font-weight: 400;
      font-style: normal;
}
</style>

<body>
	<div class="wrapper">

		@include('includes.header')

			<!-- Sidebar -->
			@include('includes.sidebar')
			<!-- End Sidebar -->

			<div class="main-panel">
				<div class="content">
					@yield('content')
				</div>
				@include('includes.footer')
			</div>	
	</div>
	@include('includes.js')
	@include('sweetalert::alert')
	@stack('js')
</body>
</html>