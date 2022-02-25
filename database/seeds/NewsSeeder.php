<?php

namespace Database\Seeds;

use Faker\Generator;
use Illuminate\Database\Seeder;


class NewsSeeder extends Seeder
{

    public function run(Generator $generator)
    {

        \DB::table('news')
            ->insert([
                'title' => $generator->text(50),
                'content' => $generator->text(),
                'source' => $generator->url(),
                'publish_date' => $generator->dateTime(),
                'category_id' => $generator->rand(0, 5)
            ]);

    }
}
