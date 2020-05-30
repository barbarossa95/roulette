<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Prize;

class Raffle extends Model
{
    public static function create(User $user, Prize $prize = null)
    {
        $raffle = new self;
        $raffle->user_id = $user->id;
        $raffle->prize_id = $prize ? $prize->id : null;
        $raffle->save();

        return $raffle;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function prize()
    {
        return $this->belongsTo(Prize::class);
    }
}
