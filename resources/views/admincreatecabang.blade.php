@extends('layout.layoutAdmin')

@section('title','Admin Create')


@section('body')
<div class="container formReserve" style="background-color:white;">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h3>Create Cabang</h3>
        <form  method="post" action="{{route('admin.create.cabang.submit')}}"}>
          {{ csrf_field() }}

          <div id="id_cabang">
            <label>ID Cabang</label>
            <input type="text" class="form-control" name="id_cabang"></input>
          </div>

          <div id="namaPaket">
            <label>Nama Cabang</label>
            <input type="text" class="form-control" name="nama"></input>
          </div>
          <div id="deskripsiPaket">
            <label>Alamat Cabang</label>
            <input type="textarea" class="form-control" name="alamat"></input>
          </div>
          <button class="btn btn-success" type="submit" name="create" style="margin-top:20px;">Create Cabang</button>
        </form>
      </div>
    </div>
</div>

@endsection
