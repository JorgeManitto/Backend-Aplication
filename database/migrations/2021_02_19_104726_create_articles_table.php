<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->integer('year')->nullable();
            $table->text('img')->nullable();
            $table->text('body');
            $table->unsignedBigInteger('model_id');
            $table->foreign('model_id')->references('model_id')->on('modelcategories');
            $table->unsignedBigInteger('category_id')->unsigned()->nullable();            
            $table->foreign('category_id')->references('category_id')->on('carcategories');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
