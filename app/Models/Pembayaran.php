<?php namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model {

    /**
     * Generated
     */
protected $primaryKey= 'id_pembayaran';
    protected $table = 'pembayaran';
    protected $fillable = ['id_pembayaran', 'id_reservasi', 'id_diskon', 'tgl', 'jumlah'];
    public $timestamps = false;

    public function reservasi() {
        return $this->belongsTo(\app\Models\Reservasi::class, 'id_reservasi', 'id_reservasi');
    }

    public function diskon() {
        return $this->belongsTo(\app\Models\Diskon::class, 'id_diskon', 'id_diskon');
    }


}
