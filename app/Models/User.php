<?php namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    /**
     * Generated
     */
    protected $primaryKey= 'id_user';
    protected $table = 'users';
    protected $fillable = ['id_user', 'nama', 'email', 'jk', 'hp', 'alamat', 'password', 'remember_token'];


    public function reservasis() {
        return $this->hasMany(\app\Models\Reservasi::class, 'id_user', 'id_user');
    }


}
