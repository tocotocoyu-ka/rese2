<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => 1,
            'shop_id' => 3,
            'date' => '2024-1-24',
            'time' => '19:30',
            'number' => 2
        ];
        DB::table('reserves')->insert($param);

        $param = [
            'user_id' => 2,
            'shop_id' => 7,
            'date' => '2024-2-15',
            'time' => '18:00',
            'number' => 5
        ];
        DB::table('reserves')->insert($param);

        $param = [
            'user_id' => 3,
            'shop_id' => 10,
            'date' => '2024-3-9',
            'time' => '19:00',
            'number' => 6
        ];
        DB::table('reserves')->insert($param);
    }
}
