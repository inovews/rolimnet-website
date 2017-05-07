<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFibersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fibers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 250)->default('');
            $table->string('address');
            $table->string('number');
            $table->string('neighborhood');
            $table->string('phone');
            $table->string('email')->unique();
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
        Schema::dropIfExists('fibers');
    }
}
