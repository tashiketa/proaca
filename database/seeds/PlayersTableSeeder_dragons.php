<?php

use Illuminate\Database\Seeder;

class PlayersTableSeeder_dragons extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
            'name' => '高橋 周平',
            'photo' => '3.jpg',
            'team_id' => '5',
            'number' => '3',
        ]);
        DB::table('players')->insert([
            'name' => '平田 良介',
            'photo' => '6.jpg',
            'team_id' => '5',
            'number' => '6',
        ]);
        DB::table('players')->insert([
            'name' => '大島 洋平',
            'photo' => '8.jpg',
            'team_id' => '5',
            'number' => '8',
        ]);
        DB::table('players')->insert([
            'name' => '大野 雄大',
            'photo' => '22.jpg',
            'team_id' => '5',
            'number' => '22',
        ]);
        DB::table('players')->insert([
            'name' => 'ビシエド',
            'photo' => '66.jpg',
            'team_id' => '5',
            'number' => '66',
        ]);
    }
}
