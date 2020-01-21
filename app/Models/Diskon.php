<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diskon extends Model {

    /**
     * Generated
     */
    protected $primaryKey= 'id_diskon';
    protected $table = 'diskon';
    protected $fillable = ['id_diskon', 'nama', 'besar'];


    public function reservasis() {
        return $this->belongsToMany(\app\Models\Reservasi::class, 'pembayaran', 'id_diskon', 'id_reservasi');
    }

    public function pembayarans() {
        return $this->hasMany(\app\Models\Pembayaran::class, 'id_diskon', 'id_diskon');
    }


}
