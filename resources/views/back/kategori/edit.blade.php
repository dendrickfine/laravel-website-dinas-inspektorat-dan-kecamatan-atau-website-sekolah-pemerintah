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
			
		</div>
	</div>
</div>   
<div class="page-inner mt--5">
	<div class="row">
		<div class="col-md-12">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Edit Kategori <i>{{ $kategori->nama_kategori }}</i></div>
                        <a href="{{ route('kategori.index') }}" class="btn btn-primary btn-sm ml-auto">Kembali</a>
					</div>
				</div>
				<div class="card-body">
					<form method="post" action="{{ route('kategori.update', $kategori->id_kategori) }}">
					@csrf
                    @method('PUT')
						<div class="form-group">
							<label for="kategori">Nama Kategori</label>
							<input type="text" name="nama_kategori" value="{{ $kategori->nama_kategori }}" class="form-control" id="text" placeholder="Enter Kategori">
						</div>
						<div class="form-group">
						<button class= "btn btn-primary btn-sm" type= "submit">Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
                