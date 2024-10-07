<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Episode;
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
         User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'is_admin' => true,
        ]);

        Course::factory(3)->create();
        Episode::factory(10)->create();

    }
}
