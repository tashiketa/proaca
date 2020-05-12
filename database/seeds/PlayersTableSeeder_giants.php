<?php

use Illuminate\Database\Seeder;

class PlayersTableSeeder_giants extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
            'name' =>'坂本勇人',
            'photo' =>'6.jpg',
            'team_id' =>'1',
            'number' =>'6',
        ]);
        DB::table('players')->insert([
            'name' =>'丸佳浩',
            'photo' =>'8.jpg',
            'team_id' =>'1',
            'number' =>'8',
        ]);
        DB::table('players')->insert([
            'name' =>'岡本和真',
            'photo' =>'25.jpg',
            'team_id' =>'1',
            'number' =>'25',
        ]);
        DB::table('players')->insert([
            'name' =>'亀井善行',
            'photo' =>'9.jpg',
            'team_id' =>'1',
            'number' =>'9',
        ]);
        DB::table('players')->insert([
            'name' =>'菅野智之',
            'photo' =>'18.jpg',
            'team_id' =>'1',
            'number' =>'18',
        ]);
    }
}
