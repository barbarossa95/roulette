<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Raffle;

class Prize extends Model
{
    const TYPE_COINS = 'coins';
    const TYPE_MONEY = 'money';
    const TYPE_STUFF = 'stuff';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'type', 'amount'
    ];

    public function winners()
    {
        return $this->hasManyThrough(User::class, Raffle::class);
    }

    public function raffles()
    {
        return $this->hasMany(Raffle::class);
    }
}
