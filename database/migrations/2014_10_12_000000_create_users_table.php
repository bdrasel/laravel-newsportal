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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('mobile')->nullable();
            $table->string('address')->nullable();
            $table->string('image')->nullable();
            $table->string('gender')->nullable();
            $table->string('position')->nullable();
            $table->rememberToken();
            $table->integer('type')->nullable();
            $table->integer('category')->nullable();
            $table->integer('district')->nullable();
            $table->integer('post')->nullable();
            $table->integer('setting')->nullable();
            $table->integer('website')->nullable();
            $table->integer('gallery')->nullable();
            $table->integer('ads')->nullable();
            $table->integer('role')->nullable();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
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
