<?php

use Illuminate\Database\Seeder;

class PlayersTableSeeder_baystars extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
            'name' =>'山崎康晃',
            'photo' =>'19.jpg',
            'team_id' =>'2',
            'number' =>'19',
        ]);
        DB::table('players')->insert([
            'name' =>'今永昇太',
            'photo' =>'21.jpg',
            'team_id' =>'2',
            'number' =>'21',
        ]);
        DB::table('players')->insert([
            'name' =>'ロペス',
            'photo' =>'2.jpg',
            'team_id' =>'2',
            'number' =>'2',
        ]);
        DB::table('players')->insert([
            'name' =>'ソト',
            'photo' =>'99.jpg',
            'team_id' =>'2',
            'number' =>'99',
        ]);
        DB::table('players')->insert([
            'name' =>'宮崎敏郎',
            'photo' =>'51.jpg',
            'team_id' =>'2',
            'number' =>'51',
        ]);
    }
}
