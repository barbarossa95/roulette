<?php

use Illuminate\Database\Seeder;
use App\Prize;

class PrizesSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prizes = [
            [
                'title' => 'Пылесос',
                'description' => 'робот пылесос!',
                'type' => Prize::TYPE_STUFF,
            ],
            [
                'title' => 'Денежный приз',
                'amount' => 1000,
                'type' => Prize::TYPE_MONEY,
            ],
            [
                'title' => 'Пополнение бонусного счета',
                'amount' => 2500,
                'type' => Prize::TYPE_COINS,
            ],
            [
                'title' => 'Пополнение бонусного счета',
                'amount' => 5000,
                'type' => Prize::TYPE_COINS,
            ],
            [
                'title' => 'Пополнение бонусного счета',
                'amount' => 10000,
                'type' => Prize::TYPE_COINS,
            ],
        ];

        foreach ($prizes as $prize) {
            factory(Prize::class, 1)->create($prize);
        }
    }
}
