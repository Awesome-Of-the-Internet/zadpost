<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('admin')->default(false);
            $table->boolean('editor')->default(false);
            $table->string('Phone')->nullable();
            $table->string('country')->nullable();
            $table->string('linkY')->nullable();
            $table->string('linkF')->nullable();
            $table->string('linkT')->nullable();
            $table->boolean('active')->default(false);
            $table->boolean('VA')->default(false);
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('point')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
