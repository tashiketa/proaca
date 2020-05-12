<?php

use Illuminate\Database\Seeder;

class PlayersTableSeeder_swallows extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
            'name' => '山田哲人',
            'photo' => '1.jpg',
            'team_id' => '6',
            'number' => '1',
        ]);
        DB::table('players')->insert([
            'name' => '青木 宣親',
            'photo' => '23.jpg',
            'team_id' => '6',
            'number' => '23',
        ]);
        DB::table('players')->insert([
            'name' => '小川 泰弘',
            'photo' => '29.jpg',
            'team_id' => '6',
            'number' => '29',
        ]);
        DB::table('players')->insert([
            'name' => '中村 悠平',
            'photo' => '52.jpg',
            'team_id' => '6',
            'number' => '52',
        ]);
        DB::table('players')->insert([
            'name' => '村上 宗隆',
            'photo' => '55.jpg',
            'team_id' => '6',
            'number' => '55',
        ]);
    }
}
