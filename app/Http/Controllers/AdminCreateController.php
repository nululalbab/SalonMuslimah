<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cabang;
use App\Models\Pegawai;
use App\Models\Paket;
use App\Models\Service;
use App\Models\Jamreservasi;
use App\Models\Kategori;
use App\Models\Reservasi;
use App\Models\DetailPaket;

class AdminCreateController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     public function layanan()
     {
       $cabang = Cabang::all();
       $pegawai = Pegawai::all();
       $paket = Paket::all();
       $service = Service::all();
       $kategori = Kategori::all();

       $data = array(
     		'cabang' => $cabang,
     		'paket' => $paket,
     		'pegawai' => $pegawai,
     		'service' => $service,
        'kategori' => $kategori
     	);
     	return view('admincreatelayanan')->with($data);
     }

     public function createLayanan(Request $request)
     {
       Service::create([
         'nama' => $request->namaLayanan,
         'id_kategori' => $request->pilihKategori,
         'deskripsi' => $request->deskripsi,
         'harga' => $request->harga
       ]);

       return redirect()->back();
     }

     public function paket()
     {
       $cabang = Cabang::all();
       $pegawai = Pegawai::all();
       $paket = Paket::all();
       $service = Service::all();
       $kategori = Kategori::all();

       $data = array(
         'cabang' => $cabang,
         'paket' => $paket,
         'pegawai' => $pegawai,
         'service' => $service,
        'kategori' => $kategori
       );
       return view('admincreatepaket')->with($data);
     }

     public function pegawai()
     {
       $cabang = Cabang::all();
       $pegawai = Pegawai::all();
       $paket = Paket::all();
       $service = Service::all();
       $kategori = Kategori::all();

       $data = array(
         'cabang' => $cabang,
         'paket' => $paket,
         'pegawai' => $pegawai,
         'service' => $service,
        'kategori' => $kategori
       );
       return view('admincreatepegawai')->with($data);
     }

     public function reservasi()
     {
       $cabang = Cabang::all();
       $pegawai = Pegawai::all();
       $paket = Paket::all();
       $service = Service::all();
       $kategori = Kategori::all();
       $reservasi = Reservasi::all();

       $data = array(
         'cabang' => $cabang,
         'paket' => $paket,
         'pegawai' => $pegawai,
         'service' => $service,
         'reservasi' => $reservasi,
        'kategori' => $kategori
       );
       return view('admincreatereservasi')->with($data);
     }


      public function createPaket(Request $request)
      {
        Paket::create([
          'nama' => $request->namaPaket,
          'deskripsi' => $request->deskripsi,
          'harga'=> $request->harga
        ]);
         return redirect()->back();
      }

      public function createPegawai(Request $request)
      {
        Pegawai::create([
          'nama' => $request->namaPegawai,
          'id_cabang' => $request->pilihCabang,
          'nip' => $request->nip,
          'hp' => $request->hp,
          'alamat' => $request->alamat,
          'tempatlahir' => $request->tempatLahir,
          'tgllahir' => $request->tgllahir
        ]);
        return redirect()->back();
      }

      public function createReservasi(Request $request)
      {
        Reservasi::create([
          'id_user' => 6,
          'id_paket' => $request->paket,
          'id_cabang' => $request->cabang,
          'id_service' => $request->service,
          'id_pegawai' => $request->pegawai,
          'id_jam' => $request->jam,
          'tanggal' => $request->tanggal

        ]);
        return redirect()->back();
      }

      public function findPegawaiAdmin(Request $request)
     {
       $pegawai = Pegawai::where('id_cabang',$request->id)->get();
       return response()->json($pegawai);
     }

     public function findLayananAdmin(Request $request)
    {
      $layanan = Service::where('id_service',$request->id)->get();
      return response()->json($layanan);
    }

    public function findLayananKategoriAdmin(Request $request)
   {
     $layanan = Service::where('id_kategori',$request->id)->get();
     return response()->json($layanan);
   }

    public function findPaketAdmin(Request $request)
   {
     $paket = Paket::where('id_paket',$request->id)->get();
     return response()->json($paket);
   }

   public function findTimeAdmin(Request $request)
   {
     $time = Jamreservasi::whereNotIn('id_jam',function($query) use($request){
     $query->select('id_jam')->from('reservasi')
         ->where('id_pegawai', $request->id_pegawai)
         ->where('id_cabang', $request->id_cabang)
         ->where('tanggal',$request->tanggal);
       })->get();
       return response()->json($time);
     }

     public function cabang()
     {
       $cabang = Cabang::all();
       $pegawai = Pegawai::all();
       $paket = Paket::all();
       $service = Service::all();
       $kategori = Kategori::all();

       $data = array(
         'cabang' => $cabang,
         'paket' => $paket,
         'pegawai' => $pegawai,
         'service' => $service,
        'kategori' => $kategori
       );
       return view('admincreatecabang')->with($data);
     }

     public function createCabang(Request $request)
     {
       Cabang::create([
         'id_cabang' => $request->id_cabang,
         'nama' => $request->nama,
         'alamat' => $request->alamat
       ]);

       return redirect()->back();
     }

     public function paketLayanan()
     {
       $cabang = Cabang::all();
       $pegawai = Pegawai::all();
       $paket = Paket::all();
       $service = Service::all();
       $kategori = Kategori::all();

       $data = array(
         'paket' => $paket,
         'service' => $service
       );
       return view('admincreatepaketlayanan')->with($data);
     }

     public function createPaketLayanan(Request $request)
     {
       DetailPaket::create([
         'id_paket' => $request->id_paket,
         'id_service' => $request->id_service
       ]);

       return redirect()->back();
     }

  }
