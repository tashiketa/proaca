<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            TeamsTableSeeder::class,
            PlayersTableSeeder_giants::class,
            PlayersTableSeeder_baystars::class,
            PlayersTableSeeder_tigers::class,
            PlayersTableSeeder_carp::class,
            PlayersTableSeeder_dragons::class,
            PlayersTableSeeder_swallows::class,
        ]);
    }
}
