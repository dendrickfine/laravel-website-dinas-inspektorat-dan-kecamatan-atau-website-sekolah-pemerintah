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
						<div class="card-title">Data Slide Banner</div>
                        <a href="{{ route('slide.create') }}" class="btn btn-primary btn-sm ml-auto"><i class ="fa fa-plus"></i> Tambah Slide Banner</a>
					</div>
				</div>
				<div class="card-body">
                    @if(Session:: has('success'))
                        <div class = "alert alert-primary">
                            {{Session('success')}}
                        </div>
                    @endif
					<div class="table-responsive">
					<table class="table table-bordered" id="dataTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Judul</th>
                                <th>Link</th>
                                <th>Status</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($slide as $key => $row)
                            <tr style="background-color: {{ $key % 2 == 0 ? '#f2f2f2' : '#ffffff' }};">

                                <td>{{ $key + 1 }}</td>
                                <td>{{ $row->judul_slide }}</td>
                                <td>{{ $row->link }}</td>
                                <td>
                                    @if ($row->status == '1')
                                    Active
                                    @else 
                                    Draft
                                    @endif
                                </td>
                                <td>
                                    <img src="  {{ asset('uploads/' . $row->gambar_slide) }} " width="100">
                                </td>
                                <td>
                                    <form action="{{ route('slide.destroy', $row->id_slide) }}" method="post" class="d-inline">
                                        @csrf 
                                        @method('delete')
                                                <button class="btn btn-danger btn-sm" onclick="confirmDelete(event, '{{ $row->id_slide }}')">
                                                    <i class="fa fa-trash"> Delete</i>
                                                </button>
                                    </form>
                                </td>

                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center">Data Masih Kosong</td>
                            </tr>
                            @endforelse
                           
                        </tbody>
                    </table>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@push('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>
<script>
    function confirmDelete(event, id) {
        if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
            document.getElementById('deleteForm' + id).submit();
        } else {
            event.preventDefault(); // Menghentikan tindakan default jika pengguna membatalkan
        }
    }
</script>
@endpush
                