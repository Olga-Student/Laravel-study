<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('title','50')
                ->unique()
                ->nullable(false)
                ->comment('Заголовок новости');
            $table->text('content')
                ->nullable();
            $table->string('source', 100)
                ->nullable(true);
            $table->dateTime('publish_date')
                ->nullable('true')
                ->index();
            $table->string('image', 100)
                ->nullable(true);
            $table->softDeletes();
            $table->timestamps();
            $table->BigInteger('category_id')
                ->nullable(true)
                ->default(null)
                ->unsigned()
                ->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
