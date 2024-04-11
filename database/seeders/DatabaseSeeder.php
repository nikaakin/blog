<?php

namespace Database\Seeders;

use App\Models\Topic;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'nikaakin',
            'email' => 'nika@nika.com',
            'password' => env("ADMIN_PASSWORD"),
            'is_admin' => true
        ]);

        User::factory()->create([
            'name' => 'bedena',
            'email' => 'bedena@bedena.com',
            'password' => env("ADMIN_PASSWORD"),
            'is_admin' => true
        ]);

        Topic::factory()->create([
            'title' => 'React Native'
        ]);

        Topic::factory()->create([
            'title' => 'Wordpress'
        ]);
    }
}
