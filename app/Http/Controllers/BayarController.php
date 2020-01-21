<?php

namespace App\Http\Controllers;
use App\Models\Cabang;
use App\Models\Pegawai;
use App\Models\Paket;
use App\Models\Service;
use App\Models\Kategori;
use App\Models\Reservasi;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class BayarController extends Controller
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
     public function bayarOffline()
     {
       $cabang = Cabang::all();
       $pegawai = Pegawai::all();
       $paket = Paket::all();
       $service = Service::all();
       $kategori = Kategori::all();
       $reservasi = Reservasi::where('id_user',6)
       ->where('status',0)->get();

       $data = array(
         'cabang' => $cabang,
         'paket' => $paket,
         'pegawai' => $pegawai,
         'service' => $service,
         'reservasi' =>$reservasi,
        'kategori' => $kategori
       );
         return view('bayaroffline')->with($data);
     }


     public function ubahStatus(Request $request)
     {
       Pembayaran::create([
         'id_pembayaran' => $request->id_pembayaran,
         'jumlah' => $request->jumlah,
         'id_reservasi' => $request->id_reservasi

       ]);

       Reservasi::where('id_reservasi', $request->id_reservasi)->update([
         'status'=> 1
       ]);

       return redirect()->back();
     }

     public function bayarOnline()
     {
       $cabang = Cabang::all();
       $pegawai = Pegawai::all();
       $paket = Paket::all();
       $service = Service::all();
       $kategori = Kategori::all();
       $reservasi = Reservasi::where('status',0)->get();

       $data = array(
         'cabang' => $cabang,
         'paket' => $paket,
         'pegawai' => $pegawai,
         'service' => $service,
         'reservasi' =>$reservasi,
        'kategori' => $kategori
       );
         return view('bayaronline')->with($data);
     }

     public function ubahStatusOnline(Request $request)
     {
       Pembayaran::create([
         'id_pembayaran' => $request->id_pembayaran,
         'jumlah' => $request->jumlah,
         'id_reservasi' => $request->id_reservasi

       ]);

       Reservasi::where('id_reservasi', $request->id_reservasi)->update([
         'status'=> 1
       ]);

       return redirect()->back();
     }

}
