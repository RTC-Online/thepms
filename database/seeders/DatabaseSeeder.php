<?php

namespace Database\Seeders;

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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        User::factory()->create([
            'name' => 'Kimbuktu',
            'email' => 'kornwinkel.kim@gmail.com',
        ]);

        User::factory()->create([
            'name' => 'DasCoco',
            'email' => 'mck.dascoco@gmail.com',
        ]);

        User::factory()->create([
            'name' => 'ProjectOneeye',
            'email' => 'janiba.pascal01@gmail.com',
        ]);
    }
}
