<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductforselsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productforsels', function (Blueprint $table) {
            $table->id();
            $table->string('pname');
            $table->string('pcategory');
            $table->string('ptitle');
            $table->longText('image');
            $table->string('current')->default("Avoilable");
            $table->longText('pdiscription');
            $table->string('stutas')->default('1');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('productforsels');
    }
}
