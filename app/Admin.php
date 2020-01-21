<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;
    protected $guard = 'admin';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'id_admin';

     protected $fillable = ['id_admin', 'id_cabang', 'nama', 'email', 'jk', 'hp', 'alamat', 'password', 'remember_token'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function cabang() {
        return $this->belongsTo(\app\Cabang::class, 'id_cabang', 'id_cabang');
    }
}
