<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use \App\Models\Place;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Place::create([
            'name' => '未登録',
            'detail' => ''
        ]);

        Place::create([
            'name' => '1F北側ペンキ棚',
            'detail' => 'ペンキを置く場所'
        ]);

        Place::create([
            'name' => '1F東側電気関係棚',
            'detail' => '電気配線、端子などを置く場所'
        ]);

        Place::create([
            'name' => '1F西側棚',
            'detail' => '工具類を置く場所'
        ]);

        Place::create([
            'name' => '工場裏ガスボンベ置き場',
            'detail' => '各種ガスボンベの保管場所'
        ]);

        Place::create([
            'name' => '1F東側塗装関係棚',
            'detail' => '塗装用のはけなどを置く場所'
        ]);

    }
}
