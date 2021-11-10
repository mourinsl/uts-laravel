@extends ('Admin.template.base')

@section('content')

<div class="container">
	<div class="row"> 
		<div class="col-md-12 mt-5">
			<div class="card">
				<div  class="card-header">
					<b>Tambah Data User</b>
				</div>
					<div class="card-body">
						<form action="{{url('Admin/user')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="" class="control-label"><b>Nama</b></label>
							<input type="text" class="form-control" name="nama">
						</div>
						<div class="form-group">
							<label for="" class="control-label"><b>Email</b></label>
							<input type="email" class="form-control" name="email">
						</div>
						<div class="form-group">
							<label for="" class="control-label"><b>Password</b></label>
							<input type="password" class="form-control" name="password">
						</div>
						<button class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection