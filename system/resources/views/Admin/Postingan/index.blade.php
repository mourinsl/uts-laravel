@extends ('Admin.template.base')

@section('content')

	<div class="container">
		<div class="row"> 
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card card-header">
						Cari Postingan
					</div>
					<div class="card-body">
						<form action="{{url('Admin/postingan/cari')}}" method="post">
						@csrf
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="" class="control-label">Cari Judul</label>
										<input type="text" class="form-control" name="judul" value="{{$judul ?? ""}}">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<button class="btn btn-dark" style="margin-top: 31px;"><i class="fa fa-search"> Filter</i></button>
									</div>
								</div>
							</div>
						</div>
					</form>
					</div>
					<div  class="card-header">
						<h2><b>Postingan</b></h2>
						<a href="{{url('Admin/postingan/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"><b> Tambah Postingan</b></i></a>
					</div>
					<div class="card-body">
						<table class="table table-datatable table-bordered table-striped">
						<thead style="text-align: center;">
							<th>No</th>
							<th>Aksi</th>
							<th>Judul</th>
							<th>Penulis</th>
							<th>Tanggal Penulisan</th>
						</thead>
						<tbody style="text-align: center;">
							@foreach($list_postingan as $postingan)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>
									<div class="btn-group">
										<a href="{{url('Admin/postingan', $postingan->id)}}" class="btn btn-primary" style="width: 40px; border-radius: 5px;"><i class="fa fa-info"></i></a>
										<a href="{{url('Admin/postingan', $postingan->id)}}/edit" class="btn btn-warning" style="width: 40px; border-radius: 5px;"><i class="fa fa-edit"></i></a>
										@include('Admin.template.utils.delete', ['url'=>url('Admin/postingan', $postingan->id)])
									</div>
								</td>
								<td style="text-align: left;">{{$postingan->judul}}</td>
								<td>{{$postingan->penulis->nama}}</td>
								<td>{{$postingan->updated_at}}</td>
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