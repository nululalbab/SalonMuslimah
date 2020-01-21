<?php 
namespace app;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {

	use Notifiable;
    /**
     * Generated
     */
    protected $primaryKey= 'id_user';
    protected $fillable = ['id_user', 'nama', 'email', 'jk', 'hp', 'alamat', 'password', 'remember_token'];


    public function reservasis() {
        return $this->hasMany(\app\Reservasi::class, 'id_user', 'id_user');
    }


}
