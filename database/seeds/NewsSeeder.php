<?php

namespace Database\Seeds;

use Faker\Generator;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
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
                'title'=>'11111111',
                'content'=>'sdhgdfjgfkhfkgskghlgh',
                'sourse'=>'dhvfjkvdfb',
                'publish_date'=> date('Y-n-d'),
                'category_id' => '5'
            ]);
    }
    /*public function run(Generator $generator)
    {

        \DB::table('news')
            ->insert([
                'title' => $generator->text(50),
                'content' => $generator->text(),
                'source' => $generator->url(),
                'publish_date' => $generator->dateTime(),
                'category_id' => $generator->rand(0, 5)
            ]);
    }*/
}
