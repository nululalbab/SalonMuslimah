@extends('layout.layoutAdmin')

@section('title','Admin Create')


@section('body')
<div class="container formReserve" style="background-color:white;">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h3>Create Detail Paket</h3>
        <form  method="post" action="{{route('admin.create.paketLayanan.submit')}}"}>
          {{ csrf_field() }}

          <div id="namalayanan">
          <label>Nama Paket</label>

            <select  class="form-control" name="id_paket">
              <option value="" disabled selected></option>
              @foreach ($paket as $paket)
                <option value="{{$paket->id_paket}}">{{$paket->nama}}</option>
              @endforeach
            </select>
          </div>

          <div id="namalayanan">
          <label>Nama Layanan</label>

            <select  class="form-control" name="id_service">
              <option value="" disabled selected></option>
              @foreach ($service as $service)
                <option value="{{$service->id_service}}">{{$service->nama}}</option>
              @endforeach
            </select>
          </div>
          <button class="btn btn-success" type="submit" name="create" style="margin-top:20px;">Create Cabang</button>
        </form>
      </div>
    </div>
</div>

@endsection
