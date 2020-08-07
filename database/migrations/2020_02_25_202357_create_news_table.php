<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->uuid('id');
            $table->uuid('user_id');
            $table->string('title');
            $table->integer('editingtimes')->nullable()->default('0');
            $table->text('body');
            $table->boolean('special')->default(false);
            $table->boolean('Accept')->default(false);
            $table->boolean('NotAccept')->default(false);
            $table->boolean('pending')->default(false);
            $table->string('hashtag')->default('News');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('news');
    }
}
