<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    //  seederでデータを入れる
    public function run()
    {
        $param = [
            'name' => 'ziro',
            'email' => 'ziro@yamada.jp',
            'password' => bcrypt('password'),
        ];
        DB::table('users')->insert($param);
     
        $param = [
            'name' => 'momo',
            'email' => 'momo@flower.jp',
            'password' => bcrypt('password'),
        ];
        DB::table('users')->insert($param);
     
        $param = [
            'name' => 'tubasa',
            'email' => 'tubasa@happy.jp',
            'password' => bcrypt('password'),
        ];
        DB::table('users')->insert($param);
     }
 
    }
