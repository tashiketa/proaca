<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'name' => '読売ジャイアンツ',
            'home' => '東京ドーム',
            'emblem' => 'giants.gif',
        ]);
        DB::table('teams')->insert([
            'name' => '横浜DeNAベイスターズ',
            'home' => '横浜スタジアム',
            'emblem' => 'baystars.gif',
        ]);
        DB::table('teams')->insert([
            'name' => '阪神タイガース',
            'home' => '阪神甲子園球場',
            'emblem' => 'tigers.gif',
        ]);
        DB::table('teams')->insert([
            'name' => '広島東洋カープ',
            'home' => 'MAZDA Zoom-Zoom スタジアム広島',
            'emblem' => 'carp.gif',
        ]);
        DB::table('teams')->insert([
            'name' => '中日ドラゴンズ',
            'home' => 'ナゴヤドーム',
            'emblem' => 'dragons.gif',
        ]);
        DB::table('teams')->insert([
            'name' => '東京ヤクルトスワローズ',
            'home' => '明治神宮野球場',
            'emblem' => 'swallows.gif',
        ]);
    }
}
