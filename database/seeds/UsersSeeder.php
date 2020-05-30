<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 1)->create([
            'name' => 'Admin',
            'email' => 'admin@roulette.test',
            'role' => User::ROLE_ADMIN,
        ]);

        factory(User::class, 10)->create();
    }
}
