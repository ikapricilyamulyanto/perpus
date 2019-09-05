@extends('admin.admin')
@section('content')

	<div class="row">
		<div class="container">
			<div class="col-lg-8 mx-auto my-5">	
 
				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif
 
				<form action="upload/proses" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
 
					
 
					<div class="form-group">
						<b>Nama</b>
						<input type="text" id="nama" name="nama" class="form-control">
					</div>

					<div class="form-group">
						<b>Jabatan</b>
						<input type="text" id="jabatan" name="jabatan" class="form-control">
					</div>

					<div class="form-group">
						<b>File Gambar</b><br/>
						<input type="file" name="file">
					</div>

					<input type="submit" value="Upload" class="btn btn-primary">
				</form>
			</div>
		</div>
	</div>


    

@endsection
@section('scripts')
@parent

@endsection