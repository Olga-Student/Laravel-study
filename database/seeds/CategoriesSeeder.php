<?php
namespace Database\Seeds;

use Faker\Generator;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('news')
            ->insert([
                'title_category'=>'History',]);

    }
}
