<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Whistle Blowing System Inspektorat Kab. Bekasi</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{ asset('uploads/garuda.png') }}" type="image/x-icon"/>
	<!-- seo -->
	<meta name="description" content="Whistle Blowing System Inspektorat Daerah Kabupaten Bekasi">
    <meta name="keywords" content="lapor korupsi inspektorat kabupaten bekasi, wbs Inspektorat Daerah Kabupaten Bekasi, lapor wbs Inspektorat Daerah Kabupaten Bekasi, lapor whistle blowing system">
    <meta property="og:title" content="Whistle Blowing System Inspektorat Kabupaten Bekasi">
    <meta property="og:url" content="{{url()->current()}}">
    <meta property="og:site_name" content="Website Resmi Inspektorat Daerah Kabupaten Bekasi">
    <meta property="og:description" content="Pelaporan Whistle blowing system Inspektorat Daerah Kabupaten Bekasi">
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

</head>

<style>
* {
      font-family: "Plus Jakarta Sans", sans-serif;
      font-optical-sizing: auto;
      font-weight: 400;
      font-style: normal;
}
body {
    background-color: #1e2c4d;
}
.footer {
		padding: 10px 0;
		text-align: left;
	}
	.card-body form {
		margin-bottom: 250px; /* Margin bawah untuk memberi ruang antara form dan tombol */
	}
</style>
<body>
	@include('sweetalert::alert')
<div class="panel-header d-flex justify-content-center">
	<div class="page-inner py-4 ">
		<div class="d-flex align-items-center align-items-md-center flex-column flex-md-row">
		<a href="/" class="logo">
		<img src="{{ asset('uploads/lapor.png') }}" alt="Logo Inspektorat Kabupaten Daerah" class="navbar-brand" style="width: 300px; height: auto; border-radius: 15px;">
		</a>
		</div>
	</div>
</div> 
<div class="container" style="text-align: center; color:#fff;">
	<h4>
		"Whistleblowing System (WBS) adalah mekanisme penyampaian pengaduan dugaan tindak pidana tertentu yang telah terjadi atau akan terjadi yang melibatkan pegawai inspektorat daerah kabupaten bekasi dan orang lain yang yang dilakukan dalam organisasi inspektorat kabupaten bekasi, dimana pelapor bukan merupakan bagian dari pelaku kejahatan yang dilaporkannya"
	</h4>
</div>
<div class="page-inner mt--3">
	<div class="row">
		<div class="col-md-12">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Form Whistle Blowing System</div>
                        <a href="/" class="btn btn-sm ml-auto" style="background-color: #B40D1A; color: #ffffff;">KEMBALI</a>
					</div>	
				</div>
				<div class="card-body">
				<h5 style="text-align: left;">*Isi semua formulir di bawah</h5>
                    <form action="{{ route('wbs.store') }}" method="POST" enctype="multipart/form-data">
					@csrf
                        <div class="form-group">
							<label for="nama">Nama Pelapor</label>
							<input type="text" name="nama_pelapor" class="form-control" id="text" placeholder="Masukan Nama Anda">
						</div>
                        <div class="form-group">
							<label for="email">Email</label>
							<input type="text" name="email" class="form-control" id="text" placeholder="Masukan Email Anda">
						</div>
                        <div class="form-group">
							<label for="nip">Nomor Identitas Pegawai Negeri Sipil</label>
							<input type="text" name="nip" class="form-control" id="text" placeholder="Masukan NIP Anda">
						</div>
                        <div class="form-group">
							<label for="jabatan">Jabatan</label>
							<input type="text" name="jabatan" class="form-control" id="text" placeholder="Masukan Jabatan Anda">
						</div>
                        <div class="form-group">
							<label for="instansi">Instansi</label>
							<input type="text" name="instansi" class="form-control" id="text" placeholder="Masukan Asal Instansi Anda">
						</div>
                        <div class="form-group">
							<label for="judul">No Hp</label>
							<input type="text" name="nomor_telepon" class="form-control" id="text" placeholder="Masukan No Hp Anda">
						</div>
                        <div class="form-group">
							<label for="alamat">Alamat</label>
							<textarea name="alamat" class="form-control"> </textarea>
						</div>
                        <div class="form-group">
							<label for="gambar_ktp">Gambar KTP Anda *Maksimal Ukuran 2mb</label>
							<input type="file" name="gambar_ktp" class="form-control"> 
						</div>
                        <div class="form-group">
							<label for="nama_pegawai">Nama Pegawai yang Dilaporkan</label>
							<input type="text" name="nama_pegawai" class="form-control" id="text" placeholder="Masukan Nama Pegawai yang Akan Dilaporkan">
						</div>
                        <div class="form-group">
							<label for="unit_kerja">Unit Kerja Pegawai yang Dilaporkan</label>
							<input type="text" name="unit_kerja" class="form-control" id="text" placeholder="Masukan Unit Kerja Pegawai yang Akan Dilaporkan">
						</div>
                        <div class="form-group">
							<label for="materi">Materi/Besar Materi yang Dirugikan</label>
							<input type="text" name="materi" class="form-control" id="text" placeholder="Masukan Kerugian Materi">
						</div>
                        <div class="form-group">
							<label for="jenis_pelanggaran">Jenis Pelanggaran</label>
							<textarea name="jenis_pelanggaran" class="form-control"> </textarea>
						</div>
                        <div class="form-group">
							<label for="kerugian">Kerugian</label>
							<textarea name="kerugian" class="form-control"> </textarea>
						</div>
                        <div class="form-group">
							<label for="permintaan">Permintaan Pelapor Atas Aduan Ini</label>
							<textarea name="permintaan" class="form-control"> </textarea>
						</div>
                        <div class="form-group">
							<label for="gambar_bukti">Gambar Bukti *Maksimal Ukuran 2mb</label>
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