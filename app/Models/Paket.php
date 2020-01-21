<?php namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model {

    /**
     * Generated
     */
    protected $primaryKey= 'id_paket';
    protected $table = 'paket';
    protected $fillable = ['id_paket', 'nama', 'harga', 'deskripsi', 'gambar'];
    public $timestamps = false;

    public function services() {
        return $this->belongsToMany(\app\Models\Service::class, 'detail_paket', 'id_paket', 'id_service');
    }

    public function detailPakets() {
        return $this->hasMany(\app\Models\DetailPaket::class, 'id_paket', 'id_paket');
    }

    public function reservasis() {
        return $this->hasMany(\app\Models\Reservasi::class, 'id_paket', 'id_paket');
    }


}
