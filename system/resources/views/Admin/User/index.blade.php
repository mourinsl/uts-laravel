@extends ('Admin.template.base')

@section('content')

	<div class="container">
		<div class="row"> 
			<div class="col-md-12 mt-5">
				<div class="card">
					<div  class="card-header">
						<h2><b>Data User</b></h2>
						<a href="{{url('Admin/user/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"><b> Tambah Data</b></i></a>
					</div>
					<div class="card-body">
						<table class="table table-bordered table-datatable table-striped">
						<thead>
							<th>No</th>
							<th>Aksi</th>
							<th>Nama</th>
							<th>Username</th>
							<th>Email</th>
							<th>Jumlah Produk</th>
						</thead>
						<tbody>
							@foreach($list_user as $user)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>
									<div class="btn-group">
										<a href="{{url('Admin/user', $user->id)}}" class="btn btn-primary" style="width: 40px; border-radius: 5px;"><i class="fa fa-info"></i></a>
										<a href="{{url('Admin/user', $user->id)}}/edit" class="btn btn-warning" style="width: 40px; border-radius: 5px;"><i class="fa fa-edit"></i></a>
										@include('Admin.template.utils.delete', ['url'=>url('Admin/user', $user->id)])
									</div>
								</td>
								<td>{{$user->nama}}</td>
								<td>{{$user->username}}</td>
								<td>{{$user->email}}</td>
								<td>{{$user->produk_count}}</td>
							</tr>
							@endforeach
						</tbody>
						</table>
					</div> 
				</div>
			</div>
		</div>
	</div>


@endsection