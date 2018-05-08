<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRawMaterialCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raw_material_categories', function (Blueprint $table) {
            $table->increments('raw_material_category_id');
            $table->string('raw_material_category_name');
            $table->integer('company_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('raw_material_categories', function (Blueprint $table){
            $table->foreign('company_id')->references('company_id')->on('companies')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('raw_material_categories');
    }
}
