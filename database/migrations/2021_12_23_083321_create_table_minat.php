<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMinat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_minat', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('umur');
            $table->string('whatsapp');
            $table->integer('1a');
            $table->integer('1b');
            $table->integer('1c');
            $table->integer('1d');
            $table->integer('2a');
            $table->integer('2b');
            $table->integer('2c');
            $table->integer('2d');
            $table->integer('3a');
            $table->integer('3b');
            $table->integer('3c');
            $table->integer('3d');
            $table->integer('4a');
            $table->integer('4b');
            $table->integer('4c');
            $table->integer('4d');
            $table->integer('5a');
            $table->integer('5b');
            $table->integer('5c');
            $table->integer('5d');
            $table->integer('6a');
            $table->integer('6b');
            $table->integer('6c');
            $table->integer('6d');
            $table->integer('7a');
            $table->integer('7b');
            $table->integer('7c');
            $table->integer('7d');
            $table->integer('8a');
            $table->integer('8b');
            $table->integer('8c');
            $table->integer('8d');
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
        Schema::dropIfExists('table_minat');
    }
}
