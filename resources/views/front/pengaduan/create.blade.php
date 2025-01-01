<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Pengaduan Inspektorat Kab. Bekasi</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{ asset('uploads/garuda.png') }}" type="image/x-icon"/>
	<!-- seo -->
	<meta name="description" content="Pengaduan Inspektorat Daerah Kabupaten Bekasi">
    <meta name="keywords" content="lapor korupsi inspektorat kabupaten bekasi, layanan Inspektorat Daerah Kabupaten Bekasi, lapor keluhan Inspektorat Daerah Kabupaten Bekasi, lapor pengaduan inspektorat kabupaten beksi, layanan pengaduan online inspektorat kabupaten bekasi, pengaduan online inspektorat kabupaten bekasi">
    <meta property="og:title" content="Pengaduan Inspektorat Kabupaten Bekasi">
    <meta property="og:url" content="{{url()->current()}}">
    <meta property="og:site_name" content="Website Resmi Inspektorat Daerah Kabupaten Bekasi">
    <meta property="og:description" content="Layanan Pengaduan Online Inspektorat Daerah Kabupaten Bekasi">
    <meta property="og:image" content="{{ asset('back/img/inspektorat.png') }}">
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
	<style>
	* {
		font-family: "Plus Jakarta Sans", sans-serif;
		font-optical-sizing: auto;
		font-weight: 400;
		font-style: normal;
	}
	body {
		background-color: #1e2c4d; /* Warna latar belakang untuk keseluruhan panel */
	}
	.footer {
		padding: 10px 0;
		text-align: left;
	}
	.card-body form {
		margin-bottom: 270px; /* Margin bawah untuk memberi ruang antara form dan tombol */
	}
	</style>
</head>
<body>
@include('sweetalert::alert')
<div class="panel-header">
	<div class="page-inner py-4 d-flex justify-content-center">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
		<a href="/" class="logo">
		<img src="{{ asset('uploads/lapor1.png') }}" alt="Logo Inspektorat Kabupaten Daerah" class="navbar-brand" style="width: 300px; height: auto; border-radius: 15px;">
		</a>
		</div>
	</div>
</div>    
<div class="container" style="text-align: center; color:#fff;">
	<h4>
	"Pengaduan Masyarakat Online dibuat untuk merealisasikan kebijakan “no wrong door policy” yang menjamin hak masyarakat agar pengaduan dari manapun dan jenis apapun akan disalurkan kepada penyelenggara pelayanan publik yang berwenang menanganinya."
	</h4>
</div>
<div class="page-inner mt--3">
	<div class="row">
		<div class="col-md-12">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Form Pengaduan Online</div>
                        <a href="/" class="btn btn-sm ml-auto" style="background-color: #B40D1A; color: #ffffff;">KEMBALI</a>
					</div>
				</div>
				<div class="card-body">
				<h5 style="text-align: left;">*Isi semua formulir di bawah</h5>
                    <form action="{{ route('pengaduan.store') }}" method="POST" enctype="multipart/form-data">
					@csrf
                        <div class="form-group">
                            <label for="nama">Nama Pelapor</label>
                            <input type="text" name="nama" class="form-control" id="text" placeholder="Masukan Nama Anda">
                        </div>
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" name="nik" class="form-control" id="text" placeholder="Masukan NIK Anda">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" class="form-control"> </textarea>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="text" placeholder="Masukan Email Anda">
                        </div>
                        <div class="form-group">
                            <label for="judul">No Hp</label>
                            <input type="text" name="nomor_telepon" class="form-control" id="text" placeholder="Masukan No Hp Anda">
                        </div>
                        <div class="form-group">
                            <label for="instansi">Instansi</label>
                            <input type="text" name="instansi" class="form-control" id="text" placeholder="Masukan Asal Instansi Anda">
                        </div>
                        <div class="form-group">
                            <label for="isi">Isi Pengaduan</label>
                            <textarea name="isi" class="form-control"> </textarea>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar Bukti *Maksimal Ukuran 2mb</label>
                            <input type="file" name="gambar_bukti" class="form-control"> 
                        </div>
						<div class="form-group">
						<button class="btn btn-sm" type="submit" style="background-color: #1e2c4d; color: #fff;">UPLOAD</button> <button class="btn btn-sm" type="reset" style="background-color: #B40D1A; color: #ffffff;">RESET</button>
						</div>
						<hr>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
<footer class="footer fixed-bottom" style="background-color: #1e2c4d; color:white;">
				<div class="container-fluid" >
					<nav class="pull-left">
				<p>INSPEKTORAT KABUPATEN BEKASI</p>
                <p>Komplek Perkantoran Pemerintahan Daerah Kabupaten Bekasi</p>
                <p>Jln. Deltamas Boulevard Sukamahi</p>
                <p>Cikarang Pusat Kabupaten Bekasi 17530</p>
                <p>Jawa Barat - Indonesia</p>
				<p>inspektoratkabbekasi@gmail.com</p>
				<p>inspektorat@bekasikab.go.id</p>
					</nav>			
				</div>
</footer>
<footer class="footer" style="background-color: #1e2c4d; color:white;">
				<div class="container-fluid" >
					<nav class="pull-left">
						
					Hak Cipta © <span id="currentYear"></span> Inspektorat Kabupaten Bekasi | Bekasi Baru Bekasi Bersih

							<script>
								// Mendapatkan elemen dengan id "currentYear"
								var currentYearElement = document.getElementById('currentYear');
								
								// Mendapatkan tahun saat ini
								var currentYear = new Date().getFullYear();
								
								// Mengatur teks dalam elemen "currentYear" dengan tahun saat ini
								currentYearElement.textContent = currentYear;
							</script>
					</nav>			
				</div>
</footer>