<?php

namespace App\Http\Controllers;
use App\Models\Paket;

use Illuminate\Http\Request;
use App\Models\Service;
class ServiceController extends Controller
{

    public function services()
    {
         $services = Service::all();
         $spa= Service::where('id_kategori','1')->get();
         $face= Service::where('id_kategori','2')->get();
         $hair= Service::where('id_kategori','3')->get();
           	$paket = Paket::all();


         $data = array(
       		'services' => $services,
             'paket' => $paket,
       		'spa' => $spa,
          'face' => $face,
          'hair' => $hair
       	);
        return view('services')->with($data);
    }

    public function getServicesDetails(Request $request){
      $id = $request->input('id_service');
      $details = Service::where('nama', $id)->get();
      return view('services-details')->with('details', $details);
    }

}
