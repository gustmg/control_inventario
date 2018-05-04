<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleExitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_exits', function (Blueprint $table) {
            $table->integer('warehouse_id')->unsigned();
            $table->integer('article_id')->unsigned();
            $table->float('article_exit_quantity',5,2);
            $table->timestamps();
        });

        Schema::table('article_exits', function (Blueprint $table){
            $table->foreign('warehouse_id')->references('warehouse_id')->on('warehouses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('article_id')->references('article_id')->on('articles')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_exits');
    }
}
