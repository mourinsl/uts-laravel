@extends ('Admin.template.base')

@section('content')

<div class="container">
	<div class="row"> 
		<div class="col-md-12 mt-5">
			<div class="card">
				<div  class="card-header">
					<b>Detail Postingan</b>
				</div>
					<div class="card-body">
						<h3>{{$postingan->judul}}</h3>
						<p>{{$postingan->updated_at}} | Tags, <b style="color: #1E90FF">{{$postingan->tags->nama}}</b></p>
						<h5>By : {{$postingan->penulis->nama}}</h5>
						<hr>
						<p>
							{!! nl2br ($postingan->isi) !!}
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection