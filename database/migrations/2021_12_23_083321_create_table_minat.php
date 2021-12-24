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
            $table->integer('a1');
            $table->integer('b1');
            $table->integer('c1');
            $table->integer('d1');
            $table->integer('a2');
            $table->integer('b2');
            $table->integer('c2');
            $table->integer('d2');
            $table->integer('a3');
            $table->integer('b3');
            $table->integer('c3');
            $table->integer('d3');
            $table->integer('a4');
            $table->integer('b4');
            $table->integer('c4');
            $table->integer('d4');
            $table->integer('a5');
            $table->integer('b5');
            $table->integer('c5');
            $table->integer('d5');
            $table->integer('a6');
            $table->integer('b6');
            $table->integer('c6');
            $table->integer('d6');
            $table->integer('a7');
            $table->integer('b7');
            $table->integer('c7');
            $table->integer('d7');
            $table->integer('a8');
            $table->integer('b8');
            $table->integer('c8');
            $table->integer('d8');
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
