<div class="container-fluid px-md-5" style="background-color: #fff;">
    <div class="row justify-content-between">
        <div class="col-md-8 order-md-last">
            <div class="row">
                <div class="col-md-6 text-center" data-aos="fade-down">
                    <a href="/"><img src="{{ asset('back/img/inspektorat.png') }}" alt="Logo Inspektorat Daerah Kabupaten Bekasi" style="width:225px; height: auto; margin-top:5px; margin-bottom:5px;"></a>
                </div>
                <div class="col-md-5 d-md-flex justify-content-end mb-md-0 mb-3">
                    
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex align-items-center justify-content-end" style="margin-top: 9px;">
            <!-- <div class="social-media">
                <a href="/">
                    <img src="{{ asset('back/img/bangga.png') }}" alt="Navbar" style="width: 350px; height: auto;">
                </a>
            </div> -->
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light" id="ftco-navbar" style="background-color: #343a40;">
	    <div class="container-fluid">
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav m-auto">
	        	<li class="nav-item active"><a href="/" class="nav-link">BERANDA</a></li>
	        	<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PROFIL</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="{{ url('/detail-artikel/profil-inspektorat-daerah-kabupaten-bekasi') }}">Profil Inspektorat</a>
                <a class="dropdown-item" href="{{ url('/detail-artikel/struktur-organisasi-inspektorat-daerah-kabupaten-bekasi') }}">Struktur Organisasi</a>
                <a class="dropdown-item" href="{{ url('/detail-artikel/visi-misi-inspektorat-daerah-kabupaten-bekasi') }}">Visi Misi</a>
                <a class="dropdown-item" href="#about-us">Tentang Kami</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PENGADUAN PUBLIK</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="{{ route('pengaduan.create') }}"> Layanan Pengaduan Online</a>
                <a class="dropdown-item" href="{{ route('wbs.create') }}">Whistle Blowing System</a>
                <a class="dropdown-item" href="https://saberpungli.jabarprov.go.id/" target="_blank">Saber Pungli(Sapu Bersih Pungutan Liar)</a>
                <a class="dropdown-item" href="https://gol.kpk.go.id/login/" target="_blank">Gratifikasi Online</a>
                <a class="dropdown-item" href="https://www.lapor.go.id/instansi/pemerintah-kabupaten-bekasi" target="_blank">SP4N LAPOR</a>
                <a class="dropdown-item" href="https://siharka.menpan.go.id/" target="_blank">Siharka</a>
                <a class="dropdown-item" href="https://www.lapor.go.id/" target="_blank">LAPOR!</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">INFORMASI</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04"> 
              <a class="dropdown-item" href="https://jdih.bekasikab.go.id/" target="_blank">JDIH Kabupaten Bekasi</a>
                @foreach ($subKategori as $kat)
                @if(isset($kat->slug))
                <a class="dropdown-item" href="{{ route('kategori', $kat->slug) }}#result">{{ ($kat->nama_kategori) }}</a>
                @endif
                @endforeach
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">LKHASN & LHKPN</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="https://sippn.menpan.go.id/sektor-strategis/dasar/aparatur-negara/lkhasn-/2" target="_blank">Lapor LKHASN</a>
              <a class="dropdown-item" href="https://elhkpn.kpk.go.id/portal/user/login#page-top" target="_blank">Lapor LHKPN</a> 
              </div>
            </li>
	        	<li class="nav-item">
              <form action="{{ route('pencarian') }}#result" method="POST" class="searchform order-lg-last" style="margin-top: 2px;">
                  <div class="form-group d-flex">
                      @csrf
                      <input type="text" class="form-control pl-3" name="keyword" placeholder="Search...">
                      <button type="submit" class="form-control search"><span class="fa fa-search"></span></button>
                  </div>
              </form>
          </li>
	        </ul>
	      </div>
	    </div>
</nav>


