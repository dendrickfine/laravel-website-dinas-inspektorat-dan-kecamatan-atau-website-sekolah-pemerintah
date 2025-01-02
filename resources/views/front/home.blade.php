@extends('front.layouts.frontend')
@push('meta-seo')
    <meta name="description" content="Website Resmi SMA Negeri Bandung">
    <meta name="keywords" content="SMA Negeri Bandung Terbaik">
    <meta property="og:title" content="SMA Negeri Bandung">
    <meta property="og:url" content="{{url()->current()}}">
    <meta property="og:site_name" content="Website Resmi SMA Negeri Bandung">
    <meta property="og:description" content="Website Resmi SMA Negeri Bandung">
    <meta property="og:image" content="{{ asset('back/img/bandung.png') }}">
@endpush
@section('content')
@include('front.includes.slide')
<div class="card mb-3 mt-3" data-aos="fade-up"
    style="border-radius:20px; background-color:#779eb2; margin-left:15px; margin-right:15px; box-shadow: 4px 8px 20px 5px rgba(173, 216, 230, 0.9);">
    <div class="row no-gutters align-items-center">
        <div class="col-md-5 text-center mt-4">
            @if ($ketua && $ketua->gambar_playlist)
                <img src="{{ asset('uploads/' . $ketua->gambar_playlist) }}" class="card-img" alt="{{ $ketua->slug }}"
                    style="height: auto; width: 350px; ">
            @else
                <img src="{{ asset('back/img/bandung.png') }}" class="card-img" alt="default"
                    style="height: auto; width: 100px;">
            @endif
            <h2 class="card-title" data-aos="fade-up" style="margin-top: 10px; color:#fff;">
                {{ $ketua && $ketua->judul_playlist ? $ketua->judul_playlist : 'Belum Ada Ketua' }}
            </h2>
        </div>
        <div class="col-md-6">
            <div class="card-body text-justify" data-aos="fade-left">
                <h2 class="card-text" style="color:#fff;">
                    {!! $ketua && $ketua->deskripsi ? $ketua->deskripsi : 'Belum Ada Sambutan' !!}
                </h2>
            </div>
        </div>
    </div>
</div>
<div class="row mt-3" style="background-color:#f1f1f1;">
    <div class="col-md-12 text-center">
        <h2 class="heading-section mt-4 pb-md-4"><i class="fa-solid fa-photo-film"></i> GALERI FOTO</h2>
    </div>
    <div class="col-md-12">
        <div class="featured-carousel owl-carousel">
            @if($iklanA->count() > 0)
                @foreach ($iklanA as $iklan)
                    <div class="item" data-aos="flip-left">
                        <div class="work">
                            <div class="img d-flex align-items-center justify-content-center rounded"
                                style="background-color:#f1f1f1; background-image: url('{{ asset('uploads/' . $iklan->gambar_iklan) }}');">
                                <a href="{{ $iklan->link }}" target="_blank"
                                    class="icon d-flex align-items-center justify-content-center">
                                    <span class="fas fa-arrow-right"></span>
                                </a>
                            </div>
                            <div class="text pt-3 w-100 text-center">
                                <h3>{{ $iklan->judul }}</h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p>No images found.</p>
            @endif
        </div>
    </div>
</div>
<hr>
<div class="container">
    <div class="card shadow-lg" style="border-radius:20px; background-color:#f9fefc;">
        <div id="result" class="container mt-2">
            <div class="row">
                <div class="col-lg-8">
                    <div class="col-md-12 mt-3">
                        <h4><i class="fa fa-newspaper-o"></i> INFORMASI TERKINI</h4>
                        <hr>
                        @forelse ($artikel as $row)
                                                <div class="card mb-3 shadow-sm" data-aos="fade-up" style="border-radius: 15px;">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <a href="{{ route('detail-artikel', $row->slug) }}">
                                                                    <img src="{{ asset('uploads/' . $row->gambar_artikel) }}"
                                                                        class="card-img-top img-fluid"
                                                                        style="width: 800px; height: 205px; object-fit: cover; border-radius: 15px;"
                                                                        alt="{{ $row->judul }}">
                                                                </a>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <small><i class="far fa-calendar-days"></i>
                                                                    {{ $row->created_at->format('d F Y') }}</small>
                                                                <h4 class="card-title" style="margin-top: 5px; margin-bottom: 5px;">
                                                                    <a href="{{ route('detail-artikel', $row->slug) }}"
                                                                        style=" font-size:20px; color: #1e2c4d; font-weight: bold;">
                                                                        {{ $row->judul }}
                                                                    </a>
                                                                </h4>
                                                                <p class="card-text" style="margin-top: 5px; margin-bottom: 0;">
                                                                    <?php
                            $body = $row->body;
                            $trimmedBody = substr($body, 0, 95);
                            if (strlen($body) > 95) {
                                $trimmedBody .= "...";
                            }
                            echo $trimmedBody;
                                                            ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                        @empty
                            <p>Data Masih Kosong</p>
                        @endforelse
                        {{ $artikel->links() }}
                        <hr>
                        <h4><i class="fa-solid fa-bullhorn"></i> PENGADUAN PUBLIK</h4>
                        <hr>
                    </div>
                    <div class="container mt-4" data-aos="fade-right">
                        <div class="row justify-content-start">
                            <!-- Menggunakan col-lg-5 untuk memberikan ruang yang lebih besar pada layar besar -->
                            <div class="col-md-6 col-lg-6 mb-4">
                                <div class="card shadow-sm" style="border-radius: 15px;">
                                    <div class="card-body d-flex flex-column align-items-center">
                                        <img src="{{ asset('uploads/lapor1.png') }}"
                                            style="width: 100%; height: auto; border-radius: 15px;">
                                        <a href="#" class="card-title mt-3"
                                            style="text-decoration: underline; color:#1e2c4d;"
                                            id="details-link-1">Details</a>
                                        <a href="{{ route('pengaduan.create') }}" class="btn mt-auto"
                                            style="background-color: #1e2c4d; color: #fff;">Buat Laporan</a>
                                    </div>
                                </div>
                            </div>
                            <div id="popup-modal-1" class="popup-modal">
                                <div class="popup-content" style="width:100%;">
                                    <span class="close-button" id="close-button-1">&times;</span>
                                    <p>Layanan Pengaduan Masyarakat dibuat untuk merealisasikan kebijakan “no wrong door
                                        policy” yang menjamin hak masyarakat agar pengaduan dari manapun dan jenis
                                        apapun akan disalurkan kepada penyelenggara pelayanan publik yang berwenang
                                        menanganinya.</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 mb-4">
                                <div class="card shadow-sm" style="border-radius: 15px;">
                                    <div class="card-body d-flex flex-column align-items-center">
                                        <img src="{{ asset('uploads/lapor.png') }}"
                                            style="width: 100%; height: auto; border-radius: 15px;">
                                        <a href="#" class="card-title mt-3"
                                            style="text-decoration: underline; color:#1e2c4d;"
                                            id="details-link-2">Details</a>
                                        <a href="{{ route('wbs.create') }}" class="btn mt-auto"
                                            style="background-color: #1e2c4d; color: #fff;">Buat Laporan</a>
                                    </div>
                                </div>
                            </div>
                            <div id="popup-modal-2" class="popup-modal">
                                <div class="popup-content" style="width:100%;">
                                    <span class="close-button" id="close-button-2">&times;</span>
                                    <p>Whistleblowing System (WBS) adalah mekanisme penyampaian pengaduan dugaan tindak
                                        pidana tertentu yang telah terjadi atau akan terjadi yang melibatkan pegawai
                                        inspektorat daerah kabupaten bekasi dan orang lain yang yang dilakukan dalam
                                        organisasi inspektorat kabupaten bekasi, dimana pelapor bukan merupakan bagian
                                        dari pelaku kejahatan yang dilaporkannya</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <br>
                </div>
                <div class="col-lg-4 mt-3">
                    <div class="detail-sidebar-terbaru">
                        <h4><i class="fa-solid fa-globe"></i> INSTANSI TERKAIT</h4>
                        <hr>
                        <div style="text-align: center;" data-aos="fade-left">
                            <div style="margin-bottom: 20px;">
                                <a href="https://www.kemdikbud.go.id/" target="_blank">
                                    <img src="{{ asset('uploads/kemendikbud.png') }}" alt="badan pemeriksa keuangan"
                                        style="width: auto; height: 210px;">
                                </a>
                            </div>
                        </div>
                        <hr>
                        <h4><i class="fa-solid fa-file-lines"></i> ARSIP</h4>
                        <hr>
                        @foreach ($postinganTerbaru as $row)
                            <div class="media mt-3" data-aos="fade-up">
                                <img src="{{ asset('uploads/' . $row->gambar_artikel) }}"
                                    style="width: 90px; height: 80px; object-fit: cover; border-radius: 10px;"
                                    class="card-img-top img-fluid mr-3 mt-2" alt="{{ $row->judul }}">
                                <div class="media-body">
                                    <small><i class="far fa-calendar-days"></i>
                                        {{ $row->created_at->format('d F Y') }}</small>
                                    <div class="mt-0">
                                        <a href="{{ route('detail-artikel', $row->slug) }}"
                                            style="color: #1e2c4d;">{{ $row->judul }}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <hr>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="row" style="margin-top:30px;">
    <div class="col-md-12">
        <div class="featured-carousel owl-carousel">
            @if($inovasi->count() > 0)
                @foreach ($inovasi as $key => $row)
                    <div class="item" data-aos="flip-right">
                        <div class="work">
                            <div class="img d-flex align-items-center justify-content-center rounded"
                                style="background-color:#f1f1f1; height: 230px; background-image: url('{{ asset('uploads/' . $row->gambar_materi) }}');">
                                <a href="{{ $row->link }}" target="_blank"
                                    class="icon d-flex align-items-center justify-content-center">
                                    <span class="fas fa-arrow-right"></span>
                                </a>
                            </div>
                            <div class="text pt-3 w-100 text-center">
                                <button class="btn-details"
                                    style="background-color: #fff; color:#1e2c4d; font-size:17px; border-radius:8px;"
                                    data-description="{{ $row->deskripsi }}">Details</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p>No images found.</p>
            @endif
        </div>
    </div>
</div>

<!-- Pop-up modal -->
<div id="popup" class="popup">
    <div class="popup-content popop" style="width: 70%;">
        <span class="close-btn">&times;</span>
        <p id="popup-description"></p>
    </div>
</div>
@endsection