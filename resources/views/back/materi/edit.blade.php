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
						<div class="card-title">Edit Inovasi {{ $materi->judul_materi }}</div>
                        <a href="{{ route('materi.index') }}" class="btn btn-primary btn-sm ml-auto">Kembali</a>
					</div>
				</div>
				<div class="card-body">
                    <form action="{{ route('materi.update', $materi->id_materi) }}" method="POST" enctype="multipart/form-data">
					@csrf
                    @method('PUT')
						<div class="form-group">
							<label for="judul">Judul Inovasi</label>
							<input type="text" name="judul_materi" class="form-control" id="text" value= "{{ $materi->judul_materi }}">
						</div>
						<div class="form-group">
							<label for="judul">Link</label>
							<input type="text" name="link" class="form-control" id="text" value= "{{ $materi->link }}">
						</div>
                        <div class="form-group">
							<label for="body">Deskripsi</label>
							<textarea name="deskripsi" class="form-control"> {{ $materi->deskripsi }} </textarea>
						</div>
                        <div class="form-group">
							<label for="kategori">Ketua Inspektorat</label>
                            
							<select name="id_playlist" class="form-control"> 
                            @foreach ($playlist as $row)
                            @if ($row->id_playlist == $materi->id_playlist)
                            <option value="{{ $row->id_playlist }}" selected='selected'> {{ $row->judul_playlist }} </option>
                            @else
                            <option value="{{ $row->id_playlist }}">{{ $row->judul_playlist }}</option>
                            @endif
                            @endforeach
                            </select>
						</div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="is_active" class="form-control"> 
                                <option value="1" {{ $materi->is_active == '1' ? 'selected' : '' }}>Publish</option>
                                <option value="0" {{ $materi->is_active == '0' ? 'selected' : '' }}>Draft</option>
                            </select>
                        </div>

                        <div class="form-group">
							<label for="gambar">Gambar *Maksimal Ukuran 2mb</label>
							<input type="file" name="gambar_materi" class="form-control"> 
                            <br>
                            <label for="gambar">Gambar Yang Digunakan Saat Ini</label> <br>
                            <img src="  {{ asset('uploads/' . $materi->gambar_materi) }} " width="100">
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
                