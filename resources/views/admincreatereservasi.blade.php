@extends('layout.layoutAdmin')

@section('title','Prices')
     <link rel="stylesheet" href=" {{ URL::asset('css/styleulul.css') }} ">
  <link rel="stylesheet" href=" {{ URL::asset('css/bootstrap.css') }} ">
<script src="{{ URL::asset('js/bootstrap.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.js') }}"></script>
@section('body')
<div class="container formReserve">
	<div class="row">
		<div class="col-md-2 col-lg-2">

		</div>
		<div class="col-md-8 col-lg-8">
			<h3>Create Reservasi Offline</h3>
				<form method="post" action="{{ route('admin.create.reservasi.submit')}}">
					<fieldset>
						{{ csrf_field() }}
						<div>
							<label>Cabang</label>
							<br>
						<select  class="form-control" name="cabang">
							<option value="" disabled selected>Pilih Cabang Salon</option>
				                @foreach ($cabang as $cabang)
				                  <option value="00{{ $cabang->id_cabang }}">{{ $cabang->nama }}</option>
				                @endforeach
						</select>
						</div>


						<label>Pilih Layanan atau Paket</label>
						<br>
			              <select class="form-control" name="serviceorpaket">
			                <option value="" disabled selected></option>
			                <option value="service">Layanan</option>
			                <option value="paket">Paket</option>
			              </select>
                    <div id="kategori" style="display:none;">
  			                <label>Pilih Kategori</label>
  			                <br>
  			                <select class="form-control" name="kategori">
  			                  <option value="" disabled selected></option>
  			                  @foreach ($kategori as $kategori)
  			                    <option value="{{$kategori->id_kategori}}">{{$kategori->nama}}</option>
  			                  @endforeach
  			                </select>
  			              </div>
			              <br>

			              <div id="service" style="display:none;">
			                <label>Pilih Layanan</label>
			                <br>
			                <select  class="form-control" name="service">
			                  <option value="" disabled selected></option>
			                </select>
			              </div>

			            <div id="paket" style="display:none;">
			                <label>Pilih Paket</label>
			                <br>
			                <select class="form-control" name="paket">
			                  <option value="" disabled selected></option>
			                  @foreach ($paket as $paket)
			                    <option value="{{$paket->id_paket}}">{{$paket->nama}} ---- Rp. {{$paket->harga}}</option>
			                  @endforeach
			                </select>
			              </div>

						        <label>Pegawai</label>
              			<select class="form-control" name="pegawai">
                		<option value="" disabled selected></option>
             			</select>

                  <label>Tanggal Reservasi</label>
      						<br>
                  <input type="date" name="tanggal" class="form-control">

      						<br>

                  <label>Jam Reservasi</label>
                  <select class="form-control" name="jam">
                    <option value="" disabled selected></option>
                  </select>
{{--
                  <label>Harga : </label>
                  <input type="text" name="Harga" disabled></input> --}}
             			 <button class="btn btn-primary" type="submit" name="reservasi">Reservasi</button>
					</fieldset>
				</form>

		</div>
		<div class="col-md-2 col-lg-2">

		</div>
	</div>
</div>
			<!--JAVA SCRIPT MILIH PAKET ATAU LAYANAN-->
<script type="text/javascript">
	$('select[name="serviceorpaket"]').on('change',function(){
       var value=$(this).val();
       if(value=='service'){
         document.getElementById("kategori").style.display="block";
         document.getElementById("service").style.display="none";
         document.getElementById("paket").style.display="none";
       }else if(value=='paket'){
         console.log('paket');
         document.getElementById("service").style.display='none';
         document.getElementById("paket").style.display='block';
         document.getElementById("kategori").style.display="none";
       }
     });
</script>
<!--JAVA SCRIPT Pilih Tanggal -->

{{-- Date Picker --}}
  {{-- <script type="text/javascript" src="{{asset('js/pickadate.js')}}"></script>
  <script type="text/javascript">
  $('.datepicker').pickadate({
  selectMonths: true, // Creates a dropdown to control month
  selectYears: false, // Creates a dropdown of 15 years to control year
  formatSubmit: yyyy-mm-dd,
});
  </script> --}}
  {{-- Date Picker --}}

 <!--JAVA SCRIPT PEGAWAI CABANG-->

<script type="text/javascript">
    $(document).ready(function(){
      $('select[name="cabang"]').on('change',function(){
         var id_cabang=$(this).val();
         if(id_cabang) {
             $.ajax({
               type:'get',
               url:'{!!URL::to('findPegawaiAdmin')!!}',
               data:{'id':id_cabang},
               dataType: "json",
               success:function(data) {
                 $('select[name="pegawai"]').empty().html();
                 $('select[name="pegawai"]').append('<option value="" disabled selected>Pilih Pegawai</option>');
                 $.each(data, function(index, element) {
                     $('select[name="pegawai"]').append('<option value="'+ element.id_pegawai +'">'+ element.nama +'</option>');
                 });
             }
             });
         }else{
             $('select[name="pegawai"]').empty();
         }

     });
   });
</script>

<!--JAVA SCRIPT HARGA LAYANAN-->
<script type="text/javascript">
    $(document).ready(function(){
      $('select[name="service"]').on('change',function(){
         var id_service=$(this).val();
         if(id_service) {
             $.ajax({
               type:'get',
               url:'{!!URL::to('findLayananAdmin')!!}',
               data:{'id':id_service},
               dataType: "json",
               success:function(data) {
                 $('input[name="Harga"]').empty().html();
                 $('input[name="Harga"]').val("ini nanti harga");
             }
             });
         }

     });
   });
</script>
<!--JAVA SCRIPT HARGA Paket-->
<script type="text/javascript">
    $(document).ready(function(){
      $('select[name="paket"]').on('change',function(){
         var id_paket=$(this).val();
         if(id_paket) {
             $.ajax({
               type:'get',
               url:'{!!URL::to('findPaketAdmin')!!}',
               data:{'id':id_paket},
               dataType: "json",
               success:function(data) {
                 $('input[name="Harga"]').empty().html();
                 $('input[name="Harga"]').val();
             }
             });
         }

     });
   });
</script>

<!--JAVA SCRIPT Pilih Kategori-->
<script type="text/javascript">
   $(document).ready(function(){
     $('select[name="kategori"]').on('change',function(){
       console.log("sukses");
        var id_kategori=$(this).val();
        if(id_kategori) {
            $.ajax({
              type:'get',
              url:'{!!URL::to('findLayananKategoriAdmin')!!}',
              data:{'id':id_kategori},
              dataType: "json",
              success:function(data) {
                document.getElementById("service").style.display="block";
                $('select[name="service"]').empty().html();
                $('select[name="service"]').append('<option value="" disabled selected>Pilih Layanan</option>');
                $.each(data, function(index, element) {
                    $('select[name="service"]').append('<option value="'+ element.id_service +'">'+ element.nama + ' --- Rp. '+ element.harga + '</option>');
                });
            }
            });
        }else{
            $('select[name="pegawai"]').empty();
        }

    });
  });


</script>
<!--JAVA SCRIPT Pilih Jamreservasi-->


<script type="text/javascript">
   $(document).ready(function(){
     $('input[name="tanggal"]').on('change',function(){
       console.log("sukses");
          var tanggal=$('input[name="tanggal"]').val();
          var id_cabang=$('select[name="cabang"]').val();
          var id_pegawai=$('select[name="pegawai"]').val();
          if(tanggal) {
            //console.log(tanggal);
              $.ajax({
                type:'get',
                url:'{!!URL::to('findTimeAdmin')!!}',
                data:{'tanggal':tanggal, 'id_cabang':id_cabang, 'id_pegawai':id_pegawai},
                dataType: "json",
                success:function(data) {
                  console.log(data);
                  $('select[name="jam"]').empty().html();
                  $('select[name="jam"]').append('<option value="" disabled selected>Pilih File</option>');
                  $.each(data, function(index, element) {
                      $('select[name="jam"]').append('<option value="'+ element.id_jam +'"> '+ element.mulai +' </option>');
                  });
              }
              });
          }else{
              $('select[name="jam"]').empty();
          }
      });
  });


</script>


@endsection
