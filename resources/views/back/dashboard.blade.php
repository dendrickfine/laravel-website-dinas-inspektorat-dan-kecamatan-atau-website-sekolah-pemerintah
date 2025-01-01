@extends('layouts.default') 

@section('content')

<style>
  .panel-header{
    background-color: #1e2c4d;
  }
</style>

<div class="panel-header">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			<div>
				<h2 class="text-white pb-2 fw-bold">SMA NEGERI BANDUNG</h2>
				<h5 class="text-white op-7 mb-2">ADMINISTRATOR SMA NEGERI BANDUNG</h5>
			</div>
		</div>
	</div>
</div>
<div class="page-inner mt--5">
	<div class="row">
		<div class="col-sm-6 col-md-3">
			<div class="card card-stats card-round">
				<div class="card-body">
				<a href="{{ route('artikel.index') }}">
					<div class="row align-items-center">
						<div class="col-icon">
							<div class="icon-big text-center icon-info bubble-shadow-small">
								<i class="far fa-newspaper"></i>
							</div>
						</div>
						<div class="col col-stats ml-3 ml-sm-0">
							<div class="numbers">
								<p class="card-category">Artikel</p>
								<h4 class="card-title">{{$total_artikel}}</h4>
							</div>
						</div>
					</div>
				</a>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-3">
			<div class="card card-stats card-round">
				<div class="card-body">
				<a href="{{ route('kategori.index') }}">
					<div class="row align-items-center">
						<div class="col-icon">
							<div class="icon-big text-center icon-success bubble-shadow-small">
								<i class="fas fa-tags"></i>
							</div>
						</div>
						<div class="col col-stats ml-3 ml-sm-0">
							<div class="numbers">
								<p class="card-category">Kategori</p>
								<h4 class="card-title">{{$total_kategori}}</h4>
							</div>
						</div>
					</div>
				</a>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-3">
			<div class="card card-stats card-round">
				<div class="card-body">
				<a href="{{ route('pengaduan.index') }}">
					<div class="row align-items-center">
						<div class="col-icon">
							<div class="icon-big text-center icon-secondary bubble-shadow-small">
								<i class="fas fa-trophy"></i>
							</div>
						</div>
						<div class="col col-stats ml-3 ml-sm-0">
							<div class="numbers">
								<p class="card-category">Pengaduan</p>
								<h4 class="card-title">{{$total_pengaduan}}</h4>
							</div>
						</div>
					</div>
				</a>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-3">
			<div class="card card-stats card-round">
				<div class="card-body ">
				<a href="{{ route('wbs.index') }}">
					<div class="row align-items-center">
						<div class="col-icon">
							<div class="icon-big text-center icon-primary bubble-shadow-small">
								<i class="fas fa-coins"></i>
							</div>
						</div>
						<div class="col col-stats ml-3 ml-sm-0">
							<div class="numbers">
								<p class="card-category">WBS!</p>
								<h4 class="card-title">{{$total_wbs}}</h4>
							</div>
						</div>
					</div>
				</a>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Artikel Terpopuler</div>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Views</th>
								<th>Judul</th>
								<th>Kategori</th>
								<th>Tanggal</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($artikel_populer as $item)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>{{$item->views}}</td>
								<td>{{$item->judul}}</td>
								<td>{{$item->kategori->nama_kategori }}</td>
								<td>{{$item->created_at}}</td>
								<td class="text-center">
								<a href="{{ route('artikel.edit', $item->id_artikel) }}" class="btn btn-warning btn-sm"><i class ="fa fa-pen"></i> Edit</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
                