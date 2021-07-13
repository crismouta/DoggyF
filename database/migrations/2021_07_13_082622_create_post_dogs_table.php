<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostDogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_dogs', function (Blueprint $table) {
            $table->timestamps();
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->dateTime('date');
            $table->string('name');
            $table->string('comments');
            $table->string('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_dogs');
    }
}
