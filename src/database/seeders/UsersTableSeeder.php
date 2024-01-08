<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param =[
            'user_name' => '山田太郎',
            'email' => 'mail123@google.ne.jp',
            'password' => 'rese01'
        ];
        DB::table('users')->insert($param);

        $param =[
            'user_name' => '田中次郎',
            'email' => 'coach456@google.ne.jp',
            'password' => 'rese02'
        ];
        DB::table('users')->insert($param);

        $param =[
            'user_name' => '鈴木三郎',
            'email' => 'tech789@google.ne.jp',
            'password' => 'rese03'
        ];
        DB::table('users')->insert($param);
    }
}
