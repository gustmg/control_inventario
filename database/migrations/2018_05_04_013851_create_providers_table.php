<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->increments('provider_id');
            $table->string('provider_name');
            $table->string('provider_rfc')->nullable();
            $table->string('provider_address')->nullable();
            $table->string('provider_email')->nullable();
            $table->string('provider_phone')->nullable();
            $table->integer('company_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('providers', function (Blueprint $table){
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
        Schema::dropIfExists('providers');
    }
}
