<?php

use Illuminate\Database\Seeder;

class PlayersTableSeeder_carp extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
            'name' =>'鈴木誠也',
            'photo' =>'1.jpg',
            'team_id' =>'4',
            'number' =>'1',
        ]);
        DB::table('players')->insert([
            'name' =>'大瀬良大地',
            'photo' =>'14.jpg',
            'team_id' =>'4',
            'number' =>'14',
        ]);
        DB::table('players')->insert([
            'name' =>'會澤翼',
            'photo' =>'27.jpg',
            'team_id' =>'4',
            'number' =>'27',
        ]);
        DB::table('players')->insert([
            'name' =>'菊池涼介',
            'photo' =>'33.jpg',
            'team_id' =>'4',
            'number' =>'33',
        ]);
        DB::table('players')->insert([
            'name' =>'ジョンソン',
            'photo' =>'42.jpg',
            'team_id' =>'4',
            'number' =>'42',
        ]);
    }
}
