@extends('admin.admin')
@section('content')



    <div class="card">
    <div class="card-header">
        Struktur Organisasi
    </div>

    <div class="card-body">
    	<div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="upload">
                Add
            </a>
        </div>
    </div>

				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="1%">File</th>
							<th>Nama</th>
							<th>Jabatan</th>
							<th width="1%">OPSI</th>
						</tr>
					</thead>
					<tbody>
						@foreach($gambar as $g)
						<tr>
							<td><img width="150px" src="{{ url('/data_file/'.$g->file) }}"></td>
							<td>{{$g->nama}}</td>
							<td>{{$g->jabatan}}</td>
							<td><a class="btn btn-danger" href="struktur/hapus/{{ $g->id }}">HAPUS</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>


    </div>
</div>




@endsection
@section('scripts')
@parent

@endsection