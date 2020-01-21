<?php namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model {

    /**
     * Generated
     */
    protected $primaryKey= 'id_service';
    protected $table = 'service';
    protected $fillable = ['id_service', 'id_kategori', 'nama', 'deskripsi', 'harga', 'gambar'];
    public $timestamps =false;

    public function kategori() {
        return $this->belongsTo(\app\Models\Kategori::class, 'id_kategori', 'id_kategori');
    }

    public function pakets() {
        return $this->belongsToMany(\app\Models\Paket::class, 'detail_paket', 'id_service', 'id_paket');
    }

    public function detailPakets() {
        return $this->hasMany(\app\Models\DetailPaket::class, 'id_service', 'id_service');
    }

    public function reservasis() {
        return $this->hasMany(\app\Models\Reservasi::class, 'id_service', 'id_service');
    }


}
