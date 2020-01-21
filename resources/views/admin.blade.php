@extends('layout.layoutAdmin')

@section('body')
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-lg-3 adminDashboard">
      <button class="btn" type="button" name="button">
        <a href="{{ route('admin.create.layanan') }}">Create Layanan</a>
      </button>
      </div>
      <div class="col-md-3 col-lg-3 adminDashboard">
        <button class="btn" type="button" name="button">
        <a href="{{ route('admin.create.paket') }}">Create Paket</a>
        </button>
      </div>
      <div class="col-md-3 col-lg-3 adminDashboard">
        <button class="btn" type="button" name="button">
          <a href="{{ route('admin.create.pegawai') }}">Create Pegawai</a>
        </button>
      </div>
      <div class="col-md-3 col-lg-3 adminDashboard">
        <button class="btn" type="button" name="button">
        <a href="{{ route('admin.create.reservasi') }}">Create Reservasi</a>
        </button>
      </div>

    </div>

    <div class="row">
      <div class="col-md-3 col-lg-3 adminDashboard">
      <button class="btn" type="button" name="button">
        <a href="{{ route('bayar.offline') }}">Pembayaran Offline</a>
      </button>
      </div>
      <div class="col-md-3 col-lg-3 adminDashboard">
        <button class="btn" type="button" name="button">
        <a href="{{ route('bayar.online') }}">Pembayaran Online</a>
        </button>
      </div>
      <div class="col-md-3 col-lg-3 adminDashboard">
        <button class="btn" type="button" name="button">
        <a href="{{ route('admin.create.cabang') }}">Create Cabang</a>
        </button>
      </div>
      <div class="col-md-3 col-lg-3 adminDashboard">
        <button class="btn" type="button" name="button">
        <a href="{{ route('admin.create.paketLayanan') }}">Paketkan Layanan</a>
        </button>
      </div>


    </div>


<div class="row">
  <h2 style="margin-top:50px;">Tabel Reservasi</h2>
  <div class="col-md-12 col-lg-12 tableHarga">
    <table class="table table-hover " style="text-align: center;">
    <thead >
    <tr>
      <th style="text-align: center;">ID Reservasi</th>
      <th style="text-align: center;" >Nama User</th>
      <th style="text-align: center;">Nama Paket</th>
      <th style="text-align: center;">Nama Service</th>
      <th style="text-align: center;">Jam</th>
      <th style="text-align: center;">Nama Cabang</th>
      <th style="text-align: center;">Nama Pegawai</th>
      <th style="text-align: center;">Tanggal</th>
    </tr>
    </thead>
    <tbody>
    @foreach($reservasi as $reservasi)

    <tr>
      <td>{{ $reservasi->id_reservasi }}</td>
      <td>{{ $reservasi->user->nama }}</td>
      @if ( !empty ($reservasi->paket->id_paket) )
        <td>{{ $reservasi->paket->id_paket }}</td>
      @else
        <td></td>
      @endif
      @if ( !empty ($reservasi->service->nama) )
        <td>{{ $reservasi->service->nama }}</td>
      @else
        <td></td>
      @endif
      <td>{{ $reservasi->jamreservasi->mulai }}</td>
      <td>{{ $reservasi->cabang->nama }}</td>
      <td>{{ $reservasi->pegawai->nama }}</td>
      <td>{{ $reservasi->tanggal }}</td>

    </tr>

    @endforeach
    </tbody>
    </table>
  </div>

</div>






  </div>

@endsection
