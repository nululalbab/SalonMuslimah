@extends('layout.layout')

@section('title','Services')

@section('body')
<div class="container" style="background-color: white; border-radius: 14px;">
	<div class="row">
		<h3 style="padding-left: 15px;">Service List</h3>
		<div class="col-lg-2 col-md-2">

			<ul class="list">
				<h4>Hair Care</h4>
				@foreach ($hair as $hair)
					<li><a href="#">{{$hair->nama}}</a></li>
				@endforeach
				<h4>Face Care</h4>
				@foreach ($face as $face)
					<li><a href="#">{{$face->nama}}</a></li>
				@endforeach
				<h4>Body Care</h4>
				@foreach ($spa as $spa)
					<li><a href="#">{{$spa->nama}}</a></li>
				@endforeach
			</ul>

		</div>
		<div class="col-lg-10 col-md-10">
			<div class="row servis">
				@if (count($paket)>0)
					@foreach ($paket as $paket)
							<div class="col-md-4 col-lg-4 servis">
								<img class="img-responsive" src="images/{{ $paket->gambar}}">
								<h3><a href="#">{{$paket->nama}}</a></h3>
								<p>{{$paket->deskripsi}}<span> IDR {{$paket->harga}}</span> </p>
							</div>
					@endforeach
				@endif
			</div>
			@if (count($services)>0)
				@foreach ($services as $services)
						<div class="col-md-4 col-lg-4 servis">
							<img class="img-responsive" src="images/{{ $services->gambar}}">
							<h3><a href="#">{{$services->nama}}</a></h3>
							<p style="margin-bottom:10px;">{{$services->deskripsi}}
								<br>
								<span> IDR {{$services->harga}}</span> <form action="{{ route('service.details')}}" method="post" accept-charset="utf-8">
										 {{ csrf_field() }}
										 <button class="btn btn-primary" type="submit" name="id_service" value="{{$services->nama}}"> Details </button>
							 </form>
 					 		</p>

						</div>



				@endforeach
			@endif

	</div>
</div>

</div>
@endsection
