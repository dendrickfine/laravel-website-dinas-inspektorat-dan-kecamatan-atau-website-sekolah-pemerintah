@extends('layouts.default')  

@section('content')
<br>
<br>
<div class="page-inner mt--5" style="background-color: #1e2c4d;">
	<div class="row">
		<div class="col-md-12">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Pengaduan dari {{$pengaduan->nama}}</div>
                        <a href="{{ route('wbs.index') }}" class="btn btn-primary btn-sm ml-auto">Kembali</a>
					</div>
				</div>
                <div class="card-body">
                    <h1>Tanggal Melapor *YYYY/MM/DD</h1>
                    <h3>{{$pengaduan->created_at}}</h3>
                </div>
                <div class="card-body">
                    <h1>Nama Pelapor</h1>
                    <h3>{{$pengaduan->nama}}</h3>
                </div>
                <div class="card-body">
                    <h1>NIK Pelapor</h1>
                    <h3>{{$pengaduan->nik}}</h3>
                </div>
                <div class="card-body">
                    <h1>Alamat Pelapor</h1>
                    <h3>{{$pengaduan->alamat}}</h3>
                </div>
                <div class="card-body">
                    <h1>Email Pelapor</h1>
                    <h3>{{$pengaduan->email}}</h3>
                </div>
                <div class="card-body">
                    <h1>No Hp Pelapor</h1>
                    <h3>{{$pengaduan->nik}}</h3>
                </div>
                <div class="card-body">
                    <h1>Instansi Pelapor</h1>
                    <h3>{{$pengaduan->instansi}}</h3>
                </div>
                <div class="card-body">
                    <h1>Isi Laporan</h1>
                    <h3>{{$pengaduan->isi}}</h3>
                </div>
                <div class="card-body">
                    <h1>Gambar KTP Pelapor</h1>
                    <div>
                        <img src="{{asset('uploads/'.$pengaduan->gambar_bukti)}}" class="img-fluid">
                    </div>
                </div>
			</div>
		</div>
	</div>
</div>
@endsection
                