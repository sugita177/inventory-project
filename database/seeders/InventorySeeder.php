<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Inventory;
use App\Models\Article;
use App\Models\Check;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = Article::all();
        $checks = Check::all();

        foreach($checks as $check) {
            foreach($articles as $article) {
                Inventory::create([
                    'inventory_number' => rand(0, 10),
                    'shortage_number' => rand(0, 5),
                    'checked' => true,
                    'article_id' => $article->id,
                    'check_id' => $check->id
                ]);
            }
        }
    }
}
