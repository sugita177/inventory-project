<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use \App\Models\Article;
use DateTime;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::create([
            'name' => 'ペンキ赤',
            'detail' => '2l',
            'category_id' => 2,
            'place_id' => 2,
            'unit' => '缶',
            'supplier_id' => 2,
            'remark' =>'1/4以下になったら購入すること',
            'user_id' => rand(2, 4),
            'created_at' => new DateTime('2023-04-01 15:30')
        ]);
        Article::create([
            'name' => 'ペンキ白',
            'detail' => '2l',
            'category_id' => 2,
            'place_id' => 2,
            'unit' => '缶',
            'supplier_id' => 2,
            'remark' =>'1/4以下になったら購入すること',
            'user_id' => rand(2, 4),
            'created_at' => new DateTime('2023-04-01 15:30')
        ]);
        Article::create([
            'name' => 'ペンキ黄',
            'detail' => '2l',
            'category_id' => 2,
            'place_id' => 2,
            'unit' => '缶',
            'supplier_id' => 2,
            'remark' =>'1/4以下になったら購入すること',
            'user_id' => rand(2, 4),
            'created_at' => new DateTime('2023-04-01 15:30')
        ]);
        Article::create([
            'name' => 'ペンキ用はけ',
            'detail' => '',
            'category_id' => 2,
            'place_id' => 6,
            'unit' => '本',
            'supplier_id' => 2,
            'remark' =>'新品は5本以上ストックしておく',
            'user_id' => rand(2, 4),
            'created_at' => new DateTime('2023-04-01 15:30')
        ]);
        Article::create([
            'name' => '電気配線',
            'detail' => '黒',
            'category_id' => 3,
            'place_id' => 3,
            'unit' => '巻',
            'supplier_id' => 3,
            'remark' =>'半分以下になったら購入する',
            'user_id' => rand(2, 4),
            'created_at' => new DateTime('2023-04-01 15:30')
        ]);
        Article::create([
            'name' => '電気配線',
            'detail' => '赤',
            'category_id' => 3,
            'place_id' => 3,
            'unit' => '巻',
            'supplier_id' => 3,
            'remark' =>'半分以下になったら購入する',
            'user_id' => rand(2, 4),
            'created_at' => new DateTime('2023-04-01 15:30')
        ]);
        Article::create([
            'name' => 'サンダー本体',
            'detail' => '○×電気製',
            'category_id' => 4,
            'place_id' => 4,
            'unit' => '個',
            'supplier_id' => 4,
            'remark' => 'メーカー注意',
            'user_id' => rand(2, 4),
            'created_at' => new DateTime('2023-04-01 15:30')
        ]);
        Article::create([
            'name' => 'サンダー替刃',
            'detail' => '',
            'category_id' => 4,
            'place_id' => 4,
            'unit' => '箱',
            'supplier_id' => 4,
            'remark' => '',
            'user_id' => rand(2, 4),
            'created_at' => new DateTime('2023-04-01 15:30')
        ]);
        Article::create([
            'name' => 'バフ',
            'detail' => '',
            'category_id' => 4,
            'place_id' => 4,
            'unit' => '箱',
            'supplier_id' => 4,
            'remark' => '',
            'user_id' => rand(2, 4),
            'created_at' => new DateTime('2023-04-01 15:30')
        ]);
        Article::create([
            'name' => '溶接用ガス',
            'detail' => '酸素',
            'category_id' => 5,
            'place_id' => 5,
            'unit' => '本',
            'supplier_id' => 5,
            'remark' => '半分以下になったら注文すること',
            'user_id' => rand(2, 4),
            'created_at' => new DateTime('2023-04-01 15:30')
        ]);
        Article::create([
            'name' => '溶接用ガス',
            'detail' => '窒素',
            'category_id' => 5,
            'place_id' => 5,
            'unit' => '本',
            'supplier_id' => 5,
            'remark' => '予備用に満タン1本はストックしておく',
            'user_id' => rand(2, 4),
            'created_at' => new DateTime('2023-04-01 15:30')
        ]);
    }
}
