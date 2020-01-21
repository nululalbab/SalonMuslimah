@extends('layout.layoutAdmin')

@section('title','Admin Create')


@section('body')
<div class="container formReserve" style="background-color:white;">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h3>Create Paket</h3>
        <form  method="post" action="{{route('admin.create.paket.submit')}}"}>
          {{ csrf_field() }}
          <div id="namaPaket">
            <label>Nama Paket</label>
            <input type="text" class="form-control" name="namaPaket"></input>
          </div>
          <div id="deskripsiPaket">
            <label>Deskripsi Paket</label>
            <input type="textarea" class="form-control" name="deskripsi"></input>
          </div>

          <div id="hargaPaket">
            <label>Harga Paket</label>
            <input type="textarea" class="form-control" name="harga"></input>
          </div>
          <button class="btn btn-success" type="submit" name="create" style="margin-top:20px;">Create Paket</button>
        </form>
      </div>
    </div>
</div>

@endsection
