<?php
 namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cabang extends Model {

    /**
     * Generated
     */
    protected $primaryKey= 'id_cabang';
    protected $table = 'cabang';
    protected $fillable = ['id_cabang', 'nama', 'alamat'];
    public $timestamps = false;

    public function admins() {
        return $this->hasMany(\app\Models\Admin::class, 'id_cabang', 'id_cabang');
    }

    public function pegawais() {
        return $this->hasMany(\app\Models\Pegawai::class, 'id_cabang', 'id_cabang');
    }

    public function reservasis() {
        return $this->hasMany(\app\Models\Reservasi::class, 'id_cabang', 'id_cabang');
    }


}
