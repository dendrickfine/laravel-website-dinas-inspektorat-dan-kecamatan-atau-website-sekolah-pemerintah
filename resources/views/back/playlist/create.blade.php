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
						<div class="card-title">Form Playlist</div>
                        <a href="{{ route('playlist.index') }}" class="btn btn-primary btn-sm ml-auto">Kembali</a>
					</div>
				</div>
				<div class="card-body">
                    <form action="{{ route('playlist.store') }}" method="POST" enctype="multipart/form-data">
					@csrf
						<div class="form-group">
							<label for="judul">Nama Playlist</label>
							<input type="text" name="judul_playlist" class="form-control" id="text" placeholder="Enter Nama Ketua">
						</div>
                        <div class="form-group">
							<label for="body">Deskripsi</label>
							<textarea name="deskripsi" class="form-control"> </textarea>
						</div>
                        <div class="form-group">
							<label for="gambar">Gambar Playlist *Maksimal Ukuran 2mb</label>
							<input type="file" name="gambar_playlist" class="form-control"> 
						</div>
                        <div class="form-group">
							<label for="status">Status</label>
							<select name="is_active" class="form-control"> 
                                <option value="1">Publish</option>
                                <option value="0">Draft</option>
                            </select>
						</div>
						<div class="form-group">
						<button class= "btn btn-primary btn-sm" type= "submit">Save</button> <button class= "btn btn-danger btn-sm" type= "reset">Reset</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
                