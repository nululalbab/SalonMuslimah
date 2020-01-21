<?php

namespace App\Http\Controllers;
use App\Models\Cabang;
use App\Models\Pegawai;
use App\Models\Paket;
use App\Models\Service;
use App\Models\Kategori;
use App\Models\Reservasi;
use Illuminate\Http\Request;

class AdminController extends Controller
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
     public function index()
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
         'reservasi' =>$reservasi,
        'kategori' => $kategori
       );
         return view('admin')->with($data);
     }

     public function getReserveDetails(Request $request){
       $id = $request->input('id_reservasi');
       $details = Reservasi::where('id_reservasi', $id)->get();
       return view('services-details')->with('details', $details);
     }

}
