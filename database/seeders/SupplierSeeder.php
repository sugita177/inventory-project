<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use \App\Models\Supplier;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Supplier::create([
            'name' => '未登録',
            'address' => '住所',
            'posting_code' => '郵便番号',
            'telephone_number' => '電話番号',
            'fax_number' => 'FAX番号',
            'remark' => '',
        ]);

        Supplier::create([
            'name' => '田中ペンキ店',
            'address' => '東京都新宿区○○町1-2-3',
            'posting_code' => '123-4567',
            'telephone_number' => '03-1234-5678',
            'fax_number' => '03-1234-5679',
            'remark' => 'ペンキやはけなどの塗装関係'
        ]);

        Supplier::create([
            'name' => '鈴木電気',
            'address' => '東京都江東区xx町4-5-6',
            'posting_code' => '111-2222',
            'telephone_number' => '03-1111-2222',
            'fax_number' => '03-1111-2223',
            'remark' => '電気関係'
        ]);

        Supplier::create([
            'name' => '寺田機械',
            'address' => '神奈川県川崎市川崎区○x町1-3-6',
            'posting_code' => '333-5555',
            'telephone_number' => '34-5678-9012',
            'fax_number' => '34-5678-9013',
            'remark' => '各種工具類'
        ]);

        Supplier::create([
            'name' => '宮岡ガス',
            'address' => '神奈川県横浜市都筑区△△町7-89',
            'posting_code' => '333-4444',
            'telephone_number' => '12-3456-7890',
            'fax_number' => '12-3456-7899',
            'remark' => '溶接用ガス'
        ]);
    }
}
