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
            $table->string('nama')->nullable();
            $table->string('umur')->nullable();
            $table->string('whatsapp')->nullable();
            $table->integer('a1')->nullable();
            $table->integer('b1')->nullable();
            $table->integer('c1')->nullable();
            $table->integer('d1')->nullable();
            $table->integer('a2')->nullable();
            $table->integer('b2')->nullable();
            $table->integer('c2')->nullable();
            $table->integer('d2')->nullable();
            $table->integer('a3')->nullable();
            $table->integer('b3')->nullable();
            $table->integer('c3')->nullable();
            $table->integer('d3')->nullable();
            $table->integer('a4')->nullable();
            $table->integer('b4')->nullable();
            $table->integer('c4')->nullable();
            $table->integer('d4')->nullable();
            $table->integer('a5')->nullable();
            $table->integer('b5')->nullable();
            $table->integer('c5')->nullable();
            $table->integer('d5')->nullable();
            $table->integer('a6')->nullable();
            $table->integer('b6')->nullable();
            $table->integer('c6')->nullable();
            $table->integer('d6')->nullable();
            $table->integer('a7')->nullable();
            $table->integer('b7')->nullable();
            $table->integer('c7')->nullable();
            $table->integer('d7')->nullable();
            $table->integer('a8')->nullable();
            $table->integer('b8')->nullable();
            $table->integer('c8')->nullable();
            $table->integer('d8')->nullable();
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
