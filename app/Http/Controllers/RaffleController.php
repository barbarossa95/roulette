<?php

namespace App\Http\Controllers;

use App\Prize;
use App\Raffle;
use Illuminate\Http\Request;

class RaffleController extends Controller
{
    public function index()
    {
        return view('raffle.index');
    }

    public function participate()
    {
        $user = request()->user();

        // вероятность 25%
        if (mt_rand(0, 100) >= 75) {
            $prize = Prize::inRandomOrder()->first();
            $raffle = Raffle::create($user, $prize);

            return view('raffle.win', compact('prize'));
        }

        $raffle = Raffle::create($user);

        return view('raffle.lose');
    }
}
