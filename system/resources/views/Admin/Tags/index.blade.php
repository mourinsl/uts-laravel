@extends ('Admin.template.base')

@section('content')

	<div class="container">
		<div class="row"> 
			<div class="col-md-12 mt-5">
				<div class="card">
					<div  class="card-header">
						<h2><b>Tags</b></h2>
						<a href="{{url('Admin/tags/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"><b> Tambah Tags</b></i></a>
					</div>
					<div class="card-body">
						<div class="col-md-8">
						<table class="table table-bordered table-datatable table-striped">
						<thead style="text-align: center;">
							<th>No</th>
							<th>Aksi</th>
							<th>Nama</th>
						</thead>
						<tbody>
							@foreach($list_tags as $tags)
							<tr>
								<td style="text-align: center;">{{$loop->iteration}}</td>
								<td style="text-align: center;">
									<div class="btn-group">
										<a href="{{url('Admin/tags', $tags->id)}}/edit" class="btn btn-warning" style="width: 40px; border-radius: 5px;"><i class="fa fa-edit"></i></a>
										@include('Admin.template.utils.delete', ['url'=>url('Admin/tags', $tags->id)])
									</div>
								</td>
								<td>{{$tags->nama}}</td>
							</tr>
							@endforeach
						</tbody>
						</table>
						</div>
					</div> 
				</div>
			</div>
		</div>
	</div>


@endsection