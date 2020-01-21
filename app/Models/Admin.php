<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model {

    /**
     * Generated
     */
    protected $primaryKey= 'id_admin';
    protected $table = 'admins';
    protected $fillable = ['id_admin', 'id_cabang', 'nama', 'email', 'jk', 'hp', 'alamat', 'password', 'remember_token'];


    public function cabang() {
        return $this->belongsTo(\app\Models\Cabang::class, 'id_cabang', 'id_cabang');
    }


}
