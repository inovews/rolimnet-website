<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->boolean('star')->default(1);
            $table->string('place', 150)->default('');
            $table->string('name', 150)->default('');
            $table->text('description')->nullable();
            $table->text('subdescription')->nullable();
            $table->string('price');
            $table->string('slug', 150)->default('');
            $table->string('file', 300);
            $table->string('target', 30)->default('_self');
            $table->date('published_at');
            $table->date('until_then')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banners');
    }
}
