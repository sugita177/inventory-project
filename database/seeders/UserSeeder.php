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
            'name' => '山田',
            'email' => 'yamada@example.com',
            'password' => 'yamada1234'
        ]);

        User::create([
            'name' => '田中',
            'email' => 'tanaka@example.com',
            'password' => 'tanaka1234'
        ]);

    }
}
