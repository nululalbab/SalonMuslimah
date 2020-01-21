<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model {

    /**
     * Generated
     */
    protected $primaryKey= 'id_reservasi';
    protected $table = 'reservasi';
    protected $fillable = ['id_reservasi', 'id_paket', 'id_pegawai', 'id_jam', 'id_service', 'id_cabang', 'id_user', 'tanggal','status'];
    public $timestamps = false;

    public function pegawai() {
        return $this->belongsTo(\App\Models\Pegawai::class, 'id_pegawai', 'id_pegawai');
    }

    public function user() {
        return $this->belongsTo(\App\User::class, 'id_user', 'id_user');
    }

    public function service() {
        return $this->belongsTo(\App\Models\Service::class, 'id_service', 'id_service');
    }

    public function paket() {
        return $this->belongsTo(\App\Models\Paket::class, 'id_paket', 'id_paket');
    }

    public function cabang() {
        return $this->belongsTo(\App\Models\Cabang::class, 'id_cabang', 'id_cabang');
    }

    public function jamreservasi() {
        return $this->belongsTo(\App\Models\Jamreservasi::class, 'id_jam', 'id_jam');
    }

    public function diskons() {
        return $this->belongsToMany(\App\Models\Diskon::class, 'pembayaran', 'id_reservasi', 'id_diskon');
    }

    public function pembayarans() {
        return $this->hasMany(\App\Models\Pembayaran::class, 'id_reservasi', 'id_reservasi');
    }


}
