<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jamreservasi extends Model {

    /**
     * Generated
     */
    protected $primaryKey= 'id_jamreservasi';
    protected $table = 'jamreservasi';
    protected $fillable = ['id_jam', 'mulai', 'selesai'];


    public function reservasis() {
        return $this->hasMany(\app\Models\Reservasi::class, 'id_jam', 'id_jam');
    }


}
