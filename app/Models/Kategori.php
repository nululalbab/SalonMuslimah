<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model {

    /**
     * Generated
     */
    protected $primaryKey= 'id_kategori';
    protected $table = 'kategori';
    protected $fillable = ['id_kategori', 'nama', 'deskripsi', 'gambar'];


    public function services() {
        return $this->hasMany(\app\Models\Service::class, 'id_kategori', 'id_kategori');
    }


}
