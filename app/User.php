<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use Notifiable;
    use LaratrustUserTrait;

    protected $fillable = [
        'username','company_id','branch_id','password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function phone()
    {
        return $this->hasOne('App\Role');
    }

    
}
