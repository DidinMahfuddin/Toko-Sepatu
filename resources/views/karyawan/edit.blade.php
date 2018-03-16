@extends('layouts.master')
@section('content')

<div class="row">
	<div class="col-xs-12">
	<center><h1>Jenis Sepatu</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Jenis Sepatu
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">Kembali</a></div></div>

		<div class="panel-body">
			<form action="{{route('karyawan.update',$karyawan->id)}}" method = "post">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{csrf_token()}}">

				<div class="form-group">
					<label class="control-lable">Nama</label>
					<input type="text" name="a" class="form-control" value="{{$karyawan->name}}" required="">
				</div>
				<div class="form-group">
					<label class="control-lable">Username</label>
					<input type="text" name="b" class="form-control" value="{{$karyawan->email}}" required="">
				</div>
				<div class="form-group">
					<label class="control-lable">Password</label>
					<input type="text" name="c" class="form-control" value="{{$karyawan->password}}" required="">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-succes">Simpan</button>
					<button type="reset" class="btn btn-danger">Reset</button>
				</div>
			</form>	
		</div>
	</div>
</div>
</div>
</div>
@endsection