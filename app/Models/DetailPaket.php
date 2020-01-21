<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailPaket extends Model {

    /**
     * Generated
     */

    protected $table = 'detail_paket';
    protected $fillable = ['id_paket', 'id_service'];
    public $timestamps = false;


    public function service() {
        return $this->belongsTo(\app\Models\Service::class, 'id_service', 'id_service');
    }

    public function paket() {
        return $this->belongsTo(\app\Models\Paket::class, 'id_paket', 'id_paket');
    }


}
