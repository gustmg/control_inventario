<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('article_id');
            $table->string('article_name');
            $table->string('article_description')->nullable();
            $table->string('article_internal_code')->nullable();
            $table->string('article_part_number')->nullable();
            $table->float('article_price',5,2);
            $table->integer('company_id')->unsigned();
            $table->integer('article_category_id')->unsigned();
            $table->integer('measurement_unit_id')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::table('articles', function(Blueprint $table){
            $table->foreign('company_id')->references('company_id')->on('companies')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('article_category_id')->references('article_category_id')->on('article_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('measurement_unit_id')->references('measurement_unit_id')->on('measurement_units')->onDelete('set null')->onUpdate('set null');
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
