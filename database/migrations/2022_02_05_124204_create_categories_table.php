<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('topic','100')
                ->unique()
                ->nullable(false)
                ->comment('Категория новости');
            $table->timestamps();
        });

        Schema::table('news', function (Blueprint $table){
            $table->foreign('category_id')
                ->references('id')
                ->on('categories');

        } );
        DB::table('categories')
            ->insert([
                ['topic' => 'History'],
                ['topic' => 'Politics'],
                ['topic' => 'Sport'],
                ['topic' => 'Fashion'],
                ['topic' => 'Health'],
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
