<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Uniform extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uniform_product', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->float('price');
            $table->text('img');
            $table->string('size', 3);
            $table->string('gender', 10);

        });
        Schema::create('uniform_category', function (Blueprint $table) {
            $table->id();
            $table->string('cateName');
        });
        Schema::table('uniform_product', function (Blueprint $table) {
            $table->unsignedBigInteger('cateID');
            $table->foreign('cateID')->references('id')->on('uniform_category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
