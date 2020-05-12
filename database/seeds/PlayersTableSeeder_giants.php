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
            'photo' =>'',
            'team_id' =>'1',
            'number' =>'6',
        ]);
    }
}
