@extends('front.layouts.frontend')
@push('meta-seo')
    <meta name="description" content="Website Resmi Inspektorat Daerah Kabupaten Bekasi">
    <meta name="keywords" content="inspektorat kabupaten bekasi, irdakabbekasi, inspektorat bekasi, layanan inspektorat kabupaten bekasi, layanan online kabupaten bekasi, pemda kabupaten bekasi">
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{$artikel->judul}}">
    <meta property="og:url" content="{{url()->current()}}">
    <meta property="og:site_name" content="Website Resmi Inspektorat Daerah Kabupaten Bekasi">
    <meta property="og:description" content="Website Resmi Inspektorat Daerah Kabupaten Bekasi">
    <meta property="og:image" content="{{ asset('uploads/' . $artikel->gambar_artikel) }}">
@endpush
@section('content')
<div class="container">
<hr>
    <div class="row">
        <div class="col-lg-8 mt-3" data-aos="fade-right" style="font-family: 'Abel', sans-serif;">
            <h2 style="font-family: 'Abel', sans-serif;">{{$artikel->judul}}</h2>
            @if ($artikel->created_at)
            <h6><i class="far fa-calendar-days"></i> {{ $artikel->created_at->format('d F Y') }}</h6>
            @endif
            <div class="mt-3">

            <p style="font-size: 15px">Share to:  <a class="btn btn-sm btn-primary" href="https://facebook.com/sharer.php?u={{url()->current()}}" target="_blank"><i class="fa-brands fa-facebook"></i> Facebook</a> <a class="btn btn-sm btn-success" href="https://api.whatsapp.com/send?text={{url()->current()}}" target="_blank"><i class="fa-brands fa-whatsapp"></i> Whatsapp</a> <a class="btn btn-sm btn-dark" href="https://x.com/intent/tweet?url={{ urlencode(url()->current()) }}" target="_blank"><i class="fa-brands fa-x-twitter"></i> Twitter</a></p>

            </div>
            <div class="row mt-3" style="margin-left:1px; margin-right:1px;">
                <img src="{{ asset('uploads/' . $artikel->gambar_artikel) }}" class="img-fluid" style="border-radius: 15px;"> 
            </div>
            <div class="detail-content">
                <div class="detail-body" style="font-size: 16px">
                    <p>{!! $artikel->body !!} </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mt-4">
            <div class="detail-sidebar-terbaru">
            <h4 style="font-family: 'Marcellus', serif;"><i class="fa fa-newspaper-o"></i> INFORMASI TERKINI</h4>
                <hr>
                @if ($postinganTerbaru)
                    @foreach ($postinganTerbaru as $row)
                        <div class="media mt-3" data-aos="fade-left" style="font-family: 'Abel', sans-serif;">
                            <img src="{{ asset('uploads/' . $row->gambar_artikel) }}" style="width: 90px; height: 80px; object-fit: cover; border-radius: 10px;" class="card-img-top img-fluid mr-3 mt-2" alt="{{ $row->judul }}">
                            <div class="media-body">
                                @if ($row->created_at)
                                    <small><i class="far fa-calendar-days"></i> {{ $row->created_at->format('d F Y') }}</small>
                                @endif
                                <div class="mt-0">
                                    <a href="{{ route('detail-artikel', $row->slug) }}" style=" color: #1e2c4d;">{{ $row->judul }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No recent posts found.</p>
                @endif
                <hr>
            </div>
            <div>
            <h4 style="font-family: 'Marcellus', serif;"><i class="fa-solid fa-bullhorn"></i> PENGADUAN PUBLIK</h4>
            <hr>
            <div class="d-flex flex-column align-items-center" data-aos="fade-left" style="font-family: 'Abel', sans-serif;">
                <div class="card mb-4 shadow-sm" style="width: 20rem; border-radius: 15px;">
                    <div class="card-body d-flex flex-column align-items-center">
                        <img src="{{ asset('uploads/lapor1.png') }}" style="width: 100%; color:#1e2c4d;height: auto; border-radius: 15px;">
                        <a href="#" class="card-title mt-3" style="text-decoration: underline; color:#1e2c4d;" id="details-link-1">Details</a>
                        <a href="{{ route('pengaduan.create') }}" class="btn mt-auto" style="background-color: #1e2c4d; color: #fff;">Buat Laporan</a>
                    </div>
                </div>
                <div id="popup-modal-1" class="popup-modal">
                    <div class="popup-content" style="width:100%;">
                        <span class="close-button" id="close-button-1">&times;</span>
                        <p>Layanan Pengaduan Masyarakat dibuat untuk merealisasikan kebijakan “no wrong door policy” yang menjamin hak masyarakat agar pengaduan dari manapun dan jenis apapun akan disalurkan kepada penyelenggara pelayanan publik yang berwenang menanganinya.</p>
                    </div>
                </div>
                <div class="card shadow-sm" style="width: 20rem; border-radius: 15px;">
                    <div class="card-body d-flex flex-column align-items-center">
                        <img src="{{ asset('uploads/lapor.png') }}" style="width: 100%; height: auto; border-radius: 15px;">
                        <a href="#" class="card-title mt-3" style="color:#1e2c4d; text-decoration: underline;" id="details-link-2">Details</a>
                        <a href="{{ route('wbs.create') }}" class="btn mt-auto" style="background-color: #1e2c4d; color: #fff;">Buat Laporan</a>
                    </div>
                </div>
                <div id="popup-modal-2" class="popup-modal">
                    <div class="popup-content" style="width:100%;">
                        <span class="close-button" id="close-button-2">&times;</span>
                        <p>Whistleblowing System (WBS) adalah mekanisme penyampaian pengaduan dugaan tindak pidana tertentu yang telah terjadi atau akan terjadi yang melibatkan pegawai inspektorat daerah kabupaten bekasi dan orang lain yang yang dilakukan dalam organisasi inspektorat kabupaten bekasi, dimana pelapor bukan merupakan bagian dari pelaku kejahatan yang dilaporkannya</p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="detail-sidebar-terbaru">
                <h4 style="font-family: 'Marcellus', serif;"><i class="fa-solid fa-globe"></i> INSTANSI TERKAIT</h4>
                <hr>
                <div style="text-align: center;" data-aos="fade-down">
                <div style="margin-bottom: 20px;">
                    <a href="https://www.bpk.go.id/" target="_blank">
                        <img src="{{ asset('uploads/bpk.png') }}" alt="badan pemeriksa keuangan" style="width: auto; height: 70px;">
                    </a>
                </div>
                <div style="margin-bottom: 20px;">
                    <a href="https://www.bpkp.go.id/" target="_blank">
                        <img src="{{ asset('uploads/bpkp.png') }}" alt="badan pengawasan keuangan dan pembangunan" style="width: auto; height: 70px;">
                    </a>
                </div>
                <div style="margin-bottom: 20px;">
                    <a href="https://kejari-kabupatenbekasi.kejaksaan.go.id/" target="_blank">
                        <img src="{{ asset('uploads/kejari.png') }}" alt="kejaksaan kabupaten bekasi" style="width: auto; height: 70px;">
                    </a>
                </div>
                <div style="margin-bottom: 20px;">
                    <a href="https://polri.go.id/" target="_blank">
                        <img src="{{ asset('uploads/polri.png') }}" alt="kepolisian republik indonesia" style="width: auto; height: 70px;">
                    </a>
                </div>
                <div style="margin-bottom: 20px;">
                    <a href="https://www.kemendagri.go.id/" target="_blank">
                        <img src="{{ asset('uploads/kemendagri.png') }}" alt="kemendagri" style="width: auto; height: 70px;">
                    </a>
                </div>
                <div style="margin-bottom: 20px;">
                    <a href="http://www.kpk.go.id/" target="_blank">
                        <img src="{{ asset('uploads/kpk.png') }}" alt="kpk" style="width: auto; height: 70px;">
                    </a>
                </div>
                </div>
                <hr>
            <br>
            </div>
            </div>
        </div>
    </div>
    <hr>
</div>
<div class="row" style="margin-top:30px;">
    <div class="col-md-12">
        <div class="featured-carousel owl-carousel">
            @if($inovasi->count() > 0)
                @foreach ($inovasi as $key=>$row)
                    <div class="item" data-aos="flip-right">
                        <div class="work">
                            <div class="img d-flex align-items-center justify-content-center rounded" style="background-color:#f1f1f1; height: 230px; background-image: url('{{ asset('uploads/' . $row->gambar_materi) }}');">
                                <a href="{{ $row->link }}" target="_blank" class="icon d-flex align-items-center justify-content-center">
                                    <span class="fas fa-arrow-right"></span>
                                </a>
                            </div>
                            <div class="text pt-3 w-100 text-center">
                                <button class="btn-details"style="background-color: #fff; color:#1e2c4d; font-size:17px; border-radius:8px; font-family: 'Abel', sans-serif;" data-description="{{ $row->deskripsi }}">Details</button>
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
        <p style="font-family: 'Abel', sans-serif;" id="popup-description"></p>
    </div>
</div>
@endsection
