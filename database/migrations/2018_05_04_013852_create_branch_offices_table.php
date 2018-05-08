<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch_offices', function (Blueprint $table) {
            $table->increments('branch_office_id');
            $table->string('branch_office_name');
            $table->string('branch_office_address');
            $table->string('branch_office_email')->nullable();
            $table->string('branch_office_phone')->nullable();
            $table->integer('company_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('branch_offices', function (Blueprint $table){
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
        Schema::dropIfExists('branch_offices');
    }
}
