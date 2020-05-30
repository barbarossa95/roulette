<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    // забыл добавить soft delete

    const ROLE_USER = 'user';
    const ROLE_ADMIN = 'admin';

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function raffles()
    {
        return $this->hasMany(Raffle::class);
    }

    public function prizes()
    {
        return $this->hasManyThrough(Prize::class, Raffle::class);
    }
}
