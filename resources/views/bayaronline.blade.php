@extends('layout.layoutAdmin')

@section('body')
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-6 adminDashboard">
      <button class="btn" type="button" name="button">
        <a href="{{ route('bayar.offline') }}">Pembayaran Offline</a>
      </button>
      </div>
      <div class="col-md-6 col-lg-6 adminDashboard">
        <button class="btn" type="button" name="button">
        <a href="{{ route('bayar.online') }}">Pembayaran Online</a>
        </button>
      </div>
    </div>

      <h2 style="margin-top:50px;">Tabel Reservasi Online</h2>
      <div class="col-lg-10 col-md-10 tableHarga">
        <div class="row tableHarga">
          <div class="col-lg-1 col-md-1">
            <label for="">ID Reservasi</label>
          </div>
          <div class="col-lg-1 col-md-1">
            <label for="">Nama User</label>
          </div>
          <div class="col-lg-1 col-md-1">
            <label for="">Nama Paket</label>
          </div>
          <div class="col-lg-1 col-md-1">
            <label for="">Nama Service</label>
          </div>
          <div class="col-lg-1 col-md-1">
            <label for="">Jam</label>
          </div>
          <div class="col-lg-1 col-md-1">
            <label for="">Nama Cabang</label>
          </div>
          <div class="col-lg-1 col-md-1">
              <label for="">Nama Pegawai</label>
          </div>
          <div class="col-lg-1 col-md-1">
                <label for="">Tanggal</label>
          </div>
          <div class="col-lg-2 col-md-2">
                <label for="">Jumlah</label>
          </div>
          <div class="col-lg-1 col-md-1">
                <label for="">Status</label>
          </div>
        </div>
          <form class="" action="{{route('ubahStatus')}}" method="post">
             {{ csrf_field() }}
          @foreach($reservasi as $reservasi)
            <div class="row ">
              <div class="col-lg-1 col-md-1">
                    {{ $reservasi->id_reservasi }}
              </div>

              <div class="col-lg-1 col-md-1">
                    {{$reservasi->user->nama }}
              </div>

              @if ( !empty ($reservasi->paket->id_paket) )
                <div class="col-lg-1 col-md-1">
                  {{ $reservasi->paket->id_paket }}
                </div>
              @else
                  <div class="col-lg-1 col-md-1"></div>
              @endif

              @if ( !empty ($reservasi->service->id_service) )
                <div class="col-lg-1 col-md-1">
                  {{ $reservasi->service->nama }}
                </div>
              @else
                  <div class="col-lg-1 col-md-1"></div>
              @endif

              <div class="col-lg-1 col-md-1">
                    {{ $reservasi->jamreservasi->mulai }}
              </div>

              <div class="col-lg-1 col-md-1">
                    {{ $reservasi->cabang->nama }}
              </div>

              <div class="col-lg-1 col-md-1">
                  {{ $reservasi->pegawai->nama }}
              </div>

              <div class="col-lg-1 col-md-1">
                  {{ $reservasi->tanggal }}
              </div>

              <div class="col-lg-1 col-md-1">
                  <input type="text" name="jumlah">
              </div>

              <div class="col-lg-1 col-md-1">
                <input type="hidden" name="id_reservasi" value="{{$reservasi->id_reservasi}}">
              </div>

              <div class="col-lg-1 col-md-1">
                  <button class="btn btn-success" type="submit" name="reservasi">Bayar</button>
              </div>


            </div>
          @endforeach
        </form>
      </div>

  {{-- <div class="col-md-12 col-lg-12 tableHarga">
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
      <th style="text-align: center;">Jumlah</th>
      <th style="text-align: center;">Status</th>
    </tr>
    </thead>
    <tbody>
      <form class="" action="{{route('ubahStatus')}}" method="post">
         {{ csrf_field() }} --}}
  {{-- @foreach($reservasi as $reservasi) --}}

  {{-- <tr>
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
    <td><input type="text" name="jumlah"></td>
    <td>

         <input type="hidden" name="id_reservasi" value="{{$reservasi->id_reservasi}}">
         <button class="btn btn-success" type="submit" name="reservasi">Bayar</button>
      </form>
    </td>

  </tr>

  @endforeach --}}
    {{-- </tbody>
    </table>
  </div> --}}

</div>






  </div>

@endsection
