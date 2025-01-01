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
						<div class="card-title">Edit Artikel {{ $artikel->judul }}</div>
                        <a href="{{ route('artikel.index') }}" class="btn btn-primary btn-sm ml-auto">Kembali</a>
					</div>
				</div>
				<div class="card-body">
                    <form action="{{ route('artikel.update', $artikel->id_artikel) }}" method="POST" enctype="multipart/form-data">
					@csrf
                    @method('PUT')
						<div class="form-group">
							<label for="judul">Judul Artikel</label>
							<input type="text" name="judul" class="form-control" id="text" value= "{{ $artikel->judul }}">
						</div>
                        <div class="form-group">
							<label for="body">Body</label>
							<textarea name="body" id="editor1" class="form-control"> {{ $artikel->body }} </textarea>
						</div>
                        <div class="form-group">
							<label for="kategori">Kategori</label>
                            
							<select name="id_kategori" class="form-control"> 
                            @foreach ($kategori as $row)
                            @if ($row->id_kategori == $artikel->id_kategori)
                            <option value="{{ $row->id_kategori }}" selected='selected'> {{ $row->nama_kategori }} </option>
                            @else
                            <option value="{{ $row->id_kategori }}">{{ $row->nama_kategori }}</option>
                            @endif
                            @endforeach
                            </select>
						</div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="is_active" class="form-control"> 
                                <option value="1" {{ $artikel->is_active == '1' ? 'selected' : '' }}>Publish</option>
                                <option value="0" {{ $artikel->is_active == '0' ? 'selected' : '' }}>Draft</option>
                            </select>
                        </div>

                        <div class="form-group">
							<label for="gambar">Gambar Artikel *Maksimal Ukuran 2mb</label>
							<input type="file" name="gambar_artikel" class="form-control"> 
                            <br>
                            <label for="gambar">Gambar Yang Digunakan Saat Ini</label> <br>
                            <img src="  {{ asset('uploads/' . $artikel->gambar_artikel) }} " width="100">
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
                