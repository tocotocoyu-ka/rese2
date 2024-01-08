<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FavoritesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'shop_id' => 1,
            'user_id' => 1
        ];
        DB::table('favorites')->insert($param);

        $param = [
            'shop_id' => 3,
            'user_id' => 2
        ];
        DB::table('favorites')->insert($param);

        $param = [
            'shop_id' => 2,
            'user_id' => 3
        ];
        DB::table('favorites')->insert($param);

        $param = [
            'shop_id' => 7,
            'user_id' => 2
        ];
        DB::table('favorites')->insert($param);

        $param = [
            'shop_id' => 12,
            'user_id' => 1
        ];
        DB::table('favorites')->insert($param);
    }
}
