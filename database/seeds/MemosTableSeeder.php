<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => '1',
            'name' => 'ziro',
            'date' => '8/8',
            'memo' => '電話をかける',
        ];
        DB::table('memos')->insert($param);
     
        $param = [
            'user_id' => '1',
            'name' => 'momo',
            'date' => '9/20',
            'memo' => 'LINEする',
        ];
        DB::table('memos')->insert($param);
     
        $param = [
            'user_id' => '2',
            'name' => 'tubasa',
            'date' => '3/6',
            'memo' => '歌う',
        ];
        DB::table('memos')->insert($param);


    }
}
