<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use \App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => '未登録',
            'detail' => ''
        ]);

        Category::create([
            'name' => '塗装',
            'detail' => '塗装用のペンキ、はけなど'
        ]);

        Category::create([
            'name' => '電気',
            'detail' => '電気配線、端子など'
        ]);

        Category::create([
            'name' => '工具',
            'detail' => '整備用の工具類'
        ]);

        Category::create([
            'name' => '溶接',
            'detail' => '溶接用のガス、工具など'
        ]);
    }
}
