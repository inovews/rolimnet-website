<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faqs', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('user_id')->unsigned()->index();
            $table->bigInteger('category_id')->unsigned()->index();
            $table->string('title')->nullable(false);
            $table->string('description')->nullable(false);
            $table->string('slug')->unique();
            $table->longText('content')->nullable(false);
            $table->longText('html_content')->nullable(false);
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->integer('view_count')->unsigned()->default(0);
            $table->timestamps();
            $table->timestamp('published_at')->nullable()->index();
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
        Schema::dropIfExists('faqs');
    }
}
