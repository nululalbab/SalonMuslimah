<?php namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model {

    /**
     * Generated
     */
    protected $primaryKey= 'id_pegawai';
    protected $table = 'pegawai';
    protected $fillable = ['id_pegawai', 'id_kategori', 'id_cabang', 'nama', 'nip', 'jk', 'hp', 'alamat', 'tempatlahir', 'tgllahir'];


    public function cabang() {
        return $this->belongsTo(\app\Models\Cabang::class, 'id_cabang', 'id_cabang');
    }


    public function reservasis() {
        return $this->hasMany(\app\Models\Reservasi::class, 'id_pegawai', 'id_pegawai');
    }


}
