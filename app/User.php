<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $primaryKey = 'UserId';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'UserFirstName', 'UserLastName', 'UserEmail', 'UserPhone', 'UserPassword',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'UserPassword', 'remember_token',
    ];

    public function getAuthPassword() 
    {
        return $this->UserPassword; 
    }
}
