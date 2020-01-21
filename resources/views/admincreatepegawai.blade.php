@extends('layout.layoutAdmin')

@section('title','Admin Create')


@section('body')
<div class="container formReserve" style="background-color:white;">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">

        <h3>Create Pegawai</h3>
        <form  method="post" action="{{ route('admin.create.pegawai.submit')}}"}>
          {{ csrf_field() }}
          <div id="namaPegawai">
            <label>Nama Pegawai</label>
            <input type="text" class="form-control" name="namaPegawai"></input>
          </div>

          <div id="pilihCabang">
            <label>Pilih Cabang</label>
            <select  class="form-control" name="pilihCabang">
              <option value="" disabled selected></option>
              @foreach ($cabang as $cabang)
                <option value="00{{$cabang->id_cabang}}">{{$cabang->nama}}</option>
              @endforeach
            </select>
          </div>

          <div id="nip">
            <label>NIP Pegawai</label>
            <input type="text" class="form-control" name="nip"></input>
          </div>

          <div id="hp">
            <label>Nomor Handphone Pegawai</label>
            <input type="text" class="form-control" name="hp"></input>
          </div>

          <div id="Alamat">
            <label>Alamat Pegawai</label>
            <input type="text" class="form-control" name="alamat"></input>
          </div>

          <div id="tempatLahir">
            <label>Tempat Lahir Pegawai</label>
            <input type="text" class="form-control" name="tempatLahir"></input>
          </div>

          <div id="tgllahir">
            <label>Tanggal Lahir Pegawai</label>
            <input type="date" class="form-control" name="tgllahir"></input>
          </div>
          <br>
          <button class="btn btn-success" type="submit">Kirim</input>
        </form>
      </div>
    </div>
</div>

{{-- Date Picker --}}
  <script type="text/javascript" src="{{asset('js/pickadate.js')}}"></script>
  <script type="text/javascript">
  $('.datepicker').pickadate({
  selectMonths: true, // Creates a dropdown to control month
  selectYears: false, // Creates a dropdown of 15 years to control year
  formatSubmit: yyyy-mm-dd,
});
  </script>
  {{-- Date Picker --}}

@endsection
