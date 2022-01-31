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
    // ПРобовала загрузки через сид не отработало php artisan db:seed

    //   ReflectionException  : Class DatabaseSeeder does not exist
    //
    //  at C:\Openserver\OpenServer\domains\laravel.local\vendor\laravel\framework\src\Illuminate\Container\Container.php:788
    //    784|         if ($concrete instanceof Closure) {
    //    785|             return $concrete($this, $this->getLastParameterOverride());
    //    786|         }
    //    787|
    //  > 788|         $reflector = new ReflectionClass($concrete);
    //    789|
    //    790|         // If the type is not instantiable, the developer is attempting to resolve
    //    791|         // an abstract type such as an Interface or Abstract Class and there is
    //    792|         // no binding registered for the abstractions so we need to bail out.
    //
    //  Exception trace:
    //
    //  1   ReflectionClass::__construct("DatabaseSeeder")
    //      C:\Openserver\OpenServer\domains\laravel.local\vendor\laravel\framework\src\Illuminate\Container\Container.php:788
    //
    //  2   Illuminate\Container\Container::build("DatabaseSeeder")
    //      C:\Openserver\OpenServer\domains\laravel.local\vendor\laravel\framework\src\Illuminate\Container\Container.php:667
    //
    //  Please use the argument -v to see more details.

   /* public function run()
    {
            \DB::table('news')
            ->insert([
                'title'=>'11111111',
                'content'=>'sdhgdfjgfkhfkgskghlgh',
                'sourse'=>'dhvfjkvdfb',
                'publish_date'=> date('Y-n-d'),
                'category_id' => '5'
            ]);
    }*/
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
