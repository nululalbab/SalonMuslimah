@extends('layout.layout')

@section('title','Services')

@section('body')
<div class="container" style="background-color: white; border-radius: 14px;">
	<div class="row">
		@foreach($details as $details)
			<div class="col-lg-10 col-md-10 servis">
				<h3 style="padding-left: 15px;">Service List</h3>
									<img class="img-responsive servis-details" src="/images/{{$details->gambar}}"></img>
									<h3 class="servis">Deskripsi</h3>
									<p class="servis"> {{$details->deskripsi}} </p>
									<span class="servis">IDR {{$details->harga}}</span>
			</div>

			@endforeach
	</div>
</div>

</div>
@endsection
