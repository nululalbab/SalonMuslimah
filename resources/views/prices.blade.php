@extends('layout.layout')

@section('title','Prices')
     <link rel="stylesheet" href=" {{ URL::asset('css/styleulul.css') }} ">
  <link rel="stylesheet" href=" {{ URL::asset('css/bootstrap.css') }} ">
<script src="{{ URL::asset('js/bootstrap.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.js') }}"></script>
@section('body')
<center><h1 style=" color:#F1396D">Harga Layanan</h1></center>
<div class="container">
<div class="row">

  <div class="col-md-1 col-lg-1 servis">
</div>
	<div class="col-md-3 col-lg-3 tableHarga">

    <h2 style=" color:#F1396D ; text-align:center;">Face Care</h2>
    <table class="table table-hover " style="text-align: center;">
    <thead >
    <tr>
      <th style="text-align: center;" >Nama Layanan</th>
      <th style="text-align: center;">Harga Layanan</th>
    </tr>
    </thead>
    <tbody>
    @foreach($face as $face)

    <tr>
      <td>{{ $face->nama }}</td>
      <td>Rp. {{ $face->harga }}</td>

    </tr>

    @endforeach
    </tbody>
    </table>
	</div>
  <div class="col-md-1 col-lg-1 servis">
</div>
	<div class="col-md-3 col-lg-3 tableHarga">
    <h2 style=" color:#F1396D ; text-align:center;">Hair Care</h2>
			<table class="table table-hover " style="text-align: center;">
	  	<thead >
	    <tr>
	      <th style="text-align: center;" >Nama Layanan</th>
	      <th style="text-align: center;">Harga Layanan</th>
	    </tr>
	  	</thead>
	  	<tbody>
		@foreach($hair as $hair)

	 	<tr>
	      <td>{{ $hair->nama }}</td>
	      <td>Rp. {{ $hair->harga }}</td>

	 	</tr>

		@endforeach
		</tbody>
		</table>

	</div>
  <div class="col-md-1 col-lg-1 servis">
</div>
	<div class="col-md-3 col-lg-3 tableHarga">

        <h2 style=" color:#F1396D; text-align:center;">Body Care</h2>
      <table class="table table-hover " style="text-align: center;">
      <thead >
      <tr>
        <th style="text-align: center;" >Nama Layanan</th>
        <th style="text-align: center;">Harga Layanan</th>
      </tr>
      </thead>
      <tbody>
    @foreach($spa as $spa)

    <tr>
        <td>{{ $spa->nama }}</td>
        <td>Rp. {{ $spa->harga }}</td>

    </tr>

    @endforeach
    </tbody>
    </table>

	</div>
</div>
</div>

@endsection
