<?php

namespace Database\Seeders;

use App\Models\Library\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::factory()
            ->count(10)
            ->hasArticles(5) // Assuming you have a relationship defined in the factory
            ->hasBooks(3)     // Assuming you have a relationship defined in the factory
            ->create();
    }
}
