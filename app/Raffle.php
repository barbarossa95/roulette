<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Prize;

class Raffle extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function prize()
    {
        return $this->belongsTo(Prize::class);
    }
}
