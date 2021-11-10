@extends ('Admin.template.base')

@section('content')

<div class="container">
	<div class="row"> 
		<div class="col-md-12 mt-5">
			<div class="card">
				<div  class="card-header">
					<b>Edit Tags</b>
				</div>
				<div class="card-body">
					<form action="{{url('Admin/tags', $user->id)}}" method="post">
					@csrf
					@method("PUT")
					<div class="form-group">
						<label for="" class="control-label"><b>Nama</b></label>
						<input type="text" class="form-control" name="nama" value="{{$tags->nama}}">
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection