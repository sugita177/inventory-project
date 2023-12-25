<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'テストユーザー01',
            'email' => 'test@example.com',
            'password' => '12345678'
        ]);

        User::create([
            'name' => '桜井',
            'email' => 'sakurai@example.com',
            'password' => 'sakurai1234'
        ]);

        User::create([
            'name' => '坂崎',
            'email' => 'sakazaki@example.com',
            'password' => 'sakazaki1234'
        ]);

        User::create([
            'name' => '高見沢',
            'email' => 'takamizawa@example.com',
            'password' => 'takamizawa1234'
        ]);

    }
}
