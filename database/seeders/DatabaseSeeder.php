<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use  Database\Seeders\ArticlesTableSeeder;
use  Database\Seeders\ModelcategoriesTableSeeder;
use App\Models\Article;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Article::factory(50)->create();
        // User::factory(50)->create();
        $this->call([
            ModelcategoriesTableSeeder::class,
            ArticlesTableSeeder::class,
        ]);
    }
}
