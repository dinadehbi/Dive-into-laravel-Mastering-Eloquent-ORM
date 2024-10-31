<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article; // Import the Article model

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::create([
            'name' => "tech",
            'categorie_id' => 1, // Ensure this ID exists in your categories table
        ]);
    }
}
