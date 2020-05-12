<?php

use Illuminate\Database\Seeder;

class PlayersTableSeeder_tigers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
            'name' =>'近本光司',
            'photo' =>'5.jpg',
            'team_id' =>'3',
            'number' =>'5',
        ]);
        DB::table('players')->insert([
            'name' =>'糸井嘉男',
            'photo' =>'7.jpg',
            'team_id' =>'3',
            'number' =>'7',
        ]);
        DB::table('players')->insert([
            'name' =>'西勇輝',
            'photo' =>'16.jpg',
            'team_id' =>'3',
            'number' =>'16',
        ]);
        DB::table('players')->insert([
            'name' =>'藤川球児',
            'photo' =>'22.jpg',
            'team_id' =>'3',
            'number' =>'22',
        ]);
        DB::table('players')->insert([
            'name' =>'梅野隆太郎',
            'photo' =>'44.jpg',
            'team_id' =>'3',
            'number' =>'44',
        ]);
    }
}
