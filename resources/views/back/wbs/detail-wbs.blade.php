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
						<div class="card-title">WBS dari {{$wbs->nama_pelapor}}</div>
                        <a href="{{ route('wbs.index') }}" class="btn btn-primary btn-sm ml-auto">Kembali</a>
					</div>
				</div>     
                <div class="card-body">
                    <h1>Tanggal Melapor *YYYY/MM/DD</h1>
                    <h3>{{$wbs->created_at}}</h3>
                </div>           
                <div class="card-body">
                    <h1>Nama Pelapor</h1>
                    <h3>{{$wbs->nama_pelapor}}</h3>
                </div>
                <div class="card-body">
                    <h1>Email Pelapor</h1>
                    <h3>{{$wbs->email}}</h3>
                </div>
                <div class="card-body">
                    <h1>NIP Pelapor</h1>
                    <h3>{{$wbs->nip}}</h3>
                </div>
                <div class="card-body">
                    <h1>Jabatan Pelapor</h1>
                    <h3>{{$wbs->jabatan}}</h3>
                </div>
                <div class="card-body">
                    <h1>Instansi Pelapor</h1>
                    <h3>{{$wbs->instansi}}</h3>
                </div>
                <div class="card-body">
                    <h1>No HP Pelapor</h1>
                    <h3>{{$wbs->nomor_telepon}}</h3>
                </div>
                <div class="card-body">
                    <h1>Alamat Pelapor</h1>
                    <h3>{{$wbs->alamat}}</h3>
                </div>
                <div class="card-body">
                    <h1>Gambar KTP Pelapor</h1>
                    <div>
                        <img src="{{asset('uploads/'.$wbs->gambar_ktp)}}" class="img-fluid">
                    </div>
                </div>
                <div class="card-body">
                    <h1>Nama Pegawai yang Dilaporkan</h1>
                    <h3>{{$wbs->nama_pegawai}}</h3>
                </div>
                <div class="card-body">
                    <h1>Unit Kerja Pegawai yang Dilaporkan</h1>
                    <h3>{{$wbs->unit_kerja}}</h3>
                </div>
                <div class="card-body">
                    <h1>Materi/Besar Materi yang Dirugikan</h1>
                    <h3>{{$wbs->materi}}</h3>
                </div>
                <div class="card-body">
                    <h1>Jenis Pelanggaran</h1>
                    <h3>{{$wbs->jenis_pelanggaran}}</h3>
                </div>
                <div class="card-body">
                    <h1>Kerugian</h1>
                    <h3>{{$wbs->kerugian}}</h3>
                </div>
                <div class="card-body">
                    <h1>Permintaan Atas Aduan Ini</h1>
                    <h3>{{$wbs->permintaan}}</h3>
                </div>
				<div class="card-body">
                    <h1>Gambar Bukti</h1>
                    <div>
                        <img src="{{asset('uploads/'.$wbs->gambar_bukti)}}" class="img-fluid">
                    </div>
                </div>
			</div>
		</div>
	</div>
</div>
@endsection
                