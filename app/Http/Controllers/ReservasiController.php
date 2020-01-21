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
class ReservasiController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

    public function index()
    {
    	$cabang = Cabang::all();
    	$pegawai = Pegawai::all();
    	$paket = Paket::all();
    	$service = Service::all();
    	$jamreservasi = Jamreservasi::all();
      $kategori = Kategori::all();

    	$data = array(
    		'cabang' => $cabang,
    		'paket' => $paket,
    		'pegawai' => $pegawai,
    		'service' => $service,
    		'jamreservasi' => $jamreservasi,
        'kategori' => $kategori
    	);
    	return view('reserve')->with($data);
    }

     public function findPegawai(Request $request)
    {
      $pegawai = Pegawai::where('id_cabang',$request->id)->get();
      return response()->json($pegawai);
    }

    public function findLayanan(Request $request)
   {
     $layanan = Service::where('id_service',$request->id)->get();
     return response()->json($layanan);
   }

   public function findLayananKategori(Request $request)
  {
    $layanan = Service::where('id_kategori',$request->id)->get();
    return response()->json($layanan);
  }

   public function findPaket(Request $request)
  {
    $paket = Paket::where('id_paket',$request->id)->get();
    return response()->json($paket);
  }

    public function postReserve(Request $request)
    {
      Reservasi::create([
        'id_user' => auth()->user()->id_user,
        'id_paket' => $request->paket,
        'id_cabang' => $request->cabang,
        'id_service' => $request->service,
        'id_pegawai' => $request->pegawai,
        'id_jam' => $request->jam,
        'tanggal' => $request->tanggal

      ]);
      return redirect()->back();
    }

    public function findTime(Request $request)
    {
      $time = Jamreservasi::whereNotIn('id_jam',function($query) use($request){
        $query->select('id_jam')->from('reservasi')
        ->where('id_pegawai', $request->id_pegawai)
        ->where('id_cabang', $request->id_cabang)
        ->where('tanggal',$request->tanggal);
      })->get();
      return response()->json($time);
    }

}
