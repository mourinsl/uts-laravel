@extends ('Admin.template.base')

@section('content')

<div class="container">
	<div class="row"> 
		<div class="col-md-12 mt-5">
			<div class="card">
				<div  class="card-header">
					<b>Edit Postingan</b>
				</div>
					<div class="card-body">
						<form action="{{url('Admin/postingan', $postingan->id)}}" method="post">
						@csrf
						@method("PUT")
						<div class="form-group">
							<label for="" class="control-label"><b>Judul</b></label>
							<input type="text" class="form-control" value="{{$postingan->judul}}" name="judul">
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="control-label"> Tags </label>
									<select name="id_tags" value="{{$postingan->tags}}" class="form-control">
										@foreach($list_tags as $tags)
											<option value="{{$tags->id}}">{{$tags->nama}}</option>
										@endforeach
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="control-label"><b>Isi Postingan</b></label>
							<textarea name="isi" value="{{$postingan->isi}}" class="form-control"></textarea>
						</div>
						<button class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection