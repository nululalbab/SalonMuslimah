@extends('layout.layoutAdmin')

@section('title','Admin Create')


@section('body')
<div class="container formReserve" style="background-color:white;">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h3>Create Layanan</h3>
        <form  method="post" action="{{route('admin.create.layanan.submit')}}"}>
          {{ csrf_field() }}
          <div id="namaLayanan">
            <label>Nama Layanan</label>
            <input type="text" class="form-control" name="namaLayanan"></input>
          </div>
          <div id="pilihKategori">
            <label>Pilih Kategori</label>
            <select  class="form-control" name="pilihKategori">
              <option value="" disabled selected></option>
              @foreach ($kategori as $kategori)
                <option value="{{$kategori->id_kategori}}">{{$kategori->nama}}</option>
              @endforeach
            </select>
          </div>
          <div id="deskripsiLayanan">
            <label>Deskripsi Layanan</label>
            <input type="textarea" class="form-control" name="deskripsi"></input>
          </div>

          <div id="hargaLayanan">
            <label>Harga Layanan</label>
            <input type="textarea" class="form-control" name="harga"></input>
          </div>
        <button class="btn btn-success" type="submit" name="create" style="margin-top:20px;">Create Layanan</button>
        </form>
      </div>
    </div>
</div>


@endsection
