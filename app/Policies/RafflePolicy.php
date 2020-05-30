<?php

namespace App\Policies;

use App\User;
use Carbon\Carbon;
use Illuminate\Auth\Access\HandlesAuthorization;

class RafflePolicy
{

    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function participate(User $user)
    {
        return $user->raffles()
            ->where('created_at', '<', Carbon::now()->startOfDay())
            ->sortBy('created_at', SORT_DESC)
            ->first() == null;
    }
}
