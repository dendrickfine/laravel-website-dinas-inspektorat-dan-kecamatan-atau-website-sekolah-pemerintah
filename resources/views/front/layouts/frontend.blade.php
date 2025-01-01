<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/da082499ff.js" crossorigin="anonymous"></script>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-C+X7V+Rx2b8UNB+uBWFsqQlKsLg4kkBQaRrXnpEJELf+1kbUy2VLRk+tgIy2O81h" crossorigin="anonymous">
  <!-- seo -->
  @stack('meta-seo')
  <meta name="robots" content="index, follow">
  <meta name="author" content="SMA Negeri Bandung">
  <!-- header -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- header -->

  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="shorcut icon" href="{{ asset('back/img/bandung.png') }}">
  <title>SMA Negeri Bandung</title>
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Abel&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Abel&family=Marcellus&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Abel&family=Marcellus&family=Vollkorn:ital,wght@0,400..900;1,400..900&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Abel&family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&family=Marcellus&family=Vollkorn:ital,wght@0,400..900;1,400..900&display=swap');

.carousel-item img {
    width: auto;
    height: 100%;
    object-fit: cover;
    max-width: 100%;
    max-height: calc(400px * 4/3); /* Mengatur tinggi maksimum gambar berdasarkan rasio 3x4 */
    margin: 0 auto;

}
</style>
<body>

@include('front.includes.header')

<!-- <div class="container mt-3"> -->
  @yield('content')
<!-- </div> -->

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<!-- slider -->
<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
<link rel="stylesheet" href="{{asset('css/header.css')}}">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/header.js')}}"></script>
<script>
  AOS.init();
  console.log("Created by Mohamad Dedrick Finnegan");
</script>
@include('front.includes.footer')
@include('front.includes.js')

</body>
</html>
