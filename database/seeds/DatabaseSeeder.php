<?php
namespace Database\Seeds;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(NewsSeeder::class);
        //$this->call(NewsSeeder::class);
        //$this->call(\CategoriesSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
