<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
class PricesController extends Controller
{

    public function prices()
    {
         $services = Service::all();
         $spa= Service::where('id_kategori','1')->get();
         $face= Service::where('id_kategori','2')->get();
         $hair= Service::where('id_kategori','3')->get();


         $data = array(
       		'services' => $services,
       		'spa' => $spa,
          'face' => $face,
          'hair' => $hair
       	);
        return view('prices')->with($data);
    }

}
