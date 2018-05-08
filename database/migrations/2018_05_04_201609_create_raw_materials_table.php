<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRawMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raw_materials', function (Blueprint $table) {
            $table->increments('raw_material_id');
            $table->string('raw_material_name');
            $table->string('raw_material_description')->nullable();
            $table->string('raw_material_internal_code')->nullable();
            $table->string('raw_material_part_number')->nullable();
            $table->float('raw_material_price',5,2);
            $table->integer('company_id')->unsigned();
            $table->integer('raw_material_category_id')->unsigned();
            $table->integer('measurement_unit_id')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::table('raw_materials', function(Blueprint $table){
            $table->foreign('company_id')->references('company_id')->on('companies')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('raw_material_category_id')->references('raw_material_category_id')->on('raw_material_categories')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('raw_materials');
    }
}
